<?php
include_once('database.php');

$sql=$_POST['sql'];
$tabname=$_POST['tabname'];
$sql2 = "SHOW TABLES LIKE '$tabname'";
$result2=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result2)>0){
    echo "Table already exists";
}
else{
    if(mysqli_query($conn,$sql)){

        echo "Table is created successfully";
    }
    else{
        echo "Something went wrong";
    }
}

?>
