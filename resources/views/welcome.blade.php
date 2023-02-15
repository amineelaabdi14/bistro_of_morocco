<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Ma7labaty</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
<body class="antialiased">
        <!-- Navbar -->
<nav class="navbar navbar-expand-lg " data-bs-theme="dark" style="background-color: #1a1a1a">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Ma7labaty</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">  
            <a class="btn btn-secondary me-2" href="{{ route('login') }}">Login</a>
            <a class="btn btn-secondary" href="{{ route('register') }}">Signup</a>
        </div>
    </div>
</nav>

<!-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"> -->
  <!-- <div class="carousel-inner" style="border: solid blue;">
    <div class="carousel-item active" style="width:100px; margin:auto;border:solid red;">
      <h2>google</h2>
    </div>
    <div class="carousel-item " style="width:100px;">
      <h2>google1</h2>
    </div>
    <div class="carousel-item " style="width:100px;">
      <h2>google2</h2>
    </div>
  </div>
  <a class="carousel-control-prev text-dark" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next text-dark" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
 <!-- Carousel -->
 <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel"style="margin-top:300px;" >
    
    <div class="carousel-inner">
        @foreach ($dishes as $dish)
            <div class="carousel-item myItems">
                <h2 class="text-center">{{$dish['dish_name']}}</h2>
                <p class="text-center">{{$dish['description']}}</p>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
    


</body>
<script>
    document.getElementsByClassName('myItems')[0].classList.add("active");
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
