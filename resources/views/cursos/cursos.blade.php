@extends('layouts.app')

@section('title','REX Cursos')
    
@section('content')

<h1>Cursos</h1>

<div id="search-container" class="col-md-12">
    <h1>Busque um curso</h1>
    <form action="/cursos" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="cursos-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{ $search }}</h2><br> 
    @else
        <h2>Todos os Cursos</h2><br>   
    @endif
     
    <div id="cards-container" class="row">
        @foreach($cursos as $curso)
        <div class="card col-md-3">
            <img src="/img/cursos/{{$curso->image}}.jpg" alt="{{ $curso->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $curso->name }}</h5>
                <h6>{{ $curso->simplified_description}}</h6>
                @if(count($curso->users) < $curso->alunosqtdmin && $curso->status == '1')
                    <h6>Matrículas Abertas - Mínimo de alunos não atingido!</h6>
                @elseif(count($curso->users) >= $curso->minAlunos && count($curso->users) < $curso->alunosqtdmax && $curso->status == '1') 
                    <h6>Matrículas Abertas - Curso acontecerá!</h6>
                @else
                    <h6>Matrículas Encerradas</h6>
                @endif
                <p class="card-participants"> {{ count($curso->users) }} Participantes</p>
                <a href="/cursos/{{$curso->id}}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($cursos) == 0 && $search) 
            <p>Não foi possível encontrar nenhum curso com {{ $search }}! <a href="/cursos">Ver todos os cursos</a></p>
        @elseif(count($cursos) == 0)
            <p>Não há cursos disponíveis</p>
        @endif
    </div>

@endsection 