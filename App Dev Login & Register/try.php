<?php
    @include 'phpfiles/config.php';

    if(isset($_POST['submit'])){

        $date =  $_POST['BDate'];
        $gen =  $_POST['Gender'];


        echo $date;
        echo $gen;
     };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">

    <input type="date" name="BDate" placeholder="E-mail"/><br/>
    <Select name="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </Select><br>
    <input type="submit" name="submit" />

    </form>
    
</body>
</html>