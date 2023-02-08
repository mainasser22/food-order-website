<?php

include('config.php');

if(isset($_POST['upload'])){
   $NAME=$_POST['name'];
   $PRICE=$_POST['price'];
   $IMAGE=$_FILES['image'];
   $image_location=$_FILES['image']['tmp_name'];
   $image_name=$_FILES['image']['name'];
   $image_up="images/".$image_name;
   $insert="INSERT INTO item (name,price,image) VALUES ('$NAME','$PRICE','$image_up')";
   mysqli_query($con,$insert);
   if(move_uploaded_file($image_location,'images/'.$image_name))
   {
       echo"<script>alert('The item has been uploaded')</script>";
   }
   else
   {
       echo"<script>alert('An error occurred The item was not uploaded')</script>";
   }
   header('location: index.html');



}

?>