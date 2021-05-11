@extends('index')
@section('content-header')
	<section class="content-header">
      <h1>
        <i class="fa fa-edit"></i> Editar Tipo dos Materiais
        <small>Gerenciamento de materiais</small>
      </h1>
    </section>
@endsection
@section('content')
 	<div class="panel panel-primary">
 		 <div class="panel-heading">
                <i class="fa fa-edit"></i> Editar cliente
            </div>
            <div class="panel-body">
 <form action="{{ action('ClienteController@update', $cliente->id) }}" method="POST">
 	 {!! method_field('PUT') !!}
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" value="{{ is_null( old('nome')) ? $cliente->nome : old('nome') }}" />
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="email" value="{{ is_null( old('email')) ? $cliente->email : old('email') }}" />
                </div>

                <button type="submit" style="margin-bottom: 4px;" class="btn  btn-block-mobile btn-success">
                    <i class="fa fa-plus-circle fa-lg"></i> Salvar
                </button>
                <a class="btn  btn-block-mobile btn-default pull-right" href="{{ action('ClienteController@index') }}">
                    <i class="fas fa-reply"></i> Voltar para a lista
                </a>
            </form>
        </div>
    </div>

@stop
