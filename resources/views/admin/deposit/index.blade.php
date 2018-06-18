@extends('adminlte::page')


@section('content_header')
    <h1>Depósito</h1>
    <ol class="breadcrumb">
    	<li><a href="">Dashboard</a></li>
    	<li><a href="">Saldo</a></li>
    	<li><a href="">Depósito</a></li>
    </ol>
@stop

@section('content')
    <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Fazer Recarga</h3>
            </div>
            <div class="box-body">

            @if($errors->any())  

              <div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Alerta!</h4>
                
                  @foreach($errors->all() as $error)
                      <p>{{$error}}</p>
                  @endforeach
              </div>
            @endif  

            <form method="POST" action="{{route('deposit.store')}}">	
              {!! csrf_field() !!}
              <input class="form-control input-lg" type="text" placeholder="Valor" name="value">
              <br>
              <button type="submit" class="btn btn-md btn-success">Recarregar</button>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
@stop