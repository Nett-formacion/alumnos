<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(["resources/css/app.css"])
</head>
<body>
<x-header />

<x-nav>
{{--    Nuevos botones ????--}}
    @isset($slot_nav)
        {{$slot_nav}}
    @endisset
</x-nav>

<x-main>
    {{$slot_main}}
</x-main>
<x-footer />



</body>
</html>
