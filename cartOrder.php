<?php
ob_start();
session_start();
include_once('database.php');
if(isset($_SESSION['email'])){
  unset($_SESSION['email']);

}

if(!isset($_SESSION['buyer'])){
    header("Location:index.php");
}

// $ps=$_GET['id'];
// $_SESSION['Email']=$em;
$email=$_SESSION['buyer'];
?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" sizes="250x250" href="uploads/logo3.png">
   
    <title>Shop Now</title>
    <style>

*{
    padding:0;
    margin:0;
}
/* #loading{
position:fixed;
width:100%;
height:100vh;
background:#fff url('uploads/navGIF.gif') no-repeat  center;
z-index: 999999;


} */
body{
  background-color:rgba(88, 88, 88, 0.856);
  background-size: cover;
  background-image:url("uploads/b1.jpg");
  background-blend-mode: lighten;
}
.content{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}


.fancy-link{
  text-decoration: none;
  color:rgb(6, 94, 132);
  position:relative;
  font-size:20px;
}
.fancy-link::after{
content:'';
position:absolute;
left:0;
bottom: 0;
width:100%;
height:2px;
background-color: currentColor;

transform:scaleX(0);
transform-origin:right;
transition:transform 250ms ease-in;
}
.fancy-link:hover::after{
  transform: scaleX(1);
  transform-origin: left;
}
.Button{
  position: relative;
  display:flex;

  height: 6vh;
  margin:2em 0 1rem 0.25em;
  width:15em;
  cursor: pointer;
  border:2px solid rgb(6, 94, 132);
    color:rgb(6, 94, 132);
  text-decoration: none;
  background: rgba(255, 255, 255, 0);

  text-decoration: none;
  color:rgb(6, 94, 132);
  font-size:1rem;
  font-weight: bold;
  padding:0.5em 0.5em;
  z-index:1;
  align-items: center;
  vertical-align: middle;
  text-align: center;
  justify-content: center;
  border-radius: var(--radius-4);
    box-shadow: var(--shadow-3);
}
input{
    color:black;
    
}
.Button::after{
 content:'';
 position: absolute;
 color:white;
 width:100%;
 height: 100%;
 border-radius: var(--radius-5);
 background-color:rgb(6, 94, 132) ;
 top:0;
 left:0;
 z-index: -1;
 transition:transform 200ms ease-in;
}
.Button:hover{
    color:white;
}
.Button-one::after{
    border-radius: var(--radius-4);
  transform: scaleX(0);
  transform-origin: left;
  transform-origin: right;
  color:white;
}
.Button-one:hover::after{
    border-radius: var(--radius-4);
  transform: scaleX(1);
  transform-origin: left;
  color:white;
}



.Button1{
  position: relative;
  display:flex;

  height: 6vh;
  margin:2em 0 1rem 0.25em;
  width:15em;
  cursor: pointer;
  border:2px solid  rgb(243, 35, 35);
    color: rgb(243, 35, 35);;
  text-decoration: none;
  background: rgba(255, 255, 255, 0);

  text-decoration: none;
  color: rgb(243, 35, 35);
  font-size:1rem;
  font-weight: bold;
  padding:0.5em 0.5em;
  z-index:1;
  align-items: center;
  vertical-align: middle;
  text-align: center;
  justify-content: center;
  border-radius: var(--radius-4);
    box-shadow: var(--shadow-3);
}

.Button1::after{
 content:'';
 position: absolute;
 color:white;
 width:100%;
 height: 100%;
 border-radius: var(--radius-5);
 background-color: rgb(243, 35, 35); 
 top:0;
 left:0;
 z-index: -1;
 transition:transform 200ms ease-in;
}
.Button1:hover{
    color:white;
}
.Button-one1::after{
    border-radius: var(--radius-4);
  transform: scaleX(0);
  transform-origin: left;
  transform-origin: right;
  color:white;
}
.Button-one1:hover::after{
    border-radius: var(--radius-4);
  transform: scaleX(1);
  transform-origin: left;
  color:white;
}
.photo{
    position: relative;
    height:35vh;
    width:35vh;
    border-radius:360px ;
    /* border-radius: var(--radius-8); */
    box-shadow: 5px 5px 20px rgba(43, 42, 42, 0.445);


    margin:2rem 4rem;
    border:4px solid rgb(6, 94, 145);

}
/* width */
#scroll::-webkit-scrollbar {
   width: 20px;
}

