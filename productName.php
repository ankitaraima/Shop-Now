<?php
include_once('database.php');
$ps=$_POST['Ps'];
$pni=$_POST['Pni'];
$pid=$_POST['Pid'];


$sql="DELETE FROM orders WHERE Serial_no='$ps'";

if(mysqli_query($conn,$sql)){
    $sql2="SELECT * FROM stock WHERE Serial_no='$pid' ";
    $result2=mysqli_query($conn,$sql2);
        if(mysqli_num_rows($result2)>0){
            while($row2=mysqli_fetch_assoc($result2)){

                $pa=$row2['Available'];
                $pa=intval($pa);
                $pni=intval($pni);
                $ni=$pa+$pni;
                $sql1="UPDATE stock
                SET Available = '$ni'
                WHERE Serial_no='$pid' ";
                if(mysqli_query($conn,$sql1)){
                    echo 1;
                }
                else{
                    echo 0;
                }
            }
        }
    }
   


else{
    echo 0;
}

?>