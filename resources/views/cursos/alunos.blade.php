@extends('layouts.app')

@section('title', 'Lista de alunos')

@section('content')

<h1>Alunos:</h1>
    <ul id="lista-alunos">
        @foreach($curso_A_P as $aluno)
            <li>Nome: {{$aluno->name}} - Nota: {{ $aluno->pivot->nota }}</li>
        @endforeach
    </ul>

@else
    <h1>Você não possui acesso, volte para <a href="/home">HOME!</a></h1>
@endif 
@endsection