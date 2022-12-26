<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/logo.jpg')}}" type="image/x-icon">
    {{-- <link rel="stylesheet" href="{{asset('build/assets/app-dd38eae9.css')}}">
    <script script src="{{asset('build/assets/app-b0a4c440.js')}}"></script> --}}
    <script src="{{asset('js/flowbite.js')}}"></script>
    @vite('resources/css/app.css','resources/js/app.js')
    @stack('styles')
</head>

<body class="antialiased">
    <div class="container mx-auto">
        @include('layouts.navigation')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
    @stack('scripts')
</body>

</html>
