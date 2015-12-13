<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>SalesApp</title>
        {!! Html::style('css/app.css') !!}

        {!! Html::script('js/jquery.min.js') !!}
        {!! Html::script('js/bootstrap.min.js') !!}

    </head>
    <body>
        <div class="container">

            @yield('content')

        </div>
    </body>

    @yield('footer')


</html>