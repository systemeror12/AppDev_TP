<?php
    @include 'phpfiles/config.php';

    if(isset($_POST['submit'])){

     
        $prdnme = mysqli_real_escape_string($conn, $_POST['Prdname']);
        $prdsize = mysqli_real_escape_string($conn, $_POST['PrdSize']);
		$prdstock = mysqli_real_escape_string($conn, $_POST['PrdStock']);
        $prdprice = mysqli_real_escape_string($conn, $_POST['PrdPrice']);

     
			  
              $insert = "INSERT INTO tb_products(Product_Name, Size, Stock, Product_Price)
               VALUES('$prdnme','$prdsize','$prdstock','$prdprice')";
              mysqli_query($conn, $insert);
              header('location:Products.php');
     
     };

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<!--Material-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Style Sheet-->
    <link rel="stylesheet" href="./Css/styleReg.css">
	<link rel="Shortcut Icon" type="x-icon" href="images/logo.png">
</head>
<body>
		<!-- Login Form -->
	<div class="container">
		<div class="forms">

			<!-- Registration Form -->
			<div class="form Register">
				<span class="title">Product Registration</span>
				
				<form  action="" method="post">
                    <?php
                        if(isset($error))
                        {
                            foreach($error as $error)
                            {
                                echo '<span class="error-msg">'.$error.'</span>';
                            };
                        };
                    ?>

					<div class="input-field">
					<input type="ProductName" name="Prdname" placeholder="Product Name" required>
					<i class="material-symbols-outlined">package</i>
					</div>

					<div class="input-field">
					<input type="Productsize" name="PrdSize" placeholder="Product Size" required>
					<i class="material-symbols-outlined">aspect_ratio</i>
					</div>

					<div class="input-field">
					<input type="Productstock" name="PrdStock" placeholder="Product Stock" required>
					<i class="material-symbols-outlined">aspect_ratio</i>
					</div>

					<div class="input-field">
					<input type="text" name="PrdPrice" placeholder="Product Price" required>
					<i class="material-symbols-outlined">payments</i>
					</div>

					<div class="input-field button">
					<input type="submit" name="submit" value="Add Product">

					</div>
					<div class="input-field button">
					<a href="Products.php"><input type="button" value="Back"></a>

					</div>

				</form>
			</div>
			
		</div>
		
	</div>

</body>
</html>