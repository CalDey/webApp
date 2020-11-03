@extends('layouts.default')
@section('title', $user->name)
@section('content')
<div class="m-padded-tb-big">
    {{-- <div class="ui container m-container-small">
        <div class="ui center aligned segment">
            @include('shared._user_info',['user'=> $user])
        </div>
    </div> --}}

    <div class="ui grid">
        {{-- 用户卡片 --}}
        <div class="four wide column">
            {{-- <div class="ui center aligned segments"> --}}
                @include('shared._user_info',['user'=>$user])
            {{-- </div> --}}
        </div>

        {{-- 内容栏 --}}
        <div class="twelve wide column">
            <div class="ui segment">
                <h1>{{$user->name}}&nbsp;&nbsp;&nbsp;&nbsp;<small>{{$user->email}}</small></h1>
            </div>
            <div class="ui divider"></div>
            <div class="ui segment">
                暂无数据
            </div>
        </div>

    </div>

</div>

@stop
