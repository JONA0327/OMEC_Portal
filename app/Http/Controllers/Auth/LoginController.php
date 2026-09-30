<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Request;
use App\User;
use DB;
use Carbon\Carbon;
use Auth;

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
    public function authenticated()
    {
        //dd();
        $user= User::where('id','=',auth()->user()->id)->first();
        DB::table('sessions')->insert([
            'user_id'=>$user->id,
            'email'=>$user->email,
            'loggedin'=>Carbon::now(),
            'ip'=>Request::getClientIp(),
            'device'=>$_SERVER['HTTP_USER_AGENT'],
        ]);
        return redirect('/home');
    }
    //   protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
