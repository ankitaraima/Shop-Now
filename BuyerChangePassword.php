<?php
session_start();
include_once('database.php');
$email=$_SESSION['buyer'];
$old=$_POST['Old'];
$newpass=$_POST['Newpass'];
$confirm=$_POST['confirm'];
$sql="SELECT * FROM buyerdetails WHERE Email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $password=$row['Password'];
        if($password==$old){
            if($newpass==$confirm){
                $sql1="UPDATE buyerdetails
                SET Password = '$newpass'
                WHERE Email='$email';";
                if(mysqli_query($conn,$sql1)){
                    echo "<div class='alert alert-success' role='alert'>
                    Password is changed successfully
                  </div>
                  ";
                }
                else{
                    echo " <div class='alert alert-danger' role='alert'>
                    Something went wrong,please try again later!!
                  </div>";
                }
            }
            else{
                echo " <div class='alert alert-danger' role='alert'>
            New password and the confirm password should be same!!
          </div>";
            }
        }
        else{
            echo " <div class='alert alert-danger' role='alert'>
            Password is incorrect!!
          </div>";
        }
    }
}
?>