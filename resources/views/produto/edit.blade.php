@extends('index')
@section('content')
 	<div class="panel panel-primary">
 		 <div class="panel-heading">
                <i class="fa fa-edit"></i> Editar produto
            </div>
            <div class="panel-body">
 <form action="{{ action('ProdutoController@update', $produto->id) }}" method="POST">
 	 {!! method_field('PUT') !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Descrição</label>
                    <input type="text" class="form-control" name="descricao" value="{{ is_null( old('descricao')) ? $produto->descricao : old('descricao') }}" />
                </div>
                <div class="form-group">
                    <label>Preço</label>
                    <input type="text" class="form-control" name="preco" value="{{ is_null( old('preco')) ? $produto->preco : old('preco') }}" />
                </div>
                 <div class="form-group">
                    <label>Quantidade</label>
                    <input type="text" class="form-control" name="quantidade" value="{{ is_null( old('quantidade')) ? $produto->quantidade : old('quantidade') }}" />
                </div>

                <button type="submit" style="margin-bottom: 4px;" class="btn  btn-block-mobile btn-success">
                    <i class="fa fa-plus-circle fa-lg"></i> Salvar
                </button>
                <a class="btn  btn-block-mobile btn-default pull-right" href="{{ action('ProdutoController@index') }}">
                    <i class="fas fa-reply"></i> Voltar para a lista
                </a>
            </form>
        </div>
    </div>

@stop
