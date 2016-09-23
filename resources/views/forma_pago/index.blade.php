@extends("layout")

@section('principal')
<div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Lsitado de Forma de Pago</h3>
        </div>
        <div class="panel-body">
          
          <table class=" table table-bordered">
          <thead>
              <tr>
                  <th>descripcion</th>
              </tr>
          </thead>

          <tbody>
               @foreach($forma_pago as $cat)
             <tr>
                 <td>{{$cat->descripcion}}</td>                     
             </tr>
             @endforeach
          </tbody>

          </table>
          

        </div>
    </div>
</div>
