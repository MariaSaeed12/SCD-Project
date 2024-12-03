<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('frontend/css/design.css') }}"/>

    <title>LittleHeartsHealth</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: purple">
        <a class="navbar-brand" href="#"> <b>LittleHeartsHealth</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <form class="form-inline my-2 my-lg-0 ml-auto" role="search">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn my-2 my-sm-0" type="submit" style="color: white">Search</button>
        </form>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}"><b>Home</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}"><b>About Us</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact') }}"><b>Contact Us</b></a>
            </li>
          </ul>
        </div>
    </nav>
</body>
