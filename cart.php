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
    <title>Burger invasion|Mycart</title>
    <link rel="stylesheet" href="style.css">
    <style>
        h3{
            font-family:Arial, Helvetica, sans-serif;
            font-weight: bold;
            margin-top: 20px;
        }
        main{
                width:40% ;
                margin-top: 30px;
            }

         table{
             box-shadow: 1px 1px 10px silver;
         }   
         thead{
            background-color:cadetblue;
            color:azure;
            text-align: center;  
         }
         tbody{
            text-align: center;  
         }

    </style>
</head>
<body>
    <center><h3>MyOrders</h3></center>
    <?php
    include('config.php');
    $result=mysqli_query($con,"select * from addorder");
    while($row=mysqli_fetch_array($result))
    {
        echo"
        <center>
        <main>
            <table class='table'>
            <thead>
                <tr>
                    <th scope='col' >Product Name</th>
                    <th scope='col'>Product Price</th>
                    <th scope='col'>Delete product</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$row[name]</td>
                    <td>$row[price]</td>
                    <td><a href='delete_c.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
                </tr>
            </tbody>
            </table>
        </main>
    </center>
        
        ";}
    ?>
    <center>
        <a href="shop.php">Return To Products</a>
    </center>
</body>
</html>