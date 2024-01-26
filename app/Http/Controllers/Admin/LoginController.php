<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use function back;
use function redirect;
use function view;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.pages.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
//        dd($credentials);
        if (Auth::attempt($credentials)) {
            if (Auth::user()->id_nhomquyen == 2){
                return redirect()->route('admin.posts.newPost');
            }
        } else {
            Session::put('message','Mật khẩu hoặc email không đúng!');
            return back();
        }
        return back();
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return Redirect::to('admin/login');
    }
}



//-----------------------------------------
