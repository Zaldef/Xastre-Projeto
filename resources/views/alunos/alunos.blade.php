@extends('layouts.main')

@section('title','REX Alunos')
    
@section('content')

<h1>Alunos</h1>

@foreach($alunos as $aluno)
    <p> {{$aluno->name}}</p>
@endforeach


@endsection 