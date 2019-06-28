@extends('layout.app', ["current" => "categorias"])

@section('body')

    <div class="card border-warning">
      <img class="card-img-top" src="holder.js/100px180/" alt="">
      <div class="card-body">
        <form action="/categorias" method="post">
        @csrf
            <div class="form-group">
              <label for="nomeCategoria">Nome da categoria</label>
              <input type="text"
                class="form-control" name="nomeCategoria" id="nomeCategoria" aria-describedby="helpId" placeholder="Categoria">
            </div>
            <a href="/categorias" class="btn btn-dark"> <<</a>
            <button type="submit" class="btn btn-warning btm-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btm-sm">Cancelar</button>
        </form>
      </div>
    </div>


@endsection