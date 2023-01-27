<?php
    @include 'phpfiles/config.php';
    

    if(isset($_POST['submit'])){
    session_start();
    $email = mysqli_real_escape_string($conn, $_POST['formUsername']);
    $pass = md5($_POST['formPassword']);

        

    $select = " SELECT * FROM tb_users WHERE Email = '$email' && Pass = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);           
            $_SESSION['UserId'] = $row['User_id'];
            header('location:index.php');
        
        
    }else{
        $error[] = 'incorrect email or password!';
    }

    };

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
    <div id="login" style="background: url(./assets/img/bg-2.jpg);">
        <section class="">
            <div class="px-4 py-5 px-md-5 text-center text-lg-start">
                <div class="container">
                    <div class="row gx-lg-5 align-items-center">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <h1 class="my-5 display-3 fw-bold ls-tight">
                                The best offer<br />
                                <span class="text-success">for your hobby</span>
                            </h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.
                                Eveniet, itaque accusantium odio, soluta, corrupti aliquam
                                quibusdam tempora at cupiditate quis eum maiores libero
                                veritatis? Dicta facilis sint aliquid ipsum atque?</p>
                        </div>

                        <div class="col-lg-6 mb-5 mb-lg-0">
                            <div class="card">
                                <div class="card-body py-5 px-md-5">
                                    <form action="" method="post" class="login">
                                    <?php
                                            if(isset($error))
                                            {
                                                foreach($error as $error)
                                                {
                                                echo '<span class="error-msg">'.$error.'</span>';
                                                };
                                            };
                                    ?>
                                        <div class="row">
                                            <div class="col-md-12 mb-1 d-flex justify-content-center">
                                                <h2>Welcome to RMM</h2>
                                            </div>
                                            <div class="col-md-12 mb-4 d-flex justify-content-center">
                                                <p>All things grow with love</p>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="email" name="formUsername" id="formUsername" class="form-control" />
                                                <label class="form=label" for="formUsername">Username</label>
                                            </div>

                                            <div class="form-outline mb-4">
                                                <input type="password" name="formPassword" id="formPassword" class="form-control" />
                                                <label class="form=label" for="formPassword">Password</label>
                                            </div>

                                            <div class="form-check d-flex justify-content-center mb-4">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="formRememberPassword" checked />
                                                <label class="form-check-label" for="formRememberPassword">Remember
                                                    Password
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <input type="submit" name="submit"
                                                class="col-md-12 mb-4 btn btn-success btn-block mb-4" value ="Login">
                                            <div class="col-md-12 mb-4 form-check d-flex justify-content-center mb-4">
                                                <label class="form-check-label" for="formNewsletter">
                                                    <a href="register.php" class="text-success"> Sign up for RMM</a>
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                <p>© 2016 Landscaper. Designed by <a href="#">TemplateWire</a></p>
            </div>
        </div>
    </div>
    
</body>
  
</html>