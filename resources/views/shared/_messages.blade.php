@foreach(['negative','warning','positive','info'] as $msg)
    @if(session()->has($msg))
    <div class="ui {{$msg}} message">
        <i class="close icon"></i>
        <div class="header">
            {{session()->get($msg)}}
        </div>
    </div>
    @endif
@endforeach
