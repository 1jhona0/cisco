<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$alumno->id}}">

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
                    <p>Confirme si desea Eliminar el Alumno</p>
                    <p>con el ci {{$alumno->ci}}</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('alumnos.destroy', $alumno->id)}}" role="form" method="post">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit">eliminar</button>
                    </form>
                </div>
            </div>
        </div>
 


</div>
