<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'StuDoc — оформлення робіт за ДСТУ')</title>
    <meta name="description" content="@yield('description', 'Оформлення дипломних, курсових і магістерських робіт за ДСТУ 8302:2015 та вимогами кафедр.')">

    <meta property="og:title" content="@yield('title', 'StuDoc — оформлення робіт за ДСТУ')">
    <meta property="og:description" content="@yield('description', 'Оформлення дипломних, курсових і магістерських робіт за ДСТУ 8302:2015 та вимогами кафедр.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:locale" content="uk_UA">

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=inter:400,500,600,700">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800 font-sans antialiased">
    @yield('content')
</body>
</html>
