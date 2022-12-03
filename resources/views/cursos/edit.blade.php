@extends('layouts.app')

@section('title', 'Editando:' . $curso->nome)

@section('content')

@guest
<h1>Você não está logado. Faça o <a href="/">LOGIN</a>!</h1>
@else
<div id="cursos-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $curso->nome }}</h1>
    <form action="/cursos/update/{{ $curso->id }}" method="POST">
     @csrf
     @method('PUT')
        <div id="cursos-form" class="form-group">
            <label for="nome">Nome do curso: </label>
            <input type="text" class="form-control" id="title" name="nome" placeholder="Nome do curso:" value="{{ $curso->nome }}">
        </div>
        <div id="cursos-form" class="form-group">
            <label for="descricaocompleta">Descrição completa: </label>
            <textarea type="text" class="form-control" id="title" name="description" rows="3" placeholder="Descrição completa do curso:">{{ $curso->description }}</textarea>
        </div>
        <div id="cursos-form" class="form-group">
            <label for="descricaosimples">Descrição simplificada: </label>
            <input type="text" class="form-control" id="title" name="simplified_description" placeholder="Descrição simplificada do curso:" value="{{ $curso->simplified_description }}">
        </div>
        <div id="cursos-form" class="form-group">
            <label for="minAlunos">Mínimo de alunos para o curso acontecer (1 a 100):</label><br>
            <input type="number" id="quantity" class="form-control" name="alunosqtdmin" min="1" max="100" value="{{ $curso->alunosqtdmin }}">
        </div>
        <div id="cursos-form" class="form-group">
            <label for="maxAlunos">Máximo de alunos desse curso (1 a 100):</label><br>
            <input type="number" id="quantity" class="form-control" name="alunosqtdmax" min="1" max="100" value="{{ $curso->alunosqtdmax }}">
        </div>
        <div id="cursos-form" class="form-group">
            <label for="img">Escolha uma imgem para esse curso:</label>
        </div>
        @if($curso->image == 'Word')
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="Word" checked>
                <img src="/img/cursos/Word.jpg">
            </div>
        @else 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="Word">
                <img src="/img/cursos/Word.jpg">
            </div>
        @endif
        @if($curso->image == 'PowerPoint')
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="PowerPoint" checked>
                <img src="/img/cursos/PowerPoint.jpg">
            </div>
        @else
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="PowerPoint">
                <img src="/img/cursos/PowerPoint.jpg">
            </div>
        @endif
        @if($curso->image == 'Excel')
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="Excel" checked>
                <img src="/img/cursos/Excel.jpg">
            </div>
        @else 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="Excel">
                <img src="/img/cursos/Excel.jpg">
            </div>
        @endif
        <input type="submit" class="btn btn-primary" value="Editar curso">
    </form>
</div>


@endguest

@endsection