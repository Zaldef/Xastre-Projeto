@extends('layouts.main')

@section('title','Novo Professor')
    
@section('content')

<div id="curso-create-container" class="col-md-6 offset-md-3">
    <h1>Novo Professor</h1>
    <form action="/professores" method="POST"  enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="title">Professor</label>
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
        <label for="title">EMAIL</label>
        <input type="text" class="form-control" id="email" name="email">
      </div> 

      <div class="form-group">
        <label for="title">Senha</label>
        <input type="text" class="form-control" id="senha" name="senha">
      </div>

      <input type="submit" class="btn btn-primary" value="Cadastrar Professor">
    </form>
  </div>

@endsection 