<!DOCTYPE html>
<html lang="de">
<head>
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-theme.min.css') }}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            @yield('content')
        </div>
    </div>
    {{ HTML::script('js/bootstrap.min.js') }}

    @section('js')
    @show

</body>
</html>
