<?php
include('config.php');
$id=$_GET['id'];
$up=mysqli_query($con,"select * from item where id=$id" );
$data=mysqli_fetch_array($up);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Playfair+Display&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger invasion|Purchase confirmation</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input{
            display: none;
        }
        .main{
         width: 30%;
         padding: 20px; 
         box-shadow:1px 1px 10px red;
         margin-top: 10%;
        }

        button{
         font-weight: bold;
         background-color:brown;
            }
        
    </style>
</head>
<body>
    <center>
     <div class="main">
     <form action="insert_c.php" method="post">
         <h2>Do you really want to buy the product</h2>
         <input type="text" name='name' value='<?php echo $data['name']?>'>
         <br>
         <input type="text" name='price' value='<?php echo $data['price']?>'>
         <br>  
         <input type="text" name='id' value='<?php echo $data['id']?>'>
         <br>
         <button name="add" type ="submit" class='btn btn-warning'>Confirm</button>
         <br>
         <a href="shop.php">Return To Products</a>
    </form>

     </div>
    </center>
</body>
</html>