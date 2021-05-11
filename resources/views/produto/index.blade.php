@extends('index')
@section('content-header')
<section class="content-header">
<h1>
<a href="{{ action('ProdutoController@create') }}" class="btn btn-block-mobile pull-right btn-success">
    <i class="fa fa-plus-circle"></i> Cadastrar
</a>
</h1>
<div class="clearfix"><div/>
</section>
@endsection
@section('content')
 <div class="panel panel-primary">
 	<div class="panel-heading">
 		<i class="fa fa-list"></i>
 		 Produtos
 	</div>
 <div class="panel-body no-padding">
	<table class="table table-bordered">
	 @if($produtos->count())
	 	<thead>
	 		<tr>
	 			<th width="1%">Cód</th>
	 			<th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
	 			<th width="35%">Ações</th>
	 		</tr>
	 	</thead>
	 	<tbody>
	 		@foreach ($produtos as $produto)
                <tr>
                	<td>{{ $produto->id }}</td>
                	<td>{{$produto->descricao}}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{$produto->quantidade}}</td>
                	<td>
						<a href="{{ action('ProdutoController@edit', $produto->id) }}" class="btn btn-default">
						    Editar
						</a>
						<form action="{{ action('ProdutoController@destroy', $produto->id) }}" method="POST" style="display: inline;" onsubmit="if(confirm('Deletar? A confirmação apagará PERMANENTEMENTE!')) { return true } else {return false };">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <button type="submit" class="btn btn-danger">
                          	Excluir
                          </button>
                        </form>
					</td>
                </tr>
            @endforeach
	 	</tbody>
	 	@else
	 	 <div class="alert alert-warning alert-dismissible">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 	<span aria-hidden="true">&times;</span></button>
                     <strong>Opa!</strong> Nenhum produto cadastrado!
	 	 </div>
	 	 @endif
	 	 <tfoot>
	 </table>
	</div>
 </div>
 @endsection
