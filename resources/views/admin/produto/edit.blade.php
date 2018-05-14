@extends('adminlte::page')

@section('content_header')
    <h1>Produtos >> Editar</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Pinel Principal</a></li>
        <li class="active">Produtos</li>
      </ol>
@stop

@section('content')

  <div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Formulário</h3>
        </div>
        <form class="form-horizontal" method="post" action="{{ route('produto.update', ['id' => $produto->id]) }}">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          <div class="box-body">
            <div class="form-group">
              <label for="nome" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" autofocus value="{{ $produto->nome }}">
              </div>
            </div>
            <div class="form-group">
              <label for="descricao" class="col-sm-2 control-label">Descrição</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="descricao" id="descricao" rows="3">{{ $produto->descricao }}</textarea>
              </div>
            </div>
            <div class="form-group">
              <label for="valor" class="col-sm-2 control-label">Valor</label>
              <div class="col-sm-10">
                <input type="text" class="form-control price-format" name="valor" id="valor" value="{{ $produto->valor*100 }}">
              </div>
            </div>

          </div>
          <div class="box-footer">
            <a href="{{ route('produto.index') }}" class="btn btn-default">Cancelar</a>
            <button type="submit" class="btn btn-info pull-right">Salvar</button>
          </div>
        </form>
      </div>
  </div>

@stop

@section('js')

  <script>

    $(document).ready(function() {
      $('.price-format').priceFormat({
          prefix: '',
          centsSeparator: ',',
          thousandsSeparator: '.'
      });
    });

  </script>

@stop
