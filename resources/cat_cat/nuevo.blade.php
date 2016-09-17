@extends("layout")

@section("principal")
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form action="{{catalogo.store}}" method="post" >
                <div class="form-group">
                    <label for="exampleInputEmail1">Numerito</label>
                    <input type="email" class="form-control" id="id_cat" name="id_cat" placeholder="Identificador único">
                </div>
                <div class="form-group">
                    <label for="descripcion">Cat&aacute;logo</label>
                    <input type="password" class="form-control" id="descripcion" name="descripcion" placeholder="para que sirve?">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>

@endsection