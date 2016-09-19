@extends("layout");

@section('principal');
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Ingreo de datos del jugador</h3>
        </div>
        <div class="panel-body">
           {{ Form::open(array('route' => 'jugadores.store')) }}
                <div class="form-group">
                    <label for="jugador">Nombres</label>
                    <input type="text" class="form-control" id="jugador" name="jugador" placeholder="ingrese nombres ">
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="ingrese apellidos">
                </div>
                <div class="form-group">
                    <label for="nace">Fecha nacimiento</label>
                    <input type="date" class="form-control" id="nace" name="nace">
                </div>
                <div class="form-group">
                    <label for="tel">telefono</label>
                    <input type="tel" class="form-control" id="tel" name="tel">
                </div>
                 <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="direccion" class="form-control" id="direccion" name="direccion">
                </div>
                <div class="form-group">
                    <label for="equipo">Equipo</label>
                    <input type="equipo" class="form-control" id="equipo" name="equipo">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Guardar</button>
           {{ Form::close() }}

        </div>
    </div>
</div>
