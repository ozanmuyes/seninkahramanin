<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

use Auth;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $username
     * @return Response
     */
    public function show($username)
    {
        $user = User::where(["username" => $username])->first();

        if ($user === null) {
            return abort(404);
        }

        // Indicates whether logged in user viewing it's own profile or not.
        $own = Auth::user()->username == $username;

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
        //
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
        //
    }
}
