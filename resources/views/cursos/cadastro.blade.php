@extends('layout.main')

@section('title','REX Cursos')
    
@section('content')

<div id="curso-create-container" class="col-md-6 offset-md-3">
    <h1>Novo curso</h1>
    <form action="/cursos" method="POST"  enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="image">Imagem do Curso:</label>
        <input type="file" id="image" name="image" class="from-control-file">
      </div>

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
        <label for="title">Quantos alunos maximos?</label>
        <input type="text" class="form-control" id="alunosqtd" name="alunosqtd" placeholder="Quantidade de Alunos">
      </div> 

      <input type="submit" class="btn btn-primary" value="Criar Curso">
    </form>
  </div>

@endsection 