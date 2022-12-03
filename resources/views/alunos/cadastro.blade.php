@extends('layouts.main')

@section('title','Novo Aluno')
    
@section('content')

<div id="curso-create-container" class="col-md-6 offset-md-3">
    <h1>Novo aluno</h1>
    <form action="/alunos" method="POST"  enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="title">Aluno</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>  

      <div class="form-group">
        <label for="title">CPF</label>
        <input name="cpf" id="cpf" class="form-control" >
      </div>

      <div class="form-group">
        <label for="title">Endereço</label>
        <input name="endereco" id="endereco" class="form-control">
      </div>

      <div class="form-group">
        <label for="title">Filme favorito do aluno</label>
        <input type="text" class="form-control" id="filme" name="filme">
      </div> 
      
      <div class="form-group">
        <label for="title">EMAIL</label>
        <input type="text" class="form-control" id="email" name="email">
      </div> 

      <div class="form-group">
        <label for="title">Senha</label>
        <input type="text" class="form-control" id="senha" name="senha">
      </div> 

      <input type="submit" class="btn btn-primary" value="Cadastrar Aluno">
    </form>
  </div>

@endsection 