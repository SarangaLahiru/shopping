<?php


session_start();
  
if(isset($_POST['btn'])){
  
    $cart_arr=array(
        'name'=>$_POST['item'],
        'price'=>$_POST['price']
    );
    $_SESSION['cart_item'][]=$cart_arr;
    header("location:profile.php");
    

    



}



echo "
<table border='' >
<tr>
    <td>NO</td>
    <td>Name</td>
    <td>price</td>
    <td>action</td>
</tr>
";

$total=0;
    
if(isset($_SESSION['cart_item'])){
    foreach($_SESSION['cart_item'] as $key => $value){
        $index=$key+1;

        echo "
        <form action='/myphp-1/restaurant-1/user.cart.php' method='POST'>
        <input type='hidden' name='removeitem' value='".$value['name']."'>  
        <tr>      
            <td>".$index."</td>
            <td>".$value['name']."</td>
            <td>".$value['price']."</td>
            
            
        
           <td><input type='submit' name='remove' value='remove'></td>
        </tr>
        

</form>
       
        
        
        ";
        $total+=$value['price'];
       

    }
 

}
echo "

    
<td></td>
<td>total</td>
<td>".$total." </td>

</tr>





";

?>



