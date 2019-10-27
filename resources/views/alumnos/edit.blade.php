@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.Alumnos') }}
    
@endsection
@section('main-content')
<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-12 col-lg-12">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Alumnos</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
                        
						<div>
                            <form action="{{ route('alumnos.update',$alumno->id) }}"  role="form" method="POST">
                                <!-- IMPORTANTE NO OLVIDARSE PARA ACTUALIZAR -->
                                @csrf
                                @method('PATCH')
                                {{--  <input name="_method" type="hidden" value="PATCH">  --}}
                                

                                <div class="form-group col-md-6 col-lg-6 col-xs-4">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" name="nombre" class="form-control" value="{{$alumno->nombre}}" placeholder="Inserte sus nombres">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xs-4">
                                    <label for="nombre">Apellidos:</label>
                                    <input type="text" name="apellidos" class="form-control" value="{{$alumno->apellidos}}" placeholder="Inserte sus nombres">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xs-4">
                                    <label for="nombre">Carnte de Identidad:</label>
                                    <input type="text" name="ci" class="form-control" value="{{$alumno->ci}}" placeholder="Inserte sus nombres">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xs-4">
                                    <label for="nombre">Carnet Universitario:</label>
                                    <input type="text" name="cu" class="form-control"value="{{$alumno->cu}}" placeholder="Inserte sus nombres">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xs-4">
                                    <label for="nombre">Telefono:</label>
                                    <input type="text" name="telefono" class="form-control" value="{{$alumno->telefono}}" placeholder="Inserte sus nombres">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xs-4">
                                        <label for="nombre">Celular:</label>
                                        <input type="number" name="celular" class="form-control" value="{{$alumno->celular}}" placeholder="Inserte sus nombres">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xs-4">
                                        <label for="nombre">Correo Electronico:</label>
                                        <input type="email" name="email" class="form-control" value="{{$alumno->email}}" placeholder="Inserte sus nombres">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xs-4">
                                        <label for="nombre">Direccion:</label>
                                        <input type="text" name="direccion" class="form-control" value="{{$alumno->direccion}}" placeholder="Inserte sus nombres">
                                </div>
                                <div class="form-group col-md-6 col-lg-6 col-xs-4">
                                    <button class="btn btn-primary" >Guardar</button>
                                    <button class="btn btn-danger" type="reset">Cancelar</button>
                                </div>
                                
                            </form>

					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>

@endsection