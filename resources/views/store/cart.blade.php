@extends('store.template')

@section('content')
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping-cart"></i> Carrito de Compras</h1><hr>
		</div>

		<div class="table-cart">
			@if(count($cart))
			<p>
				<a href="{{ route('cart-trash') }}" class="btn btn-danger">Vaciar Carrito</a>
			</p>
			<div class="table-responsive">
				<table class="table table-striped table-hover table-bordered">
					<thead>
						<tr>
							<th>Imagen</th>
							<th>Producto</th>
							<th>Precio</th>
							<th>Cantidad</th>
							<th>Subtotal</th>
							<th>Quitar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($cart as $item)
						<tr>
							<td><img src="{{ $item->imagen }}"></td>					
							<td>{{ $item->nombre }}</td>
							<td>${{ number_format($item->precio,2) }}</td>
							<td>
								<input 
									type="number" 
									min="1"
									max="20"
									value="{{ $item->cantidad }}" 
									id="producto_{{ $item->id }}" 
								>
								<a
									 href="#"
									 class="btn btn-warning btn-update-item"
									 data-href="{{ route('cart-update', $item->slug) }}"
									 data-id="{{ $item->id }}"

								 >
								 	<i class="fa fa-refresh"></i>
								</a>
							</td>
							<td>${{ number_format($item->precio * $item->cantidad,2) }}</td>
							<td>
								<a href="{{ route('cart-delete', $item->slug) }}" class="btn btn-danger">
									<i class="fa fa-remove"></i>
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table><hr>

				<h4>
					<span class="badge badge-pill badge-info">
						Total: ${{ number_format($total,2) }}
					</span>
				</h4>

			</div>
			@else
				<h3><span class="label label-warning">No hay productos en el carrito :(</span></h3>
			@endif
			<hr>
			<p>
				<a href="{{ route('home') }}" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i> Seguir Comprando</a>

				<a href="#" class="btn btn-primary"> Continuar <i class="fa fa-chevron-circle-right"></i></a>
			</p>
		</div>

	</div>
@stop