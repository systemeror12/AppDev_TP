<?php
    @include 'phpfiles/config.php';

    $id = $_GET['restoreid'];
       
    $insert = "INSERT INTO `tb_users` (User_Id, FName, LName, Email, Pass, Contact, Gender, BDate) SELECT User_Id, FName, LName, Email, Pass, Contact, Gender, BDate FROM `tb_usersarchive` WHERE User_Id=$id ";
    $result = mysqli_query($conn, $insert);
    $sql = "DELETE FROM `tb_usersarchive` WHERE User_Id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:UserArchive.php');      
    }
    else{
        die(mysqli_error($conn));
    }
?>