

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
            <div class="sidebar">
                <a href="DashBoard.php">
                    <span class="material-symbols-outlined">
                        grid_view
                        </span>
                        <h3>DashBoard</h3>
                </a>
                <a href="Customer.php">
                    <span class="material-symbols-outlined">
                        person
                        </span>
                        <h3>Customer</h3>
                </a>
                <a href="Orders.php">
                    <span class="material-symbols-outlined">
                        order_play
                        </span>
                        <h3>Orders</h3>
                </a>
                <a href="Products.php" class="active">
                    <span class="material-symbols-outlined">
                        inventory
                        </span>
                        <h3>Products</h3>
                </a>
                <a href="TransactionHistory.php">
                    <span class="material-symbols-outlined">
                        receipt_long
                        </span>
                        <h3>Transaction History</h3>
                </a>
                <a href="Admin.php">
                    <span class="material-symbols-outlined">
                        admin_panel_settings
                        </span>
                        <h3>Admin</h3>
                </a>
                <a href="Login.php">
                    <span class="material-symbols-outlined">
                        logout
                        </span>
                        <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <main>
        

                     
        <?php
           session_start();

@include 'phpfiles/config.php';
$sql = "SELECT * FROM tb_products";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// Output the data in a table
echo " <h2>Products</h2> ";
echo " <div class='recent-orders' >";
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>Product Id</th>";
echo "<th>Product Name</th>";
echo "<th>Size</th>";
echo "<th>Price</th>";
echo "<th>Stock</th>";
echo "<th>Action</th>";
echo "</tr>";
echo "</thead>";

while($row = mysqli_fetch_assoc($result)) {
    $id = $row["Product_Id"];
    $ProdName = $row["Product_Name"];
    $Prodsize = $row["Size"];
    $ProdPrice = $row["Product_Price"];
    echo "<tbody>";
    echo "<tr>";
    echo "<td>" . $row["Product_Id"] . "</td>";
    echo "<td>" . $row["Product_Name"] . "</td>";
    echo "<td>" . $row["Size"] . "</td>";
    echo "<td>" . $row["Product_Price"] . "</td>";
    echo "<td>";
    echo  " <span class='action_btn'>";
    echo '<a href="UpdateProduct.php?updateid='.$id.'">Edit</a>';
    echo '<a href="DeleteProduct.php?deleteid='.$id.'">Delete</a>';
    echo "</span>";
    echo "</td>"; 
    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";
echo " </div >";
echo ' <span class="add"><a href="ProductRegister.php">Add Product</a></span>';
echo ' <span class="add"><a href="ProductArchive.php">Archive</a></span>';
} else {
echo "No data in the table.";
}

?>
 


</main>
</div>
    
</body>
</html>