@extends('admin.template')

@section('content')

	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				CATEGORÍAS <a href="{{ route('categoria.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Categoría</a>
			</h1>
		</div>
		<div class="page">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Editar</th>
							<th>Eliminar</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Color</th>
						</tr>
					</thead>
					<tbody>
						@foreach($categorias as $categoria)
							<tr>
								<td>
									<a href="{{ route('categoria.edit', $categoria) }}" class="btn btn-primary">
										<i class="fa fa-pencil-square"></i>
									</a>
								</td>
								<td>
									{!! Form::open(['method'  => 'delete', 'route' => ['categoria.destroy', $categoria]]) !!}
									<input type="hidden" name="_method" value="DELETE">
									<button onclick="return confirm('¿Eliminar categoria?')" class="btn btn-danger">
										<i class="fa fa-trash-o"></i>				
									</button>
									{!! Form::close() !!}

								</td>
								<td>{{ $categoria->nombre }}</td>
								<td>{{ $categoria->descripcion }}</td>
								<td>{{ $categoria->color }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

@stop