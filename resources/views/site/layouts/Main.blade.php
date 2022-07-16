<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JALS-EVENT</title>
    @include('site.require.css')
</head>
<body>
    @include('site.require.header')

    @yield('content')

    @include('site.require.footer')

    @include('site.require.js')
</body>
</html>