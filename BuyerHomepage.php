<?php
ob_start();
session_start();
include_once('database.php');
if(isset($_SESSION['email'])){
  unset($_SESSION['email']);

}
unset($_SESSION['Email']);
if(!isset($_SESSION['buyer'])){
    header("Location:index.php");
}
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
#loading{
position:fixed;
width:100%;
height:100vh;
background:#fff url('uploads/navGIF.gif') no-repeat  center;
z-index: 999999;


}
body{
  background-color:rgba(88, 88, 88, 0.856);
  background-size: cover;
  background-image:url("uploads/b1.jpg");
  background-blend-mode: lighten;
}
.fa-shopping-cart:hover{
color:red
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
  width:30em;
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




/* width */
.search::-webkit-scrollbar {
   width: 10px;
}

/* Track */
.search::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 15px;
}
 
/* Handle */
.search::-webkit-scrollbar-thumb {
    background: rgba(88, 88, 88, 0.16);
  border-radius: 15px;
}

/* Handle on hover */
.search::-webkit-scrollbar-thumb:hover {
 background: rgba(88, 88, 88, 0.26); 
}
.media-scroller{
    --spacer: 1rem;
    display: grid;
    gap: 1rem;
    grid-auto-flow: column;
    grid-auto-columns: 24%;
    height:21rem;
    padding: 0 1rem 1rem;
    overflow-x:auto;
    overscroll-behavior-inline: contain;
    height: 24rem;

}
.media-element{
    display: grid;
    grid-template-rows: min-content;
    gap: 1rem;
    padding:1rem;
    height:22rem;
    background:white;
    border-radius: 10px;
    box-shadow: 4px 4px 10px rgb(0,0,0,0.400);

}
.media-element > img{
    inline-size: 100%;
   aspect-ratio: 16/9;
   object-fit: cover;
   height: 10em;
}
.bg-image {
  /* The image used */
 
  
  /* Add the blur effect */
  /* filter: blur(3px);
  -webkit-filter: blur(3px); */
  
  /* Full height */
  height: 100%; 
  border-bottom: 2px solid rgb(0,0,0,0.800);
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  margin-top: 2.8rem;
  justify-content: center;
  /* text-align: center; */
}
</style>
    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " onload="myFunction()">
   
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light  pr-4" style="z-index:99; border-bottom:1px solid rgb(0,0,0,.800);position:fixed; width:97%" >
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-4">
      <li class="nav-item active">
        <a class="nav-link " href="BuyerHomepage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="BuyerUserDetails.php">User Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="BuyerCart.php" >Cart</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link "  href="BuyerOrders.php"  >Orders</a>
      </li>
      
      <li>
      <a class="nav-link" href="BuyerContactUs.php" >Contact Us</a>
      
      </li>
      <li class="nav-item">
        <a class="nav-link " href="logout.php">Log out</a>
      </li>
      
    </ul>

 <div style="margin:0 0 0 4rem "> <div class="input-group float-right ml-3" id="liveSearchResult" style="disply:flex;width:25rem;position:relative;float:right;">
  <input type="text" class="form-control rounded ml-4 float-right" id="search"  placeholder="Search" aria-label="Search" aria-describedby="search-addon" />

</div></div>
<div class="float-right icon">
  <a href="BuyerWishList.php"><i class=" fa fa-thin fa-heart " style="font-size:30px;margin:0 0 0 4vh;color:rgb(0,0,0,0.600)"></i></a></div>
<div class="float-right ">
  
  <a href="BuyerCart.php"><i class="fa fa-shopping-cart icon" style="font-size:36px;margin:0 1vh 0 1vh;color:rgb(0,0,0,0.600)"></i></a></div>
  <div class="float-right">
  <a href="BuyerUserDetails.php" style="display:flex;"><img src="<?php echo $photo ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-left:2vh; cursor:pointer"></a></div>
  
</nav>
<div class="search" style="position:fixed;display:block; z-index:-1; background:white;max-height:20rem;width:25rem; top:4rem;left:43rem;overflow: auto;border:1px solid rgb(0,0,0,0.200)">


</div>

<!-- main page -->
<div class="main" style="display:block">

<script src="jquery.js"></script>




<div class="bg-image " 
     style="background-image: url('uploads/CustomerBG.jpg');
            ">
          
</div>
<?php 
$be=$_SESSION['buyer'];
$sql="SELECT * FROM buyerdetails WHERE Email='$be'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $bn=$row['Name'];
  }
}

?>
<div class="bg-text">
  <p style="margin: 0 0 2rem 0; font-size:40px">Welcome Back,&nbsp; <?php echo $bn;  ?></p>
 
  <p>Welcome to Shop Now, where you can find a wide range of products that cater to all your daily needs. Our website offers an extensive collection of grocery, confectionery, and stationery items that are available at competitive prices.</p>
