<?php

@include 'phpfiles/Config.php';

session_start();

if(!isset($_SESSION['user_id'])){

   header('location:userloginsample.php');

}
$UserOn =  mysqli_real_escape_string($conn, $_SESSION['user_id']);
$select = " SELECT * FROM tb_users WHERE User_id = '$UserOn'" ;

$result = mysqli_query($conn, $select);
$row = mysqli_fetch_assoc($result)

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
    <h1>welcome <span><?php echo $row ?></span></h1>
    
</body>
</html>