/* Track */
#scroll::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 15px;
}
 
/* Handle */
#scroll::-webkit-scrollbar-thumb {
    background: rgba(88, 88, 88, 0.26);
  border-radius: 15px;
}

/* Handle on hover */
#scroll::-webkit-scrollbar-thumb:hover {
 background: rgba(88, 88, 88, 0.61); 
}
.media-scroller{
    --spacer: 1rem;
    /* display: grid; */
    gap: 1rem;
   display: flex;
  

    padding: 0  1rem  1rem;
    overflow-x:auto; 
     overscroll-behavior-inline: contain;

}
.media-element{
    /* display: grid; */
    /* grid-template-rows: min-content; */
    gap: 1rem;
    padding:1.5rem;
    width: 20rem;
    background:white;
    border-radius: 10px;
    box-shadow: 4px 4px 10px rgb(0,0,0,0.400);
    align-items: center;
    height:30rem;

}

.media-element:hover{
    background-color:rgb(6, 94, 145,0.100) ;
}
.ProductButtons{
    align-items: center;
    justify-content: center;
    margin:2rem 1rem;
}
.productData{
    align-items: center;
    justify-content: center;
    margin:2rem 1rem;
    width:50rem;
}
.heading{
    
}
.productData > p{
    color:rgb(0,0,0,0.500);
    margin: 1rem 0;


}
.checked {
  color: orange;
}
.media-element > img{
    inline-size: 100%;
   aspect-ratio: 16/9;
   border-radius: 1rem;
    width:15rem;
    height:15rem;
   margin: 0.5rem 0 0.5rem 0.5rem;
}


.like1{
  font-size:36px;
  margin:-2.5rem 0 0 12rem;
   color:rgba(131, 131, 131, 0.521);
   cursor: pointer;
}
.like{
  font-size:36px;
  margin:-2.5rem 0 0 12rem;
   color:red;
   cursor: pointer;
}
.heading:hover{
  text-decoration: underline;
}
.star{
  padding:2rem;
  /* border:2px solid rgb(0,0,0,0.300); */
  border-radius: 20px;
  width:20rem;
  box-shadow: 4px 4px 10px rgb(0,0,0,0.400);

  /* display: flex; */
  background-color: rgb(255,255,255,0.500);
}
.fa-star{
  color:rgba(131, 131, 131, 0.521);
  cursor: pointer;
  
}
#star > p{
  width: 100%;
}
#star{
  width:100%;
  align-items: center;
  justify-content: center;
  display: flex;


}

#rating p {
  color:rgb(6, 94, 145) ;
  margin: 32px;
  font-size:28px;
  font-weight:bolder;
}
.checked{
  color:yellow;
}
.data{
    width:100%;
}
.loginDetails{
    /* height:5rem; */
    width:100%;
    background-color:white;
    box-shadow: 2px 2px 20px rgb(0,0,0,0.300);
    margin:1rem 0rem;
    /* border-radius: 10px; */
    /* padding: 1rem; */
    display: flex;


}
#login > p{
    /* padding: 0 1rem; */
   font-size: 16px;
   margin:0.2rem 0 0.2rem 0;
   font-weight: bold;
   color:rgb(0,0,0,0.600);
}
#summary{
    height:5rem;
    width:100%;
    background-color:blue;
}
.number{
    height:1.5rem;
    width:1.5rem;
    text-align:center;
    justify-content: center;
    background-color: grey;
    color:white;
    font-weight: bolder;
    margin:1rem;
    
}
#login{
    display: block;
    width: 10rem;
    margin:0.5rem 1rem;
}
#log{
    display: flex;
}
.order .inbtn:hover{
	background:rgb(32, 112, 1);

}
.order  .debtn:hover{
	background:rgb(124, 9, 9);

  
}
#AddAddress input{
  padding:0.5rem;
  margin-bottom: 1rem;
}
#AddAddress label{
  padding:0.5rem;
  font-size:18px;
  color:rgb(6, 94, 145);
  font-weight:bolder;

}
</style>


    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " >
