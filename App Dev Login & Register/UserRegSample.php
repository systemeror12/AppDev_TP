<?php
    @include 'phpfiles/config.php';

    if(isset($_POST['submit'])){

     
        $uname = mysqli_real_escape_string($conn, $_POST['uname']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $midin = mysqli_real_escape_string($conn, $_POST['midin']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
        $BDate = mysqli_real_escape_string($conn, $_POST['BDate']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $contact = mysqli_real_escape_string($conn, $_POST['contact']);


        $select = " SELECT * FROM tb_users WHERE Uname = '$uname' && Pass = '$pass' ";
     
        $result = mysqli_query($conn, $select);
     
        if(mysqli_num_rows($result) > 0){
     
           $error[] = 'user already exist!';
     
        }else{
     
           if($pass != $cpass){
              $error[] = 'password not matched!';
           }else{
			  
              $insert = "INSERT INTO tb_users(Uname, Pass, Cpass, Email, LName, FName, MidIn, Age, Gender, BDate, Address, Contact)
               VALUES('$uname','$pass','$cpass', '$email', '$lname', '$fname','$midin','$age', '$Gender', '$BDate', '$address', '$contact')";
              mysqli_query($conn, $insert);
              header('location:Login.php');
			 
           }
        }
     
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
	<link rel="Shortcut Icon" type="x-icon" href="images/logo.png">
  
	


</head>
<body>

		<!-- Login Form -->
	<div class="container">
		<div class="forms">
	 		
			<!-- Registration Form -->
			<div class="form Register">
				<span class="title">Registration</span>
				
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
					<input type="uname" name="uname" placeholder="Enter your username" required>
					<i class="material-symbols-outlined">person</i>
					</div>

					<div class="input-field">
					<input type="password" name="password" placeholder="Enter your password" required>
					<i class="material-symbols-outlined">lock</i>
					</div>

					<div class="input-field">
					<input type="password" name="cpassword" placeholder="Confirm your password" required>
					<i class="material-symbols-outlined">lock</i>
					</div>

					<div class="input-field">
					<input type="email" name="email" placeholder="Enter your email" required>
					<i class="material-symbols-outlined">mail</i>
					</div>

					<div class="input-field">
					<input type="lname" name="lname" placeholder="Enter your Last Name" required>
					<i class="material-symbols-outlined">person</i>
					</div>

                    <div class="input-field">
					<input type="fname" name="fname" placeholder="Enter your First Name" required>
					<i class="material-symbols-outlined">person</i>
					</div>

                    <div class="input-field">
					<input type="midin" name="midin" placeholder="Enter your Middle Initial" required>
					<i class="material-symbols-outlined">person</i>
					</div>

                    <div class="input-field">
					<input type="age" name="age" placeholder="Enter your age" required>
					<i class="material-symbols-outlined">person</i>
					</div>

                    <div class="input-field">
                    <Select name="Gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </Select><br>
					</div>

                    <div class="input-field">
                    <input type="date" name="BDate" placeholder="Birth Date"/><br/>
					</div>

	

                    <div class="input-field">
					<input type="address" name="address" placeholder="Enter your address" required>
					<i class="material-symbols-outlined">person</i>
					</div>

                    <div class="input-field">
					<input type="contact" name="contact" placeholder="Enter your contact" required>
					<i class="material-symbols-outlined">person</i>
					</div>

                    <div class="input-field button">
					<input type="submit" name="submit" value="Register" >				
					</div>

					<div class="login-signup">
					<span class="text">already have an account?
						<a href="Login.php" class="text signup-text"> Login now</a>
					</span>

					
				
				</form>
			</div>
			
		</div>
		
	</div>


</body>
</html>