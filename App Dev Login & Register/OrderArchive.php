<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductsArchive</title>
    <!--Material-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Style Sheet-->
    <link rel="stylesheet"  href="css/style_ui.css">
    <link rel="Shortcut Icon" type="x-icon" href="images/logo.png">
</head>
<body>
    <div class="container">
        <aside>
        <div class="top">
        <div class="logo">
            <img src="images/logo.png">
        </div>
        </div>
        <h2 class="danger">RMMGARDEN</h2> 
        </aside>
        <main>
        

                     
        <?php
           @include 'phpfiles/config.php';
           $sql = "SELECT * FROM tb_orderarchive";
           $result = mysqli_query($conn, $sql);
           if (mysqli_num_rows($result) > 0) {
           // Output the data in a table
           echo " <h2>Orders Archive</h2> ";
           echo " <div class='recent-orders' >";
           echo "<table>";
           echo "<thead>";
           echo "<tr>";
           echo "<th>Transaction Id</th>";
           echo "<th>Cart Id</th>";
           echo "<th>User Id</th>";
           echo "<th>Product Id</th>";
           echo "<th>Total</th>";
           echo "<th>Status</th>";
           echo "<th>Order Date</th>";
           echo "<th>Action</th>";
           echo "</tr>";
           echo "</thead>";
           
           while($row = mysqli_fetch_assoc($result)) {
               $id = $row["Transaction_Id"];
               $Cart = $row["Cart_Id"];
               $User = $row["User_Id"];
               $Product = $row["Product_Id"];
               $Total = $row["Total"];
               $Status = $row["Status"];
               $Date = $row["Order_date"];
               echo "<tbody>";
               echo "<tr>";
               echo "<td>" . $row["Transaction_Id"] . "</td>";
               echo "<td>" . $row["Cart_Id"] . "</td>";
               echo "<td>" . $row["User_Id"] . "</td>";
               echo "<td>" . $row["Product_Id"] . "</td>";
               echo "<td>" . $row["Total"] . "</td>";
               echo "<td>" . $row["Status"] . "</td>";
               echo "<td>" . $row["Order_date"] . "</td>";
               echo "<td>";
               echo  " <span class='action_btn'>";
               echo '<a href="OrderArchiveRestore.php?restoreid='.$id.'">Restore</a>';
               echo '<a href="OrderArchivePermaDel.php?deleteid='.$id.'">Permanent Delete</a>';
               echo "</span>";
               echo "</td>"; 
               echo "</tr>";
               echo "</tbody>";

}
echo "</table>";
echo " </div >";
echo ' <span class="add"><a href="Orders.php">Back</a></span>';
}
else {
echo "No data in the table.";
}
?>

					<input type="hidden" name="Prdname" >
					<input type="hidden" name="PrdSize" >
					<input type="hidden" name="PrdStock">
					<input type="hidden" name="PrdPrice">
</main>
</div>
    
</body>
</html>