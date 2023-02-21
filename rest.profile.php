<?php
session_start();
if(isset($_POST['btn'])){
    $item_arr=array(
        "name"=>$_POST['item'],
        'price'=>$_POST['price'],
        'image'=>$_POST['img'],
        'quantity'=>$_POST['quantity']
    );
    
    $_SESSION['cart_item'][]=$item_arr;
    $count=count($_SESSION['cart_item']);
    //unset($_SESSION['cart_item']);
   
}






?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./rest.profile.css">
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
   
           <li> <a href=""><i class="fa fa-cart-shopping"></i><sup><?= $count=count($_SESSION['cart_item']);?></sup></a></li>        
           <li>  <a href="">sign in</a></li>
            <li><a href="" id="sign">Log out</a></li>
        </div>
    </header>
   <div class="items">
    <div class="container">
        <div class="searchbar">
            <div class="user">
                <h2>Welcome, User</h2>
            <p>Discover whatever you need easily!</p>
            </div>
            <div class="search">
                <input type="text" placeholder="Search Products...">
                <a href=""><i class="fa fa-search" id="search"></i></a>
            </div>
        </div>
     <div class="products">
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pasta</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="500" name="price">
                    <input type="hidden" value="Pasta" name="item">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pizza</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Burger</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1000.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Burger" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pasta</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="500" name="price">
                    <input type="hidden" value="Pasta" name="item">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pizza</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Burger</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1000.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pasta</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="500" name="price">
                    <input type="hidden" value="Pasta" name="item">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pizza</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Burger</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1000.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
         <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pasta</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="500" name="price">
                    <input type="hidden" value="Pasta" name="item">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pizza</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Burger</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1000.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
         <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pasta</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="500" name="price">
                    <input type="hidden" value="Pasta" name="item">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pizza</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Burger</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1000.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>

        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pasta</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="500" name="price">
                    <input type="hidden" value="Pasta" name="item">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pizza</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Burger</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1000.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pasta</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="500" name="price">
                    <input type="hidden" value="Pasta" name="item">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Pizza</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1500.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
        <div class="product">
            <div class="dis">
                <form action="/myphp-1/restaurant-1/rest.profile.php" method="POST">
                    <img src="./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png" alt="">
                    <h2>Burger</h2>
                    <h4>Almond brown suger Croissant</h4>
                    <p>Sweet croissant with topping almond and brown suger</p>
                    <h4><span>Rs.1000.00</span></h4>
                    <input type="number" id="quantity" value="1" name="quantity">
                    <input type="hidden" value="<img src='./img/d19e8e88-460d-45b3-9c71-d7ddb42258a6.png' >" name='img'>
                    <input type="hidden" value="1500" name="price">
                    <input type="hidden" value="Pizza" name="item">
                    <input type="submit" value="Add Cart" name="btn">
                    
                    
                </form>
            </div>
        </div>
      
            
        </div>
       
  
       
       

     </div>
     <div class="cart">
            

        
     <input type="submit" value="remove" id="remove">
       

            <?php
           
           echo "<div class='list'>";

            $total=0;
            if(isset($_SESSION['cart_item'])){
                foreach($_SESSION['cart_item'] as $key => $value){
                echo "

                
                
                <div class='cartitem'>
                <form action='/myphp-1/restaurant-1/rest.profile.php' method='POST'>
                <input type='hidden' name='item' value='".$value['name']."'>
                <h2>".$value['image']."".$value['name']."</h2>
  
                <div class='dis'>
                <h4> price Rs.".$value['price']."</h4>
                <h4> quantity".$value['quantity']."</h4>
                  <input type='submit' name='remove' id='remove' value='remove'>
                </form>
                
                
            
                </div>
               
            
                </div>
                
                
                ";
                
           
               
                $total+=$value['quantity']*$value['price'];
                }
                echo " </div>";
               
              
            }
            echo "
            <div class='total'>
            <h2>Total : Rs.".$total.".00</h2>
            
            </div>
            ";


            ?>

            <?php
            if(isset($_POST['remove'])){
                foreach($_SESSION['cart_item'] as $key => $value){
                    if($_POST['item']==$value['name']){
                        unset($_SESSION['cart_item'][$key]);
                        $_SESSION['cart_item']= array_values($_SESSION['cart_item']);
                        
                    }
                   

                }
                
                $count=count($_SESSION['cart_item']);
                
                
            }
            
            
           
            
            ?>
            
        </div>
    </div>



       
    
    
</body>
</html>