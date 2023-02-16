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
            <h2>Add new product</h4>
            <a href="{{route('index')}}" type="button" class="btn btn-primary">Go back</a>
            <form class="d-flex" action="{{route('products.store')}}" method="POST">
                @csrf
                <div class="col">
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" class="form-control" placeholder="" aria-describedby="helpId"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Price</label>
                        <input type="number" name="price" id="" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Weight (g)</label>
                        <input type="number" name="weight" id="" class="form-control" placeholder="" aria-describedby="helpId" min="0" max="250" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Typology</label>
                        <select class="form-select form-select-lg" name="typology_id" id="" required>
                            @foreach ($typologies as $typology)
                                <option value="{{$typology->id}}">{{$typology->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="">Categories</label>
                        <div class="form-check">
                            @foreach ($categories as $category)
                            <div class="mb-3">
                                <input class="form-check-input" type="checkbox" value="{{$category->id}}" id="" name="categories[]">
                                <label class="form-check-label" for="">{{$category->name}}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

</body>

</html>
