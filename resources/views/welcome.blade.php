@extends('layout.main')

@section('title','REX')
    
@section('content')

<h1>Bem Vindo</h1>
@foreach ($cursos as $curso)
    <p>{{$curso->name}} -- {{$curso->summary}}</p>
@endforeach

@endsection 
