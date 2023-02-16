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
            <h2>Prodotti</h4>
            <a href="{{route('index')}}" type="button" class="btn btn-primary">Go back</a>

            <ul>
                @foreach ($products as $product)
                    <a href="">
                        <li>
                            [{{ $product->code }}] {{ $product->name }} - TYPOLOGY: {{ $product->typology ->name }} - DIGITAL: {{ $product->typology->digital ? "YES" : "NO" }} - CATEGORIES: 
                            @foreach ($product->categories as $category)
                                - {{$category->name}}
                            @endforeach
                        </li>
                    </a>
                @endforeach
            </ul>
            

        </div>
    </main>

</body>

</html>
