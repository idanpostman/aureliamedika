<!DOCTYPE html>
<html lang="en" class = "scroll-smooth" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aurelia Medika</title>

    {{-- TailwindCSS dan Library FLowbite --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Fonts Google - Poppins --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

   <!-- icon -->
   <link rel="icon" href="/img/logo-icon.png" >
</head>
<body>
    @include('partials.navbar')

    <div class="mt-4">
        @yield('container')
    </div>

    @include('partials.footer')



</body>

{{-- Library PureCounter --}}
<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>

{{-- Javascript --}}
<script src="/js/script.js"></script>
</html>
