<?php 
include_once('database.php');
$table=$_POST['id'];
$sql="DROP TABLE $table";
if(mysqli_query($conn,$sql)){
    // header("Location:Adminddatabase.php");
    echo 1;
}
else{
    echo 0;
}

?>