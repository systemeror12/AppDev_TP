<?php
@include 'phpfiles/config.php';
session_start();
$id = $_GET["id"];

$tempid = $_SESSION['UserId'];
$_SESSION["id"] = $id;

$sql = "DELETE FROM `test` WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header('location:AddToCart.php');
} else {
    die(mysqli_error($conn));
}
$conn->close();
