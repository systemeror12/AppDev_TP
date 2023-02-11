<?php
    @include 'phpfiles/config.php';
        
        $id = $_GET['claimedid'];
        $status = "Claim";

        $sql = "UPDATE `tb_orders` SET `Transaction_Id`='$id',`Status`='$status' WHERE Transaction_Id=$id";
		$result = mysqli_query($conn, $sql);

        $insert = "INSERT INTO `tb_transactionhistory` 
        (`Transaction_Id`, `Cart_Id`, `User_id`, `Total`, `Status`, `Order_date`) 
        SELECT `Transaction_Id`, `Cart_Id`, `User_id`, `Total`, `Status`, `Order_date` FROM `tb_orders` WHERE Transaction_Id=$id";
        $result = mysqli_query($conn, $insert);

        $sql = "DELETE FROM `tb_orders` WHERE Transaction_Id = $id";
        $result = mysqli_query($conn, $sql);

        if($result){
           header('location:Orders.php');      
        }
        else{
            die(mysqli_error($conn));
        }


?>