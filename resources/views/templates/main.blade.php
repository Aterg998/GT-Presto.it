<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.cdnfonts.com/css/chelsey" rel="stylesheet">

    <title>Presto.it</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    @livewireStyles

</head>
<body class= "template">
    <x-navbar/>
    
        {{$slot}}

    <x-footer/>

    @livewireScripts
</body>
</html>