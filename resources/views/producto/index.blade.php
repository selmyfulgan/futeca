@extends("layout");

@section('principal');


    <div class="panel panel-primary col-md-8 col-lg-offset-2">
        <div class="panel-heading">
            <h3 class="panel-title">Stock de Productos</h3>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-condensed table-striped">
                <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        Nombre Producto
                    </th>
                    <th>
                        Descripciòn
                    </th>
                    <th>
                        Precio
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
                #dd($listado);
                $cont= 1;
                ?>

                @foreach($listado as $id => $producto)
                    <tr>
                        <td>{{$cont++}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>Q. {{$producto->precio}}</td>
                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>

    </div>







    {{$listado->render()}}