@extends('layouts.app')

@section('title', 'Dashboard: ' . Auth::user()->name)
    
@section('content')

<h1>Bem Vindo   {{ Auth::user()->name }}</h1>


<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h2>Meus cursos</h2>
</div>
<div class="col-md-10 offset-md-1 dashboard-cursos-container">
    @if(Auth::user()->acesso == 'Aluno' || Auth::user()->acesso == 'ADM')
        @if(count($cursos_A_P) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                    </tr>
                </thead>
            </table>
                <tbody>
                    @foreach($cursos_A_P as $curso)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1}}</td>
                            <td><a href="/cursos/{{ $curso->id }}">{{ $curso->name }}</a></td>
                            <td>{{ count($curso->users) }}/{{ $curso->alunosqtdmax }}</td>
                            <td>
                                <form action="/cursos/OutAluno/{{$curso->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Desmatricular-se</button>
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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($curso_P as $curso)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1}}</td>
                            <td><a href="/cursos/{{ $curso->id }}">{{ $curso->name }}</a></td>
                            <td>{{ count($curso->users) }}/{{ $curso->alunosqtdmax }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="aviso">Você ainda não é professor de nenhum curso!</p>
        @endif
@endif
</div>
@endsection 
