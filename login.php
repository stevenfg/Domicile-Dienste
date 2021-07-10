<?php
	session_start();
	if(isset($_POST['login'])){

		$host = "localhost";
		$user = "root";  
		$password = '';  
		$db_name = "dd";  
		
		$con = mysqli_connect($host, $user, $password, $db_name);  
		if(mysqli_connect_errno()) {  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
		}  

	
		$username = $_POST['username'];  
		$password = $_POST['password'];  
	
		//to prevent from mysqli injection  
		$username = stripcslashes($username);  
		$password = stripcslashes($password);  
		$username = mysqli_real_escape_string($con, $username);  
		$password = mysqli_real_escape_string($con, $password);  
	
		$sql = "select * from customers where username = '$username' and password = '$password'";  
		$result = mysqli_query($con, $sql);  
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
		$count = mysqli_num_rows($result);  

	
		//Put session start at the beginning of the file
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$_SESSION['user'] = $_POST['username'];
		}

		
		if($count == 1){  
			echo "<script>
							alert('Logged in successfully');
							window.location.href='index.php';
						</script>"; 
		}  
		else{  
			echo "<script>alert('Login failed. Invalid username or password.')</script>";  
		}    
	} 
?> 

<!DOCTYPE html>
<html >
<body>
<div class="box">
<!-- <link rel="stylesheet" href="css/register.css"> -->

  <h2>Login</h2>
  <form action="" method="POST">
    	<div class="inputBox" >
      	<input type="text" name="username" required onkeyup="this.setAttribute('value', this.value);" value="">
      	<label>Username</label>
		</div>
		<div class="inputBox">
		<input type="password" name="password" required value="" >
		
		<label>Password</label>
		</div>
		<div class="inp" align="center">
		<input type="submit" name="login" value="Sign In" align="center">
		</div>
		<div class="noacc" align="center">
			<p>Don't have an account? <a href="register.php">Sign up</a></p>
		</div>
	</form>
</div>
</body>
<style>
	body {
  margin: 0;
  padding: 0;
  background-image: url("image/banner_bg.jpg");
  background-size: cover;
  font-family: sans-serif;
}
.noacc{
color: white;
padding-top: 40px;
}
.theme_btn {
  border: none;
  outline: none;
  color: black;
  background-color: white;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 50px;
  font-size: 1rem;
  box-shadow: 0 10px 60px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 30px 30px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 1px 4px 10px 5px rgba(0, 0, 0, 0.3);
  
}
.theme_btn:hover {
  transition: 0.3s;
  background-color: transparent;
  color: white;
}

a{
text-decoration: none;
color: #75b5ff;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 25rem;
  padding-top: 2.5rem;
  padding-left: 2.5rem;
  padding-right: 2.5rem;
  box-sizing: border-box;
  background: transparent;
  box-shadow: 0 10px 60px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 30px 30px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 1px 4px 10px 11px rgba(0, 0, 0, 0.3);
  -o-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.1);
  border-radius: 50px;
}

.box h3{
  margin: 0 0 1.875rem;;
  padding: bottom ;
  color: rgb(8, 1, 1);
  text-align: center ;
}
.box h2 {
  margin: 0 0 1.875rem;;
  padding: bottom ;
  color: #fff;
  text-align: center ;
}

.box .inputBox {
  position: relative;
}

.box .inputBox input {
  width: 100%;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid #fff;
  outline: none;
  background: transparent;
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 0;
  color: black;
  font-size: 0.75rem;
}

.box input[type="submit"] {
  border: none;
  outline: none;
  color: black;
  background-color: white;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 50px;
  font-size: 1rem;
  box-shadow: 0 10px 60px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 30px 30px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 1px 4px 10px 5px rgba(0, 0, 0, 0.3);
}

.box input[type="submit"]:hover {
  transition: 0.3s;
  background-color: transparent;
  color: white;
}

.inp{

  padding-left: 0px;
  
}
box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: rgb(8, 8, 8);
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 0;
  color: #0c0c0c;
  font-size: 0.75rem;
}
</style>
</html>

