<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
            $this->middleware('guest')->except('logout');
            $this->middleware('guest:admin')->except('logout');
            $this->middleware('guest:writer')->except('logout');
    }

     public function showLoginForm()
    {
         return view('naiop.request-login');
    }

    public function showAdminLoginForm()
    {
        return view('admcp.login', ['url' => 'admin']);
    }


    public function showWriterLoginForm()
    {
        return view('naiop.login', ['url' => 'writer']);
    }


    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }else{
           
          session()->flash('customerror', 'One of your inputs is incorrect, try again');
        }
        return back()->withInput($request->only('email', 'remember'));
    }




    public function writerLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('writer')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/writer/submit-article');
        }else{
           
          session()->flash('customerror', 'One of your inputs is incorrect, try again');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

}
