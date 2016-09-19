@extends("layout");

@section('principal');
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Lsitado de Categorias</h3>
        </div>
        <div class="panel-body">
          
          <table class=" table table-bordered">
          <thead>
              <tr>
                  <th>descripcion</th>
                 <th>genero</th>
              </tr>
          </thead>

          <tbody>
               @foreach($categorias as $cat)
             <tr>
                 <td>{{$cat->descripcion}}</td>
                  <td>{{$cat->genero}}</td>                      
             </tr>
             @endforeach
          </tbody>

          </table>
          

        </div>
    </div>
</div>
