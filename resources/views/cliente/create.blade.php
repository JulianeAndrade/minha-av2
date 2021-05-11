@extends('index')
@section('content')
  <div class="panel panel-primary">
        <div class="panel-heading">
            <i class="fa fa-plus"></i> Cadastro de Cliente
        </div>
        <div class="panel-body">
            <form action="{{ action('ClienteController@store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" placeholder="Seu Nome" class="form-control" name="nome" required/>
                </div>
                 <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" placeholder="Seu E-mail" class="form-control" name="email" required/>
                </div>
                <button type="submit" style="margin-bottom: 4px;" class="btn  btn-block-mobile btn-success">
                    <i class="fa fa-plus-circle fa-lg"></i> Salvar
                </button>
                <a class="btn  btn-block-mobile btn-default pull-right" href="{{ action('ClienteController@index') }}">
                    Voltar para a lista
                </a>
            </form>
        </div>
    </div>
@stop
