<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - {{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ url('css/app.css') }}">

</head>
<body class="bg-blue-50">
    <div class="conteiner mx-auto py-8">
        @yield('content')
    </div>

</body>
</html>
