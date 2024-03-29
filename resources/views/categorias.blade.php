@extends('layout.app', ["current" => "categorias"])

@section('body')

<div class="card border-dark">
  <img class="card-img-top" src="holder.js/100px180/" alt="">
  <div class="card-body">
    <h4 class="card-title">Cadastro de categorias</h4>
    

@if(count($cats) > 0)
    <table class="table table-ordered table-hover">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nome da categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cats as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->nome}}</td>
                <td>
                <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-success">Editar</a>
                <a href="/categorias/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                </td>
            </tr>
        @endforeach
            
        </tbody>
    </table>
@endif
  </div>

    <div class="card-footer">
    <a href="/categorias/novo" class="btn btn-sm btn-warning">Nova Categoria</a>
    </div>

</div>

@endsection