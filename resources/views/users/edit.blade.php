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

            <div class="field" style="text-align: center">
                <a href="http://gravatar.com/emails" target="_blank">
                <img src="{{$user->gravatar('200')}}" alt="{{$user->name}}" class="gravatar">
                </a>
            </div>

            <form method="POST" action="{{route('users.update',$user->id)}}" class="ui form">
                {{method_field('PATCH')}}
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
                        <button class="ui fluid large blue submit button" type="submit" >更新</button>
                </form>
            </div>
        </div>
    </div>
@stop
