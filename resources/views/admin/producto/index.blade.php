@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS <a href="{{ route('producto.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Producto</a>
			</h1>
		</div>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Imagen</th>
							<th>Nombre</th>
							<th>Categoria</th>
							<th>Descripción</th>
							<th>Precio</th>
							<th>Visible</th>
						</tr>
					</thead>
					<tbody>
						@foreach($productos as $producto)
							<tr>
								<td>
									<a href="{{ route('producto.edit', $producto->slug) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
								<td>
									{!! Form::open(['route' => ['producto.destroy', $producto->slug]]) !!}
									<input type="hidden" name="_method" value="DELETE">
									<button onclick="return confirm('¿Eliminar producto?')" class="btn btn-danger">
										<i class="fa fa-trash-o"></i>				
									</button>
									{!! Form::close() !!}

								</td>
								<td><img src="{{ $producto->imagen }}" width="60"></td>
								<td>{{ $producto->nombre }}</td>
								<td>{{ $producto->categoria->nombre }}</td>
								<td>{{ $producto->extract }}</td>
								<td>${{ number_format($producto->precio,2) }}</td>
								<td>{{ $producto->visible == 1 ? "Si" : "No" }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>

			<hr>

			<?php echo $productos->render(); ?> 

		</div>
	</div>

@stop