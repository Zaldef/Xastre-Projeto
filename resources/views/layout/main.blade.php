<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/style02.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                     <img src="/img/Rex.png" alt="REX">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/cursos" class="nav-link">Cursos</a>
                        <li class="nav-item">
                            <a href="/cursos/cadastro" class="nav-link">Novo Curso</a>
                        <li class="nav-item">
                            <a href="/alunos" class="nav-link">Alunos</a>
                        <li class="nav-item">
                            <a href="/alunos/cadastro" class="nav-link">Novo Aluno</a>
                        <li class="nav-item">
                            <a href="/professores" class="nav-link">Professores</a>
                        <li class="nav-item">
                            <a href="/professores/cadastro" class="nav-link">Novo Professor</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg')) 
                        <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <p>Rede de Ensino Xasteriana REX &copy; 2022</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    </body>
</html>