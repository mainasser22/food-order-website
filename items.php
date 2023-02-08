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
    <title>Burger invasion|Items</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h3 {
            font-weight: bold;
            font-style: italic;
            margin-top:20px;
            
        }

        .card {
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right:10px;
        }
       main{
        width: 52%; 
        
       }
       .navbar-brand{
           margin-left:30px;
     
       }
       .btn{
        margin-bottom: 10px;
       }

    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html">Return | Upload</a>
    </nav>
    <center>
        <h3>All Available Items</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM item");
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <center>
         <main>
            <div class='card' style='width: 15rem;'>
             <img src='$row[image]' class='card-img-top' >
              <div class='card-body'>
                 <h5 class='card-title'>$row[name]</h5>
                 <p class='card-text'>$row[price]</p>
                 <a href='delete.php? id=$row[id]' class='btn btn-danger'>Delete Item</a>
                 <a href='update.php? id=$row[id]' class='btn btn-primary'>Update Item</a>
              </div>
            </div>
          </main>
        <center>
         ";
    }


    ?>
    

</body>

</html>