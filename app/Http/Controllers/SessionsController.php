<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            //登录成功
            session()->flash('positive','欢迎回来！');
            return redirect()->route('users.show',[Auth::user()]);

        }else{
            //登陆失败
            session()->flash('negative','很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('positive','您已成功登出！');
        return redirect('login');
    }

}
