<?php
    @include 'phpfiles/config.php';

        $id = $_GET['restoreid'];
       
        $insert = "INSERT INTO `tb_orders` (`Transaction_Id`, `Cart_Id`, `User_Id`, `Product_Id`, `Total`, `Status`, `Order_date`) SELECT `Transaction_Id`, `Cart_Id`, `User_Id`, `Product_Id`, `Total`, `Status`, `Order_date` FROM `tb_orderarchive` WHERE Transaction_Id=$id";
        $result = mysqli_query($conn, $insert);
        $sql = "DELETE FROM `tb_orderarchive` WHERE Transaction_Id = $id";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('location:OrderArchive.php');      
        }
        else{
            die(mysqli_error($conn));
        }


?>