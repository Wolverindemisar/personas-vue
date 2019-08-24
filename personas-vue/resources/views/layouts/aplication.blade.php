<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500,700,400italic|Material+Icons">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1"/>
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    <script src="{{'js/app.js'}}"></script>
</body>
</html>