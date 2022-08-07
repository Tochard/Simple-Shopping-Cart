<?php
include_once "dbconn.php";

if (isset($_POST['addtocart'])){
    $productId = $_POST['productId'];


    $query = "SELECT * FROM products WHERE id = $productId";
    $query_run = mysqli_query($conn, $query);

    $product = mysqli_fetch_assoc($query_run);

    $productName = $product['productName'];
    $productPrice = $product['productPrice'];



    echo $productName;




}