<div id="loading"></div>

<?php
$email=$_SESSION['buyer'];
$sql="SELECT * FROM buyerdetails WHERE Email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $bn=$row['Name'];
        $bgn=$row['Gender'];
        $be=$row['Email'];
        $bu=$row['Username'];
        $bp=$row['Password'];
        $bc=$row['City'];
        $ba=$row['Address'];
        $bs=$row['State'];
        $bph=$row['Phone_no'];
        $bpid=$row['Photo_Id'];
        if(!empty($bpid)){
            $photo="buyerUpload/".$bpid;
        }
        else{
            $bgn=strtolower($bgn);
            $photo="uploads/".$bgn.".jpg";
        }
      }
}
else{
    echo "<div  class='alert alert-danger' role='alert'>Something went wrong. Please try again later!!
  </div>"; 
}

?>
<script src="jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="BuyerHomepage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="BuyerUserDetails.php">User Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="BuyerCart.php"  >Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="BuyerOrders.php"  >Orders</a>
      </li>
      
      <li>
      <a class="nav-link" href="BuyerContactUs.php" >Contact Us</a>
      
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="logout.php">Log out</a>
      </li>

    </ul>
  
  </div>

  <div class="float-right icon">
  <a href="BuyerWishList.php"><i class=" fa fa-thin fa-heart " style="font-size:30px;margin:0 0 0 4vh;color:rgb(0,0,0,0.600)"></i></a></div>
<div class="float-right ">
  
  <a href="BuyerCart.php"><i class="fa fa-shopping-cart icon" style="font-size:36px;margin:0 1vh 0 1vh;color:rgb(0,0,0,0.600)"></i></a></div>
  <div class="float-right">
  <a href="BuyerUserDetails.php" style="display:flex;"><img src="<?php echo $photo ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-left:2vh; cursor:pointer"></a></div>
</nav>
<?php
$email=$_SESSION['buyer'];
$sql="SELECT * FROM buyerdetails WHERE Email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $bn=$row['Name'];
    $bp=$row['Phone_no'];
    $bc=$row['City'];
    $ba=$row['Address'];
    $bs=$row['State'];
    $bpi=$row['Photo_Id'];
  }
}
?>
<div class="data">

