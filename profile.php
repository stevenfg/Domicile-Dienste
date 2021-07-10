<?php

session_start();
$c_name = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="image/favicon.png" type="image/png">
  <title>Home service provider</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
  <div class="row">
    <a href="index.php" style="padding-left: 300px; padding-top: 120px;"><img alt="Web Studio" class="img" src="image/arrow.png" height=50px border-radius: 50px; />

    </a>
  </div>

  <div class="box">
    <?php
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "dd");
    $c_name = $_SESSION['user'];
    $query = "select * from customers where username = '$c_name'";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
    ?>

      <h2 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif"><?php echo $row["username"] ?>'s Profile</h3>

        <div class="row" style="padding-bottom: 20px;">
          <div class="col-md-2" style="padding-left: 30px; width: 50%;float: left;">
            <img alt="Web Studio" class="img" src="image/default.png" height=200px" style="  border-radius: 50px; margin-left:50px; margin-top:20px" />
          </div>
          <div class="table" style="width: 50%; float: left;font-size:large; font-weight:500; color:aliceblue; padding-left:250px">
            <table style="font-family:'Times New Roman', Times, serif;">
              <tr align="center">
                <td align="right" style="padding-top: 18px; ">Name:</td>
                <td><input class="inp" type="text" value="<?php echo $row["username"]; ?>"></td>
              </tr>
              <tr>
                <td align="right" style="padding-top: 18px;">Address:</td>
                <td><input class="inp" type="text" value="<?php echo $row["address"]; ?>"></td>
              </tr>
              <tr>
                <td align="right" style="padding-top: 18px;">Phone:</td>
                <td><input class="inp" type="text" value="<?php echo $row["phone"]; ?>"></td>
              </tr>
              <tr>
                <td align="right" style="padding-top: 18px;">E-mail:</td>
                <td><input class="inp" type="text" value="<?php echo $row["email"]; ?>"></td>
              </tr>
              <tr>
                <td align="right" style="padding-top: 18px;">Gender:</td>
                <td><input class="inp" type="text" value="<?php echo $row["gender"]; ?>"></td>
              </tr>
              <tr>
                <td align="right" style="padding-top: 18px;margin-left: 200px;">Age:</td>
                <td><input class="inp" type="number" align="center" value="<?php echo $row["age"]; ?>"></td>
              </tr>
            </table>
          </div>
        </div>
      <?php } ?>
  </div>
</body>

</html>

<style>
  body {
    margin: 0;
    padding: 0;
    background-image: url("image/banner_bg.jpg");
    background-size: cover;
    font-family: sans-serif;
  }
  td{
    color: #75b5ff;
  }

  .inp {
    background: transparent;
    color: #fff;
    font-size: 28px;
    border: transparent;
  }

  .inp:active{
    border:transparent;
  }

  .noacc {
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

  a {
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
    top: 55%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 950px;
    /* padding-top: 2.5rem;
    padding-left: 2.5rem;
    padding-right: 2.5rem; */
    box-sizing: border-box;
    /* background: transparent; */
    background-color: #000000;
    backdrop-filter: blur(15px);
    box-shadow: 0 10px 60px 0px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 30px 30px 0px rgba(0, 0, 0, 0.1);
    -webkit-box-shadow: 1px 4px 10px 11px rgba(0, 0, 0, 0.3);
    -o-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 5px 30px 0px rgba(0, 0, 0, 0.1);
    border-radius: 50px;

  }

  .box h3 {
    margin: 0 0 1.875rem;
    ;
    padding: bottom;
    color: rgb(8, 1, 1);
    text-align: center;
  }

  .box h2 {
    margin: 0 0 1.875rem;
    ;
    padding: bottom;
    color: #fff;
    text-align: center;
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

  .box .inputBox input:focus~label,
  .box .inputBox input:valid~label,
  .box .inputBox input:not([value=""])~label {
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

  .inp {

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

  .box .inputBox input:focus~label,
  .box .inputBox input:valid~label,
  .box .inputBox input:not([value=""])~label {
    top: -1.125rem;
    left: 0;
    color: #0c0c0c;
    font-size: 0.75rem;
  }
</style>

</html>