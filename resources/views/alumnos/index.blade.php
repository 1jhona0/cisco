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
                        <a href="{{ route('alumnos.create') }}"><button class="btn btn-info"> <i class="fa fa-plus"></i> Nuevo Alumno</button></a>
                        
                        <h2>Listado de los Alumnos registrados</h2>
						<table class="table" id="alumnos-table">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>CI</th>
                                    <th>Email</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($muchosalumnos as $alumno)
                                <tr>
                                    <td>{{$alumno->id}}</td>
                                    <td>{{$alumno->nombre}}</td>
                                    <td>{{$alumno->apellidos}}</td>
                                    <td>{{$alumno->ci}}</td>
                                    <td>{{$alumno->email}}</td>
                                    <td>
                                        <a href="" data-target="#modal-mostrar-{{$alumno->id}}" data-toggle="modal"><button class="btn btn-success" ><i class="fa fa-eye"> Ver</i></button></a>
                                        <form action="{{ route('alumnos.destroy', $alumno->id)}}" role="form" method="post">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                           
                                            <button type="submit">eliminar</button>
                                        </form>
                                        <a href="{{URL::action('AlumnosController@edit',$alumno->id)}}"><button class = "btn btn-info"><i class="fa fa-pencil-square-o"></i> Editar</button></a>
                                    </td>
                                </tr>
                                @include('alumnos.show')
                                @endforeach
                            </tbody>
                        </table>
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>

    
@endsection
