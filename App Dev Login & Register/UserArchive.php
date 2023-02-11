<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Archive</title>
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
$sql = "SELECT * FROM tb_usersarchive";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// Output the data in a table
echo " <h2>Users Archive</h2> ";
echo " <div class='recent-orders' >";
echo "<table>";
echo "<thead>";
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
echo "</thead>";

while($row = mysqli_fetch_assoc($result)) {
    $user_id = $row["User_id"];
    $fname = $row["FName"];
    $lname = $row["LName"];
    $email = $row["Email"];
    $contact = $row["Contact"];
    $gender = $row["Gender"];
    $bdate = $row["BDate"];

    echo "<tbody>";
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
    echo '<a href="UserArchiveRestore.php?restoreid='.$user_id.'">Restore</a>';
    echo '<a href="UserArchivePermaDel.php?deleteid='.$user_id.'">Permanent Delete</a>';
    echo "</span>";
    echo "</td>"; 
    echo "</tr>";
    echo "</tbody>";
}
echo "</table>";
echo " </div >";
echo ' <span class="add"><a href="Admin.php">Back</a></span>';
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