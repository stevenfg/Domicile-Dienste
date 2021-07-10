<?php 
    
    session_start();
    $c_name = $_SESSION['user'];
        if(isset($_POST['book'])){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"dd");
        $c_name=$_SESSION['user'];
        $query = "select * from customers where username = '$c_name'";
        $query_run = mysqli_query($connection,$query);
        if($row = mysqli_fetch_assoc($query_run)){
            echo $row['id'];
            $c_id = $row['id'];
        }
        $name = $_GET['rn'];
        if($_POST['service'] == 'Salon'){     
                $query = "update salon set c_id = '$c_id', c_name = '$c_name', service = '$_POST[service]', sub_service = '$_POST[sub]', c_phone = $_POST[c_phone],address = '$_POST[c_address]',date = '$_POST[date]', time = '$_POST[time]', status = 1 where name = '$name'";
        }

        elseif($_POST['service'] == 'Carpentry'){
                    $query = "update carpentry set c_id = '$c_id', c_name = '$c_name',service = '$_POST[service]', sub_service = '$_POST[sub]', c_phone = '$_POST[c_phone]',address = '$_POST[c_address]',date = '$_POST[date]', time = '$_POST[time]', status = 1 where name = '$name'";   
            }

        elseif($_POST['service'] == 'Cleaning'){     
                    $query = "update cleaning set c_id = '$c_id', c_name = '$c_name',service = '$_POST[service]', sub_service = '$_POST[sub]', c_phone = '$_POST[c_phone]',address = '$_POST[c_address]',date = '$_POST[date]', time = '$_POST[time]', status = 1 where name = '$name'";    
            }
            
        elseif($_POST['service'] == 'Electrician'){
                    $query = "update electrician set c_id = '$c_id', c_name = '$c_name',service = '$_POST[service]', sub_service = '$_POST[sub]', c_phone = '$_POST[c_phone]',address = '$_POST[c_address]',date = '$_POST[date]', time = '$_POST[time]', status = 1 where name = '$name'";
            }

        $query_run = mysqli_query($connection,$query);
        if($_SESSION['name'] == 'admin'){
            header("location:redirect_page.php");   
        }
        else{
            header("location:booked.php");   
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
        <title>Booking page</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../vendors/linericon/style.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">
        <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
        <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>

        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
        </style>
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="../image/Logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area Finish=================-->
        <br><br><br><br><br><br>
        
        <!--================Banner Area END =================-->
       <div class="row">
       	<div class="col-md-12">
       		<center><b><h2 style="color: blue;">Service Booking Page</h2></b></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-4"></div>
        	<div class="col-md-4">
        	<form action="" method="post">
			
			<div class="form-group">
		    <h5 style="margin-bottom: -3px;"><label for="email">Service:</label></h5>	
            <input type="text" class="form-control" name="service" value="<?php 
                if($_GET['rt'] == 'a') {echo 'Salon';} 
                elseif($_GET['rt'] == 'b' ) {echo 'Carpentry';} 
                elseif($_GET['rt'] == 'c') {echo 'Cleaning';}  
                else {echo 'Electrician';}
                ?>" >
                </div>

              <?php if($_GET['rt'] == 'a'){ ?>
                <div class="form-group" style="padding-top: 10px;">
                <h5 style="margin-bottom: -3px;"><label for="email">Sub Service:</label></h5>
                <select class="form-control" name="sub">
                    <option >Haircut</option>
                    <option >Facial and Hair Styling</option>
                    <option >Waxing and Threading</option>
                    <option >Manicure and Pedicure</option>
                </select>
                <?php 
                    }
                  elseif ($_GET['rt'] == 'b'){ ?>
                    <div class="form-group" style="padding-top: 10px;">
                    <h5 style="margin-bottom: -3px;"><label for="email">Sub Service:</label></h5>
                    <select class="form-control" name="sub">
                        <option >Framing</option>
                        <option >Roofing</option>
                        <option >Structural work</option>
                        <option >Flooring</option>
                    </select>
                <?php 
                    }
                    elseif ($_GET['rt'] == 'c' ){ ?>
                    <div class="form-group" style="padding-top: 10px;">
                    <h5 style="margin-bottom: -3px;"><label for="email">Sub Service:</label></h5>
                    <select class="form-control" name="sub">
                        <option >Couch</option>
                        <option >Bed</option>
                        <option >Floor</option>
                        <option >Full-Package</option>
                    </select>
                    <?php 
                    }
                  else { ?>
                  <div class="form-group" style="padding-top: 10px;">
                    <h5 style="margin-bottom: -3px;"><label for="email">Sub Service:</label></h5>
                    <select class="form-control" name="sub">
                        <option >Repair and fixes</option>
                        <option >Electricity breakdown</option>
                        <option >Electrical wiring</option>
                        <option >Installation Services</option>
                    </select>
                    <?php 
                        }
                   ?>

            </div>
            <div class="form-group" style="padding-top: 10px;">
                <h5 style="margin-bottom: -3px;"><label >Employee name:</label></h5>
                
                    <input type="text" class="form-control" name="e_name" value="<?php echo $_GET['rn'];?>" >
                
                </div>
            <?php 
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"dd");
                $c_name = $_SESSION['user'];
                $query = "select * from customers where username = '$c_name'";
                $query_run = mysqli_query($connection,$query); 
                while ($row = mysqli_fetch_assoc($query_run)) {
            ?>

            <div class="form-group" style="padding-top: 10px;">
                <h5 style="margin-bottom: -3px;"><label >Phone</label></h5>
                <input type="text" class="form-control" name="c_phone" value="<?php echo $row["phone"]; ?>" required >
            </div>

            <div class="form-group " style="padding-top: 10px;">
                <h5 style="margin-bottom: -3px;"><label >Address:</label></h5>
                <input type="text" class="form-control" name="c_address" value="<?php echo $row["address"]; ?>" required>
            </div>

            <div class="form-group " style="padding-top: 10px;">
                <h5 style="margin-bottom: -3px;"><label >e-mail:</label></h5>
                <input type="text" class="form-control" name="email" value="<?php echo $row["email"];?>" required="">
            </div>

                <?php } ?>

            <div class="form-group" style="padding-right: 300px;">
                <label for="email">Date</label>
                <input type="date" class="form-control" name="date" required>
            </div>
            <div class="form-group">
                <label for="email">Time:</label>
                <input type="time" class="form-control" name="time" required>
            </div>
            <br><br>
			<button type="submit" name="book" class="btn btn-warning">Book Now</button>
		</form>
        	</div>
        	<div class="col-md-4"></div>
        </div>
        <br><br><br><br><br><br>
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6 class="footer_title">About Agency</h6>
                            <p>The world has become so fast paced that people don’t want to stand by reading a page of information, they would much rather look at a presentation and understand the message. It has come to a point </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
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

