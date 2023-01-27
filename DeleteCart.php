<?php
    @include 'phpfiles/config.php';
    session_start();
    $id = $_GET['Deleteid'];
    $tempid = $_SESSION['UserId'];
    
    $sql = "DELETE FROM `test` WHERE Product_Id = '$id' && User_id =$tempid";
    $result = mysqli_query($conn, $sql);

    if($result){
    header('location:cart.php');      
    }
    else{
    die(mysqli_error($conn));
    }
$conn->close();
?>