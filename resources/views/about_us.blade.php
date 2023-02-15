<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
    </head>
    <body>
        <h1>Seconda pagina</h1>
        <p>
        <h2>Nome : {{$data['name']}}</h2>
        <h2>Cognome : {{$data['surname']}}</h2>
        <h2>Livello : {{$level}}</h2>


        </p>
    </body>
</html>