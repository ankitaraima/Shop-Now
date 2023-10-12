<?php
include_once('database.php');
session_start();
$be=$_POST['be'];
$bp=$_POST['bp'];
$sql="SELECT * FROM admindetails WHERE Email='$be' AND Password='$bp' AND Allow='allowed'";
$sql1="SELECT * FROM admindetails WHERE Email='$be'AND Allow='allowed'";
$sql2="SELECT * FROM admindetails WHERE Email='$be' AND Password='$bp' AND Allow='restricted'";

$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);

if(mysqli_num_rows($result)>0){
    // $_SESSION['admin']=$be;
    // header("Location:AdminHomepage.php");
    $_SESSION['admin']= $be;
    
    echo 1;
}
elseif(mysqli_num_rows($result1)>0){
//     echo "<div class='alert alert-danger  mt-3 px-5' role='alert' ><b>
//     Password is incorrect<b> 
//   </div>";
echo 2;
}
elseif(mysqli_num_rows($result2)>0){
    //     echo "<div class='alert alert-danger  mt-3 px-5' role='alert' ><b>
    //     Password is incorrect<b> 
    //   </div>";
    echo 3;
    }
else{
//     echo "<div class='alert alert-danger  mt-3 px-5' role='alert' ><b>
//     The User doesn't exist. Please create an account first<b> 
//   </div>";
echo 0;
}


?>