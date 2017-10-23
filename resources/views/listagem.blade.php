  @extends('principal')

  @section("conteudo")
  <h1>Listagem de Produtos</h1>
  <table class="table table-bordered">
    <tr>
      <td>Nome</td>
      <td>Valor</td>
      <td>Descrição</td>
      <td>Quantidade</td>
      <td>Adicionar</td>
      <td>Tamanho</td>
      <td>Remover</td>
    </tr>
    @foreach ($produtos as $p)
      <tr class="{{$p->quantidade <= 1 ? 'danger' : ''}}">
        <td>{{$p->nome}}</td>
        <td>{{$p->valor}}</td>
        <td>{{$p->descricao}}</td>
        <td>{{$p->quantidade}}</td>
        <td>{{$p->tamanho}}</td>
        <td>
          <a href="produtos/mostra/{{$p->id}}"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
        </td>
        <td>
          <a href="produtos/remove/{{$p->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
        </td>
      </tr>
    @endforeach
  </table> 

  @if(old('nome'))
    <div class="alert alert-success">
      Produto {{old('nome')}} adicionado com sucesso!
    </div>
    
  @endif  

  
     

    
