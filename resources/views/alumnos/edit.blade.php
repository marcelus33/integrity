@extends('layouts.app')

@include('inc.options_list')

@section('content')
  {!! Form::model($alumno, ['action' => ['AlumnosController@update', $alumno->id_alumno], 'method'=>'post', 'class'=>'card']) !!}
   @include('alumnos._form')
  {!! Form::close() !!}
  <br>
@endsection