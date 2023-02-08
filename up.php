<?php

include('config.php');

if(isset($_POST['update'])){
   $id =$_POST['id'];
   $NAME=$_POST['name'];
   $PRICE=$_POST['price'];
   $IMAGE=$_FILES['image'];
   $image_location=$_FILES['image']['tmp_name'];
   $image_name=$_FILES['image']['name'];
   $image_up="images/".$image_name;
   $update=" UPDATE item SET name='$NAME', price='$PRICE', image='$image_up' WHERE id =$id";
   mysqli_query($con,$update);
   if(move_uploaded_file($image_location,'images/'.$image_name))
   {
       echo"<script>alert('The Item has been updated')</script>";
   }
   else
   {
       echo"<script>alert('An error occurred. The item has not been updated')</script>";
   }
   header('location: items.php');



}

?>