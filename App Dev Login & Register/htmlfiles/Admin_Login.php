<?php
     @include 'phpfiles/config.php';


    if(isset($_POST['submit'])){
    
    
    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pass = md5($_POST['password']);
    
        

    $select = " SELECT * FROM tb_admins WHERE Uname = '$uname' && Pass = '$pass' ";

    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);

        
           
            header('location:DashBoard.html');
        
        
    }else{
        $error[] = 'incorrect email or password!';
    }

    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/RegForm.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="uname" name="uname" required placeholder="Enter your Username">
      <input type="password" name="password" required placeholder="Enter your Password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
   </form>

</div>

</body>
</html>