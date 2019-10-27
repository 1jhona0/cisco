<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-mostrar-{{$alumno->id}}">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" 
                    aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Eliminar Alumno</h4>
                </div>
                <div class="modal-body">
                        <div class="form-group col-md-12 col-lg-12 col-xs-12">
                            <label for="nombre">Nombre:  </label>{{$alumno->nombre}}
                            
                        </div>
                        <div class="form-group col-md-12 col-lg-12 col-xs-12">
                            <label for="nombre">Apellidos:</label>{{$alumno->apellidos}}
                        </div>
                        <div class="form-group col-md-12 col-lg-12 col-xs-12">
                            <label for="nombre">Carnte de Identidad:</label>{{$alumno->ci}}
                        </div>
                        <div class="form-group col-md-12 col-lg-12 col-xs-12">
                            <label for="nombre">Carnet Universitario:</label>{{$alumno->cu}}
                        </div>
                        <div class="form-group col-md-12 col-lg-12 col-xs-12">
                            <label for="nombre">Telefono:</label>{{$alumno->telefono}}
                        </div>
                        <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                <label for="nombre">Celular:</label>{{$alumno->celular}}
                        </div>
                        <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                <label for="nombre">Correo Electronico:</label>{{$alumno->email}}
                        </div>
                        <div class="form-group col-md-12 col-lg-12 col-xs-12">
                                <label for="nombre">Direccion:</label>{{$alumno->direccion}}
                        </div>
                    </div>
                <div class="modal-footer">                  
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
 


</div>