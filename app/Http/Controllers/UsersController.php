<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Handlers\ImageUploadHandler;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            // 'name' => 'required|unique:users|max:50',
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);
        session()->flash('positive','欢迎，您将在这里开启一段新的旅程');
        return redirect()->route('users.show',[$user]);
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(UserRequest $request, ImageUploadHandler $uploader, User $user)
    {
        // dd($request->avatar);
        // $user->update($request->all());
        $data = $request->all();

        if($request->avatar) {
            $request = $uploader->save($request->avatar,'avatars',$user->id);
            if($request) {
                $data['avatar']=$request['path'];
            }
        }

        session()->flash('positive','个人资料更新成功');

        return redirect()->route('users.show',$user->id);
    }

}
