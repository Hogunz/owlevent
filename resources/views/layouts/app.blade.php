<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OwlEvent') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body class="flex font-sans antialiased text-black/75 bg-white/50" style=" font-family: 'Quicksand', sans-serif;">
    @include('layouts.side-nav')

    <div class="flex min-h-screen w-full flex-col overflow-y-hidden">

        @include('layouts.navigation')

        <div class="flex w-full flex-col overflow-x-hidden border-t">
            <main class="min-h-full w-full p-6">
                <header>
                    {{ $header }}
                </header>

                {{ $slot }}

            </main>

          
        </div>

    </div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
    integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
<!-- ChartJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
    integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>

@stack('script')


</html>
