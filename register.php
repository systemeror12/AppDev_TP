<?php
@include 'phpfiles/Config.php';

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['formRegFirstname']);
    $lname = mysqli_real_escape_string($conn, $_POST['formRegLastname']);
    $email = mysqli_real_escape_string($conn, $_POST['formRegEmail']);
    $pass = md5($_POST['formRegPassword']);
    $contact = mysqli_real_escape_string($conn, $_POST['formRegContactNumber']);
    $Gender = mysqli_real_escape_string($conn, $_POST['flexRadioDefault']);
    $Month = mysqli_real_escape_string($conn, $_POST['Month']);
    $Day = mysqli_real_escape_string($conn, $_POST['Day']);
    $Year = mysqli_real_escape_string($conn, $_POST['Year']);

    $BDate = $Month . " " . $Day . ", " . $Year;

    $select = " SELECT * FROM tb_users WHERE Email = '$email' && Pass = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $error[] = 'user already exist!';
    } else {

        $insert = "INSERT INTO tb_users(FName, LName, Email, Pass, Contact, Gender, BDate )
               VALUES('$fname', '$lname', '$email', '$pass', '$contact', '$Gender', '$BDate')";

        mysqli_query($conn, $insert);
        header('location:Login.php');
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="./assets/css/other/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="./assets/css/other/owl.theme.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="./assets/css/other/nivo-lightbox/nivo-lightbox.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/other/nivo-lightbox/default.css">
    <link rel="stylesheet" href="./assets/normalize/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>

<body>
    <div id="register" style="background: url(./assets/img/bg-2.jpg);">
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
                                    <form action="" method="post" class="form">
                                        <?php
                                        if (isset($error)) {
                                            foreach ($error as $error) {
                                                echo '<span class="error-msg">' . $error . '</span>';
                                            };
                                        };

                                        ?>

                                        <div class="row">
                                            <div class="d-flex justify-content-center col-md-12 mb-4">
                                                <h2>Create a new account</h2>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="formRegFirstname" name="formRegFirstname" class="form-control" required />
                                                    <label class="form-label" for="formRegFirstname">
                                                        First name
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="formRegLastname" name="formRegLastname" class="form-control" required />
                                                    <label class="form-label" for="formRegLastname">
                                                        Last name
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="email" id="formRegEmail" name="formRegEmail" class="form-control" required />
                                                <label class="form=label" for="formRegEmail">
                                                    Email adress
                                                </label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="password" id="formRegPassword" name="formRegPassword" class="form-control" required />
                                                <label class="form=label" for="formRegPassword">
                                                    Password
                                                </label>
                                            </div>
                                            <div class="form-outline mb-4">
                                                <input type="text" id="formRegContactNumber" name="formRegContactNumber" class="form-control" required />
                                                <label class="form-label" for="formRegContactNumber">
                                                    Contact number
                                                </label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="formRegMale" value="Male">
                                                        <label class="form-check-label" for="formRegMale">
                                                            Male
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="formRegFemale" value="Female">
                                                        <label class="form-check-label" for="formRegFemale">
                                                            Female
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3 mb-4">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="formRegBirthday">
                                                            Birthday:
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-4">
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Year">
                                                        <option selected>Year</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1974">1974</option>
                                                        <option value="1975">1975</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1977">1977</option>
                                                        <option value="1978">1978</option>
                                                        <option value="1979">1979</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1986">1986</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1988">1988</option>
                                                        <option value="1989">1989</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1999">1999</option>
                                                        <option value="2000">2000</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2006">2006</option>
                                                        <option value="2007">2007</option>
                                                        <option value="2008">2008</option>
                                                        <option value="2009">2009</option>
                                                        <option value="2010">2010</option>
                                                        <option value="2011">2011</option>
                                                        <option value="2012">2012</option>
                                                        <option value="2013">2013</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-4">
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Month">
                                                        <option selected>Month</option>
                                                        <option value="Januray">Januray</option>
                                                        <option value="Feburary">Feburary</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-4">
                                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="Day">
                                                        <option selected>Date</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-check d-flex justify-content-center mb-4">

                                                <label class="form-check-label" for="formNewsletter">
                                                    By clicking
                                                    Sign Up,
                                                    you agree to our Terms, Data Policy and Cookies Policy. You may
                                                    recieve
                                                    SMS Notifications from us and can opt out any time.

                                                </label>
                                            </div>

                                            <div class="form-check d-flex justify-content-center mb-4">
                                                <input class="form-check-input me-2" type="checkbox" value="" id="formNewsletter" checked />
                                                <label class="form-check-label" for="formNewsletter">Subscribe to our
                                                    newsletter
                                                </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <input type="submit" name="submit" class="col-md-12 mb-4 btn btn-success btn-block mb-4" value="Sign up">
                                            <div class="col-md-12 form-check d-flex justify-content-center mb-4">
                                                <label class="form-check-label" for="formNewsletter">
                                                    Already have an account? <a href="login.php" class="text-success">Log In</a>
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