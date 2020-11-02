@extends('layouts.default')
@section('title', $user->name)
@section('content')
<div class="m-padded-tb-big">
    <div class="ui container m-container-small">
        <div class="ui center aligned segment">
            @include('shared._user_info',['user'=> $user])
        </div>
    </div>
</div>

@stop
