<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <title>Laravel - Components VUEjs</title>
    </head>
    <body>
        
        <div class="container">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2"> 
                    <div id="app">
                        <idea></idea>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
