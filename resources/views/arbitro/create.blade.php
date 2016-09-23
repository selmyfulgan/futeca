@extends("layout");

@section('principal');
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Ingreso de datos arbitros</h3>
        </div>
        <div class="panel-body">
           {{ Form::open(array('route' => 'arbitro.store')) }}
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ingrese nombre ">
                </div>

                 <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="ingrese apellido ">
                </div>

                 <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" name="estado" placeholder="ingrese estado ">
                </div>
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Guardar</button>
           {{ Form::close() }}

        </div>
    </div>
</div>
