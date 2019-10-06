@extends('admin.template')

@section('content')
	
	<div class="container text-center">
		<div class="page-header">
			<h1>
				<i class="fa fa-shopping-cart"></i>
				PRODUCTOS <small>[Editar producto]</small>
			</h1>
		</div>

		<div class="row">
            <div class="col-md-offset-3 col-md-6">
                
                <div class="page">
                    
                    @if (count($errors) > 0)
                        @include('admin.partials.errors')
                    @endif
                    
                     {!! Form::model($producto, array('route' => array('producto.update', $producto->slug))) !!}

                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
						<label class="control-label" for="categoria_id">Categoria</label>
						{!! Form::select('categoria_id', $categorias, null, ['class' => 'form-control']) !!}
					</div>

        
                        <div class="form-group">
							<label for="nombre">Nombre:</label>

							{!!
								Form::text(
									'nombre',
									null,
									array(
										'class'=>'form-control',
											
										'placeholder' => 'Ingresa el nombre...',
										'autofocus' => 'autofocus'
									)
								)
							!!}
							
						</div>

						<div class="form-group">
							<label for="extract">Extracto:</label>

							{!!
								Form::text(
									'extract',
									null,
									array(
										'class'=>'form-control',
										'placeholder' => 'Ingrese el extracto...'
									)
								)
							!!}
						</div>
					
						<div class="form-group">
							<label for="descripcion">Descripción:</label>

							{!!
								Form::textarea(
									'descripcion',
									null,
									array(
										'class'=>'form-control',
										
									)
								)
							!!}
						</div>

						<div class="form-group">
							<label for="precio">Precio:</label>
							{!!
								Form::text(
									'precio',
									null,
									array(
										'class'=>'form-control',
										
										'placeholder' => 'Ingrese el precio...'
									)
								)
							!!}
							
						</div>

						
			<div class="form-group">
							<label for="imagen">Imagen:</label>
							{!!
								Form::text(
									'imagen',
									null,
									array(
										'class'=>'form-control',
										
										'placeholder' => 'Ingrese la URL de la imagen...'
									)
								)
							!!}
							
						</div>
		

						<div class="form-group">
							<label for="visible">Visible:</label>
							<input type="checkbox" name="visible" {{ $producto->visible == 1 ? "checked='checked'" : '' }}>
							
						</div>
                        
                        <div class="form-group">
                            {!! Form::submit('Actualizar', array('class'=>'btn btn-primary')) !!}
                            <a href="{{ route('producto.index') }}" class="btn btn-warning">Cancelar</a>
                        </div>
                    
                    {!! Form::close() !!}
                    
                </div>
                
            </div>
        </div>
        

	</div>

@stop