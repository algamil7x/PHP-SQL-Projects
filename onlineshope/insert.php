<?php

include('config.php');

if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name     = $_FILES['image']['name'];
    $image_up       = "images/".$image_name;

    // تنفيذ استعلام الإدخال والتحقق من النجاح
    $insert = "INSERT INTO prod(name, price, image) VALUES ('$NAME', '$PRICE', '$image_up')";
    if(mysqli_query($con, $insert)){
        // التحقق من رفع الصورة
        if(move_uploaded_file($image_location, 'images/'.$image_name)){
            echo "<script>alert('The product has been uploaded successfully')</script>";
        } else {
            echo "<script>alert('Failed to upload the image')</script>";
        }
    } else {
        // عرض الخطأ إذا فشل الإدخال
        echo "<script>alert('Error: " . mysqli_error($con) . "')</script>";
    }

    // توجيه المستخدم بعد العملية
    header('location: index.php');
    exit;
}

?>
