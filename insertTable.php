<?php 
include_once('database.php');
$sql=$_POST['sql'];

if(mysqli_query($conn,$sql)){
    // header("Location:Adminddatabase.php");
    echo 1;
}
else{
    echo 0;
}
// $result=(mysqli_query($conn,$sql));
// echo $result;
?>