</div>
<br>

 <!-- Grocery  -->
<?php
if(isset($_POST['btn1']) or isset($_POST['btn0'])){
  ?>
  <!-- <h1 style="color:rgb(6, 94, 145) ;padding: 0 1rem;  margin:2rem 0"><b>Grocery</b></h1><br> -->
<div class="media-scroller snap-inline" id="scroll">
  <?php

 $sql="SELECT * FROM sellerdetails WHERE Shop_Type='Grocery' AND Allow='allowed'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
      $se=$row['Email'];
      $ssh=$row['Shop_name'];
       $sn=$row['Name'];
       
       $ph=array('uploads/shop1.jpg','uploads/shop2.jpg','uploads/shop3.jpg','uploads/shop4.jpg','uploads/shop5.jpg','uploads/shop6.jpg');

?>
 <a href="BuyerPage.php?id=<?php echo $se; ?>" style="text-decoration:none">
    <div class="media-element" >
        <img src="<?php echo $ph[rand(0,count($ph)-1)]?>" height="40rem" width="40rem" alt="">
       
       <p style="font-weight:bolder; font-size:26px; color:rgb(0,0,0,0.700)"><?php echo $ssh ?> </p>

       <p style="font-weight:bolder; font-size:16px; color:rgb(0,0,0,0.400)"><?php echo $sn ?> </p>
      
        </div>
    </a>
  
       


<?php


    }

  }
  else{
    echo "
    
    <div class='alert alert-secondary' role='alert' style='font-size:24px'>
    Nothing to show..
  </div>";
  }
}
?>

</div>

<!-- confectionery-->

<?php
if(isset($_POST['btn2'])or isset($_POST['btn0'])){
  ?>
  <h1 style="color:rgb(6, 94, 145) ;padding: 0 1rem;  margin:2rem 0"><b>Confectionery</b></h1>
<div class="media-scroller snap-inline" id="scroll">
  <?php

$sql="SELECT * FROM sellerdetails WHERE Shop_Type='Confectionery'  AND Allow='allowed'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $se=$row['Email'];
    $ssh=$row['Shop_name'];
  
     $sn=$row['Name'];
     $ph=array('uploads/shop1.jpg','uploads/shop2.jpg','uploads/shop3.jpg','uploads/shop4.jpg','uploads/shop5.jpg','uploads/shop6.jpg');

?>
   <a href="BuyerProductView.php?id=<?php echo $ps?>" style="text-decoration:none">
    <div class="media-element">
        <img src="<?php echo $ph[rand(0,count($ph)-1)]?>" height="20rem" width="20rem" alt="">
       
        <p style="font-weight:bolder; font-size:26px; color:rgb(0,0,0,0.700)"><?php echo $ssh ?> </p>

<p style="font-weight:bolder; font-size:16px; color:rgb(0,0,0,0.400)"><?php echo $sn ?> </p>
      
        </div>
  </a>
  



<?php
        }

      }
      else{
        echo "
        
        <div class='alert alert-secondary' role='alert' style='font-size:24px'>
        Nothing to show..
      </div>";
      }

    }

?>
</div>
<!-- Stationary -->

<?php
if(isset($_POST['btn3']) or isset($_POST['btn0'])){
  ?>
  <h1 style="color:rgb(6, 94, 145) ;padding: 0 1rem;  margin:2rem 0"><b>Stationery</b></h1>
<div class="media-scroller snap-inline" id="scroll">
  <?php

$sql="SELECT * FROM sellerdetails WHERE Shop_Type='Stationery'  AND Allow='allowed'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $se=$row['Email'];
    $ssh=$row['Shop_name'];
   
     $sn=$row['Name'];
     $ph=array('uploads/shop1.jpg','uploads/shop2.jpg','uploads/shop3.jpg','uploads/shop4.jpg','uploads/shop5.jpg','uploads/shop6.jpg');

?>
 <a href="BuyerPage.php?id=<?php echo $se; ?>" style="text-decoration:none">
    <div class="media-element">
        <img src="<?php echo $ph[rand(0,count($ph))]?>" height="25px" width="25px" alt="">
       
        <p style="font-weight:bolder; font-size:26px; color:rgb(0,0,0,0.700)"><?php echo $ssh ?> </p>

<p style="font-weight:bolder; font-size:16px; color:rgb(0,0,0,0.400)"><?php echo $sn ?> </p>
      
        </div></a>

  



<?php
        }

      }

      else{
        echo "
        
        <div class='alert alert-secondary' role='alert' style='font-size:24px'>
        Nothing to show..
      </div>";
      }
    }

  
?>

