<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <div class="container">
            <h1>best e-commerce ever</h1>
        </div>
    </header>
    
    <main class="bg-light">
        <div class="container">
            <h2>Products by categories</h4>
            <a href="{{route('products.index')}}" type="button" class="btn btn-primary">Show all products</a>
            @foreach ($categories as $category)
                <h2>{{$category->name}}</h2>
                <ul>
                    @foreach ($category ->products as $product)
                        <a href="">
                            <li>
                                [{{ $product->code }}] {{ $product->name }} - TYPOLOGY: {{ $product->typology ->name }} - DIGITAL: {{ $product->typology->digital ? "YES" : "NO" }}
                            </li>
                        </a>
                    @endforeach
                </ul>
            @endforeach
            

        </div>
    </main>

</body>

</html>
