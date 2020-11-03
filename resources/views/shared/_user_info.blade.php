<div class="ui card">
    <div class="image">
      {{-- <img src="{{$user->gravatar('200')}}"> --}}
        <img src="{{$user->avatar}}" alt="{{$user->name}}">
    </div>
    <div class="content">
      <h2 class="header">个人简介</h2>
      @if($user->introduction==null)
      <div class="description">这个人很懒，什么也没有留下</div>
      @else
      <div class="description">{{$user->introduction}}</div>
      @endif
    </div>
    <div class="extra content">
      <i class="book icon"></i> 30 篇文章
    </div>
  </div>

