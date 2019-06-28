@extends('layout.app', ["current" => "produtos"])

@section('body')


<div class="card border-dark">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title">Cadastro de produtos</h4>
    
@if($prods)
    <table class="table table-ordered table-hover">
        <thead>
            <tr>
                <th>Código do Produto</th>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>Código da Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prods as $prod)
            <tr>
                <td>{{$prod->id}}</td>
                <td>{{$prod->nome}}</td>
                <td>{{$prod->estoque}}</td>
                <td>{{$prod->preco}}</td>
                <td>{{$prod->categoria_id}}</td>
                <td>
                <a href="/produtos/editar/{{$prod->id}}" class="btn btn-sm btn-success">Editar</a>
                <a href="/produtos/apagar/{{$prod->id}}" class="btn btn-sm btn-danger">Apagar</a>
                </td>
            </tr>
        @endforeach
            
        </tbody>
    </table>
@endif
  </div>

    <div class="card-footer">
    <a href="/produtos/novo" class="btn btn-sm btn-warning">Novo Produto</a>
    </div>

</div>



    


@endsection


