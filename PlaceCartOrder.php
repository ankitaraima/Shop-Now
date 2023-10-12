<?php
ob_start();
session_start();
include_once('database.php');

if(!isset($_SESSION['buyer'])){
    header("Location:index.php");
}

include_once('database.php');
$br=0;
$confirm=0;
$bn=$_POST['Bn'];
$be=$_SESSION['buyer'];
$ba=$_POST['Ba'];
$bp=$_POST['Bp'];
$bc=$_POST['Bc'];
$date=$_POST['Date'];
$Today=date('d/m/y');

$myArray=$_POST['myArray'];
     // echo "$bn,$be,$bp,$ps,$pn,$pb,$noOfitem,$pw,$date,$price,$pe";
     $datee=date("Ymdhis");


     $SQL="SELECT * FROM buyerdetails WHERE Email='$be'";
     $RESULT=mysqli_query($conn,$SQL);
     if(mysqli_num_rows($RESULT)>0){
         while($ROW=mysqli_fetch_assoc($RESULT)){
             $serial=$ROW['Serial_no'];
         }
     }
     $order_id=$serial.$datee;

     $sqli="SELECT * FROM addtocart WHERE Email='$be'";
$resulti=mysqli_query($conn,$sqli);
if(mysqli_num_rows($resulti)>0){

while($row11=mysqli_fetch_assoc($resulti)){
    $ps=$row11['Product_no'];

    $sqlii="SELECT * FROM stock WHERE Serial_no='$ps'";
    $resultii=mysqli_query($conn,$sqlii);
    if(mysqli_num_rows($resultii)>0){
        while($row111=mysqli_fetch_assoc($resultii)){
            $pa=$row111['Available'];
                $pn=$row111['Product'];

            if($pa<=0){
                echo "<div class='alert alert-danger' role='alert'>
                sorry, $pn is out of stock now!!
              </div>";
                $br++;
            }
            else{
           
            if(!empty($myArray)){
                if(array_key_exists($ps, $myArray)){
                    $noOfitem=$myArray[$ps];
                    $noOfitem=intval($noOfitem);
                    // $pp=intval($pp);
                    // $price=$noOfitem*$pp;
                    
                }

                else{
                    $noOfitem=1;

                }

               
        }
        else{
            $noOfitem=1;
        }
        if($noOfitem>$pa){
            echo "<div class='alert alert-danger' role='alert'>
            only $pa packets are available for $pn
          </div>";
            $br++;
        }
    }
}
    }

}
}


if($br==0){
$sql="SELECT * FROM addtocart WHERE Email='$be'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row1=mysqli_fetch_assoc($result)){
        $ps=$row1['Product_no'];
        $sql1="SELECT * FROM stock WHERE Serial_no='$ps'";
        $result1=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result1)>0){
         while($row=mysqli_fetch_assoc($result1)){
             $pn=$row['Product'];
             $pb=$row['Brand'];
             $pw=$row['Weight'];
             $pe=$row['Email'];
             $pa=$row['Available'];
             $pp=$row['price'];
             if($pa>0){
             if(!empty($myArray)){
            if(array_key_exists($ps, $myArray)){
                $noOfitem=$myArray[$ps];
                $noOfitem=intval($noOfitem);
                $pp=intval($pp);
                $price=$noOfitem*$pp;
                
            }
            else{
                $noOfitem=1;
                $pp=intval($pp);
                $price=$pp;
            }}
            else{
                $noOfitem=1; 
                $pp=intval($pp);
                $price=$pp;
            }
            if($noOfitem<=$pa){
            $NewDate=Date('d/m/y', strtotime('+5 days'));
            $tommrow=Date('d/m/y', strtotime('+1 days'));
            if($date==$tommrow){
                $price=$price+50;
               }
             $status="Order Confirmed" ; 
            //  $sql2="SELECT * FROM sellerdetails WHERE Email='$pe'";
            //  $result2=mysqli_query($conn,$sql2);
            //  if(mysqli_num_rows($result2)>0){
            //      while($row2=mysqli_fetch_assoc($result1)){
            //          $Shop=$row2['Shop_name'];

            //      }
            //  }
       
             $sql4="INSERT INTO orders(Name,Email,Phone_no,Product_no,Product_name,Brand,no_item,Weight,Date,Price,Delivery_Status,Seller_Email,Order_Date,Address,Order_Id) VALUES('{$bn}','{$be}','{$bp}','{$ps}','{$pn}','{$pb}','{$noOfitem}','{$pw}','{$date}',{$price},'{$status}','{$pe}','{$Today}','{$ba}','{$order_id}')";

             if(mysqli_query($conn,$sql4))
             {
                // echo $sql4;
                 $pa=$pa-$noOfitem;
                 $sql5="UPDATE stock
                 SET Available = '$pa'
                 WHERE Serial_no='$ps';";
                 mysqli_query($conn,$sql5);
                 $confirm=1;
                   
             }
                 
             else{
                 echo "<div class='alert alert-danger' role='alert'>
                 Something went wrong.Please, try again later
               </div>";
             }

         }
         else{
            // echo "";
            echo "<div class='alert alert-danger' role='alert'>
            only $pa packets are available for $pn
          </div>";
            break;
         }
             
            
        }
        else{
            // echo "";
            echo "<div class='alert alert-danger' role='alert'>
            sorry, $pn is out of stock now!!
          </div>";
            break;
         }
       
    }
}

}
echo "<div class='alert alert-success' role='alert'>
Order Confirmed.Thank you.
</div>";
}
else{
   echo "<div class='alert alert-danger' role='alert'>
    Something went wrong.Please, try again later
  </div>";
}




// $conn=mysqli_connect("localhost","root","","project") or die ("Connection Failed");


}
// else{
//     echo "<div class='alert alert-danger' role='alert'>
//     Something went wrong.Please, try again later
//   </div>";
// }


?>