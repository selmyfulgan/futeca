@extends("layout")

@section("principal")
    <h1>hola</h1>
    <p>soy la prueba de template</p>

    @if(isset($var))
        la variable var tiene un valor de {{ $var }}
    @else
        no hay variable
    @endif
    <br>
    <br>

    @include("saludo")
@endsection


