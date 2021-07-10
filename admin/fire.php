<?php 
    session_start();
    $admin=$_SESSION['admin'];
    $id=$_SESSION['id'];
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"dd");
    if($_GET['rt'] == 'a'){
    	$query = "delete from salon where id = $_GET[rn]";
    }
    if($_GET['rt'] == 'b'){
    	$query = "delete from carpentry where id = $_GET[rn]";
    }
    if($_GET['rt'] == 'c'){
    	$query = "delete from cleaning where id = $_GET[rn]";
    }
    if($_GET['rt'] == 'd'){
    	$query = "delete from electrician where id = $_GET[rn]";
    }
    $query_run = mysqli_query($connection,$query);
    if ($_SESSION = 'admin'){
    header("location:list.php");   
    }
    
?>