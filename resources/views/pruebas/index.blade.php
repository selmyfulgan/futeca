@extends("layout")

@section("principal")
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Formulario con ckeditor</div>

                    <div class="panel-body">
                        <form>
                            <textarea  name="editor1" id="editor1" rows="10" cols="80">
                                Este es el textarea que es modificado por la clase ckeditor
                            </textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


