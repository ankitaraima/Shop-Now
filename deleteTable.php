<?php 
include_once('database.php');
session_start();

$serial=$_POST['serial'];
$table=$_POST['table'];
$field2=$_POST['field'];

$sql="DELETE FROM $table WHERE $field2= '$serial'";
if(mysqli_query($conn,$sql)){
    echo 1;
    
}
else{
   echo 0;

    
}

?>

