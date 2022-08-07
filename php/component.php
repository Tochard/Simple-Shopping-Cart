<?php

function component($productId,$productImg, $productName, $productDesc, $productOldPrice ,$productPrice, $productQuantity){  
    $element = "
    
    <div class=\"card\">
    <form action=\"index.php\" method=\"POST\">
        <div class=\"card-img\">
            <img src=\"./upload/$productImg\" alt=\"good\">
        </div>
        <div class=\"card-body\">
            <h4 class=\"card-title\">$productName
            </h4>
            <p class=\"card-text\">$productDesc
            </p>
            <h5 class=\"prices\">
                <span class=\"price\">$$productPrice</span>
                <small class=\"old-price\">$productOldPrice</small>
            </h5>
            <input name=\"productId\" type=\"hidden\" value=\"$productId\">
            <button class=\"addtocart\" name=\"addtocart\"> Add To Cart</button>
        </div>
    </form>
</div>
    
    ";
echo $element;
}


function cartelement($productImg, $productName, $productDesc, $productPrice){
    $element ="

    <div class=\"item\">
                    <form action=\"#\">
                        <div class=\"productdetails\">
                            <div class=\"cartimg\">
                                <img src=\"./upload/$productImg\" alt=\"product\">
                            </div>
                            <div class=\"pdesc\">
                                <h4>$productName</h4>
                                <p>$productDesc</p>
                                <h5>$$productPrice</h5>
                                <div>
                                    <button class=\"btn1\">Save</button>
                                    <button class=\"btn2\">Remove</button>
                                </div>

                            </div>

                            <div class=\"increaseQuantity\">
                                <div class=\"q\">
                                    <div class=\"plus\">

                                    </div>
                                    <div>
                                        <input type=\"text\" value=\"1\">
                                    </div>
                                    <div class=\"minus\">

                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

    
    ";
     
    echo $element;
}

