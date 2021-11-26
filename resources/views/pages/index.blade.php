<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/lineicons.css')}}">
    <style>
        .square{
            border-color: black;
            border-style: solid;
        }
    </style>
    @livewireStyles
    <title>Jogo da Velha</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Bootstrap
          </a>
        </div>
      </nav>
    <div class="container pt-50">
        <livewire:main />
    </div>

    <script defer src="{{ asset('js/bootstrap.min.js')}} "></script>
    @livewireScripts
</body>
</html>
