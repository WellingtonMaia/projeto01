@extends('adminlte::page')


@section('content_header')
    <h1>Dashboard</h1>
    <ol class="breadcrumb">
    	<li><a href="">Dashboard</a></li>
    </ol>
@stop

@section('content')
	
	<div class="container">

    <div class="box">
    	<div class="box-header">
          <a href="{{route('deposit')}}"  class="btn btn-md btn-success">
          <i class="fa fa-fw fa-cart-plus"></i>Recarregar</a>
          <a type="button" class="btn btn-md btn-danger">
          <i class="fa fa-fw fa-long-arrow-right"></i>Sacar</a>
      </div>
    </div>  
      <div class="row">
        
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-6 col-sm-9 col-xs-12">
          <div class="info-box bg-green">
            
            <a href=""><span class="info-box-icon bg-green" style="border-right:  1px solid white; "><i class="fa fa-fw fa-money"></i></span></a>

            <div class="info-box-content">
              <span class="info-box-text">Saldo</span>
              <span class="info-box-number">R$ {{number_format($amount, 2, ",", ".") }}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        <!-- /.col -->
        <div class="col-md-6 col-sm-9 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon bg-red" style="border-right:  1px solid white; "><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        

        <!-- ./row -->
        </div>
    </div>

@stop