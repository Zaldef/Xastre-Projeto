<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <link rel="stylesheet" href="/css/syle.css">
    </head>
    <body class="antialiased">
       <h1>Bem Vindo</h1>
       @if(4>5)
        <p>a condição é TRUE</p>
       @endif
        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
        <p>o nome é Pedro</p>
        @elseif ($nome == "Guilherme")
        <p>O nome é {{$nome}}</p>
        @else
        <p>o nome ñ é Pedro</p>
        @endif
    </body>
</html>
