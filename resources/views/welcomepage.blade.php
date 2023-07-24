<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bismillah UAS</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container text-center my-5">
        <h1 class="mb-4">Bimillah Paringi Lancar!</h1>
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/doalancar.PNG') }}" alt="image">
        <div class="col-md-2 offset-md-5 mt-4">
            <div class="d-grid gap-2">
                <a href="{{route('home')}}" class="btn btn-dark" href="">Start</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>

