<?php 
    session_start();
    if(!isset($_SESSION['UserId'])){
        header('location:login_form.php');
     }
     
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="./assets/fonts/font-awesome/css/font-awesome.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="./assets/css/other/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="./assets/css/other/owl.theme.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="./assets/css/other/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/other/nivo-lightbox/default.css">
    <link rel="stylesheet" href="./assets/normalize/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <div id="navigation" style="background: #333;" class="fixed-top">
        <div class="container">
            <nav id="menu" class="navbar navbar-expand-sm navbar-light">
                <a class="navbar-brand" href="#">RMM</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div data-bs-spy="scroll" data-bs-target="#navigation" data-bs-offset="0"
                    class="collapse navbar-collapse scrollspy-example" id="navbar-collapse" tabindex="0">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#header">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="purchases.php">My Purchases</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cart.php">Cart</a>
                            <div id="cart-amount" class="cart-amount">0</div>
                        </li>
                    </ul>
                </div>
                <a class="nav-link" href="Session.php">Logout</a>
            </nav>
        </div>
    </div>
    <header id="header">
        <div class="intro" style="
        background-image: url(./assets/img/bg-1.jpg);">
            <div class="overlay">
                <div class="container">
                    <div class="row justify-content-center text-md-center">
                        <div class="intro-text">
                            <h1>RMM Garden Services</h1>

                            <p>
                                We will make sure to bring beauty and life to your property.
                                <br>
                                Shop now and enjoy quality-ensured products at your fingertips.
                                <br>
                                Help us bring beauty to our planet and change to our surroundings.
                            </p>

                            <a href="#about" class="btn btn-custom btn-lg page-scroll">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="about-text">
                        <h2>Welcome to <span>RMM Garden Services</span></h2>
                        <hr>
                        <p>
                            Hello everyone! Welcome to RMM Garden, we have some services here that I am sure you will
                            like. Like plants, truck rental and delivery of your orders to your locations. Here at RMM
                            garden we have a huge variety of outdoor plants that you can display in front of your house
                            or display on your wall. And we also make sure that our plants here are beautiful and well
                            cared for.
                        </p>
                        <p>
                            Apart from selling plants, Customers can also rent a truck from us. Which they can use for
                            delivering their orders or anything else. Our rental truck is always available or open for
                            our customers who want to rent our trucks. And for customers who are afraid that they don't
                            have a driver who can drive the truck they are renting, don't worry we have many reputable
                            drivers who can drive for you. Here at RMM Garden, our customers are our priority because
                            without them, there is no RMM Garden that will provide a smooth and affordable service that
                            you are sure to like.
                        </p>
                        <a href="#services" class="btn btn-custom btn-lg page-scroll">
                            VIEW ALL SERVICES
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="about-media">
                        <img src="./assets/img/about-1.jpg" alt="Garden">
                    </div>
                    <div class="about-desc">
                        <h3>Rental Trucks</h3>
                        <p>We have rental trucks that customers or clients might like to rent, if they need a truck that
                            they can use to deliver some orders or plants to another location.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="about-media">
                        <img src="./assets/img/about-2.jpg" alt="Garden">
                    </div>
                    <div class="about-desc">
                        <h3>Selling</h3>
                        <p>We're selling some outdoor plants might some customers/clients like and it is affordable.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 section-title text-center">
                <h2>Our Service</h2>
                <hr>
                <p>
                    Welcome to RMM Garden we have some services that you may like such as.
                </p>
            </div>
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="service-media">
                        <img src="assets/img/services/service-1.jpg" alt="">
                    </div>
                    <div class="service-desc">
                        <h3>Rental trucks</h3>
                        <p>We have rental trucks that customers or clients might like to rent, if they need a truck that
                            they can use to deliver some orders or plants to another location.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service-media">
                        <img src="assets/img/services/service-2.jpg" alt="">
                    </div>
                    <div class="service-desc">
                        <h3>Selling</h3>
                        <p>We're selling some outdoor plants might some customers/clients like and it is affordable.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="service-media">
                        <img src="assets/img/services/service-3.jpg" alt="">
                    </div>
                    <div class="service-desc">
                        <h3>Delivery</h3>
                        <p>To other customers/clients from distant places we offer delivery and it also has delivery
                            fees but it depends on how far the place/location is. where the customer/client wants to
                            ship their orders.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="portfolio" class="py-5 bg-light">
        <div class="container">
            <div class="section_title text-center">
                <h2>Gallery</h2>
                <hr>
                <p>Welcome to gallery! Here are the products that we currently selling.</p>
            </div>
            <div class="row row-cols-1 row-cols-sm-3 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./assets/img/products/Battle Grass dilaw.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Battle Grass Dilaw
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./assets/img/products/Battle Grass Pula.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Battle Grass Pula
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./assets/img/products/Georginia Pula.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Georginia Pula
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./assets/img/products/Georginia Puti.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Georginia Puti
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./assets/img/products/Lukaria.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Lukaria
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./assets/img/products/Macky.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Macky
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./assets/img/products/Picara.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Picara
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./assets/img/products/Santan Rose.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text text-center">
                                Santan Rose
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="./assets/img/products/White Angel.jpg" alt="">
                        <div class="card-body">
                            <p class="card-text text-center">
                                White Angel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="testimonials">
        <div class="overlay py-5 text-center">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Testimonials</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="testimonial" class="owl-carousel owl-theme">
                            <div class="item">
                                <p>No Testimonials yet</p>
                                <p>- Jerome Vrixen DC Mendoza</p>
                            </div>
                            <div class="item">
                                <p>No Testimonials yet</p>
                                <p>- Jerome Vrixen DC Mendoza</p>
                            </div>
                            <div class="item">
                                <p>No Testimonials yet</p>
                                <p>- Jerome Vrixen DC Mendoza</p>
                            </div>
                            <div class="item">
                                <p>No Testimonials yet</p>
                                <p>- Jerome Vrixen DC Mendoza</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="text-center">
        <div class="container">
            <div class="section_title text-center">
                <h2>Contact Us</h2>
                <hr>
                <p>If you'd like to know about our business, here our some information where you can ask and feel free
                    to message us. </p>
            </div>
            <div class="col-md-10 contact-info">
                <div class="row">
                    <div class="col-md-4">
                        <h3>Address</h3>
                        <hr>
                        <div class="contact-item">
                            <p>RMM garden
                                Ilang-ilang st. Violeta village, Sta. Cruz , Guiguinto, Bulacan</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Working Hours</h3>
                        <hr>
                        <div class="contact-item">
                            <p>5am - 7pm</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h3>Contact Info</h3>
                        <hr>
                        <div class="contact-item">
                            <p>Piangco35@gmail.com</p>
                            <p>+639754335024</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <h3>Leave us a Message</h3>
                <form name="sendMessage" id="contactForm" onsubmit="sendEmail(); reset(); return false;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" class="form-control" placeholder="Name"
                                    required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="email" class="form-control" placeholder=" Email"
                                    required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" id="subject" class="form-control" placeholder=" Subject"
                                    required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="Message" id="message" class="form-control" rows="4" placeholder="Message"
                            required></textarea>
                        <p class="help-block text-danger"></p>
                        <div id="success"></div>
                        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <div id="footer">
        <div class="container text-center">
            <div>
                <div class="social">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="./assets/js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="./assets/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="./assets/js/owl.carousel.js"></script>
    <script type="text/javascript" src="./assets/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="./assets/js/main.js"></script>
    <script type="text/javascript" src="./assets/js/data.js"></script>
    <script type="text/javascript" src="./assets/js/cartamount.js"></script>
    <script type="text/javascript" src="./assets/js/sendMessage.js"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
</body>

</html>