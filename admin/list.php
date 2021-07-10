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

    </head>
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
                            <li class="nav-item "><a class="nav-link" href="admin_dashboard.php">Home</a></li> 
                            <li class="nav-item active"><a class="nav-link" href="list.php">Employee list</a></li>
                            <li class="nav-item"><a class="nav-link" href="hire.php">Hire</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="contact.html">Fire</a></li> -->
                            
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
    <body>
            
       
        <div class="row">
       	<div class="col-md-12" style="padding-top: 60px;">
       		<center><h3>Employee List</h3></center>
        </div>
        </div>
       </div><br><br>
        <div class="row">
        	<div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Employee Id</th>
                            <th>Employee name</th>
                            <th>Field</th>
                            <th>Phone</th>
                            <th>Unemploy</th>
                        </tr> 
                    </thead>
                    
        		<?php 
                    $user_count = 0;
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"dd");
                    $query = "select * from salon ";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                       
                        ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo "Salon"?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td><a href="fire.php?rn=<?php echo $row['id'] . "&rt=a";?>" style="padding-top: 0px; padding-bottom: 0px;" class="btn btn-danger role="button" ?> Fire</a></td>
                            </tr>
                            
                        <?php
                    }
                    $query = "select * from carpentry ";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo "Carpentry"?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td><a href="fire.php?rn=<?php echo $row['id'] . "&rt=b";?>" style="padding-top: 0px; padding-bottom: 0px;" class="btn btn-danger role="button" ?> Fire</a></td>
                            </tr>
                        <?php
                    }
                    $query = "select * from cleaning ";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo "Cleaning"?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td><a href="fire.php?rn=<?php echo $row['id'] . "&rt=c";?>" style="padding-top: 0px; padding-bottom: 0px;" class="btn btn-danger role="button" ?> Fire</a></td>
                            </tr>
                        <?php
                    }
                    $query = "select * from electrician ";
                    $query_run = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($query_run)){
                        
                        ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo "Electrician"?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td><a href="fire.php?rn=<?php echo $row['id'] . "&rt=d";?>" style="padding-top: 0px; padding-bottom: 0px;" class="btn btn-danger role="button" ?> Fire</a></td>
                            </tr>
                        <?php
                    }
                   
                ?>
            </table>
        	</div>
        </div>
        <br><br><br><br><br><br>
    </body>
    <style>
        table{
            font-size: large;
            text-align: center;
        }
    </style>
</html>