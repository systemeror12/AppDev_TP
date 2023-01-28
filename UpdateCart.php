<?php
@include 'phpfiles/config.php';
session_start();

$id = $_POST["id"];
$item = $_POST["item"];

$_SESSION["id"] = $id;
$_SESSION["item"] = $item;


$sql = "UPDATE `test` SET item='$item' WHERE id='$id'";

$result = mysqli_query($conn, $sql);

if ($result) {
    header('location:AddToCart.php');
} else {
    die(mysqli_error($conn));
}
$conn->close();
