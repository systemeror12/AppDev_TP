<?php
    @include 'phpfiles/config.php';

    $id = $_GET['deleteid'];
       
    $sql = "DELETE FROM `tb_productsarchive` WHERE Product_Id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:ProductArchive.php');      
    }
    else{
        die(mysqli_error($conn));
    }
?>