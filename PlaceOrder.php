<?php
include_once('database.php');
$bn=$_POST['Bn'];
$be=$_POST['Be'];
$ba=$_POST['Ba'];
$bp=$_POST['Bp'];
$bc=$_POST['Bc'];
$pni=$_POST['Value'];
$ps=$_POST['Ps'];
$pp=$_POST['Total'];
$date=$_POST['Date'];
$datee=date("Ymdhis");


$SQL="SELECT * FROM buyerdetails WHERE Email='$be'";
$RESULT=mysqli_query($conn,$SQL);
if(mysqli_num_rows($RESULT)>0){
    while($ROW=mysqli_fetch_assoc($RESULT)){
        $serial=$ROW['Serial_no'];
    }
}
$order_id=$serial.$datee;

$sql1="SELECT * FROM stock WHERE Serial_no='$ps'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
 while($row=mysqli_fetch_assoc($result1)){
     $pn=$row['Product'];
     $pb=$row['Brand'];
     $pw=$row['Weight'];
     $pe=$row['Email'];
     $pa=$row['Available'];


     $sql2="SELECT * FROM sellerdetails WHERE Email='$pe'";
     $result2=mysqli_query($conn,$sql2);
     if(mysqli_num_rows($result1)>0){
         while($row2=mysqli_fetch_assoc($result2)){
             $Shop=$row2['Shop_name'];
         }
     }
 }

}
$Today=date('d/m/y');

// $conn=mysqli_connect("localhost","root","","project") or die ("Connection Failed");

$sql="INSERT INTO orders(Name,Email,Phone_no,Product_no,Product_name,Brand,no_item,Weight,Date,Price,Delivery_Status,Seller_Email,Order_Date,Address,Order_Id) VALUES('$bn','$be','$bp','$ps','$pn','$pb','$pni','$pw','$date','$pp','Order Confirmed','$pe','$Today','{$ba}','{$order_id}')";

if(mysqli_query($conn,$sql))
{
    $pni=intval($pni);
    $pa=$pa-$pni;
    $sql2="UPDATE stock
    SET Available = '$pa'
    WHERE Serial_no='$ps';";
    mysqli_query($conn,$sql2);
    echo 1;
}
else{
    echo 0;
}



?>