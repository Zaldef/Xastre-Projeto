@extends('layouts.app')

@section('title', 'Editando:' . $curso->name)

@section('content')

@guest
<h1>Você não está logado. Faça o <a href="/">LOGIN</a>!</h1>
@else

<div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/cursos/{{ $curso->image }}" class="img-fluid" alt="{{ $curso->name }}">
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $curso->name }}</h1>
       <p class="curso-simplified_description"><ion-icon name="reader-outline"></ion-icon> {{ $curso->simplified_description}}</p>
       <p class="curso-alunosqtd"><ion-icon name="people-outline"></ion-icon> Alunos Minimos: {{ $curso->alunosqtdmin}}</p>
       <p class="curso-alunosqtd"><ion-icon name="people-outline"></ion-icon> Alunos Matriculados: $curso_id->aluno_id</p>
       <p class="curso-alunosqtd"><ion-icon name="people-outline"></ion-icon> Alunos Máximos: {{ $curso->alunosqtdmax}}</p>
       <p class="curso-alunosqtd"><ion-icon name="file-tray-full-outline"></ion-icon> Status: Matrículas Abertas/Mínimo de alunos não atingido!/Matrículas Abertas - Curso acontecerá!/Matrículas Encerradas</p>
       <p class="curso-alunosqtd"><ion-icon name="person-outline"></ion-icon> Professor: $professor->curso_id </p>  
        <a href="#" class="btn btn-primary" id="curso-submit">Encerrar Matriculas</a>
      </div>
      <div class="col-md-12" id="description-container">
        <h3>Sobre o curso:</h3>
        <p class="curso-description">{{$curso->description}}</p>
      </div>
      <div class="buttons-container">
        <a href="/cursos/edit/{{ $curso->id }}" class="btn btn-primary"><ion-icon name="pencil-outline"></ion-icon> Editar</a>
        <form action="/cursos/{{ $curso->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
    </div>
  </div>
@endguest
@endsection 