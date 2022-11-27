@extends('layout.main')

@section('title','REX Professores')
    
@section('content')

<h1>Professores</h1>

@foreach($professors as $professor)
    <p> {{$professor->name}}</p>
@endforeach

@endsection 