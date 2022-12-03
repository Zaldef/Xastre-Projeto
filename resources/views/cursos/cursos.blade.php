@extends('layouts.app')

@section('title','REX Cursos')
    
@section('content')

@guest
<h1>Você não está logado. Faça o <a href="/"> login</a>!</h1>
@else
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
            <img src="/img/Cursos/{{$curso->image}}" alt="{{ $curso->name }}">
            <div class="card-body">
                <h5 class="card-title">{{ $curso->name }}</h5>
                <p class="card-alunos">X/{{ $curso->alunosqtd }} Matriculados</p>
                <a href="/cursos/{{$curso->id}}" class="btn btn-primary">Saber mais</a>
                <p></p>
            </div>
        </div>
        @endforeach
        @if(count($cursos) == 0 && $search)
            <p>Não foi possível encontrar nenhum ecurso com {{ $search }}! <a href="/cursos">Ver todos os cursos</a></p>
        @elseif(count($cursos) == 0)
            <p>Não há cursos disponíveis</p>
        @endif
@endguest
@endsection 