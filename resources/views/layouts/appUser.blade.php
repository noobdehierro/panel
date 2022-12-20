<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet"> --}}

    <!-- Styles -->

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>


    <body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">


        {{ $slot }}


        @stack('bottom_scripts')


    </body>

</html>


</body>

</html>
