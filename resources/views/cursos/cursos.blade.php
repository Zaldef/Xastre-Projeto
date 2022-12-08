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
        @foreach($cursos as $cursos)
        <div class="card col-md-3">
            <img src="/img/cursos/{{$cursos->image}}.jpg" alt="{{ $cursos->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $cursos->name }}</h5>
                @if(count($cursos->users) < $cursos->alunosqtdmin)
                    <h6>Matrículas Abertas - Mínimo de alunos não atingido!</h6>
                @elseif(count($cursos->users) >= $cursos->alunosqtdmin && count($cursos->users) < $cursos->alunosqtdmax) 
                    <h6>Matrículas Abertas - Curso acontecerá!</h6>
                @else
                    <h6>Matrículas Encerradas</h6>
                @endif
                <p class="card-participants"> {{ count($cursos->users) }} Participantes</p>
                <a href="/cursos/{{$cursos->id}}" class="btn btn-primary">Saber mais</a>
                <p></p>
            </div>
        </div>
        @endforeach

@endsection 