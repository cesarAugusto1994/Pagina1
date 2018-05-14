@extends('adminlte::page')

@section('content_header')
    <h1>Produtos</h1>

    <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Pinel Principal</a></li>
        <li class="active">Produtos</li>
      </ol>
@stop

@section('content')

<div class="col-md-12">
  <div class="box box-success">
    <div class="box-header with-border">
      <h3 class="box-title">Listagem</h3>
    </div>
    <div class="box-body">

      {!! $table->render() !!}

    </div>
  </div>
</div>


@stop
