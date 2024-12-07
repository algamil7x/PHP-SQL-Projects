<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> My products</title>
</head>
<body>
<center>
    <h3>My product</h3>
</center>
    <?php
        include('config.php');
        $result = mysqli_query($con, "SELECT * FROM addcard");
        while ($row = mysqli_fetch_array($result)) {
            echo"
            </center> 
                <main>
                    <table>
                        <thead>
                            <tr>
                                <th scope='col'>product name</th>
                                <th scope='col'>product price</th>
                                <th scope='col'>delete product</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$row[name]</td>
                                <td>$row[price]</td>
                                <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>delete</a></td>
                            </tr>
                        </tbody>
                    </table>
                </main>
            </center> ";
        }
    ?>

</body>
</html>
