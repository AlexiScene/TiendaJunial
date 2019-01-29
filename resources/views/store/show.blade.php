@extends('store.template')

@section('content')

<div class="container text-center">
	<div class="page-header">
		<h1><i class="fa fa-shopping-cart"></i>Detalle del Producto</h1>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="producto-block">
		<img src="{{ $producto->imagen }}" >
	</div>
		</div>
		<div class="col-md-6">
			
	<div class="producto-block">
		<h3>{{ $producto->nombre }}</h3><hr>
		<div class="producto-info panel">
			<p>{{ $producto->descripcion }}</p>
			<h5>
				<span class="badge badge-pill badge-success">Precio: ${{ number_format($producto->precio, 2) }}</span>
					<p>
			</h5>
			<p>
				<a class="btn btn-warning btn-block" href="{{ route('cart-add', $producto->slug) }}">Comprar<i class=" fa fa-cart-plus fa-2x"></i></a>
			</p>
		</div>
	</div>
		</div>
	</div><hr>


	<p>
		<a class="btn btn-primary" href="{{ route('home') }}"><i class="fa fa-chevron-circle-left"></i>Regresar</a>
	</p>
</div>
@stop