<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','WebApp') - 易新闻 一个简易的自媒体新闻平台</title>
    @include('styles')
</head>
<body>
    @include('layouts._header')

    <div class="ui container m-padded-tb-big">
        @include('shared._messages')
        @yield('content')
    </div>

    @include('layouts._footer')

</body>
    @include('script')
</html>
