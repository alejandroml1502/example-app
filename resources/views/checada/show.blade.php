@extends('layout.plantilla')


@section('title', 'Curso Show ' . $checada)

@section('content')
<h1>Este es show con {{$checada}}</h1>
@endsection

