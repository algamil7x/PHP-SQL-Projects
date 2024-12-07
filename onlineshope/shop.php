

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <style>
        .card{
            float: right;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 20px;
        }
        main{
            width: 60%;
        }
        .navbar-brand{
            margin-left: 70px;
            color:beige;
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="card.php">MyCard</a>
    </nav>
    <center>
        <h3>Available products</h3>
        
    </center>
    <?php
        include('config.php');
        $result = mysqli_query($con, "SELECT * FROM prod");
        while($row = mysqli_fetch_array($result)){
            echo"
            <center>
            <main>
                <div class='card' style='width: 15rem;'>
                    <img src='$row[image]' class='card-img-top' alt='...>
                    <div class='card-body'>
                        <h5 class='card-title'>$row[name]</h5>
                        <p class='card-text'>$row[price]</p>
                        <a href='val.php? id=$row[id]' class='btn btn-success'>Add to cart</a>
                    </div>
                </div>
            </main> 
            <center>

            ";
        }
    ?>


</body>
</html>

