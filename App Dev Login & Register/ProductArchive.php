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
$sql = "SELECT * FROM tb_productsarchive";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// Output the data in a table
echo " <h2>Products Archive</h2> ";
echo " <div class='recent-orders' >";
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Product Id</th>";
echo "<th>Product Name</th>";
echo "<th>Size</th>";
echo "<th>Stock</th>";
echo "<th>Price</th>";
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";

while($row = mysqli_fetch_assoc($result)) {
    $id = $row["Product_Id"];
    $ProdName = $row["Product_Name"];
    $Prodsize = $row["Size"];
    $ProdStock = $row["Stock"];
    $ProdPrice = $row["Product_Price"];
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row["Product_Id"] . "</td>";
    echo "<td>" . $row["Product_Name"] . "</td>";
    echo "<td>" . $row["Size"] . "</td>";
    echo "<td>" . $row["Stock"] . "</td>";
    echo "<td>" . $row["Product_Price"] . "</td>";
    echo "<td>";
    echo  " <span class='action_btn'>";
    echo '<a href="ProductArchiveRestore.php?restoreid='.$id.'">Restore</a>';
    echo '<a href="ProductArchivePermaDel.php?deleteid='.$id.'">Permanent Delete</a>';
    echo "</span>";
    echo "</td>"; 
    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";
echo " </div >";
echo ' <span class="add"><a href="Products.php">Back</a></span>';
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