<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suma</title>
</head>
<body>
    @extends('layouts.app') @section('content')
    <h2>Sumar dos números</h2>
    <form action="/suma" method="POST">
        @csrf
        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1" required>
        <br>
        <label for="num2">Número 2</label>
        <input type="number" name="num2" id="num2" required>
        <br>
        <button type="submit">Sumar</button>
    </form>
    <br>
    @if (isset($res))
        <h3>Resultado de la suma: {{ $res }}</h3>
    @endif
</body>
</html>