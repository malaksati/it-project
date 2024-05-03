<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Main Template CSS File -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar nav-fixed navbar-expand-lg bg-transparent position-fixed z-3 w-100 border-bottom">
        <div class="container-fluid">
            <button class="navbar-toggler text-light type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><img class="w-50" src="images/logo.png" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 gap-2 mb-lg-0 fs-5">
                <li class="nav-item">
                        <a class="text-light nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="booking.php">Booking</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="text-light nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Pages
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.php">About Us</a></li>
                            <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide  carousel-fade">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="landing carousel-item active">
                <img src="images/slide-3.jpg" class="d-block w-100" alt="...">
                <div class="content carousel-caption d-none d-md-block">
                    <div class="rating animated" data-animation="fadeInDown" style="animation-delay: 100ms;">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h2>A moment of <br> <span>pure prestige</span></h2>
                    <p>Lavish social and business <br> events and unforgettable weddings.</p>
                    <a class="btn btn-outline-light btn-lg p-2 fs-2 w-25" href="booking.html">Book now <span
                            class="d-block fs-6">Best Prices Guaranteed</span></a>
                </div>
            </div>
            <div class="landing carousel-item">
                <img src="images/slide-1.jpg" class="d-block w-100" alt="...">
                <div class="content carousel-caption d-none d-md-block">
                    <div class="rating animated" data-animation="fadeInDown" style="animation-delay: 100ms;">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h2>The privacy and <br> <span>individuality of a custom</span></h2>
                    <p>
                        The Residences have their own dedicated private entrance as well <br>
                        as an anonymous "celebrity" entrance, for ultimate privacy.
                    </p>
                    <a class="btn btn-outline-light btn-lg p-2 fs-2 w-25" href="booking.html">Book now <span
                            class="d-block fs-6">Best Prices Guaranteed</span></a>
                </div>
            </div>
            <div class="landing carousel-item">
                <img src="images/slide-2.jpg" class="d-block w-100" alt="...">
                <div class="content carousel-caption d-none d-md-block">
                    <div class="rating animated" data-animation="fadeInDown" style="animation-delay: 100ms;">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h2 class="pb-5">Fairmont managed!</h2>
                    <p class="pb-5">The elegant Champagne Bar, the stylish Colina Club. <br> Guestrooms and luxurious
                        suites</p>
                    <a class="btn btn-outline-light btn-lg p-2 fs-2 w-25" href="booking.html">Book now <span
                            class="d-block fs-6">Best Prices Guaranteed</span></a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="home">
        <div class="container my-5">
            <h2 class="section-header"><span>ROOMS</span> ACCOMMODATION</h2>
            <p>Designed as a privileged almost private place where you'll feel right at home</p>
            <div class="cards d-flex justify-contents-center gap-5">
                <div class="card">
                    <img src="images/room-2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Single</h5>
                        <p class="card-text">Single bed with rest room <br><br></p>
                        <div class="details d-flex justify-content-between ">
                            <a href="booking.html" class="btn btn-primary h-fit-content">Book Now!</a>
                            <p><span>$ 98,00</span><br>per night</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="images/room-1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Double</h5>
                        <p class="card-text">Two beds with big rest room <br><br></p>
                        <div class="details d-flex justify-content-between">
                            <a href="booking.html" class="btn btn-primary h-fit-content">Book Now!</a>
                            <p><span>$ 169,00</span><br>per night</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="images/room-4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Sweet</h5>
                        <p class="card-text">Two rooms total of three beds (single bed with double beds) with two
                            bathroom</p>
                        <div class="details d-flex justify-content-between">
                            <a href="booking.html" class="btn btn-primary h-fit-content">Book Now!</a>
                            <p><span>$ 229,00</span><br>per night</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="services">
        <div class="container my-5">
            <h2 class="section-header"><span>FACILITIES</span></h2>
            <p>With the best luxury spa, salon and fitness experiences</p>
        </div>
        <div class="images d-flex">
            <div class="box position-relative w-25 overflow-hidden">
                <img src="images/services-1.jpg" alt="photo">
                <p
                    class="fs-4 d-flex justify-content-center align-items-center top-center text-light w-100 position-absolute z-3">
                    Spa center</p>
            </div>
            <div class="box position-relative w-25 overflow-hidden">
                <img src="images/services-2.jpg" alt="photo">
                <p
                    class="fs-4 d-flex justify-content-center align-items-center top-center text-light w-100 position-absolute z-3">
                    Gym</p>
            </div>
            <div class="box position-relative w-25 overflow-hidden">
                <img class="" src="images/services-3.jpg" alt="photo">
                <p
                    class="fs-4 d-flex justify-content-center align-items-center top-center text-light w-100 position-absolute z-3">
                    Fitness</p>
            </div>
            <div class="box position-relative w-25 overflow-hidden">
                <img src="images/services-4.jpg" alt="photo">
                <p
                    class="fs-4 d-flex justify-content-center align-items-center top-center text-light w-100 position-absolute z-3">
                    Beauty Center</p>
            </div>
        </div>
    </section>
<?php require_once('inc/footer.php') ?>