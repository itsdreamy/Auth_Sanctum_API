<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ARCTIX</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top: 11rem">
                    <div class="copy">
                        <div class="text-label">
                            Don't know where to start selling Your tickets?
                        </div>
                        <div class="text-hero-bold">
                            Arctix is a web for You ! 
                        </div>
                        <div class="text-hero-regular">
                            You can sell Your event tickets, You can also buy any tickets from a lot of creators !
                        </div>
                        <div class="cta">
                            <a href="" class="btn btn-warning shadow-none">Make Event</a>
                            <a href="" class="btn btn-secondary shadow-none ms-3">See Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/Teenager Teens Vector Hd Images, Teenager Team Celebration People Teen, Team, Creative, Work PNG Image For Free Download.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
</body>
</html>