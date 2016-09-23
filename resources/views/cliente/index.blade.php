@extends("layout")

@section('principal')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Listado de Clientes</h3>
        </div>
        <div class="panel-body">
          
          <table class=" table table-bordered">
          <thead>
              <tr>
                  <th>Nit</th>
                  <th>Razon Social</th>
                  <th>Direccion</th>
              </tr>
          </thead>

          <tbody>
               @foreach($cliente as $cat)
             <tr>
                 <td>{{$cat->nit}}</td> 
                 <td>{{$cat->razon_social}}</td>
                 <td>{{$cat->direccion}}</td>                        
             </tr>
             @endforeach
          </tbody>

          </table>
          

        </div>
    </div>
</div>