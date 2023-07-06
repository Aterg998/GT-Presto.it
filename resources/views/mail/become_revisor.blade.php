<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://fonts.cdnfonts.com/css/chelsey" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto.it</title>
</head>

<body style="background-color:rgba(147, 169, 150, 0.5);">
    <div class="">
        <div class="container-fluid position-relative" style="height:100px;">
            <img class="img-fluid"
                src="{{asset('storage/img/marmotta-mail.jpeg')}}">
            
                <a class="accenti presto position-absolute top-100 start-50 translate-middle-y" style="font-size:90px" href="{{ Route('homepage') }}">Presto.it</a>
        </div>
        <br>
        <br>
        <div class="m-5">
            <h1 style="color:#D2360F;">Un utente ha richiesto di lavorare con noi</h1>
            <h2 class="text-black">Ecco i suoi dati</h2>
            <p class="text-black">Nome: {{ $user->first_name }}</p>
            <p class="text-black">Cognome: {{ $user->last_name }}</p>
            <p class="text-black">Email: {{ $user->email }}</p>
            <p class="text-black">Se vuoi renderlo una marmotta revisore clicca qui:</p>
            <a class="text-decoration-underline" style="color:#006243"
                href="{{ route('make.revisor', compact('user')) }}">Rendi revisore</a>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
</script>

</html>
