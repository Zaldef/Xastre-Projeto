@extends('layouts.app')
@section('title','Novo Curso')
@section('content')

@if(Auth::user()->acesso == 'Secretaria' || Auth::user()->acesso == 'ADM')
<div id="curso-create-container" class="col-md-6 offset-md-3">
    <h1>Novo curso</h1>
    <form action="/cursos" method="POST"  enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title">Curso</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nome do Curso">
      </div>  
      <div class="form-group">
        <label for="title">Descrição completa:</label>
        <textarea name="description" id="description" class="form-control" placeholder="Sobre o que é o curso?"></textarea>
      </div>
      <div class="form-group">
        <label for="title">Descrição simplificada:</label>
        <textarea name="simplified_description" id="simplified_description" class="form-control" placeholder="Resumo do curso"></textarea>
      </div>
      <div class="form-group">
        <label for="title">Quantos alunos minimos?</label>
        <input type="text" class="form-control" id="alunosqtdmin" name="alunosqtdmin" placeholder="Quantidade de Alunos minimos">
      </div> 
      <div class="form-group">
        <label for="title">Quantos alunos maximos?</label>
        <input type="text" class="form-control" id="alunosqtdmax" name="alunosqtdmax" placeholder="Quantidade de Alunos maximos">
      </div> 
      <div id="cursos-form" class="form-group">
        <label for="img">Escolha uma imagem para esse curso:</label>
    </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="image" value="curso1">
            <img src="/img/cursos/curso1.jpg">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="image" value="curso2">
            <img src="/img/cursos/curso2.jpg">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="image" value="curso3">
            <img src="/img/cursos/curso3.jpg">
        </div>
      <input type="submit" class="btn btn-primary" value="Criar Curso">
    </form>
  </div>
@else
<h1>Você não possui acesso, volte para <a href="/home">HOME!</a></h1>
@endif
@endsection