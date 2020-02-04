<?php

namespace App\Http\Controllers\Auth;

use Adldap\Laravel\Facades\Adldap;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Support\Facades\Auth;
use Cookie;
use Symfony\Component\HttpFoundation\Request;
//use JWTAuth;
//use Tymon\JWTAuth\Exceptions\JWTException;
//use Tymon\JWTAuth\Facades\JWTFactory;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;
//use Auth;


class LoginController extends Controller

{
    use AuthenticatesUsers;
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


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }


    public function nb_usuario()
    {
        return 'nb_usuario';
    }

    public function showLoginForm(){
        return view('auth.login');
    }
    public function login(Request $request)

    {
       



        if (Auth::attempt(['nb_usuario' =>$request->get('nb_usuario'),'password' =>$request->get('password')])) {

            //$user=Auth::user();
            //$payload=JWTFactory::sub($user->id)->make();
            ///$token1=JWTAuth::encode($payload);
            //Cookie::queue('AUTH-TOKEN',$token1->get(),15);
            return redirect('/');

        }
        {
            return back()->withErrors(['nb_usuario' => trans('auth.failed')])->withInput(request(['nb_usuario']));
        }


    }
    
    
}

