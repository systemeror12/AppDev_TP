<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
                <a href="TransactionHistory.php">
                    <span class="material-symbols-outlined">
                        receipt_long
                        </span>
                        <h3>Transaction History</h3>
                </a>
                <a href="Admin.php" class="active">
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
$sql = "SELECT * FROM tb_users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// Output the data in a table
echo " <h2>Admin</h2> ";
echo " <div class='recent-orders' >";

echo "<table>";
echo "<tr>";
echo "<th>User Id</th>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Email</th>";
echo "<th>Contact</th>";
echo "<th>Gender</th>";
echo "<th>Birth date</th>";
echo "<th>Action</th>";
echo "</tr>";
while($row = mysqli_fetch_assoc($result)) {
    $user_id = $row["User_id"];
    $fname = $row["FName"];
    $lname = $row["LName"];
    $email = $row["Email"];
    $contact = $row["Contact"];
    $gender = $row["Gender"];
    $bdate = $row["BDate"];
    
    echo "<tr>";
    echo "<td>" . $row["User_id"] . "</td>";
    echo "<td>" . $row["FName"] . "</td>";
    echo "<td>" . $row["LName"] . "</td>";
    echo "<td>" . $row["Email"] . "</td>";
    echo "<td>" . $row["Contact"] . "</td>";
    echo "<td>" . $row["Gender"] . "</td>";
    echo "<td>" . $row["BDate"] . "</td>";
    
    
    echo "<td>";
    echo  " <span class='action_btn'>";
    echo '<a href="UpdateUser.php?updateid='.$user_id.'">Edit</a>';
    echo '<a href="DeleteUser.php?deleteid='.$user_id.'">Delete</a>';
    echo "</span>";
    echo "</td>"; 
    echo "</tr>";
    
}
echo "</table>";
echo " </div >";
echo ' <span class="add"><a href="AddUser.php">Add User</a></span>';
echo ' <span class="add"><a href="UserArchive.php">Archive</a></span>';
} else {
echo "No data in the table.";
}

?>

</main>
            </div>
        </main>
    </div>
    
</body>
</html>