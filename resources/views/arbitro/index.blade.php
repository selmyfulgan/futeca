@extends("layout")

@section('principal')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Listado de Arbitro</h3>
        </div>
        <div class="panel-body">
          
          <table class=" table table-bordered">
          <thead>
              <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Estado</th>
              </tr>
          </thead>

          <tbody>
               @foreach($arbitro as $cat)
             <tr>
                 <td>{{$cat->nombre}}</td> 
                 <td>{{$cat->apellido}}</td>
                 <td>{{$cat->estado}}</td>                        
             </tr>
             @endforeach
          </tbody>

          </table>
          

        </div>
    </div>
</div>
