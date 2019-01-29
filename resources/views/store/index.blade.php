@extends('store.template')

@section('content')

@include('store.partials.slider')

<div class="container text-center">

	<div id="productos">
		@foreach($productos as $producto)
			<div class="badge badge-dark">

				<img src="{{ $producto->imagen }}" width="100px" height="100px">
				<div class="producto-info panel">
					<h4>{{ $producto->nombre }}</h4>
				<p>{{ $producto->extract }} </p><hr>
					<h5><span class="badge badge-pill badge-success">Precio: ${{ number_format($producto->precio, 2) }}</span></h5>
					<p>
						<a class="btn btn-warning" href="{{ route('cart-add', $producto->slug) }}">
							<i class="fa fa-cart-plus"></i> Comprar
						</a>
					</p><br>
				</div>
			</div>
		
		@endforeach
	</div>
</div>
@stop