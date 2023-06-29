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

{{-- seconda navbar con solo categorie --}}
  <nav class="py-2 template-navbar">
    <div class="container d-flex">
      <ul class="nav justify-content-evenly">
        @foreach ($categories as $category)
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 text-white" aria-current="page">{{$category->name}} |</a></li>
        @endforeach
      </ul>
    </div>
    </div>
  </nav>

        {{$slot}}

    <x-footer/>

    @livewireScripts
</body>
</html>