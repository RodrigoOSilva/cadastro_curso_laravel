@extends('layout.app', ["current" => "produtos"])

@section('body')

    <div class="card border-warning">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <form action="/produtos" method="post">
        @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do produto</label>
                <input type="text"
                    class="form-control" name="nomeProduto" id="nomeProduto" aria-describedby="helpId" placeholder="Produtos">
                <label for="nomeProduto">Quantidade em estoque</label>
                <input type="number"
                    class="form-control" name="estoqueProduto" id="estoqueProduto" aria-describedby="helpId" placeholder="Quantidade">
                <label for="nomeProduto">Preço</label>
                <input type="float"
                    class="form-control" name="precoProduto" id="precoProduto" aria-describedby="helpId" placeholder="Preço">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Opções</label>
                </div>
                    <select class="custom-select" id="inputGroupSelect01" name="categoriaProduto">
                        <option selected>Categoria do produto</option>
                        @foreach($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->nome}}</option>
                        @endforeach
                    </select>
            </div>
                <a href="/produtos" class="btn btn-dark"> <<</a>
                <button type="submit" class="btn btn-warning btm-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btm-sm">Cancelar</button>
        </form>
      </div>
    </div>
    



@endsection