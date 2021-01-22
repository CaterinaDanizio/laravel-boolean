<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>

    <!-- SENZA controller:
    - /helloAll: saluta tutti gli utenti in inglese (statico, no variabili)
    - /helloYou: saluta utente per nome (variabile) in inglese
    - /helloYou2: saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in inglese
    CON controller:
    - /holaTodo: saluta tutti gli utenti in spagnolo
    - /holaTu: saluta utente per nome (variabile) in spagnolo
    - /holaTu2: saluta utente per nome (stessa varbile, stessa view, ma nome diverso) in spagnolo -->
    
    <div class="container">
        <h1>Hello to {{ $name }}</h1>
    
    
    
    
    
    </div>