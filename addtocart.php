<?php
$Email=$_POST['Email'];
$Ps=$_POST['Ps'];
include_once('database.php');

// $conn=mysqli_connect("localhost","root","","project") or die ("Connection Failed");
$sql="SELECT * FROM wishlist WHERE Email='{$Email}' AND Product_no='{$Ps}'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $sql1="DELETE FROM wishlist WHERE Email='{$Email}' AND Product_no='{$Ps}'";
    $result1=mysqli_query($conn,$sql1);
    echo 0;

    }
else{
$sql2="INSERT INTO wishlist(Email,Product_no) VALUES('{$Email}','{$Ps}')";
$result2=mysqli_query($conn,$sql2);
echo 1;
}

?>