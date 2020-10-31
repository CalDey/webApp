<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','WebApp') - 微新闻 简便的自媒体新闻平台</title>
    @include('styles')
    @include('script')
</head>
<body>
    {{-- 导航栏 --}}
    <nav class="ui inverted blue attached segment m-padded-tb-small">
        <div class="ui container">
            <div class="ui inverted huge secondary menu">
                <a href="{{route('home')}}">
                    <h2 class="ui header item">微新闻</h2>
                </a>
                <div class="right menu">
                    <a href="" class="m-item right aligned item m-item-hide">帮助</a>
                    <a href="" class="m-item right aligned active item m-item-hide">登录</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    {{-- 底部 --}}
    <footer class="ui inverted blue vertical segment">
    </footer>

</body>
</html>
