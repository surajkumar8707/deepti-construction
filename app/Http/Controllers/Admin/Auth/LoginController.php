<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function showAdminLoginForm(): View
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request): RedirectResponse
    {
        //---validation---
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        //---login---
        $credentials = $request->only(['email', 'password']);
        $remember_me = $request->has('remember') ? true : false;
        if (Auth::guard('admin')->attempt($credentials, $remember_me)) {
            return redirect()->route('admin.dashboard');
        }
        return back()->withInput($request->only('email', 'remember'))->withError('Invalid credentials. Please try again.');
    }

    public function adminLogout(): RedirectResponse
    {
        if(Auth::guard('admin')->check())
        {
            Session::flush();
            Auth::guard('admin')->logout();
            return redirect('/admin/login');
        }
    }
}
