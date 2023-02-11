<?php
    @include 'phpfiles/config.php';

        $id = $_GET['deleteid'];
       
        $insert = "INSERT INTO `tb_usersarchive` (User_Id, FName, LName, Email, Pass, Contact, Gender, BDate) SELECT User_Id, FName, LName, Email, Pass, Contact, Gender, BDate FROM `tb_users` WHERE User_Id=$id ";
        $result = mysqli_query($conn, $insert);
        $sql = "DELETE FROM `tb_users` WHERE User_Id = $id";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('location:Admin.php');      
        }
        else{
            die(mysqli_error($conn));
        }


?>