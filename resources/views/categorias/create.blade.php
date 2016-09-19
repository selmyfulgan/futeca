@extends("layout");

@section('principal');
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Ingreso de datos categorias</h3>
        </div>
        <div class="panel-body">
           {{ Form::open(array('route' => 'categorias.store')) }}
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="ingrese nombres ">
                </div>
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <input type="text" class="form-control" id="genero" name="genero" placeholder="ingrese genero">
                </div>
            
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Guardar</button>
           {{ Form::close() }}

        </div>
    </div>
</div>
