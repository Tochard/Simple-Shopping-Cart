<?php
include_once "dbconn.php";

if (isset($_POST['addProduct'])){

    $productImg = $_FILES['productImg']['name'];
    $productName = $_POST['productName'];
    $productDesc = $_POST['productDesc'];
    $productOldPrice = $_POST['productOldPrice'];
    $productPrice = $_POST['productPrice'];
    $productQuantity = $_POST['productQuantity'];


    if ($productImg == "") {
        header("location: ../admin.php?error=EmptyimgField");
        exit();
    } 
    else if ($productName == "") {
        header("location: ../admin.php?error=EmptyNameField");
        exit();
    }
    else if ($productPrice == "") {
        header("location: ../admin.php?error=EmptyPriceField");
        exit();
    }
    else if ($productQuantity == "") {
        header("location: ../admin.php?error=EmptyQuantityField");
        exit();
    }else {
        // inserting infos into database(deposits)

        $query = "INSERT INTO products (productImg, productName, productDescription, productOldPrice, productPrice, productQuantity)
         VALUES ('$productImg', '$productName', '$productDesc', '$productOldPrice', '$productPrice', '$productQuantity')";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            move_uploaded_file($_FILES["productImg"]["tmp_name"], "../upload/" . $_FILES["productImg"]["name"]);

            $_SESSION['success'] = 'Uploaded';
            header("location: ../admin.php?ProductAdded");
            exit();
        }
    }
}