<!-- login checked -->
 <div class="loginDetails">
    <div class="number">
        1
    </div>
        <div id="login"> <p style="font-size:20px">LOGIN<i class="fa fa-check" style="color:green;margin:0 1rem;font-size:20px"></i></p>
        <p><?php echo $email ?></p></div>
        
 </div>

 <div class="loginDetails" style="display:block;" id="checkAddress">
        
        <div style="display:flex; width: 100%;padding:0.5rem 0 0 0 ;background-color:rgb(6, 94, 145);">
        <div class="number">
            2 
        </div>
            <p style="margin:1rem; font-size:20px;font-weight:bolder;color:white">DELIVERY ADDRESS</p>
        </div>
        <div class="address" style="padding:1rem 0">
            <p style="padding:1rem 0 0 2rem ;font-size:18px;color:rgb(0,0,0,0.800)"><i class="fa fa-circle" style="font-size:16px;color:rgb(6, 94, 145)"></i>&nbsp;&nbsp;<?php echo $bn?> &nbsp;&nbsp;<span><?php echo $bp?> </span></p>
            <p style="padding:0 5rem 1rem 2rem ;font-size:18px;color:rgb(0,0,0,0.800)"><?php echo $ba.", ".$bc.", ".$bs?></p>
            <button type="button" style="margin:1rem 0rem 2rem 2rem" id="setAddress" class="Button Button-one" >DELIVER HERE</button>
            <i class="fa fa-plus" style="font-size:18px;color:rgb(6, 94, 145);margin:0rem 0rem 1rem 2rem;cursor:pointer">&nbsp;&nbsp;Add a new address</i>


            <!-- new address -->
            <div id="AddAddress" style="margin:2rem;background:white;padding:1rem;display:none">
            <form>

            <h2 style="font-weight:bolder;color:rgb(6, 94, 145)">Update your address for this order only</h2>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email" value="<?php echo $email?>" readonly>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputName">Name</label>
                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Contact No."  value="<?php echo $bn?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputNumber">Phone</label>
                    <input type="number" class="form-control" id="inputNumber" name="inputNumber" placeholder="Contact No."  value="<?php echo $bp?>">
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputAddress">Address</label>
                  <input type="text" class="form-control" id="inputAddress" name="inputAddress"  placeholder="Address"  value="<?php echo $ba?>">
                </div>
              
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" class="form-control" id="inputCity" name="inputCity" placeholder="City" value="<?php echo $bc?>">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputState">State</label>
                    <input type="text" class="form-control" name="inputState" id="inputState" value="West Bengal" readonly>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip">Pincode</label>
                    <input type="text" class="form-control" id="inputZip" name="inputZip" value="">
                  </div>
                </div>
               
              </form>
              <button  id="AddBtn" class="Button Button-one">CONTINUE</button>
</div>
        </div>
        
    </div>
