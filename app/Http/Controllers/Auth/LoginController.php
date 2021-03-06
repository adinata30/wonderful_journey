<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function redirectTo()
    {
        if (Auth::user()->role == "Admin") {
            return '/home';
        } else {
            return '/greeting';
        }
    }
    protected function sendLoginResponse(Request $request)
    {
       
        $request->session()->regenerate();

        if($request['remember'] == 'on') {
            $remember_token = \Auth::getRecallerName();
            $expires_in_minute = 120;
            $cookie_jar = $this->guard()->getCookieJar();
            $cookie_value = $cookie_jar->queued($remember_token)->getValue();
            $cookie_jar->queue($remember_token, $cookie_value, $expires_in_minute);
        }

        $this->clearLoginAttempts($request);
        
        if($response = $this->authenticated($request, $this->guard()->user())) {
            
            return $response;
        }
        return $request->wantsJson() ? new JsonResponse([], 204) : redirect()->intended($this->redirectPath());
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('home');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
