<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Shopping Cart</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <div class="container">

        <div class="header">
            <nav>
                <div class="nav-links">
                    <div class="logo">Admin Shopping Cart</div>
                    <div class="cartinfo">
                        <div class="cart">Welcome</div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="adminbody">

            <div class="addproduct">
                <div class="heading">
                    <h2>Add Products</h2>
                </div>
                <div class="inputproduct">
                    <form action="./php/products.php" method="POST" enctype="multipart/form-data">
                        <div class="inputs">
                            <label>Product Image</label>
                            <div>
                                <input type="file" name="productImg">
                            </div>
                        </div>

                        <div class="inputs">
                            <label>Product Name</label>
                            <div>
                                <input type="text" name="productName">
                            </div>
                        </div>

                        <div class="inputs">
                            <label>Description</label>
                            <div>
                                <input type="text" name="productDesc">
                            </div>
                        </div>

                        <div class="inputs">
                            <label>Old Price</label>
                            <div>
                                <input type="text" name="productOldPrice">
                            </div>
                        </div>
                        <div class="inputs">
                            <label>Price</label>
                            <div>
                                <input type="text" name="productPrice">
                            </div>
                        </div>

                        <div class="inputs">
                            <label>Quantity</label>
                            <div>
                                <input type="number" name="productQuantity">
                            </div>
                        </div>
                        
                        <div class="inputs">
                            <button type="submit" name="addProduct">Add Products</button>
                        </div>
                    </form>


                </div>
            </div>

        </div>


    </div>
</body>

</html>