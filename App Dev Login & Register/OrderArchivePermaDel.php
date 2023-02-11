<?php
    @include 'phpfiles/config.php';

    $id = $_GET['deleteid'];
       
    $sql = "DELETE FROM `tb_orderarchive` WHERE Transaction_Id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:OrderArchive.php');      
    }
    else{
        die(mysqli_error($conn));
    }
?>