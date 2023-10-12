<?php
include_once('database.php');
$ss=$_POST['ss'];
$allow=$_POST['allow'];
if($allow=="allowed"){
$sql="UPDATE admindetails
SET Allow = 'restricted'
WHERE Serial_no='$ss';";
if(mysqli_query($conn,$sql)){
    echo 1;
}
else{
    echo 0;
}
}
elseif($allow=="restricted"){
    $sql="UPDATE admindetails
    SET Allow = 'allowed'
    WHERE Serial_no='$ss';";
    if(mysqli_query($conn,$sql)){
        echo 1;
    }
    else{
        echo 0;
    }
}
else{
    echo 0;
}
?>
