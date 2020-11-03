@extends('layouts.default')
@section('title','更新个人资料')
@section('content')
    <div class="m-padded-tb-huge">
        <div class="ui segments m-container-small">
            <div class="ui secondary segment">
                <h2 class="ui header">更新个人资料</h2>
            </div>
            <div class="ui blue segment">
            @include('shared._errors')

            <form method="POST" action="{{route('users.update',$user->id)}}" class="ui form" enctype="multipart/form-data">
                {{method_field('PUT')}}
                {{csrf_field()}}
                        <div class="field">
                            <label for="name">用户名：</label>
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="name" value="{{$user->name}}">
                            </div>
                        </div>
                        <div class="field">
                            <label for="email">邮箱：</label>
                            <div class="ui left icon input">
                                <i class="mail icon"></i>
                                <input type="text" name="email" value="{{$user->email}}" disabled>
                            </div>
                        </div>
                        {{-- <div class="field">
                            <label for="password">密码：</label>
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="text" name="password" value="{{old('password')}}">
                            </div>
                        </div>
                        <div class="field">
                            <label for="password_confirmation">确认密码：</label>
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="text" name="password_confirmation" value="{{old('password_confirmation')}}">
                            </div>
                        </div> --}}
                        <div class="field">
                            <label for="introduction-field">个人简介</label>
                        <textarea name="introduction" id="introduction-field" rows="3" style="resize: none">{{old('introduction',$user->introduction)}}</textarea>
                        </div>
                        <div class="field">
                            <label for="">用户头像</label>
                            <input type="file" name="avatar" style="border:0px;">
                        </div>
                        <button class="ui fluid large blue submit button" type="submit" >更新</button>
                </form>
            </div>
        </div>
    </div>
@stop
