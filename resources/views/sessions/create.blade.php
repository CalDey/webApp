@extends('layouts.default')
@section('title','登录')
@section('content')
    <div class="m-padded-tb-huge">
        <div class="ui segments m-container-small">
            <div class="ui secondary segment">
                <h2 class="ui header">登录</h2>
            </div>
            <div class="ui blue segment">
            @include('shared._errors')
            <form method="POST" action="{{route('login')}}" class="ui form">
                {{csrf_field()}}
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
                        <button class="ui fluid large blue submit button" type="submit" >登录</button>
                        <br>
                    <label>还没有账号？<a href="{{route('signup')}}">现在注册！</a></label>
                </form>
            </div>
        </div>
    </div>
@stop
