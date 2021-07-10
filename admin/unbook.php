<?php 
    session_start();
    $c_name=$_SESSION['user'];
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"dd");
    if($_GET['rt'] == 'a'){
    	$query = "update salon set c_name = null, c_id = null, service = null,sub_service = null,c_phone = null,address = null,date = null,time = null,status = 0 where id = $_GET[rn]";
    }
    if($_GET['rt'] == 'b'){
    	$query = "update carpentry set c_name = null, c_id = null, service = null,sub_service = null,c_phone = null,address = null,date = null,time = null,status = 0 where id = $_GET[rn]";
    }
    if($_GET['rt'] == 'c'){
    	$query = "update cleaning set c_name = null, c_id = null, service = null,sub_service = null,c_phone = null,address = null,date = null,time = null,status = 0 where id = $_GET[rn]";
    }
    if($_GET['rt'] == 'd'){
    	$query = "update electrician set c_name = null, c_id = null, service = null,sub_service = null,c_phone = null,address = null,date = null,time = null,status = 0 where id = $_GET[rn]";
    }
    $query_run = mysqli_query($connection,$query);
    if ($_SESSION = 'c_name'){
    header("location:booked.php");   
    }
    else{
        header("location:admin_dashboard.php");
    }
?>