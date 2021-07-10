<?php 
    
    session_start();
    $e_name=$_SESSION['emp'];
    $field=$_SESSION['field'];

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="../image/favicon.png" type="image/png">
        <title>Home service provider</title>
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
    <body class="banner_area1">
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
                            <li class="nav-item "><a class="nav-link" href="index.html">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                            <li class="nav-item " ><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
    
        <section class="section mt-5" style="padding-top: 50px;">
        <h2 style="color: #110549; padding-left:600px; padding-bottom:20px;"><?php echo"$e_name" ?>'s Bookings</h2>
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"dd");
                $query = "select * from $field where name='$e_name' ";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                <div class="container-fluid" style="padding-left:20px;padding-right:20px">
                    <div class="container border" style="background-color: #110549;border-radius: 20px;width:50% " >
                        <h1>My First Bootstrap Page</h1>
                        <p>This is some text.</p>
                    </div>
                    <div class="container border" style="background-color: #110549;border-radius: 20px;width:50% " >
                        <h1>My First Bootstrap Page</h1>
                        <p>This is some text.</p>
                    </div>
                </div>
                <!-- <div class="row"><a href="unbook.php?rn=<?php echo $row['id'] . "&rt=d";?>" class="btn theme_btn_small button_hover" role="button" >Unbook</a></div></div> -->
                    <br></br>
            <?php 
                   }    
            ?>
        