<?php
include_once "dbconn.php";

    $query = "SELECT * FROM products ORDER BY id DESC";
    $query_run = mysqli_query($conn, $query);
