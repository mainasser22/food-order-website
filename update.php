<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Playfair+Display&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger invasion |Update item</title>
    <link rel="stylesheet" href="style.css">
    <style>
      .main{
        margin-top: 100px;
      }
    </style>
</head>
<body>
    <?php
    include('config.php');
    $id=$_GET['id'];
    $up=mysqli_query($con, "select * from item where id=$id");
    $data = mysqli_fetch_array($up);
    
    ?>
    <center>
         <div class="main">
           <form method="post" action="up.php" enctype="multipart/form-data">
             <img src="images/up.jpg" alt="up" width="450px">
             <br>
             <input type="text" name='id' value='<?php echo $data['id']?>'>
             <br>
             <input type="text" name='name' value='<?php echo $data['name']?>'>
             <br>
             <input type="text" name='price' value='<?php echo $data['price']?>'>
             <br>
             <input type="file" name='image' id="file" style='display:none;'>
             <label for="file">Update Image</label>
             <button name='update' type='submit'>Edit Item</button>
             <br>
             <a href="items.php">Return To Items</a>
            
           </form>
          </div>
          <br>
          <footer>Designed and developed by Mai Nasser @2022</footer>
    </center>
</body>
</html>
