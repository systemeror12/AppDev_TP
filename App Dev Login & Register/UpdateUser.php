<?php
    @include 'phpfiles/config.php';
  
	$id = $_GET['updateid'];
	$sql = "SELECT * FROM tb_Users WHERE User_Id = $id;";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$fname=$row['FName'];
	$lname=$row['LName']; 
	$email=$row['Email']; 
    $pass=$row['Pass'];
	$contact=$row['Contact']; 
	$Gender=$row['Gender']; 
    $BDate=$row['BDate'];
	

    if(isset($_POST['submit'])){     
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);
        $contact = mysqli_real_escape_string($conn, $_POST['contact']);
        $Gender = mysqli_real_escape_string($conn, $_POST['flexRadioDefault']);
        $Month = mysqli_real_escape_string($conn, $_POST['Month']);
        $Day = mysqli_real_escape_string($conn, $_POST['Day']);
        $Year = mysqli_real_escape_string($conn, $_POST['Year']);

        $BDate = $Month . " " .$Day. ", ". $Year;

        $sql = "UPDATE `tb_users` SET `User_Id`='$id',
		`FName`='$fname',`LName`='$lname',
		`Email`='$email', `Pass`='$pass',
		`Contact`='$contact',`Gender`='$Gender',
		`BDate`='$BDate' WHERE User_Id=$id";
		$result = mysqli_query($conn, $sql);
		if($result){
			echo"Update Successfully";
            header('location:Admin.php');      
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
	<title>Register</title>
	<!--Material-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!--Style Sheet-->
    <link rel="stylesheet" href="Css/styleRegUser.css">
    <link rel="Shortcut Icon" type="x-icon" href="images/logo.png">
</head>
<body>
	

		<!-- Login Form -->
	<div class="container">
		<div class="forms">
	 		
			<!-- Registration Form -->
			<div class="form Register">
				
				<span class="title">Update User</span>
				
				<form  action="" method="post">
	
					<div class="input-field">
					<input type="fname" name="fname" placeholder="Enter your First Name" required>
					<i class="material-symbols-outlined">person</i>
					</div>

					<div class="input-field">
					<input type="lname" name="lname" placeholder="Enter your Last Name" required>
					<i class="material-symbols-outlined">person</i>
					</div>

					<div class="input-field">
					<input type="email" name="email" placeholder="Enter your email" required>
					<i class="material-symbols-outlined">mail</i>
					</div>

					<div class="input-field">
					<input type="password" name="password" placeholder="Enter your password" required>
					<i class="material-symbols-outlined">lock</i>
					</div>

					<div class="input-field">
					<input type="contact" name="contact" placeholder="Enter your contact" required>
					<i class="material-symbols-outlined">person</i>
					</div>

			

				
					<br>
					<br>
					<div >	
                        <div >
                                <div >
                                    <input  type="radio"
                                    name="flexRadioDefault" id="formRegMale" value="Male">
                                    <label class="form-check-label" for="formRegMale">
                                        Male
                                    </label>
                                </div>
                        </div>
                        <div >
                            <div >
                                    <input  type="radio"
                                    name="flexRadioDefault" id="formRegFemale" value="Female">
                                    <label class="form-check-label" for="formRegFemale">
                                     	Female
                                    </label>
                            </div>
                        </div>
                    </div>
					<br>
					<br>
					<div >
                        <div >
                            <div class="form-outline">
                                <label class="form-label" for="formRegBirthday">
                                        Birthday:
                                </label>
                             </div>
                        </div>
						
                        <div class="col-md-3 mb-4">
                            <select class="form-select form-select-sm"
                                aria-label=".form-select-sm example" name="Year">
                                    <option selected>Year</option>
                                    <option value="1970">1970</option>
									<option value="1971">1971</option>
									<option value="1972">1972</option>                
									<option value="1973">1973</option>                   
									<option value="1974">1974</option>                 
                                    <option value="1975">1975</option>                    
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>                    
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                	<option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>                 
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-4">
                                                    <select class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example" name="Month">
                                                        <option selected>Month</option>
                                                        <option value="Januray">Januray</option>
                                                        <option value="Feburary">Feburary</option>
                                                        <option value="March">March</option>
                                                        <option value="April">April</option>
                                                        <option value="May">May</option>
                                                        <option value="June">June</option>
                                                        <option value="July">July</option>
                                                        <option value="August">August</option>
                                                        <option value="September">September</option>
                                                        <option value="October">October</option>
                                                        <option value="November">November</option>
                                                        <option value="December">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 mb-4">
                                                    <select class="form-select form-select-sm"
                                                        aria-label=".form-select-sm example" name="Day">
                                                        <option selected>Date</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>
                                            </div>
                                           
                    <div class="input-field button">
					<input type="submit" name="submit" value="Update User" >				
					</div>

					<div class="input-field button">
					<a href="Admin.php"><input type="button" value="Back"></a>
					</div>
					</div>
				</form>
			</div>
			
		</div>
		
	</div>


</body>
</html>