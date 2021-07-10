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
        
    // Check connection
    
        $username = $_POST['username'];  
        $password = $_POST['password'];  
        $field = $_POST['sub'];
        if($field == "-Select-"){
            echo "<script> alert('Please select your field'); </script>";
        }
        else{
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
    
        $sql = "select * from $field where name = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_SESSION['emp'] = $_POST['username'];
            $_SESSION['field'] = $_POST['sub'];
		}


        if($count == 1){  
            echo "<script>
                            alert('Logged in successfully');
                            window.location.href='employee.php';
                        </script>"; 
        }  
        else{  
            echo "<script>alert('Login failed. Invalid username or password.')</script>";  
        } 
    }    
}
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/favicon.png" type="image/png">
        <title>Home Service Provider</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/register.css">
        <link rel="stylesheet" href="../css/responsive.css">
    </head>
    <body>
        <!--================Header Area =================-->
        
        <!--================Header Area Finish=================-->
    
        <br><br><br><br><br>
       
        <div class="box">
        <h2>Employee login</h2>
        <link rel="stylesheet" href="css/register.css">
        <form action="" method="POST" ">
            <div class="inputBox" style="padding-bottom: 20px;">
                    <select class="form-control" style="background-color: transparent; color:white;" name="sub">
                        <option style="color:black;">-Select-</option>
                        <option style="color:black;">Salon</option>
                        <option style="color:black;">Carpentry</option>
                        <option style="color:black;">Cleaning</option>
                        <option style="color:black;">Electrician</option>
                    </select>
            </div>
            <div class="inputBox" >
                <input type="text" name="username" required  value="">
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
        	<div class="col-md-2"></div>
        </div>
        <br><br><br><br><br><br>
        
		
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>
