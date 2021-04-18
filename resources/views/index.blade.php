<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog post</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <!-- load css bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="/assets/css/custom.css">
          
        
    </head>
    <body class="homepage">
        <section>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="{{ url('/') }}">Indosoft</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search Blog Post" aria-label="Search">
                            <button class="btn  my-2 my-sm-0" type="submit">Search</button>
                        </form>
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ url('/create') }}">Create Blog <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Seach by Category
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </nav>
                
            </div>
        </section>
        <section>
            <div class="container">
                <div class="box-blog">
                    <div class="row">
                        <div class="col-md-3 img-content">
                            <img src="/assets/img/dummy-img.jpg" alt="">                            
                        </div>
                        <div class="col-md-6 text-content">
                            <h1>Title  </h1>
                            <p><span>12-3-2001</span> | <span>category</span></p>
                            <p class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos sed consequatur modi libero odio nihil illo ratione, quas, atque molestiae saepe recusandae, iusto sequi id beatae minus debitis facere nisi!</p>
                            
                        </div>
                        
                    </div>
                </div>
                <div class="box-blog">
                    <div class="row">
                        <div class="col-md-3 img-content">
                            <img src="/assets/img/dummy-img.jpg" alt="">                            
                        </div>
                        <div class="col-md-6 text-content">
                            <h1>Title  </h1>
                            <p><span>12-3-2001</span> | <span>category</span></p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos sed consequatur modi libero odio nihil illo ratione, quas, atque molestiae saepe recusandae, iusto sequi id beatae minus debitis facere nisi!</p>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center mt-5">
                        <button type="submit" class="btn btn-primary mb-2 btnLoadmore">Load more</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
        <script src="/assets/js/custom.js"></script>
    </body>
</html>
