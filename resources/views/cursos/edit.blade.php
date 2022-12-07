@extends('layouts.app')

@section('title', 'Editando:' . $curso->name)

@section('content')

<div id="cursos-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{ $curso->name }}</h1>
    <form action="/cursos/update/{{ $curso->id }}" method="POST">
     @csrf
     @method('PUT')
        <div id="cursos-form" class="form-group">
            <label for="name">Nome do curso: </label>
            <input type="text" class="form-control" id="title" name="name" placeholder="Nome do curso:" value="{{ $curso->name }}">
        </div>
        <div id="cursos-form" class="form-group">
            <label for="description">Descrição completa: </label>
            <textarea type="text" class="form-control" id="title" name="description" rows="3" placeholder="Descrição completa do curso:">{{ $curso->description }}</textarea>
        </div>
        <div id="cursos-form" class="form-group">
            <label for="simplified_description">Descrição simplificada: </label>
            <input type="text" class="form-control" id="title" name="simplified_description" placeholder="Descrição simplificada do curso:" value="{{ $curso->simplified_description }}">
        </div>
        <div id="cursos-form" class="form-group">
            <label for="alunosqtdmin">Mínimo de alunos para o curso acontecer:</label><br>
            <input type="number" id="quantity" class="form-control" name="alunosqtdmin" min="1" max="100" value="{{ $curso->alunosqtdmin }}">
        </div>
        <div id="cursos-form" class="form-group">
            <label for="alunosqtdmax">Máximo de alunos desse curso:</label><br>
            <input type="number" id="quantity" class="form-control" name="alunosqtdmax" min="1" max="100" value="{{ $curso->alunosqtdmax }}">
        </div>
        <div id="cursos-form" class="form-group">
            <label for="img">Escolha uma imgem para esse curso:</label>
        </div>
        @if($curso->image == 'curso1')
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="curso1" checked>
                <img src="/img/cursos/curso1.jpg">
            </div>
        @else 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="curso1">
                <img src="/img/cursos/curso1.jpg">
            </div>
        @endif
        @if($curso->image == 'curso2')
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="curso2" checked>
                <img src="/img/cursos/curso2.jpg">
            </div>
        @else
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="curso2">
                <img src="/img/cursos/curso2.jpg">
            </div>
        @endif
        @if($curso->image == 'curso3')
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="curso3" checked>
                <img src="/img/cursos/curso3.jpg">
            </div>
        @else 
            <div class="form-check">
                <input class="form-check-input" type="radio" name="image" value="curso3">
                <img src="/img/cursos/curso3.jpg">
            </div>
        @endif
        @if(count($curso->users) < $curso->alunosqtdmax)
            <div id="cursos-form" class="form-group">
                <label for="nome">Inserir alunos: </label>
            </div>
            @foreach($users as $user)
                @foreach($curso->users as $aluno)
                    @if($user->acesso == 'Aluno' && $aluno->id != $user->id)
                        <div class="form-check-curso">
                            <input class="form-check-input" type="checkbox" id="check" name="option[]" value="{{ $user->id }}"> {{ $user->name }}
                            <label class="form-check-label"></label> 
                        </div>
                    @endif
                @endforeach
            @endforeach
        @endif
        <div id="cursos-form" class="form-group">
            <label for="title">Escolher professor: </label>
        </div>
        @if($curso->user_id == null)
            <div class="form-check-curso">
                <input class="form-check-input" type="radio" name="user_id" value="null" checked> None
                <label class="form-check-label"></label> 
            </div>
        @else
            <div class="form-check-curso">
                <input class="form-check-input" type="radio" name="user_id" value="null"> None
                <label class="form-check-label"></label> 
            </div>
        @endif
        @foreach ($users as $user)
            @if($user->acesso == 'Professor')
                @if($curso->user_id == $user->id)
                    <div class="form-check-curso">
                        <input class="form-check-input" type="radio" name="user_id" value="{{ $user->id }}" checked> {{ $user->name }}
                        <label class="form-check-label"></label> 
                    </div>
                @else
                    <div class="form-check-curso">
                        <input class="form-check-input" type="radio" name="user_id" value="{{ $user->id }}"> {{ $user->name }}
                        <label class="form-check-label"></label> 
                    </div>
                @endif
            @endif
        @endforeach
        <input type="submit" class="btn btn-primary" value="Editar curso">
    </form>
</div>
@endsection