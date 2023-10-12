<?php
include_once('database.php');
$email=$_POST['Mail'];
$ps=$_POST['Ps'];
$sql="SELECT * FROM productrating WHERE Email='$email' AND Product_no='$ps'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
   while($row=mysqli_fetch_assoc($result)) {
    $l=$row['likeOnFeedback'];
    if(empty($l)){
        $l=0;
    }
   }
   $l=$l+1;
   $sql1="UPDATE productrating
   SET likeOnFeedback = '$l'
   WHERE Email='$email' AND Product_no='$ps'";
   $result1=mysqli_query($conn,$sql1);
   echo 1;
}
else{
  
}

?>