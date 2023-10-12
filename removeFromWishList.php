<?php
include_once('database.php');

$Email=$_POST['Email'];
$Ps=$_POST['Ps'];
$s="INSERT INTO addtocart (Product_no,Email) VALUES ('{$Ps}','{$Email}')";
if(mysqli_query($conn,$s)){
    $sql="DELETE FROM wishlist WHERE Email='{$Email}' AND Product_no='{$Ps}'";
    if(mysqli_query($conn,$sql)){
        echo 1;
    }
    else{
        echo 0;
    }
}
else 0;


?>