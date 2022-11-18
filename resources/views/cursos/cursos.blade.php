@extends('layout.main')

@section('title','REX Cursos')
    
@section('content')

<h1>Cursos</h1>


<div id="search-container" class="col-md-12">
    <h1>Busque um curso</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="cursos-container" class="col-md-12">
    <h2>Todos os Cursos</h2>
    <div id="cards-container" class="row">
        @foreach($cursos as $curso)
        <div class="card col-md-3">
            <img src="/img/Cursos/{{$curso->image}}" alt="{{ $curso->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $curso->name }}</h5>
                <p class="card-alunos">X/{{ $curso->alunosqtd }} Matriculados</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
                <p></p>
            </div>
        </div>
        @endforeach


@endsection 