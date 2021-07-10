<?php
	if(isset($_POST['signup'])){
	$username = filter_input(INPUT_POST, 'username');
	$email = filter_input(INPUT_POST, 'email');
	$password = filter_input(INPUT_POST, 'password');
	$phone = filter_input(INPUT_POST, 'phone');
	$address = filter_input(INPUT_POST, 'address');
	$gender = filter_input(INPUT_POST, 'gender');
	$age = filter_input(INPUT_POST, 'age');

	$conf_password = filter_input(INPUT_POST, 'confpassword');
	if (!empty($username)){
		if (!empty($password)){
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "dd";
			// Create connection
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			if (mysqli_connect_error()){
				die('Connect Error ('. mysqli_connect_errno() .') '
				. mysqli_connect_error());
			}
			else{
				  if($password!=$conf_password){
					echo "<script>
						alert('Passwords donot match');
						window.location.href='register.php';
					</script>";
				}
				else{
					  $sql = "INSERT INTO customers (username, password, email, phone, address, gender, age)
					  values ('$username','$password', '$email','$phone','$address','$gender','$age' )";
					  if ($conn->query($sql)){
  
					  // header("Location: login.html");
					  echo "<script>
						  alert('Account created successfully');
						  window.location.href='login.php';
					  </script>";
					}
					else{
						echo "Error: ". $sql ."
						". $conn->error;
					}
			}
			$conn->close();
			}
		}
		else{
			echo "Password should not be empty";
			die();
		}
	}
	else{
		echo "Username should not be empty";
		die();
	}
}
?>

<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="image/favicon.png" type="image/png">
		<title>Home Service Provider</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="vendors/linericon/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
		<link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
		<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
		<!-- main css -->
		<link rel="stylesheet" href="css/register.css">
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/responsive.css">
	</head>
	<body>

<div class="box">


  <h2>REGISTER</h2>
  
  <div>
	
	<form method="post" action="">
		<div style="width: 50%;float:left; padding-right:30px;">
	
			<div class="inputBox" >
				<input type="Username" name="username" required onkeyup="this.setAttribute('value', this.value);" value="">
				<label>Username</label>
			</div>

			<div class="inputBox" >
				<input type="text" name="email" required onkeyup="this.setAttribute('value', this.value);" value="">
				<label>email-Id</label>
			</div>
			
			<div class="inputBox">
				<input type="text" name="address" required value="">
				<label>Address</label>
			</div>
			
			<div class="inputBox">
				<input type="number" name="age" required value="">
				<label>Age</label>
			</div>
		</div>
		<div style="width: 50%;float:left;padding-left:30px;">

			<div class="inputBox">
				<input type="password" name="phone"  required value="">
				<label >Phone</label> 
			</div> 
		
			<div class="inputBox">
				<input type="password" name="password"  required value="">
				<label >Password</label> 
			</div> 

			<div class="inputBox">
				<input type="password" name="confpassword" required value="">
				<label>Confirm Password</label>
			</div>
					<div style="padding-top: 8px;">
							
							<select class="form-control" name="gender" style="background-color: transparent ; color:white;font-size:large; border-top:transparent;border-left:transparent;border-right:transparent;border-radius:0px" >
								<option style="color:black;">Gender</option>
								<option style="color:black;">Male</option>
								<option style="color:black;">Female</option>
								<option style="color:black;">Others</option>
							</select>
							
					</div>
		</div>
		
</div>
		
		<div class="inp" align="center" style="padding-right: 0px;padding-top:320px;">
			<input type="submit" name="signup" value="SIGN UP" align="center" >
		</div>
		<div class="noacc" align="center">
			<p>Already have an account? <a href="login.php">Sign in</a></p>
			
		</div>
	</form>
</div>
  

</div>
</body>

</html>

