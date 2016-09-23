@extends("layout");

@section('principal');
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Ingreso de datos Clientes</h3>
        </div>
        <div class="panel-body">
           {{ Form::open(array('route' => 'cliente.store')) }}
                <div class="form-group">
                    <label for="nit">Nit</label>
                    <input type="text" class="form-control" id="nit" name="nit" placeholder="ingrese nit ">
                </div>

                 <div class="form-group">
                    <label for="razon_social">Razon Social</label>
                    <input type="text" class="form-control" id="razon_social" name="razon_social" placeholder="ingrese razon_social ">
                </div>

                 <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="ingrese direccion ">
                </div>
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Guardar</button>
           {{ Form::close() }}

        </div>
    </div>
</div>
