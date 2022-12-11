@extends('layouts.app')

@section('title', 'Editando: ' . $user->name)

@section('content')
@if(Auth::user()->acesso == 'Secretaria' || Auth::user()->acesso == 'ADM')
<div id="edit-create-container" class="col-md-6 offset-md-3">
    <h1>Edite os dados</h1>
    <form action="/user/update/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')
        <div id="cursos-form" class="form-group">
            <label for="title">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="{{ $user->name }}">
        </div>

        <div id="cursos-form" class="form-group">
            <label for="title">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $user->email }}">
        </div>
        @if($user->acesso == 'Professor' || $user->acesso == 'Aluno')
        <div id="cursos-form" class="form-group">
            <label for="title">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" value="{{ $user->cpf }}">
        </div>

        <div id="cursos-form" class="form-group">
            <label for="title">Endereço:</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" value="{{ $user->endereco }}">
        </div>
        @endif
        @if($user->acesso == 'Aluno' || $user->acesso == 'ADM')
            <div id="cursos-form" class="form-group">
                <label for="title">Filme:</label>
                <input type="text" class="form-control" id="filme" name="filme" placeholder="Filme" value="{{ $user->filme }}">
            </div>
        @endif

        <div class="form-group">
            <label for="title">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Nova Senha">
        </div>

        @if($user->acesso == 'Professor' || $user->acesso == 'ADM' || $user->acesso == 'Secretaria')
            <div id="cursos-form" class="form-group">
                <label for="title">Avatares:</label>
            </div>
            @if($user->image == 'avatar0')
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar" checked>
                    <img src="/img/avatares/avatar.png">
                </div>
            @else 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar">
                    <img src="/img/avatares/avatar.png">
                </div>
            @endif
            
            @if($user->image == 'avatar1')
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar1" checked>
                    <img src="/img/avatares/avatar1.png">
                </div>
            @else 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar1">
                    <img src="/img/avatares/avatar1.png">
                </div>
            @endif

            @if($user->image == 'avatar2')
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar2" checked>
                    <img src="/img/avatares/avatar2.png">
                </div>
            @else 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar2">
                    <img src="/img/avatares/avatar2.png">
                </div>
            @endif

            @if($user->image == 'avatar3')
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar3" checked>
                    <img src="/img/avatares/avatar3.png">
                </div>
            @else 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar3">
                    <img src="/img/avatares/avatar3.png">
                </div>
            @endif

            @if($user->image == 'avatar4')
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar4" checked>
                    <img src="/img/avatares/avatar4.png">
                </div>
            @else 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar4">
                    <img src="/img/avatares/avatar4.png">
                </div>
            @endif

            @if($user->image == 'avatar5')
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar5" checked>
                    <img src="/img/avatares/avatar5.png">
                </div>
            @else 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar5">
                    <img src="/img/avatares/avatar5.png">
                </div>
            @endif

            @if($user->image == 'avatar6')
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar6" checked>
                    <img src="/img/avatares/avatar6.png">
                </div>
            @else 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar6">
                    <img src="/img/avatares/avatar6.png">
                </div>
            @endif

            @if($user->image == 'avatar7')
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar7" checked>
                    <img src="/img/avatares/avatar7.png">
                </div>
            @else 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar7">
                    <img src="/img/avatares/avatar7.png">
                </div>
            @endif

            @if($user->image == 'avatar8')
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar8" checked>
                    <img src="/img/avatares/avatar8.png">
                </div>
            @else 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar8">
                    <img src="/img/avatares/avatar8.png">
                </div>
            @endif

            @if($user->image == 'avatar9')
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar9" checked>
                    <img src="/img/avatares/avatar9.png">
                </div>
            @else 
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="image" value="avatar9">
                    <img src="/img/avatares/avatar9.png">
                </div>
            @endif
        @endif
        <input type="submit" class="btn btn-primary" value="Salvar">
    </form>
</div>
@else
<h1>Você não possui acesso, volte para <a href="/home">HOME!</a></h1>
@endif
@endsection