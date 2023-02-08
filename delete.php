<?php
include('config.php');
$id =$_GET['id'];
mysqli_query($con,"DELETE FROM item WHERE id=$id");
header('location: items.php');

?>