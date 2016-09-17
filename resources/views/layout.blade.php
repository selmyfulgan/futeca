<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel mvc</title>

    <!-- Bootstrap -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
    <style type="text/css">
        body { margin-top:50px}
    </style>

</head>
<body>
<div class="container">
    @yield('principal')
</div>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset("js/jquery-2.1.3.min.js")}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset("js/bootstrap.min.js")}}"></script>
</body>
</html>