<!-- checked address -->
    <div class="loginDetails" style="display:none" id="checkedAddress">
        
        <div style="display:flex; width: 100%;padding:0.5rem 0 0 0 ;background-color:white;">
        <div class="number">
            2 
        </div>
            <p style="margin:1rem 0 0 1rem; font-size:20px;font-weight:bolder;color:rgb(0,0,0,0.800)">DELIVERY ADDRESS <i class="fa fa-check" style="color:green;margin:0 1rem;font-size:20px"></i></p>
        </div>
        <div class="address" style="padding:1rem 0">
            <p style="padding:0 0 0 2rem ;font-size:18px;color:rgb(0,0,0,0.800)"><span id="bn"><?php echo $bn;?></span> &nbsp;&nbsp; <span id="bp"><?php echo $bp;?></span></p>
            <p style="padding:0 5rem 1rem 2rem ;font-size:18px;color:rgb(0,0,0,0.800)" id="ba"><?php echo $ba.", ".$bc.", ".$bs?></p>
            
        </div>
    </div>




 <!-- Order Summary -->
  
     
 <div class="loginDetails" style="display:block;margin-bottom:2rem;padding-bottom:2rem" id="checkorder">
 <div style="display:flex; width: 100%;padding:0.5rem 0 0 0 ;background-color:rgb(6, 94, 145);">
        <div class="number">
            3 
        </div>
            <p style="margin:1rem; font-size:20px;font-weight:bolder;color:white">ORDER SUMMARY</p>
        </div>

      <?php
      $sum=0;
      $i=0;
      $sql1="SELECT * FROM addtocart WHERE Email='$email'";
      $result1=mysqli_query($conn,$sql1);
      if(mysqli_num_rows($result1)>0){
        while($rows=mysqli_fetch_assoc($result1)){

          $ps=$rows['Product_no'];
          $sql="SELECT * FROM stock WHERE Serial_no='$ps'";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $pn=$row['Product'];
        $pb=$row['Brand'];
        $pw=$row['Weight'];
        $pp=$row['price'];
        $pni=$row['no_item'];
        $pe=$row['Email'];
        $ppid=$row['Photo_Id'];
        $sum+=$pp;
        $i++;
        if(empty($ppid)){
            $photo="uploads/NoProductPhoto.jpg";
        }
        else{
            $photo="SellerUpload/$ppid";
        }
        // $pe=$row['Email'];
        $sql2="SELECT * FROM sellerdetails WHERE Email='$pe'";
        $result2=mysqli_query($conn,$sql2);
        if(mysqli_num_rows($result2)>0){
            while($row1=mysqli_fetch_assoc($result2)){
                $Shop=$row1['Shop_name'];
                $Today=date('d/m/y');

                // add 3 days to date
                $NewDate=Date('d/m/y', strtotime('+5 days'));
                $tommrow=Date('d/m/y', strtotime('+1 days'));
          
      ?>
      
         <div class="order" style="display:flex;margin:2rem 0 2rem 0; border-bottom: 1px solid rgb(0,0,0,0.400);">
        <div id="image"><img src="<?php echo $photo?>" style="width:9rem;height:10rem;margin:1rem"alt="">
        <div class="increment" style="display:flex;height:2rem;width:8rem;border:1px solid black;margin:1.5rem">
            <div class="debtn" style="width:2rem; height:2rem; background:red;text-align: center;color:white;font-size:14px;padding-top:0.2rem;cursor:pointer" onselectstart="return false"
 oncut="return false"
 oncopy="return false"
 onpaste="return false"
 ondrag="return false"
 ondrop="return false">-</div>
            <form class="form2" method="post" action="OrderOne.php" style="">
          <input type="number" value="1" name="val" class="val" style="text-align:center;width:4rem; height:2rem;" readonly >
          </form>
          <div class="inbtn" style="width:2rem; height:2rem; background:green;text-align:center;color:white;font-size:14px;padding-top:0.3rem;cursor:pointer" data-id="<?php echo $ps;?>" onselectstart="return false"
 oncut="return false"
 oncopy="return false"
 onpaste="return false"
 ondrag="return false"
 ondrop="return false">+</div>

        </div>
      </div>
        <div class="aboutProduct"> <p style="padding:1rem 0 0 2rem ;font-size:18px;color:rgb(0,0,0,0.800);font-weight:bold" ><?php echo $pn ?></p> 
         <p style="padding:0 0 0 2rem ;font-size:14px;color:rgb(0,0,0,0.400);font-weight:bold">Pack of &nbsp;;<?php echo $pni.", ".$pw ?></p> 
         <p style="padding:0 0 0 2rem ;font-size:14px;color:rgb(0,0,0,0.400);font-weight:bold">Seller: &nbsp;<?php echo $Shop?></p>
         <div class="showprice">
         <p  style="padding:0 0 0 2rem ;font-size:24px;color:rgb(0,0,0);font-weight:bolder">₹<span class="price"><?php echo  $pp ?></span>.00 (Each)</p> </div>
        
         



        </div>
            </div>
        <?php
          }
        }
    }

   }
 
        }
      }?>
      <div  style="display:block;margin-left:2rem;">
      <p style="font-size:18px;color:rgb(0,0,0,0.800);font-weight:bold;margin:0 0 0 0">Total no. of items: &nbsp;<span class="totalItems"><?php echo $i?></spna></p>
      <p style="font-size:18px;color:rgb(0,0,0,0.800);font-weight:bold">Total:&nbsp; ₹<span class="totalPrice"><?php echo $sum?></span>.00</p>
     </div>
      
 <form id="form" style="padding:0 0 0 1rem;">
          <input type="radio" name="date" class="date" value="<?php echo $NewDate?>" style="cursor:pointer" checked="checked"><label for="date" style="padding:0 0 0 1rem ;font-size:14px;color:green;font-weight:bolder" >Delivery by&nbsp; <?php echo $NewDate?>(Free Delivery)</label><br>
          <input type="radio" name="date" class="date" value="<?php echo $tommrow?>" style="cursor:pointer" ><label for="date" style="padding:0 0 0 1rem ;font-size:14px;color:green;font-weight:bolder">Delivery by&nbsp; Tommrow(<?php echo $tommrow?>)(Delivery will charge ₹50.00 )</label>
         </form>
        
        <button type="button" style="margin:1rem 0rem 2rem 2rem" id="confirmOrderSummary" class="Button Button-one" >CONTINUE</button>
        
    </div>

