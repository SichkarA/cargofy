<!DOCTYPE html>
<html lang="en">
<head>
    <title>Біржа вантажів</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="{{ asset('./js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <h1>Біржа вантажів</h1>
</div>
<i id="app"></i>
<div class="container">
<p> Всього: {{$total}}  вантажів</p>
<table class="table" >
@foreach($stdClass as $route)
<div>
    <tr>
        <td>{{ $route->date }}</td>
        <td>{{ $route->from }} - {{ $route->to }}</td>
        <td>{{ $route->name }}</td>
        <td>{{ $route->weight }} т </td>
    </tr>
</div>
@endforeach

</table>
</div>
</body>
</html>
