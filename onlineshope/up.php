<?php

include('config.php');

if(isset($_POST['updata'])){
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name     = $_FILES['image']['name'];
    $image_up       = "images/".$image_name;

    $updata = "UPDATA prod SET name='$NAME' , price='$PRICE' , image='$image_up' WHERE id=$ID ";
    if(mysqli_query($con, $updata)){
        
        if(move_uploaded_file($image_location, 'images/'.$image_name)){
            echo "<script>alert('The product has been updata successfully')</script>";
        } else {
            echo "<script>alert('Failed to upload the image')</script>";
        }
    } else {
        // عرض الخطأ إذا فشل الإدخال
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }

    // توجيه المستخدم بعد العملية


}
header('location: product.php');
?>
