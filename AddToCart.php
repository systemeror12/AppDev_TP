<?php
@include 'phpfiles/config.php';

session_start();

if (isset($_POST["id"])) {
  // Get the data from the POST request
  $id = $_POST["id"];
  $item = $_POST["item"];


  // Store the data in a session
  $_SESSION["id"] = $id;
  $_SESSION["item"] = $item;
}
// Retrieve the data from the session
$tempId = $_SESSION["UserId"];
$prodid = $_SESSION["id"];
$prodquan = $_SESSION["item"];

$check_query = "SELECT * FROM test 
WHERE Product_Id  = '$prodid' && User_Id  = '$tempId'";
$result = $conn->query($check_query);

if ($result->num_rows > 0) {
  $sql = "UPDATE `test` SET `Product_Id`='$prodid', `Item`='$prodquan'
  WHERE User_Id='$tempId'";
  $result = mysqli_query($conn, $sql);
} else {
  // Prepare the insert query
  $sql = "INSERT INTO test ( User_id, Product_Id, Item) VALUES ('$tempId', '$prodid','$prodquan')";
  mysqli_query($conn, $sql);
}

$conn->close();
