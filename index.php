<?php
//start session
session_start();


require_once "./php/component.php";


if (isset($_POST['addtocart'])){
    
    if (isset($_SESSION['cart'])){
        $product_array_id = array_column($_SESSION['cart'],"productId");

        if(in_array($_POST['productId'], $product_array_id)){
            echo "<script> alert(product already added...</script>";
            echo "<script> window.location ='index.php'</script>";
        } else{
            $count = count($_SESSION['cart']);
            $product_array = array(
                'productId' => $_POST['productId']
            );

            $_SESSION['cart'][$count] = $product_array;
            // print_r($_SESSION['cart']);
        }

    }else{
        $product_array = array(
            'productId' => $_POST['productId']
        );

        //create new session
        $_SESSION['cart'][0] =$product_array;
    }

    // print_r($productId = $_POST['productId']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
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


        <div class="body">

        <?php
            require_once "./php/fectchproducts.php";
        ?>
            <section>
                <div class="cards">
                    <?php
                        if (mysqli_num_rows($query_run) > 0) {
                            while ($product = mysqli_fetch_assoc($query_run)) {
                                component($product['id'], $product['productImg'], $product['productName'], $product['productDescription'],
                                 $product['productOldPrice'], $product['productPrice'], $product['productQuantity']);
                            }
                        }
                    ?>
          
                </div>

            </section>
        </div>

    </div>
</body>

</html>