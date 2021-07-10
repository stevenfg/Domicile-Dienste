<?php 
 session_start();
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
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/responsive.css">

        <style >
            .btn{
                margin-right: 15px;
            }
            
        </style>
    </head>
    <body style="color: black;">
        <!--================Header Area =================-->
        <header class="header_area" >
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
                            <!-- <li class="nav-item active"><a class="nav-link" href="admin_dashboard.php">Home</a></li>  -->
                            <li class="nav-item"><a class="nav-link" href="list.php">Employee list</a></li>
                            <li class="nav-item"><a class="nav-link" href="hire.php">Hire</a></li>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="contact.html">Fire</a></li> -->
                            
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area Finish=================-->
        <br><br><br><br>
        
        <br><br><br>
        <!--================Banner Area END =================-->
       <div class="row">
       	<div class="col-md-12" >
       		<center><h2>Booked Users Details</h2></center>
       	</div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr style="text-transform: uppercase;">
                            <!-- <th>S.No</th> -->
                            <th>User Name</th>
                            <th>User ID</th>
                            <th>User Mobile</th>
                            <th>Service</th>
                            <th>Sub Service</th>
                            <th>Employee Id</th>
                            <th>Employee name</th>
                            <th>User Address</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Unbook</th>
                        </tr> 
                    </thead>
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"dd");
                    $query = "select * from salon where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        ?>
                            <tr>
                                <td><?php echo $row['c_name'];?></td>
                                <td><?php echo $row['c_id'];?></td>
                                <td><?php echo $row['c_phone'];?></td>
                                <td><?php echo $row['service'];?></td>
                                <td><?php echo $row['sub_service'];?></td>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['time'];?></td>
                                <td><a href="unbook.php?rn=<?php echo $row['id'] . "&rt=a";?>" style="padding-top: 0px; padding-bottom: 0px;" class="btn btn-danger role="button" ?> Unbook</a></td>
                            </tr>
                            
                        <?php
                    }
                    $query = "select * from carpentry where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        ?>
                            <tr>
                                
                                <!-- <td><?php echo $user_count;?></td> -->
                                <td><?php echo $row['c_name'];?></td>
                                <td><?php echo $row['c_id'];?></td>
                                <td><?php echo $row['c_phone'];?></td>
                                <td><?php echo $row['service'];?></td>
                                <td><?php echo $row['sub_service'];?></td>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['time'];?></td>
                                <td><a href="unbook.php?rn=<?php echo $row['id'] . "&rt=b";?>" style="padding-top: 7px;" class="btn btn-danger role="button" ?>Unbook</a></td>
                            </tr>
                        <?php
                    }
                    $query = "select * from cleaning where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        ?>
                            <tr>
                                <!-- <td><?php echo $user_count;?></td> -->
                                <td><?php echo $row['c_name'];?></td>
                                <td><?php echo $row['c_id'];?></td>
                                <td><?php echo $row['c_phone'];?></td>
                                <td><?php echo $row['service'];?></td>
                                <td><?php echo $row['sub_service'];?></td>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['time'];?></td>
                                <td><a href="unbook.php?rn=<?php echo $row['id'] . "&rt=c";?>" style="padding-top: 7px;" class="btn btn-danger role="button" ?>Unbook</a></td>
                            </tr>
                        <?php
                    }
                    $query = "select * from electrician where status = 1;";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        ?>
                            <tr>
                                <!-- <td><?php echo $user_count;?></td> -->
                                <td><?php echo $row['c_name'];?></td>
                                <td><?php echo $row['c_id'];?></td>
                                <td><?php echo $row['c_phone'];?></td>
                                <td><?php echo $row['service'];?></td>
                                <td><?php echo $row['sub_service'];?></td>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td><?php echo $row['time'];?></td>
                                <td><a href="unbook.php?rn=<?php echo $row['id'] . "&rt=d";?>" style="padding-top: 7px;" class="btn btn-danger role="button" ?>Unbook</a></td>
                            </tr>
                        <?php
                    }
                   
                ?>
            </table>
        	</div>
        </div>
        <br><br><br><br><br><br>
        <!--================ start footer Area  =================-->	
        <!-- <footer class="footer-area section_gap">
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
        </footer> -->
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