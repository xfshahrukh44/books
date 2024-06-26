<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('layouts.front.css')
    @yield('css')


    <title>Shadows</title>
</head>

<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.about')}}">About Me</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.books')}}">
                                        My Books
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.reviews')}}" tabindex="-1" aria-disabled="true">Reader's
                                        Reviews</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('front.contact')}}" tabindex="-1"
                                       aria-disabled="true">Contact </a>
                                </li>
                            </ul>
                            <!-- <form class="d-flex">
                                      <a href="#" class="btn btn-yellow trans-btn" type="submit">My books</a>
                                 </form> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>