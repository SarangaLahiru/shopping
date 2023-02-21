<?php
include "user.cart.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="./profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <header>
        <h2>FAST FOOD</h2>
        <div class="list">
            <li><a href="">Home</a></li>
        <li><a href="">Tracking</a></li>
        <li><a href="">Find food</a></li>
        <li><a href="">Login</a></li>
        </div>
        <div class="log">
           <li> <a href="product.dis.php"><i class="fa fa-cart-shopping"></i><sup><?=$count ?></sup></a></li>        
           <li>  <a href="">sign in</a></li>
            <li><a href="" id="sign">sign up</a></li>
        </div>
    </header>
    <div class="searchbar">
        <h2>find the best foods</h2>
       <div class="search">
        <input type="text" id="search" placeholder="search here...">
        <a href=""><i class="fa fa-search"></i></a>
       </div>
    </div>

<div class="products">
    <form action="product.dis.php" method="POST">
        <div class="item">
            <img src="./img/aca83e52-de2c-4d7f-ae96-af729fd3dfe1.png" alt="">
            <div class="dis">
                <p>Burger</p>
                    <div class="star">
                        <div class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
        
                        </div>
                        <h4>Rs.500.00</h4>
                    </div>
                    <input type="hidden" value="Burger" name="item">
                    <input type="hidden" value="500" name="price">
                    <a href="">Oreder Now</a>
    
                    <input type="submit" name="btn" value="add cart">
            </div>
        </div>
    </form> 
    <form action="product.dis.php" method="POST">
        <div class="item">
            <img src="./img/aca83e52-de2c-4d7f-ae96-af729fd3dfe1.png" alt="">
            <div class="dis">
                <p>SpecialPasta</p>
                    <div class="star">
                        <div class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
        
                        </div>
                        <h4>Rs.500.00</h4>
                    </div>
                    <input type="hidden" value="500" name="price">
                    <input type="hidden" value="SpecialPasta" name="item">
                    <a href="">Oreder Now</a>
    
                    <input type="submit" name="btn" value="add cart">
            </div>
        </div>
    </form> 
    <form action="product.dis.php" method="POST">
        <div class="item">
            <img src="./img/aca83e52-de2c-4d7f-ae96-af729fd3dfe1.png" alt="">
            <div class="dis">
                <p>Noodles</p>
                    <div class="star">
                        <div class="stars">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
        
                        </div>
                        <h4>Rs.500.00</h4>
                    </div>
                    <input type="hidden" value="500" name="price">
                    <input type="hidden" value="Noodles" name="item">
                    <a href="">Oreder Now</a>
    
                    <input type="submit" name="btn" value="add cart">
            </div>
        </div>
    </form> 
    <?php


?>
   


</div>   
</body>
</html>