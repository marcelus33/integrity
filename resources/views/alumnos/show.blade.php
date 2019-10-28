@extends('layouts.app')

@include('inc.options_list')

@section('content')
    {{-- Incluimos al partial de la table, le pasamos el modelo, 
        y los campos que queremos excluir de la tabla --}}
    @include('inc.showtable', ['model' => $alumno, 'unwanted'=>array('id_alumno')])

@endsection