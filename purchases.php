<?php 
    session_start();
    if(!isset($_SESSION['UserId'])){
        header('location:login_form.php');
     }
     
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
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
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php#header">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#portfolio">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php#contact">Contact</a>
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
    <div id="cart-body">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12">
                    <div class="card card-registration cart-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-4 bg-grey">

                                </div>

                                <div class="col-lg-8">
                                    <div class="p-5 cart-items">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">My Purchase</h1>
                                        </div>
                                        <div id="purchase-history">
                                        </div>

                                        <div id="cartempty" class="text-center">

                                        </div>
                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="products.html" class="text-body"><i
                                                        class="fa fa-long-arrow-alt-left me-2"></i>Back to shop</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script type="text/javascript" src="./assets/js/owl.carousel.js"></script>
    <script type="text/javascript" src="./assets/js/nivo-lightbox.js"></script>
    <script type="text/javascript" src="./assets/js/jquery.isotope.js"></script>
    <script type="text/javascript" src="./assets/js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="./assets/js/contact_me.js"></script>
    <script type="text/javascript" src="./assets/js/data.js"></script>
    <script type="text/javascript" src="./assets/js/history.js"></script>
    <script type="text/javascript" src="./assets/js/main.js"></script>
</body>

</html>