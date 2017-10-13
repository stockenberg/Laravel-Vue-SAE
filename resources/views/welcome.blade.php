<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <h1>SAE Alumni Convention</h1>
        <p>Todo List with Laravel and Vue.js by Marten Stockenberg</p>
    </div>
</div>
<div class="container">

    <div id="app">
        <task-input></task-input>
        <task-list></task-list>
    </div>
</div>
</body>

<script src="{{asset('js/app.js')}}"></script>
</html>