<!-- checked Order Summary  -->
<div class="loginDetails" style="display:none" id="checkedOrder">
        
        <div style="display:flex; width: 100%;padding:0.5rem 0 0 0 ;background-color:white;">
        <div class="number">
            3
        </div>
            <p style="margin:1rem 0 0 1rem; font-size:20px;font-weight:bolder;color:rgb(0,0,0,0.800)">ORDER SUMMARY <i class="fa fa-check" style="color:green;margin:0 1rem;font-size:20px"></i></p>
        </div>
        
        <div  style="display:block;margin-left:2rem; padding:1rem 0">
      <p style="font-size:18px;color:rgb(0,0,0,0.800);font-weight:bold;margin:0 0 0 0">Total no. of items: &nbsp;<span class="totalItemschecked"><?php echo $i?></spna></p>
      <p style="font-size:18px;color:rgb(0,0,0,0.800);font-weight:bold">Total: &nbsp;<span class="totalPricechecked"><?php echo $sum?></span></p>
     </div>
            
        </div>
    

 <!-- payment -->
 <div class="loginDetails" style="display:block;padding: 0" id="checkPayment" style="">
        
        <div style="display:flex; width: 100%;padding:0.5rem 0 0 0 ;background-color:rgb(6, 94, 145);">
        <div class="number">
            4
        </div>
            <p style="margin:1rem; font-size:20px;font-weight:bolder;color:white">PAYMENT OPTION</p>
        </div>
        <div class="address" style="padding:1rem 0">
        <input type="radio" name="date" class="date" checked="checked" value="<?php echo $tommrow?>" style="cursor:pointer;margin-left:2rem" ><label for="date" style="padding:0 0 0 1rem ;font-size:18px;color:green;font-weight:bolder">Cash on delivery</label>

            <p style="padding:0 5rem 1rem 2rem ;font-size:18px;color:rgb(0,0,0,0.400)">Only cash on delivery is available. Payment can be done through UPI or cash at the time of delivery.</p>
            <p style="padding:0 5rem 0rem 2rem ;font-size:18px;color:green">You can use the following UPI ID for payment at the time of delivery.</p>
           
              <div id="orderResult" style="font-size:20px;width:100vw"></div>
<div style="margin:0 2rem 1rem 0">  <button  style="margin:2rem 0rem 2rem 2rem;" id="placeOrder" class="Button Button-one">PLACE ORDER</button><br>
<button  style="margin:-2rem 0rem 4rem 2rem;display:none"  class="Button Button-one" id="Home">GO BACK TO HOMEPAGE</button></div>
</div>
<script>
 var sum=<?php echo $i?>;
 var price2=<?php echo $sum?>;
