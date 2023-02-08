<?php
include('config.php');
$id=$_GET['id'];
mysqli_query($con,"Delete FROM addorder WHERE id=$id");
header('location: cart.php');


?>