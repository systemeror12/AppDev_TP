<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <!--Material-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Style Sheet-->
    <link rel="stylesheet" href="css/style_ui.css">
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
                <a href="Products.php">
                    <span class="material-symbols-outlined">
                        inventory
                        </span>
                        <h3>Products</h3>
                </a>
                <a href="TransactionHistory.php" class="active">
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
           

           @include 'phpfiles/config.php';
           $sql = "SELECT * FROM tb_transactionhistory";
           $result = mysqli_query($conn, $sql);
           if (mysqli_num_rows($result) > 0) {
           // Output the data in a table
           echo " <h2>Transaction History</h2> ";
           echo " <div class='recent-orders' >";
           echo "<table>";
           echo "<thead>";
           echo "<tr>";
           echo "<th>Transaction Id</th>";
           echo "<th>Cart Id</th>";
           echo "<th>User d</th>";
           echo "<th>Total</th>";
           echo "<th>Status</th>";
           echo "<th>Order Date</th>";
           echo "<th>Action</th>";
           echo "</tr>";
           echo "</thead>";
           
           while($row = mysqli_fetch_assoc($result)) {
               $id = $row["Transaction_Id"];
               $Cart = $row["Cart_Id"];
               $User = $row["User_id"];
               $Total = $row["Total"];
               $Status = $row["Status"];
               $Date = $row["Order_date"];
               echo "<tbody>";
               echo "<tr>";
               echo "<td>" . $row["Transaction_Id"] . "</td>";
               echo "<td>" . $row["Cart_Id"] . "</td>";
               echo "<td>" . $row["User_id"] . "</td>";
               echo "<td>" . $row["Total"] . "</td>";
               echo "<td>" . $row["Status"] . "</td>";
               echo "<td>" . $row["Order_date"] . "</td>";
               echo "<td>";
               echo  " <span class='action_btn'>";
               echo '<a href="Pending.php?pendingid='.$id.'">Back to Pending</a>';
               echo "</span>";
               echo "</td>"; 
               echo "</tr>";
               echo "</tbody>";
           }
           echo "</table>";
           echo " </div >";
           echo ' <span class="add"><a href="#">Print</a></span>';
           } else {
           echo "No data in the table.";
           }
           
           ?> 
        </main>
    </div>
</body>
</html>