@section('options-list')
  @if(count($options) > 0)
      @foreach ($options as $route => $tag )
      <li class="list-group-item d-flex justify-content-center">
          @if ($tag == 'Borrar')
              {{-- {{ Form::open(['url' => $route, 'method'=>'POST', 'class'=>'']) }} --}}
              {{ Form::open(['url' => $route, 'method' => 'POST'])}}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::bsSubmit($tag, ['class'=>'btn btn-link']) }}
              {{ Form::close() }}
          @else
              <a class="btn btn-link" href="{{$route}}">{{$tag}}</a>
          @endif
      </li>
      @endforeach
      
  @endif
@endsection

