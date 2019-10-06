@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-rocket"></i> ADMINISTRADOR</h1>
		</div>
		@if (Auth::check())

		<h2>Bienvenido {{ Auth::user()->user }} al Panel de Administración de tu tienda en línea.</h2><hr>
		@endif
		<div class="row">
			
			<div class="col-md-6">
				<div class="panel">
					<i class="fa fa-list-alt icon-home"></i>
					<a href="{{ route('categoria.index') }}" class="btn btn-warning btn-block btn-home-amin">CATEGORÍAS</a>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel">
					<i class="fa fa-shopping-cart icon-home"></i>
					<a href="#" class="btn btn-warning btn-block btn-home-amin">Productos</a>
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel">
					<i class="fa fa-cc-paypal icon-home"></i>
					<a href="#" class="btn btn-warning btn-block btn-home-amin">PEDIDOS</a>
				</div>
			</div>

			<div class="col-md-6">
				<div class="panel">
					<i class="fa fa-users icon-home"></i>
					<a href="#" class="btn btn-warning btn-block btn-home-amin">USUARIOS</a>
				</div>
			</div>

		</div>

	</div>

	<hr>

	@stop