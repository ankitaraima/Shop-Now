<?php
include_once('database.php');
session_start();
$ss=$_POST['ss'];
$type=$_POST['type'];
$email=$_POST['email'];
if($type=='Seller'){
    $ReportedByType='Buyer';
    $ReportedBy=$_SESSION['buyer'];

    $s="SELECT * FROM sellerdetails WHERE Serial_no='$ss'";
    $r=mysqli_query($conn,$s);
    if(mysqli_num_rows($r)>0){
        while($ro=mysqli_fetch_assoc($r)){
            $Email=$ro['Email'];
        }
        $sql="SELECT * FROM reports WHERE Email='$Email' AND ReportedBy	='$ReportedBy' AND 	ReportedByType='$ReportedByType' AND Type='$type'";

        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo 2;
        }
        else{
            $sql1="INSERT INTO reports(Email,Type,ReportedBy,ReportedByType) VALUES('$Email','$type','$ReportedBy','$ReportedByType')";
            if(mysqli_query($conn,$sql1)){
                echo 1;
            }
            else{
                echo 0;
            }
        }
    }

}
elseif($type=='Buyer'){
    $ReportedByType='Seller';
    $ReportedBy=$_SESSION['email'];

    $s="SELECT * FROM buyerdetails WHERE Serial_no='$ss'";
    $r=mysqli_query($conn,$s);
    if(mysqli_num_rows($r)>0){
        while($ro=mysqli_fetch_assoc($r)){
            $Email=$ro['Email'];
        }
        $sql="SELECT * FROM reports WHERE Email='$Email' AND ReportedBy	='$ReportedBy' AND 	ReportedByType='$ReportedByType' AND Type='$type'";

        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            echo 2;
        }
        else{
            $sql1="INSERT INTO reports(Email,Type,ReportedBy,ReportedByType) VALUES('$Email','$type','$ReportedBy','$ReportedByType')";
            if(mysqli_query($conn,$sql1)){
                echo 1;
            }
            else{
                echo 0;
            }
        }
    }

}
?>