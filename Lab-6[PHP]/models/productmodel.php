<?php
   require_once('db.php');
  function add($products){
    $con=getConnection();
    $sql = "insert into products values('', '{$products['username']}', '{$products['buyingprice']}', '{$products['sellingprice']}', '{$products['display']}')";
    $status = mysqli_query($con, $sql);
    return $status;
  }


?>