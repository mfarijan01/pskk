<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();

        $this->validate($request,[
            'email' => 'email',
            'password' => 'required',
            'level' => 'required',
        ]);

        if(Auth()->attempt(array('email' => $input['email'], 'password' => $input['password'], 'level' => $input['level']))){
            if(Auth()->user()->level == 'Admin'){
                return redirect('/home');
            }elseif(Auth()->user()->level == 'User'){
                return redirect('/user');
            }
        }else{
            return redirect('/login');
        }
    }
}
