<?php
session_start();

require_once "./php/dbconn.php";
require_once "./php/component.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="file:///C:\xampp\htdocs\Shopping Cart\shopping\assets\css\all.css">



</head>

<body>
    <div class="container">

        <div class="header">
            <nav>
                <div class="nav-links">
                    <div class="logo"><a href="index.php">Shopping Cart</a></div>
                    <div class="cartinfo">
                        <div class="cart"><a href="cart.php"><i class="fa fa-home fa-1x"></i> Cart
                                <span class="num">
                                    <?php
                                    if (isset($_SESSION['cart'])) {
                                        $count = count($_SESSION['cart']);
                                        echo $count;
                                    } else {
                                        echo 0;
                                    }
                                    ?>

                                </span>

                            </a>
                        </div>


                    </div>
                </div>
            </nav>
        </div>

        <div class="cartbody">

            <div class="cartproducts">
                <h1>My Cart</h1>
                <?php
                if (isset($_SESSION['cart'])) {
                    require_once "./php/fectchproducts.php";
                    $product_id = array_column($_SESSION['cart'], "productId");

                    if (mysqli_num_rows($query_run) > 0) {
                        while ($product = mysqli_fetch_assoc($query_run))
                            foreach ($product_id as $ids) {
                                if ($product['id'] == $ids) {
                                    cartelement(
                                        $product['productImg'],
                                        $product['productName'],
                                        $product['productDescription'],
                                        $product['productPrice']
                                    );
                                }
                            }
                    }
                } else {
                    echo "<h2> cart Empty</h2>";
                }
                ?>
            </div>
            <div class="payment">
                <div class="paym">
                    <h1>Price Detail</h1>
                    <!-- <hr> -->
                    <div class="pay">
                        <div>
                            <h2>Price(
                                <?php
                                if(isset($_SESSION['cart'])){
                                    $count = count($_SESSION['cart']);
                                    echo $count;
                                }
                                else{
                                    echo 0;
                                }
                                ?>
                                items)</h2>
                        </div>
                        <div>
                            <h2>$240</h2>
                        </div>
                        <div>
                            <h2>Delivery Charges</h2>
                        </div>
                        <div>
                            <h2><span>FREE</span></h2>
                        </div>


                    </div>
                    <hr>
                    <div class="pay">

                        <div>
                            <h2>Total Amount</h2>
                        </div>
                        <div>
                            <h2>$240</h2>
                        </div>


                    </div>
                    <hr>
                    <div class="bt"><button>Procced Payment</button></div>
                </div>


            </div>

        </div>










    </div>
</body>

</html>