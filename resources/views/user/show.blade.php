@extends('layouts.app')

@section('title', 'Perfil: ' . Auth::user()->name)

@section('content')

<div class="col-md10 offset-md-1">
    <div class="row">
        @if(Auth::user()->acesso == 'Professor')
        <div id="image-container" class="col-md-4">
            <img src="/img/avatares/{{ Auth::user()->image }}.png" alt="">
        </div>
        @endif
        <div id="info-container" class="col-md-6">
            <h1>{{ Auth::user()->name }}</h1>
            <h3>Email: {{ Auth::user()->email }}</</h3>
            <h3>CPF: {{ Auth::user()->cpf }}</</h3>
            <h3>Endereço: {{ Auth::user()->endereco }}</</h3>
            @if(Auth::user()->acesso == 'Aluno')
            <h3>Filme: {{ Auth::user()->movie }}</h3>
            @endif
            <h3>Ultimo Acesso: {{ Auth::user()->ultimo_acesso }}</</h3>
            <div class="buttons-container">
                <a href="/user/edit/{{Auth::user()->id}}" class="btn btn-primary">Editar</a>
                <form action="/user/{{ Auth::user()->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </div>
        </div>
    </div>


    </div>
</div>
@endsection