<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home-Page</title>

     <!-- Styles -->
     @vite('resources/js/app.js')
</head>
<body>
    <h1 class="text-center">HOME PAGE</h1>
    <div class="container">
        <div class="d-flex flex-wrap justify-content-evenly">
            @foreach ($movies as $movie)
            <div class="card my-5" style="width: 18rem;">
                <div class="card-body text-center">
                    <h3 class="card-title">{{$movie['title']}}</h3>
                    <p class="card-text">{{$movie['original_title']}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nationality: {{$movie['nationality']}}</li>
                    <li class="list-group-item">Date: {{$movie['date']}}</li>
                    <li class="list-group-item">Vote: {{$movie['vote']}}</li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
    
</body>
</html>