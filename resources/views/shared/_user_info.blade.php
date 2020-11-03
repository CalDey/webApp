<div class="ui card">
    <div class="image">
      {{-- <img src="{{$user->gravatar('200')}}"> --}}
        <img src="{{$user->avatar}}" alt="{{$user->name}}">
    </div>
    <div class="content">
      <h2 class="header">个人简介</h2>
      <div class="description">{{$user->introduction}}</div>
    </div>
    <div class="extra content">
      <i class="book icon"></i> 30 篇文章
    </div>
  </div>

