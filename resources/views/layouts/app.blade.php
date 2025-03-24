<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div>
        <a href="{{route('dashboard')}}"></a>
        <li><a href="{{route('customers')}}">clients</a></li>
        <li><a href="{{route('suppliers')}}">suppliers</a></li>
        <li><a href="{{route('products')}}">products</a></li>
    </div>
    <main>
        <div>
            @yield('content')
        </div>
    </main>
</body>
</html>