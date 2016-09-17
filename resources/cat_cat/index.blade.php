@extends("layout")

@section("principal")

    <h1>listado de catalagos</h1>
    <table class="table table-striped">
        <tr>
            <th>
                Identificador del catalogo
            </th>
            <th>
                Descripcion
            </th>
            <th>
                Cantidad de items
            </th>
            <th>
                Accion
            </th>
        </tr>
        @foreach($listado as $id => $catalogo)
                <tr>
                    <td>
                        {{ $catalogo->id_cat }}
                    </td>
                    <td>
                        <a href="{{route('catalogo.show',$catalogo->id)}}">
                            {{ $catalogo->descripcion }}
                        </a>
                    </td>
                    <td>
                        {{ $catalogo->opciones()->count()}}
                    </td>
                    <td>
                        <a href="{{route("catalogo.edit",$catalogo->id_cat)}}" class="btn btn-success btn-xs">
                            Modificar
                        </a>
                        <a href="#" class="btn btn-success btn-xs" onclick="$('#dialogo_confirmar_'{{$catalogo->id_cat}})">
                            Borrar
                        </a>
                    </td>
                </tr>
        @endforeach
    </table>
    @foreach($listado as $catalogo)

        <div class="modal fade" tabindex="-1" role="dialog" id="dialogo_confirmar_{{$catalogo->id_cat}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Confirmar la borrada de un catalogo</h4>
                    </div>
                    <div class="modal-body">
                        <p>¿Esta seguro de borrar el catalogo {{ $catalogo->descripcion }}?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">cancelar</button>
                        <form action="{{route("catalogo.destroy")}}" method="POST">
                            <input type="hidden" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    @endforeach

@endsection