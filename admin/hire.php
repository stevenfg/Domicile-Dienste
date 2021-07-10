<?php
    session_start();
    if(isset($_POST['signup'])){
        $id = filter_input(INPUT_POST, 'id');
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        $conf_password = filter_input(INPUT_POST, 'confpassword');
        $phone = filter_input(INPUT_POST, 'phone');
        $field = filter_input(INPUT_POST, 'field');
     
        if (!empty($username)){
            if (!empty($password)){
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "dd";
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
                          $sql = "INSERT INTO $field (id,name, password, phone )
                          values ('$id','$username','$password','$phone')";
                          if ($conn->query($sql)){
      
                          // header("Location: login.html");
                          echo "<script>
                              alert('Account created successfully');
                              window.location.href='list.php';
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
        <h2>Employee register</h2>
        <link rel="stylesheet" href="css/register.css">
        <form action="" method="POST" ">
            <div class="inputBox" style="padding-bottom: 20px;">
                    <select class="form-control" style="background-color: transparent; color:white;" name="field">
                       
                        <option style="color:black;">Salon</option>
                        <option style="color:black;">Carpentry</option>
                        <option style="color:black;">Cleaning</option>
                        <option style="color:black;">Electrician</option>
                    </select>
            </div>
            <div class="inputBox" >
                <input type="text" name="id" required  value="">
                <label>Employee Id</label>
            </div>
            <div class="inputBox" >
                <input type="text" name="username" required  value="">
                <label>Username</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" required value="" >
                <label>Password</label>
            </div>
            <div class="inputBox">
                <input type="password" name="confpassword" required value="" >
                <label>Confirm Password</label>
            </div>
            <div class="inputBox" >
                <input type="text" name="phone" required  value="">
                <label>Phone</label>
            </div>
            
            <div class="inp" align="center">
                <input type="submit" name="signup" value="Register" align="center">
            </div>
            <br>
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