<!-- all -->
<?php 
if(!isset($_POST['btn0']) and !isset($_POST['btn1']) and !isset($_POST['btn2']) and !isset($_POST['btn3'])){

  ?>
 <h1 style="color:rgb(6, 94, 145) ;padding: 0 1rem;  margin:5rem 0 2rem 0"><b>Grocery</b></h1>
<div class="media-scroller snap-inline" id="scroll">
  <?php



$sql="SELECT * FROM sellerdetails WHERE Shop_Type='Grocery'  AND Allow='allowed'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $se=$row['Email'];
    $ssh=$row['Shop_name'];
    
     $sn=$row['Name'];
     $ph=array('uploads/shop1.jpg','uploads/shop2.jpg','uploads/shop3.jpg','uploads/shop4.jpg');

?>
 <a href="BuyerPage.php?id=<?php echo $se; ?>" style="text-decoration:none">
    <div class="media-element">
        <img src="<?php echo $ph[rand(0,count($ph)-1)]?>" height="20rem" width="20rem" alt="">
       
        <p style="font-weight:bolder; font-size:26px; color:rgb(0,0,0,0.700)"><?php echo $ssh ?> </p>

<p style="font-weight:bolder; font-size:16px; color:rgb(0,0,0,0.400)"><?php echo $sn ?> </p>
      
        </div>
  </a>
<?php

    }

  }
  else{
    echo "
    <div class='alert alert-secondary' role='alert' style='font-size:24px'>
    Nothing to show..
  </div>";
  }

?>

</div>
  <h1 style="color:rgb(6, 94, 145) ;padding: 0 1rem;  margin:2rem 0"><b>Confectionery</b></h1>
<div class="media-scroller snap-inline" id="scroll">
  <?php

$sql="SELECT * FROM sellerdetails WHERE Shop_Type='Confectionery'  AND Allow='allowed'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $se=$row['Email'];
    $ssh=$row['Shop_name'];
    
     $sn=$row['Name'];
     $ph=array('uploads/shop1.jpg','uploads/shop2.jpg','uploads/shop3.jpg','uploads/shop4.jpg');

?>
 <a href="BuyerPage.php?id=<?php echo $se; ?>" style="text-decoration:none">
    <div class="media-element">
        <img src="<?php echo $ph[rand(0,count($ph)-1)]?>" height="20rem" width="20rem" alt="">
       
        <p style="font-weight:bolder; font-size:26px; color:rgb(0,0,0,0.700)"><?php echo $ssh ?> </p>

<p style="font-weight:bolder; font-size:16px; color:rgb(0,0,0,0.400)"><?php echo $sn ?> </p>
      
        </div>
  </a>

  



<?php
        }

      }
      else{
        echo "
        
        <div class='alert alert-secondary' role='alert' style='font-size:24px'>
        Nothing to show..
      </div>";
      }
?>
</div>
<h1 style="color:rgb(6, 94, 145) ;padding: 0 1rem;  margin:2rem 0"><b>Stationery</b></h1>
<div class="media-scroller snap-inline" id="scroll">
  <?php

$sql="SELECT * FROM sellerdetails WHERE Shop_Type='Stationery'  AND Allow='allowed'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $se=$row['Email'];
    $ssh=$row['Shop_name'];
    
     $sn=$row['Name'];
     $ph=array('uploads/shop1.jpg','uploads/shop2.jpg','uploads/shop3.jpg','uploads/shop4.jpg');

?>
 <a href="BuyerPage.php?id=<?php echo $se; ?>" style="text-decoration:none">
    <div class="media-element">
        <img src="<?php echo $ph[rand(0,count($ph)-1)]?>" height="25px" width="25px" alt="">
       
        <p style="font-weight:bolder; font-size:26px; color:rgb(0,0,0,0.700)"><?php echo $ssh ?> </p>

<p style="font-weight:bolder; font-size:16px; color:rgb(0,0,0,0.400)"><?php echo $sn ?> </p>
      
        </div>
  </a>
  



<?php
        }

      }

      else{
        echo "
        
        <div class='alert alert-secondary' role='alert' style='font-size:24px'>
        Nothing to show..
      </div>";
      }
    } 

  
?>
<script>
  $(document).ready(function(){
    $('#search').keyup(function(){
      console.log("keyup");
      var Search_term=($(this).val());
      
      if ($(this).val()){
        $(".search").show();

        $(".search").css("z-index", "9999");
       
      }
      else{
        $(".search").hide();
      }
      
      // liveSearch($(this).val())

      $.ajax({
            url:"liveSearch.php",
            type:"POST",
            data:{Search:Search_term},
            success: function (data) {
              $(".search").html(data);
              
            }
            })
            

    })
    
  });
</script>
</div>
</div>
</div>









<?php ob_end_flush();?>


<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
  </div></div>
<!-- Footer -->
</div>
  </div>
  </div>
  </div>

    </body></html>