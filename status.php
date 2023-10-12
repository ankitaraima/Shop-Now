<?php
include_once('database.php');

$id=$_POST['id'];
$status=$_POST['status'];

if($status=="Order Confirmed"){
$sql="UPDATE orders
SET  Delivery_Status= 'Shipped'
WHERE Serial_no='$id';";
if(mysqli_query($conn,$sql)){
    echo 1;
}

}
elseif ($status=="Shipped") {
    $sql="UPDATE orders
    SET  Delivery_Status= 'Out For Delivery'
    WHERE Serial_no='$id';";
    if(mysqli_query($conn,$sql)){
        echo 1;
    }
  
    
}
elseif ($status=="Out For Delivery") {
    $today=date("d/m/y");
    $sql="UPDATE orders
    SET  Delivery_Status= 'Delivered',Delivery_Date='$today'
    WHERE Serial_no='$id';";
    if(mysqli_query($conn,$sql)){
        echo 1;
    }
   
    
}
elseif($status=="Delivered"){
    echo 2;
}
elseif($status=="Cancelled"){
    echo 3;
}
else{
    echo 0;
}
?>