@extends('index')
@section('content')
  <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-plus"></i> Cadastro de Produto
        </div>
        <div class="panel-body">
            <form action="{{ action('ProdutoController@store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Descrição</label>
                    <input type="text" placeholder="Descrição" class="form-control" name="descricao" required/>
                </div>
                 <div class="form-group">
                    <label>Preço</label>
                    <input type="text" placeholder="Preço" class="form-control" name="preco" required/>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="text" placeholder="Quantidade" class="form-control" name="quantidade" required/>
                </div>
                <button type="submit" style="margin-bottom: 4px;" class="btn  btn-block-mobile btn-success">
                    <i class="fa fa-plus-circle fa-lg"></i> Salvar
                </button>
                <a class="btn  btn-block-mobile btn-default pull-right" href="{{ action('ProdutoController@index') }}">
                    Voltar para a lista
                </a>
            </form>
        </div>
    </div>
@stop
