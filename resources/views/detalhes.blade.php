  @extends('principal')

  @section("conteudo")
  <h1>Detalhes do produto <?=$p->nome?></h1>
  <ul>
    <li>
      Descrição: {{$p->descricao}}
    </li>
    <li>
      Valor: {{$p->valor}}
    </li>
  </ul>
  @stop 
        
      
