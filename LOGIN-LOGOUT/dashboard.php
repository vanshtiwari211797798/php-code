<?php
session_start();
if(!isset($_SESSION['username'])){
    header('Location:login.php');
}
    
?>
Welcome to dashboard <?=$_SESSION['username']?>
<a href="logout.php">Logout</a>