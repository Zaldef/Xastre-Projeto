@extends('layouts.app')

@section('title', 'Notas')

@section('content')

@if(Auth::user()->acesso == 'Secretaria'|| Auth::user()->acesso == 'Professor' || Auth::user()->acesso == 'ADM')

<div id="cursos-form" class="form-group">
    <label for="title">Editar notas: </label>
        @foreach($cursoAsParticipant as $aluno)
            <div class="row">
                    <label for="title">{{$aluno->name}}: </label>
                    <input type="text" class="form-control" id="title" name="nota[]" value="{{ $aluno->pivot->nota }}">
            </div>
        @endforeach
</div>
<input type="submit" class="btn btn-primary" value="Atualizar notas">
@else
    <h1>Você não possui acesso, volte para <a href="/home">HOME!</a></h1>
@endif
@endsection