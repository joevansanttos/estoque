	@extends('principal')

  @section("conteudo")

 
  
  	<form action="/login" method="post">
  		<input type="hidden" name="_token" value="{{csrf_token()}}">
  		<div class="form-group">
  			<label>Email</label>
  			<input class="form-control" type="" name="email">
  		</div>
  		<div class="form-group">
  			<label>Senha</label>
  			<input class="form-control"  name="password" type="password">
  		</div>
  		<button class="btn btn-primary" type="submit">Loga</button>  		
  	</form> 
  @stop 