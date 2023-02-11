<?php
    @include 'phpfiles/config.php';

        $id = $_GET['deleteid'];
       
        $insert = "INSERT INTO `tb_productsarchive` (Product_Id, Product_Name, Size, Stock, Product_Price) SELECT Product_Id, Product_Name, Size, Stock, Product_Price FROM `tb_products` WHERE Product_Id=$id ";
        $result = mysqli_query($conn, $insert);
        $sql = "DELETE FROM `tb_products` WHERE Product_Id = $id";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('location:Products.php');      
        }
        else{
            die(mysqli_error($conn));
        }


?>