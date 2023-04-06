<?php
   require_once('../models/productmodel.php');

   if(isset($_REQUEST['submit'])){
        
    $username = $_REQUEST['username'];
    $buyingprice = $_REQUEST['buyingprice'];
    $sellingprice = $_REQUEST['sellingprice'];

    if($username == "" && $password == "" && $sellingprice == ""){
        echo "null data found...";
    }else{

        $products = ['username'=>$username, 'buyingprice'=> $buyingprice, 'sellingprice'=> $sellingprice];
        $status = add($products);
        
        if($status){
            header('location: ../views/display.php');
        }else{
            echo "DB error, please try again";
        }
    }

}else{
    
    header('location: ../views/addProduct.php');
}




?>