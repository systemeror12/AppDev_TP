<?php
    @include 'phpfiles/config.php';

    if(isset($_POST['submit'])){

     
        $uname = mysqli_real_escape_string($conn, $_POST['uname']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);
        $fname = mysqli_real_escape_string($conn, $_POST['Fname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

     
        $select = " SELECT * FROM tb_admins WHERE Uname = '$uname' && Pass = '$pass' ";
     
        $result = mysqli_query($conn, $select);
     
        if(mysqli_num_rows($result) > 0){
     
           $error[] = 'user already exist!';
     
        }else{
     
           if($pass != $cpass){
              $error[] = 'password not matched!';
           }else{
              $insert = "INSERT INTO tb_admins(Uname, Pass, Cpass, FullName, Email) VALUES('$uname','$pass','$cpass','$fname','$email')";
              mysqli_query($conn, $insert);
              header('location:RegFormSample.php');
           }
        }
     
     };

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <link rel="stylesheet" href="css/RegForm.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="uname" name="uname" required placeholder="enter your Username">
      <input type="password" name="password" required placeholder="enter your Password">
      <input type="password" name="cpassword" required placeholder="confirm your Password">
      <input type="text" name="Fname" required placeholder="enter your Full Name">
      <input type="email" name="email" required placeholder="enter your Email">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="Admin_login.php">login now</a></p>
   </form>

</div>

</body>
</html>