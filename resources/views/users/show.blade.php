@extends('layouts.default')
@section('title', $user->name)
@section('content')
<div class="m-padded-tb-huge">
    <div class="ui container userbox-container">
        <div class="ui center aligned segment">
            @include('shared._user_info',['user'=> $user])
        </div>
    </div>
</div>

@stop
