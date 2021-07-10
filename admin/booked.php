<?php 
    
    session_start();
    $c_name=$_SESSION['user'];
    $V = 0;
?>

<!doctype html>
<html lang="en">
    <head>
        <link rel="icon" href="../image/favicon.png" type="image/png">
        <title>Home service provider</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="banner_area1">
    <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="../image/Logo.png" alt=""></a>
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

    <h2 style="color: #110549; text-align:center;">Booked Services</h2>
    
    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"dd");
                $query = "select * from salon where c_name='$c_name' ";
                $query_run = mysqli_query($connection,$query);
                $rows = mysqli_num_rows($query_run);
                $V += $rows;
               if($rows != 0){



                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
        <div class="container">
                       

                        <div class="row" style="background-color: #110549;border-radius: 20px;">
                            <div class="col-md-2">
                                <div>
                                <img alt="Web Studio" class="img" src="../image/default.png" height=180px" style="padding-top: 25px; padding-bottom: 20px;  border-radius: 50px;"/>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-10 ml-auto align-items-center mt-md-0" style="padding-bottom: 20px; "> <!--add d-flex to align vertically center -->
                                <div class="row">
                                <h2 style="color: #8AB9FF;padding-left:15px"><?php echo $row["name"]?></h2>
                                </div>
                                
                                <div class="table">
                                    <div style="width: 50%; float: left; font-size:large; font-weight:500">
                                        
                                        <table>
                                            <tr>
                                                <td align="right">Phone:</td>
                                                <td><?php echo $row["phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Service:</td>
                                                <td><?php echo $row["service"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Sub-service:</td>
                                                <td><?php echo $row["sub_service"]; ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div style="width: 50%; float: left;font-size:large; font-weight:500">
                                    <div style="padding-left: 120px;">
                                        <table >
                                            <tr>
                                                <td><h4 style=" padding-top:0px; color:#11E9FF">YOUR DETAILS</h4></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <table>
                                            <tr>
                                                <td align="right">Address:</td>
                                                <td><?php echo $row["address"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Phone:</td>
                                                <td><?php echo $row["c_phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Email:</td>
                                                <td><?php echo $row["c_phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td >Booked date/time:</td>
                                                <td><?php echo $row["date"]; ?>,  <?php echo $row["time"]; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                               
                                
                                <div class="row"><a href="unbook.php?rn=<?php echo $row['id'] . "&rt=a      ";?>" class="btn theme_btn_small button_hover" role="button" >Unbook</a></div>                            </div>
                        </div>
                    </div>
        <br></br>

        <?php 
                    }   
                    
                    
                }


                ?>
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"dd");
                $query = "select * from carpentry where c_name='$c_name' ";
                $query_run = mysqli_query($connection,$query);
                $rows = mysqli_num_rows($query_run);
                $V += $rows;
               
               if($rows != 0){ 
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <div class="container">
                        
                        <div class="row" style="background-color: #110549;border-radius: 20px;">
                            <div class="col-md-2">
                                <div>
                                <img alt="Web Studio" class="img" src="../image/default.png" height=180px" style="padding-top: 25px; padding-bottom: 20px;  border-radius: 50px;"/>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-10 ml-auto align-items-center mt-md-0" style="padding-bottom: 20px; "> <!--add d-flex to align vertically center -->
                                <div class="row">
                                <h2 style="color: #8AB9FF;padding-left:15px"><?php echo $row["name"]?></h2>
                                </div>
                                
                                <div class="table">
                                    <div style="width: 50%; float: left; font-size:large; font-weight:500">
                                        
                                        <table>
                                            <tr>
                                                <td align="right">Phone:</td>
                                                <td><?php echo $row["phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Service:</td>
                                                <td><?php echo $row["service"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Sub-service:</td>
                                                <td><?php echo $row["sub_service"]; ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div style="width: 50%; float: left;font-size:large; font-weight:500">
                                    <div style="padding-left: 120px;">
                                        <table >
                                            <tr>
                                                <td><h4 style=" padding-top:0px;color:#11E9FF">YOUR DETAILS<?php $row["phone"] ?></h4></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <table>
                                            <tr>
                                                <td align="right">Address:</td>
                                                <td><?php echo $row["address"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Phone:</td>
                                                <td><?php echo $row["c_phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Phone:</td>
                                                <td><?php echo $row["c_phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td >Booked date/time:</td>
                                                <td><?php echo $row["date"]; ?>,  <?php echo $row["time"]; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                               
                                
                                <div class="row"><a href="unbook.php?rn=<?php echo $row['id'] . "&rt=b";?>" class="btn theme_btn_small button_hover" role="button" >Unbook</a></div>                            </div>
                        </div>
                    </div>
                    <br></br>
                    <?php 
                    } 
                }   
                ?>
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"dd");
                $query = "select * from cleaning where c_name='$c_name' ";
                $query_run = mysqli_query($connection,$query);
                $rows = mysqli_num_rows($query_run);
                $V += $rows;
               if($rows != 0){
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                   <div class="container">
                        
                        <div class="row" style="background-color: #110549;border-radius: 20px;">
                            <div class="col-md-2">
                                <div>
                                <img alt="Web Studio" class="img" src="../image/default.png" height=180px" style="padding-top: 25px; padding-bottom: 20px;  border-radius: 50px;"/>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-10 ml-auto align-items-center mt-md-0" style="padding-bottom: 20px; "> <!--add d-flex to align vertically center -->
                                <div class="row">
                                <h2 style="color: #8AB9FF;padding-left:15px"><?php echo $row["name"]?></h2>
                                </div>
                                
                                <div class="table">
                                    <div style="width: 50%; float: left; font-size:large; font-weight:500">
                                        
                                        <table>
                                            <tr>
                                                <td align="right">Phone:</td>
                                                <td><?php echo $row["phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Service:</td>
                                                <td><?php echo $row["service"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Sub-service:</td>
                                                <td><?php echo $row["sub_service"]; ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div style="width: 50%; float: left;font-size:large; font-weight:500">
                                    <div style="padding-left: 120px;">
                                        <table >
                                            <tr>
                                                <td><h4 style=" padding-top:0px;color:#11E9FF">YOUR DETAILS<?php $row["phone"] ?></h4></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <table>
                                           <tr>
                                                <td align="right">Address:</td>
                                                <td><?php echo $row["address"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Phone:</td>
                                                <td><?php echo $row["c_phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Phone:</td>
                                                <td><?php echo $row["c_phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td >Booked date/time:</td>
                                                <td><?php echo $row["date"]; ?>,  <?php echo $row["time"]; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                               
                                
                                <div class="row"><a href="unbook.php?rn=<?php echo $row['id'] . "&rt=c";?>" class="btn theme_btn_small button_hover" role="button" >Unbook</a></div>                            </div>
                        </div>
                    </div>
                    <br></br>
                    <?php 
                                }  
                                
                            }

                            ?>
                <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"dd");
                $query = "select * from electrician where c_name='$c_name' ";
                $query_run = mysqli_query($connection,$query);
                $row1 = mysqli_num_rows($query_run);
                     
                $rows = mysqli_num_rows($query_run);
                $V += $rows;
                if($rows != 0){
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <div class="container">
                        
                        <div class="row" style="background-color: #110549;border-radius: 20px;">
                            <div class="col-md-2">
                                <div>
                                <img alt="Web Studio" class="img" src="../image/default.png" height=180px" style="padding-top: 25px; padding-bottom: 20px;  border-radius: 50px;"/>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-10 ml-auto align-items-center mt-md-0" style="padding-bottom: 20px; "> <!--add d-flex to align vertically center -->
                                <div class="row">
                                <h2 style="color: #8AB9FF;padding-top:20px;padding-left:15px"><?php echo $row["name"]?></h2>
                                </div>
                                
                                <div class="table">
                                    <div style="width: 50%; float: left; font-size:large; font-weight:500;">
                                        
                                        <table>
                                            <tr>
                                                <td align="right">Phone:</td>
                                                <td><?php echo $row["phone"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Service:</td>
                                                <td><?php echo $row["service"]; ?></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Sub-service:</td>
                                                <td><?php echo $row["sub_service"]; ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div style="width: 50%; float: left;font-size:large; font-weight:500;">
                                        <div style="padding-left: 120px;">
                                            <table >
                                                <tr>
                                                    <td><h4 style=" padding-top:0px; color:#11E9FF">YOUR DETAILS<?php $row["phone"] ?></h4></td>
                                                </tr>
                                            </table>
                                        </div>
                                        <table>
                                                <tr>
                                                    <td align="right">Address:</td>
                                                    <td><?php echo $row["address"]; ?></td>
                                                </tr>
                                                <tr>
                                                    <td align="right">Phone:</td>
                                                    <td><?php echo $row["c_phone"]; ?></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td >Booked date/time:</td>
                                                    <td><?php echo $row["date"]; ?>,  <?php echo $row["time"]; ?></td>
                                                </tr>
                                            </table>
                                    </div>
                                </div>
                               
                                
                                <div class="row"><a href="unbook.php?rn=<?php echo $row['id'] . "&rt=d";?>" class="btn theme_btn_small button_hover" role="button" >Unbook</a></div>                            </div>
                        </div>
                    </div>
                    <br></br>
                <?php 
                       }   
                    }
                       
                ?>

<?php

                if($V == 0){
                    echo "<h1 style='text-align:center;margin-top: 10vh;'>you have not booked any service </h1>";
                    echo "
                    <div style='width:100%;    text-align: center; margin-top:18vh;'> 
                    <a href='../services.php' class='btn theme_btn_small button_hover ' role='button' aria-disabled='false' style='padding-top:7px; padding-right:30px;' style='text-align:center;  '>Book Now</a>
                    </div>
                    ";
                }
                ?>
        </body>
        </html>