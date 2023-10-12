<?php
include_once('database.php');

$Email=$_POST['Email'];
$Ps=$_POST['Ps'];

$sql="DELETE FROM addtocart WHERE Email='{$Email}' AND Product_no='{$Ps}'";
if(mysqli_query($conn,$sql)){
    echo 1;
}
else{
    echo 0;
}

?>