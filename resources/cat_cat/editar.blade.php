@extends("layout")

@section("principal")
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form action="{{route('catalogo.show',$catalogo->id)}}" method="post">
                <input name="_method" type="hidden" value="PUT">
                <div class="form-group">
                    <label for="exampleInputEmail1">Numerito</label>
                    <input type="email" value="{{$elemento->id_cat}}" class="form-control" id="id_cat" name="id_cat" placeholder="Identificador único">
                </div>
                <div class="form-group">
                    <label for="descripcion">Cat&aacute;logo</label>
                    <input type="password" value="{{$elemento->descripcion}}" class="form-control" id="descripcion" name="descripcion" placeholder="para que sirve?">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

@endsection