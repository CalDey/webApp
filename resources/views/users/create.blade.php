@extends('layouts.default')
@section('title','注册')
@section('content')
    <div class="m-padded-tb-huge">
        <div class="ui segments m-container-small">
            <div class="ui secondary segment">
                <h2 class="ui header">注册</h2>
            </div>
            <div class="ui blue segment">
            @include('shared._errors')
            <form method="POST" action="{{route('users.store')}}" class="ui form">
                {{csrf_field()}}
                        <div class="field">
                            <label for="name">用户名：</label>
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="name" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="field">
                            <label for="email">邮箱：</label>
                            <div class="ui left icon input">
                                <i class="mail icon"></i>
                                <input type="text" name="email" value="{{old('email')}}">
                            </div>
                        </div>
                        <div class="field">
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
                        </div>
                        <button class="ui fluid large blue submit button" type="submit" >注册</button>
                </form>
            </div>
        </div>
    </div>
@stop
