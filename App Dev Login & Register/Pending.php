<?php
    @include 'phpfiles/config.php';

        $id = $_GET['pendingid'];
        $status = "Pending";

        $sql = "UPDATE `tb_transactionhistory` SET `Transaction_Id`='$id',`Status`='$status' WHERE Transaction_Id=$id";
		$result = mysqli_query($conn, $sql);

        $insert = "INSERT INTO `tb_orders` (`Transaction_Id`, `Cart_Id`, `User_Id`, `Product_Id`, `Total`, `Status`, `Order_date`) SELECT `Transaction_Id`, `Cart_Id`, `User_Id`, `Product_Id`, `Total`, `Status`, `Order_date` FROM `tb_transactionhistory` WHERE Transaction_Id=$id";
        $result = mysqli_query($conn, $insert);
        $sql = "DELETE FROM `tb_transactionhistory` WHERE Transaction_Id = $id";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('location:TransactionHistory.php');      
        }
        else{
            die(mysqli_error($conn));
        }


?>