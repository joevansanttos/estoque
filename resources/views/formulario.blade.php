	@extends('principal')

  @section("conteudo")

  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  
  	<form action="/produtos/adiciona" method="post">
  		<input type="hidden" name="_token" value="{{csrf_token()}}">
  		<div class="form-group">
  			<label>Nome</label>
  			<input class="form-control" type="" name="nome">
  		</div>
  		<div class="form-group">
  			<label>Valor</label>
  			<input class="form-control" type="" name="valor">
  		</div>
  		<div class="form-group">
  			<label>Quantidade</label>
  			<input class="form-control" type="" name="quantidade">
  		</div>
      <div class="form-group">
        <label>Tamanho</label>
        <input class="form-control" type="" name="tamanho">
      </div>
  		<div class="form-group">
  			<label>Descrição</label>
  			<textarea class="form-control" name="descricao"></textarea>  			
  		</div>
  		<button class="btn btn-primary" type="submit">Adicionar</button>  		
  	</form> 
  @stop 