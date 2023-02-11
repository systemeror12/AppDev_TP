<?php
	 @include 'phpfiles/config.php';
     
	$id = $_GET['stockid'];
	$sql = "SELECT * FROM tb_products WHERE Product_Id = $id;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$prdnme=$row['Product_Name'];
    $prdstock=$row['Stock']; 

	 if(isset($_POST['submit'])){
		
        $prdnme =  $_POST['Prdname'];
        $prdstock = $_POST['PrdStock'];

		$sql = "UPDATE `tb_products` SET `Product_Id`='$id',
		`Product_Name`='$prdnme', `Stock`='$prdstock' WHERE Product_Id=$id";
		$result = mysqli_query($conn, $sql);
		if($result){
			echo"Update Successfully";
            header('location:Products.php');      
        }
        else{
            die(mysqli_error($conn));
        }

     };
	 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stock</title>
	<!--Material-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Style Sheet-->
    <link rel="stylesheet" href="css/styleReg.css">
	<link rel="Shortcut Icon" type="x-icon" href="images/logo.png">
</head>
<body>

	<div class="container">
		<div class="forms">

			<!-- Update Form -->
			<div class="form Register">
				<span class="title">Update Stock</span>
				
				<form action="" method="post">
					

					<div class="input-field">
					<input type="ProductName" name="Prdname" placeholder="Product Name" value= "<?php echo $prdnme;?>" required>
					<i class="material-symbols-outlined">package</i>
					</div>

					<div class="input-field">
					<input type="Stock" name="PrdStock" placeholder="Stock" value= "<?php echo $prdstock;?>" required>
					<i class="material-symbols-outlined">aspect_ratio</i>
					</div>


					<div class="input-field button">
					<input type="submit" name="submit" value="Update">
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