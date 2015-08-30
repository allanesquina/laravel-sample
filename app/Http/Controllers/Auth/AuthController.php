<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use URL;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }


    public function getLogout()
    {
            Auth::logout();
    }

    public function postLogin(Request $request)
    {
        // return User::create([
        //     'name' => 'Allan',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('admin'),
        // ]);

        $auth = false;

        if ($request->ajax()) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $auth = true;
            }
            return response()->json([
                'auth' => $auth,
                'intended' => URL::previous(),
                'res' => $request->email
            ]);
        } else {
            return redirect()->intended(URL::route('home'));
        }
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
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
