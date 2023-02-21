<?php

session_start();

if(isset($_POST['remove'])){


   
    
    foreach($_SESSION['cart_item'] as $key => $value){
        if($value['name']===$_POST['removeitem']){

            unset($_SESSION['cart_item'][$key]);
            $_SESSION['cart_item']= array_values($_SESSION['cart_item']);
           header("location:product.dis.php");
            
        }

    }
}
$count=count($_SESSION['cart_item']);
?>
