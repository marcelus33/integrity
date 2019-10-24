@section('options-list')
  @if(count($options) > 0)
      @foreach ($options as $route => $tag )
          <li class="list-group-item"><a href="{{$route}}">{{$tag}}</a></li>
      @endforeach
  @endif
@endsection