</script>
<script>
        $(document).ready(function() {
          var myArray =[];
          myArray[0] = 0;
          $(document).on("click",".inbtn",function(){
            // console.log("clicked");
            var ps= $(this).data('id');
            // console.log(ps);
            var ele=this;
            var value=$(this).closest('.increment').find('.val').val();

            // var value=$(ele).closest('.val').val();
            // $(this).closest('.form2').find('.val').val();
            // var value=$('.val').val();
            // console.log(value);
            value++;
            sum++;
            myArray[ps] = value;
            Object.keys(myArray).forEach(function (key) {
    
});
            // $('.val').val(value);
            $(this).closest('.increment').find('.val').val(value);

            var price='<?php echo $pp?>';
            price1=parseInt(price);
            price2+=price1;
            console.log(price2);
            console.log(sum);
            $('.totalItems').html(sum);
            $('.totalPrice').html(price2);

            // console.log(price);
            var total=price*value;
            console.log(total);
            // $('.price').closest('.showprice').html(total);
            // var dynamicElement =$('.price').closest('.showprice').find('.price');

            //   // Update the HTML content of the selected element
            //   dynamicElement.html('This is the updated HTML content');

            //   // Check the updated HTML content in the console
            //   console.log(dynamicElement.html());
            // $(ele).closest('.price').html(total);
            // $(ele).closest(".price").val(value);



            // $('#price').html("text")
            
          });
          $(document).on("click",".debtn",function(){
            // console.log("clicked");
            var ps= $(this).data('id');
            // console.log(ps);
            var ele=this;
            var value=$(this).closest('.increment').find('.val').val();
              if(value>1){
            // var value=$(ele).closest('.val').val();
            // $(this).closest('.form2').find('.val').val();
            // var value=$('.val').val();
            // console.log(value);
            value--;
           sum--;
           myArray[ps] = value;

            // $('.val').val(value);
            $(this).closest('.increment').find('.val').val(value);

            var price='<?php echo $pp?>';
            price1=parseInt(price);
            price2-=price1;
            console.log(price2);
             console.log(sum);
             $('.totalItems').html(sum);
            $('.totalPrice').html(price2);
          }
            // console.log(price);
          })
          $('#setAddress').click(function(){
            // console.log("Clicked");
            $("#checkAddress").css("display", "none");
            $("#checkedAddress").css("display", "block");
          })
          $('.fa-plus').click(function(){
            // console.log("Clicked");
            $(".fa-plus").css("display", "none");
            $("#AddAddress").css("display", "block");
          }) 

          
          

          $('#confirmOrderSummary').click(function(){
            console.log("Clicked");
            // var value=$('.val').val();
           
  
            // var total=price*value;
            var date=$('input[name="date"]:checked').val();
            var NewDate='<?php echo $NewDate?>';
             var tommrow='<?php echo $tommrow?>' ;      
              if(date==tommrow){
                price2=price2+50;
              }
              $('.totalItemschecked').html(sum);
            $('.totalPricechecked').html(price2);
             


            $("#checkorder").css("display", "none");
            $("#checkedOrder").css("display", "block");
          })
          
          $('#AddBtn').click(function(){
            // console.log("Clicked");
            
            var bn=$('#inputName').val();
            var be=$('#inputEmail').val();
            var bp=$('#inputNumber').val();
            var ba=$('#inputAddress').val();
            var bc=$('#inputCity').val();
            var bs=$('#inputState').val();
            var pin=$('#inputZip').val();
            var ba=ba+" "+pin+", "+bc+", "+bs;
            // console.log(ba);
            $('#bn').html(bn);
            $('#bp').html(bp);
            $('#ba').html(ba);
            
            console.log(bp);
            $("#checkAddress").css("display", "none");
            
            $("#AddAddress").css("display", "none");
            $("#checkedAddress").css("display", "block");
// 
          })
          $('#Home').click(function(){
            $(location).prop('href', 'BuyerHomepage.php');
          })

          $('#placeOrder').click(function () {

            console.log("clicked");
            console.log(myArray);
            var bn=$('#inputName').val();
            var be=$('#inputEmail').val();
            var bp=$('#inputNumber').val();
            var ba=$('#inputAddress').val();
            var bc=$('#inputCity').val();
            var bs=$('#inputState').val();
            var pin=$('#inputZip').val();
           
            var ba=ba+" "+pin+", "+bc+", "+bs;
            var date=$('input[name="date"]:checked').val();
            $.ajax({
            url:"PlaceCartOrder.php",
            type:"POST",
            data:{Bn:bn,Be:be,Bp:bp,Ba:ba,Bc:bc,Date:date,myArray:myArray},
            success: function (data) {
              $('#orderResult').html(data);
              $('#Home').css("display", "block").fadeIn();
          //       if(data==1){
                  
          //         $('#orderResult').html('Order Confirmed.Thank you.');
          // $('#orderResult').addClass('alert alert-success');
          // $('#Home').css("display", "block").fadeIn();
          //       }
          //       else if(data==0){
          //         $('#orderResult').html('Something went wrong.Please, try again later');
          //         $('#orderResult').addClass('alert alert-danger');
          //         $('#Home').css("display", "block").fadeIn();

          //       }
          //       else{
            


          //       }
                
            } });
          });
        });





     </script>  
<script>
  function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
</script>

<script>
    $( document ).ready(function() {
        
         
})
</script>


</body></html>


