<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aurelia Medika | Home</title>
    {{-- TailwindCSS dan Library FLowbite --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')

    <div class="container ">
        @yield('container')
    </div>


</body>
{{-- Javascript --}}
<script src="/js/script.js"></script>
</html>
