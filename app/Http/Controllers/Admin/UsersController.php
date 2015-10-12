<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;

use App\User;
use Bican\Roles\Models\Role;
use App\Events\UserCreated;
use App\Jobs\CreateUser;
use App\Jobs\DestroyUser;

use Auth;
use Hash;
use Flash;
use Event;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("admin.users.index")->with("users", User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $roles = Role::all();
        $rolesInternalized = $roles->map(function ($item, $key) {
            return trans("roles." . $item->slug);
        });

        return view("admin.users.create")->with("roles", $rolesInternalized);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        // Gather inputs and assign them to a variable
        $inputs = $request->input();

        // Create user
        $user = User::create([
            "twitter_id" => null,
            "facebook_id" => null,
            "first_name" => $inputs["first_name"],
            "last_name" => $inputs["last_name"],
            "email" => $inputs["email"],
            "password" => Hash::make($inputs["password"]),
        ]);

        if ($user === null) {
            return abort(500, "User could not create.");
        }

        // Obtain and attach role
        if (isset($inputs["role"])) {
            $roleId = intval($inputs["role"]) + 1;
        } else {
            $roleId = 1;
        }

        $user->attachRole($roleId);

        $this->dispatch(new CreateUser($user, $inputs["image"]));

        // Show message and return to previous page
        Flash::success("'" . $user->name . "' isimli kullanıcı eklendi.");

        return redirect()->route("Admin.Users.Index");
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $username
     * @return Response
     */
    public function show($username)
    {
        $user = User::where(["username" => $username])
                ->with("pictures")
                ->first();

        if ($user === null) {
            return abort(404);
        }

        // Indicates whether logged in user viewing it's own profile or not.
        $own = (Auth::user()->username == $username);

        return view("admin.users.show")->with([
            "user" => $user,
            "own" => $own
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $username
     * @return Response
     */
    public function edit($username)
    {
        $user = User::where(["username" => $username])->with(["orders"])->first();

        if ($user === null) {
            return abort(404);
        }

        $roles = Role::all();
        $rolesInternalized = $roles->map(function ($item, $key) {
            return trans("roles." . $item->slug);
        });

        $user["role"] = ($user->roles[0]->id - 1);
        $user["profilePicture"] = $user->pictures[2]->path;

        return view("admin.users.edit")->with([
            "user" => $user,
            "roles" => $rolesInternalized
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  string  $username
     * @return Response
     */
    public function update(Request $request, $username)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $username
     * @return Response
     */
    public function destroy($username)
    {
        // Get user
        $user = User::where(["username" => $username])->first();

        if ($user === null) {
            return back();
        }

        $this->dispatch(new DestroyUser($user));

        // Show message and return to previous page
        Flash::success("'" . $user->name . "' isimli kullanıcı silindi.");

        return back();
    }

    /**
     * Check whether given email address is unique or not.
     *
     * @since 1.0
     * @return boolean
     */
    public function isEmailUnique(Request $request)
    {
        $email = $request->query("email");
        $userViaEmail = User::where(["email" => $email])
                        ->select(["id", "first_name", "last_name", "email"])
                        ->first();

        if ($userViaEmail === null) {
            return [
                "id" => null,
                "first_name" => null,
                "last_name" => null,
                "email" => null
            ];
        }

        return $userViaEmail->toArray();
    }
}
