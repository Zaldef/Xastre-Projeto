@extends('layouts.app')

@section('title', Auth::user()->name)

@section('content')

@if(Auth::user()->acesso == 'Aluno' || Auth::user()->acesso == 'Professor' || Auth::user()->acesso == 'ADM')
    <div class="col-md-10 offset-md-1 home-title-container">
        <h1 class="text-center">Meus cursos</h1>
    </div>
@endif
<div class="col-md-10 offset-md-1 home-cursos-container">
    @if(Auth::user()->acesso == 'Aluno' || Auth::user()->acesso == 'ADM')
        @if(count($cursos_A_P) > 0)
            <table class="table table-striped table-hover table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Nota</th>
                        <th scope="col"><ion-icon name="trash"></ion-icon></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cursos_A_P as $curso)
                        <tr>

                            <td><a href="/cursos/{{ $curso->id }}">{{ $curso->name }}</a></td>
                            <td>{{ count($curso->users) }}/{{ $curso->alunosqtdmax }}</td>
                            <td>{{ $curso->pivot->nota }}</td>
                            <td>
                                <form action="/cursos/OutAluno/{{$curso->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"></ion-icon>Sair do curso</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você não possui cursos a fazer, <a href="/cursos">Matricule-se!</a></p>
        @endif
    @endif
    @if(Auth::user()->acesso == 'Professor' || Auth::user()->acesso == 'ADM')
        @if(count($curso_P) > 0)
            <table class="table table-striped table-hover table-bordered ">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col"><ion-icon name="trash"></ion-icon></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($curso_P as $curso)
                        <tr>
                            <td><a href="/cursos/{{ $curso->id }}">{{ $curso->name }}</a></td>
                            <td>{{ count($curso->users) }}/{{ $curso->alunosqtdmax }}</td>
                            <td>
                                <form action="/cursos/OutProfessor/{{$curso->id}}" method="POST"> 
                                    @csrf
                                    @method('PUT')
                                    <input type="submit" class="btn btn-danger" value="Desistir do curso">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não é professor de nenhum curso!</p>
        @endif
    @endif
    @if(Auth::user()->acesso == 'Secretaria' || Auth::user()->acesso == 'ADM')
        <div id="search-container" class="col-md-12">
            <h1>Busque um Usuario</h1>
            <form action="/home" method="GET">
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
            </form>
        </div>
        <h1 class="text-center">Tabela de Usuarios</h1> 
        <table class="table table-striped table-hover table-bordered ">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Acesso</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    @if($user->acesso != 'ADM')
                        <tr>
                            <td> {{ $user->name}}</td>
                            <td> {{ $user->acesso}}</td>
                            <td> 
                                <a href="/user/edit2/{{$user->id}}" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <form action="/user/{{$user->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        @if(count($users) == 0 && $search) 
        <p>Não foi possível encontrar nenhum usuario com {{ $search }}! <a href="/home">Ver todos os usuarios</a></p>
        @endif
    @endif
</div>
@endsection 