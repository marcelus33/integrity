@extends('layouts.app')

{{-- @section('options-list')
  @if(count($options) > 0)
      @foreach ($options as $route => $tag )
          <li class="nav-item"><a href="{{$route}}">{{$tag}}</a></li>
      @endforeach
  @endif
@endsection --}}

@include('inc.options_list')

@section('content')
  {!! Form::model(new \App\Alumno(), ['action' => ['AlumnosController@store'], 'method'=>'post', 'class'=>'card']) !!}
   @include('alumnos._form')
  {!! Form::close() !!}
  <br>
@endsection

