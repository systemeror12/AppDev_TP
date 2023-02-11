<?php
    @include 'phpfiles/config.php';

    $id = $_GET['deleteid'];
       
    $sql = "DELETE FROM `tb_usersarchive` WHERE User_Id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:UserArchive.php');      
    }
    else{
        die(mysqli_error($conn));
    }
?>