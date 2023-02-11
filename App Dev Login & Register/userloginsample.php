<?php
     @include 'phpfiles/Config.php';
	 session_start();

    if(isset($_POST['submit'])){
    

    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pass = md5($_POST['password']);
    
        

    $select = " SELECT * FROM tb_users WHERE Uname = '$uname' && Pass = '$pass'";
		
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
		
        $row = mysqli_fetch_array($result);
		
		$_SESSION['user_id'] = $row['User_id'];
		
		header('location:cartsample.php');   
        
        
    }else{
        $error[] = 'incorrect email or password!';
    }

    };

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<!--Material-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Style Sheet-->
    <link rel="stylesheet" href="css/style.css">
	<link rel="Shortcut Icon" type="x-icon" href="images/logo.png">
</head>
<body>
		<!-- Login Form -->
	<div class="container">
		<div class="forms">
			<div class="form login">
				<span class="title">Login</span>
				
				<form action="" method="post">
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
					<input  type="uname" name="uname" placeholder="Enter your Username" required>
					<i class="material-symbols-outlined">mail</i>
					</div>

					<div class="input-field">
					<input type="password" name="password" placeholder="Enter your password" required>
					<i class="material-symbols-outlined">lock</i>
					</div>

					
					<div class="input-field button">
					<input type="submit" name="submit" value="Login" >
					
					</div>
				</form>
				<div class="login-signup">
					<span class="text">Not a member?
						<a href="Register.php" class="text signup-text"> Signup now</a>
					</span>
				</div>
			</div>

				</form>
			</div>
			
		</div>
		
	</div>

</body>
</html>