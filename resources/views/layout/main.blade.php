<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- Shortcun Icon --}}
    <link rel="shortcut icon" href="https://indykoning.nl/wp-content/uploads/2020/03/Livewire.png">
    @livewireStyles 
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script> 
    @livewireScripts
</head>
<body class="bg-gray-100" style="background-image: url(images/unknown.png); background-repeat: no-repeat; background-size:cover;">
    @yield('content')
</body>
</html>