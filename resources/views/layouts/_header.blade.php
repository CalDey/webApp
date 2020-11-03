    {{-- 导航栏 --}}
    <nav class="ui inverted attached segment m-padded-tb-small">
        <div class="ui container">
            <div class="ui inverted huge secondary menu">
                <a href="{{route('home')}}">
                    <h2 class="ui header item">易新闻</h2>
                </a>
                <div class="right menu">
                    @if(Auth::check())
                    <div class="item">
                        <a href="">用户列表</a>
                    </div>

                    <div class="item">
                        <div class="ui floating dropdown">
                            <img src="{{Auth::user()->gravatar('140')}}" alt="" class="ui avatar image">
                                {{Auth::user()->name}}
                            <i class="dropdown icon"></i>
                            <div class="menu">
                                <a href="{{route('users.show',Auth::user())}}" class="item">个人中心</a>
                                <a href="{{route('users.edit',Auth::user())}}" class="item">编辑资料</a>
                                <div class="divider"></div>
                                <a class="item exit-button">
                                <form action="{{route('logout')}}" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="ui large negative button" type="submit" name="button">退出</button>
                                </form>
                                </a>
                            </div>
                            </div>
                    </div>

                    {{-- <div class="item">
                        <div class="ui floating dropdown error">Dropdown <i class="dropdown icon"></i> <div class="menu">
                            <div class="item"><a href="">Choice 1</a>
                                </div>
                            <div class="item">Choice 2</div>
                            <div class="item">Choice 3</div>
                          </div>
                        </div>
                    </div> --}}


                    @else
                    <div class="item">
                        <a href="">帮助</a>
                    </div>
                    <div class="item">
                        <a href="{{route('signup')}}">注册</a>
                    </div>
                    <div class="item">
                        <a href="{{route('login')}}">登录</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </nav>
