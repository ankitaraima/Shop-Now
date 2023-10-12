<?php
include_once('database.php');
if(isset($_POST["Search"])){
    $Search=$_POST["Search"];
    $sql="SELECT * FROM stock WHERE Product LIKE '%{$Search}%' OR Brand LIKE '%{$Search}%' OR Diet_Type LIKE '%{$Search}%'OR Type LIKE '%{$Search}%' ";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($rows=mysqli_fetch_assoc($result)){
            // $ps=$rows['Serial_no'];
            //     echo $ps;
            //     echo '|';
            $pn=$rows['Product'];
            $ps=$rows['Serial_no'];
            echo "<a href='BuyerProductView.php?id=$ps' style='text-decoration:none'><div style='width:100%; border-bottom:1px solid rgb(0,0,0,0.200);padding: 0.5rem 1rem 0.2rem 1rem;justfy-content:center' >
            <p>$pn</p></div><a>";
            }
        }
    
    else{
        echo " <div style='width:100%; border-bottom:1px solid rgb(0,0,0,0.200);padding: 0.5rem 1rem 0.2rem 1rem;justfy-content:center' >
        <p style='color:rgb(0,0,0,0.500)'>No item found</p></div>";
    }

}




?>