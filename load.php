<?php
$email=$_POST['Email'];
$ps=$_POST['Ps'];
$conn=mysqli_connect("localhost","root","","project") or die ("Connection Failed");
$sql="SELECT * FROM addtocart WHERE Email='$email' AND Product_no='$ps'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
   
    echo 1;

    }
else{

echo 0;
}

?>