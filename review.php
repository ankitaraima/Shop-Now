<?php
include_once('database.php');
$email=$_POST['Email'];
$ps=$_POST['Ps'];
$Msg=$_POST['Msg'];
$date=date("Y-m-d");
$sql="SELECT * FROM productrating WHERE Email='$email' AND Product_no='$ps'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $sql1="UPDATE productrating
    SET Feedback = '$Msg', Date= '$date'
    WHERE Email='$email' AND Product_no='$ps'";
    $result1=mysqli_query($conn,$sql1);
    echo 1;
}
else{
    $sql1="INSERT INTO productrating(Email,Product_no,Feedback,Date) VALUES('$email','$ps','$Msg','$date');";
    $result1=mysqli_query($conn,$sql1);
    echo 1;
}

?>