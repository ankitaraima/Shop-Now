<?php
include_once('database.php');

$id=$_POST['id'];
$sql="SELECT * FROM orders WHERE Serial_no='$id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $pn=$row['Product_no'];
        $pni=$row['no_item'];
        $status=$row['Delivery_Status'];
        if($status=="Delivered"){
            echo 2;
        
        }
        elseif($status=="Cancelled"){
            echo 3;
        
        }
        else{
        $sql1="UPDATE orders
        SET Delivery_Status = 'Cancelled'
        WHERE Serial_no='$id'";
        if(mysqli_query($conn,$sql1)){
            $sql2="SELECT * FROM stock WHERE Serial_no='$pn'";
            $result2=mysqli_query($conn,$sql2);
            if(mysqli_num_rows($result2)>0){
                while($row2=mysqli_fetch_assoc($result2)){
                    $pa=$row2['Available'];
                    $pa=intval($pa);
                    $pni=intval($pni);
                    $av=$pa+$pni;
                    $sql3="UPDATE stock
                    SET Available = '$av'
                    WHERE Serial_no='$pn'";
                    if(mysqli_query($conn,$sql3)){
                        echo 1;
                    }
                    else {
                        echo 0;
                    }
                }}
                else{
                    echo 0;
                }

        }
        else{
            echo 0;
        }

    }
   
}}




?>