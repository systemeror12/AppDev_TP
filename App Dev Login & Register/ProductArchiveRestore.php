<?php
    @include 'phpfiles/config.php';

    $id = $_GET['restoreid'];
       
    $insert = "INSERT INTO `tb_products` (Product_Id, Product_Name, Size, Stock, Product_Price) SELECT Product_Id, Product_Name, Size, Stock, Product_Price FROM `tb_productsarchive` WHERE Product_Id=$id ";
    $result = mysqli_query($conn, $insert);
    $sql = "DELETE FROM `tb_productsarchive` WHERE Product_Id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location:ProductArchive.php');      
    }
    else{
        die(mysqli_error($conn));
    }
?>