@foreach(['danger','warning','success','info'] as $msg)
    @if(session()->has($msg))
    <div class="ui {{$msg}} message">
        <div class="header">
            {{session()->get($msg)}}
        </div>
    </div>
    @endif
@endforeach
