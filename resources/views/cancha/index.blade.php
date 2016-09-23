@extends("layout");

@section('principal');
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Listado de Canchas</h3>
        </div>
        <div class="panel-body">
          
          <table class=" table table-bordered">
          <thead>
              <tr>
                  <th>Descripcion</th>
                
              </tr>
          </thead>

          <tbody>
               @foreach($cancha as $cat)
             <tr>
                 <td>{{$cat->Descripcion}}</td>
                                     
             </tr>
             @endforeach
          </tbody>

          </table>
          

        </div>
    </div>
</div>
