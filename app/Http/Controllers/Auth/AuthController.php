<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;

use Socialite;
use Flash;
use Session;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $loginPath = "/giris";
    protected $socialite;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Socialite $socialite)
    {
        $this->middleware('guest', ['except' => 'getLogout']);

        $this->socialite = $socialite;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:64',
            'last_name' => 'required|max:64',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    protected function getRegister()
    {
        if (session()->has("socialUser")) {
            $user = session("socialUser");
        } else {
            $user = [
                "twitter_id" => null,
                "facebook_id" => null,
                "first_name" => null,
                "last_name" => null,
                "email" => null,
                "picture" => null
            ];
        }

        return view("auth.register")->with("user", $user);
    }

    protected function redirectPath()
    {
        if (Session::has("intended")) {
            return route(Session::get("intended"));
        }

        if (Auth::user()->is(["admin", "developer"])) {
            return route("Admin.Index");
        }

        return route("Site.Index");
    }

    public function getSocialAuth($provider = null)
    {
        if ($provider === null) {
            // TODO warn stray function call - without provider parameter, this function should not be called
            return;
        }

        // If passed provider not supported return 404
        if (!config("services.$provider")) {
            abort('404');
        }

        return Socialite::driver($provider)->redirect();
    }

    public function getSocialAuthCallback($provider = null)
    {
        $socialUser = Socialite::driver($provider)->user();

        if (!$socialUser) {
            return "something went wrong";
        }

        switch ($provider) {
            case "twitter":
                $user = User::where(["twitter_id" => $socialUser->id])->first();
                break;

            case "facebook":
                $user = User::where(["facebook_id" => $socialUser->id])->first();
                break;
        }

        // If there is no matching user record found on database, redirect user to register page
        if ($user === null) {
            // Since social data retrieved use this data when registering
            switch ($provider) {
                case "twitter":
                    $user = [
                        "twitter_id" => $socialUser->id,
                        "facebook_id" => null,
                        "first_name" => null,
                        "last_name" => null,
                        "email" => $socialUser->email,
                        "picture" => $socialUser->avatar_original
                    ];
                    break;

                case "facebook":
                    $user = [
                        "twitter_id" => null,
                        "facebook_id" => $socialUser->user["id"],
                        "first_name" => $socialUser->user["first_name"],
                        "last_name" => $socialUser->user["last_name"],
                        "email" => $socialUser->user["email"],
                        "picture" => $socialUser->avatar_original
                    ];
                    break;
            }

            Flash::warning("Üye değilsiniz, üye olmak için aşağıdaki boş alanları eksiksiz olarak doldurun.");

            return redirect(route("Register"))->with("socialUser", $user);
        }

        Auth::login($user);

        return redirect()->intended(route("Site.Index"));
    }
}
