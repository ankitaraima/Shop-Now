<?php
ob_start();
session_start();
include_once('database.php');
if(!isset($_SESSION['email'])){
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Shop Now</title>
    <link rel="icon" sizes="250x250" href="uploads/logo3.png">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<style>



@media (max-width: 767.98px) { .border-sm-start-none { border-left: none !important; } }
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
.checked {
  color: orange;
}

body{
  background-color:rgba(88, 88, 88, 0.856);
  background-size: cover;
  background-image:url("uploads/b1.jpg");
  background-blend-mode: lighten;
}
.heading::-webkit-scrollbar {
   width: 0.2rem;
}

/* Track */
.heading::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 15px;
}
 
/* Handle */
.heading::-webkit-scrollbar-thumb {
    background: rgba(88, 88, 88, 0.26);
  border-radius: 15px;
}

/* Handle on hover */
.heading::-webkit-scrollbar-thumb:hover {
 background: rgba(88, 88, 88, 0.61); 
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
  width:10em;
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
 
    /* box-shadow: var(--shadow-3);
     */
    box-shadow: 4px 4px 10px rgb(0,0,0,0.400);

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
  
  transform: scaleX(0);
  transform-origin: left;
  transform-origin: right;
  color:white;
}
.Button-one:hover::after{
  
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
   
    display: grid;
    gap: 1rem;
    grid-auto-flow: column;
    grid-auto-columns: 24%;

    padding: 0 1rem 1rem;
    overflow-x:auto;
    overscroll-behavior-inline: contain;

}

.media-element{
    display: grid;
    grid-template-rows: min-content;
    gap: 1rem;
    padding:1rem;
    background: white;
    border-radius:20px;
    box-shadow: 4px 4px 10px rgb(0,0,0,0.400);

}
.media-element > img{
    inline-size: 100%;
   aspect-ratio: 16/9;
   object-fit: cover;
   height: 10rem;
   width: 8rem;


}
.media-element:hover{
  background-color:rgb(6, 94, 145,0.100)
}
.productData{
    align-items: center;
    justify-content: center;
    color:black;
    
}
.heading{
    
}
.productData > p{
    color:rgb(0,0,0,0.500);
    margin: 1rem 0;


}
.img > img{
    inline-size: 50%; 
    aspect-ratio: 16/9; 
   border-radius: 20px;

   height:10rem ;
   width:10rem;
   object-fit: cover;
   margin:2rem 3rem;
}


</style>
    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; ">
<div id="loading"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js"></script>
    <?php
$email=$_SESSION['email'];
$sql="SELECT * FROM sellerdetails WHERE Email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $sn=$row['Name'];
        $sgn=$row['Gender'];
        $se=$row['Email'];
        $su=$row['Username'];
        $sp=$row['Password'];
        $ssh=$row['Shop_name'];
        $sa=$row['Address'];
        $ss=$row['State'];
        $sph=$row['Phone'];
        $spid=$row['Photo_Id'];
        if(!empty($spid)){
            $photo="uploads/".$spid;
        }
        else{
            $sgn=strtolower($sgn);
            $photo="uploads/".$sgn.".jpg";
        }
      }
}
else{
    echo "<div  class='alert alert-danger' role='alert'>Something went wrong. Please try again later!!
  </div>"; 
}

?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="SellerProducts.php" >Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="SellerDetails.php" >User Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="SellerAddItems.php"  >Add Items</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="SellerOrder.php"  >Orders</a>
      </li>
      
      <li>
      <a class="nav-link" href="SellerContactUs.php" >Contact Us</a>
      
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="logout.php">Log out</a>
      </li>

    </ul>
  
  </div>
  <!-- <div class="float-right"><i class="fa fa-shopping-cart" style="font-size:30px"></i></div> -->
  <div class="float-right"><a href="SellerDetails.php" style="display:flex;"><img src="<?php echo $photo; ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-right:5vh;margin-left:5vh; cursor:pointer"></a></div>

</nav>
<?php
$ps=$_GET['id'];
$sql="SELECT * FROM stock WHERE Serial_no=$ps";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $ps=$row['Serial_no'];
      $pn=$row['Product'];
      $pt=$row['Type'];
      $pw=$row['Weight'];
      $pp=$row['price'];
      $pa=$row['Available'];
      $pd=$row['Date'];
      $ppid=$row['Photo_Id'];
      $pb=$row['Brand'];
      $pdt=$row['Diet_Type'];
      $pni=$row['no_item'];

      if($pdt=="veg"){
        $dt="uploads/veg.png";
        $dtt="Vegetarian";
      }
      else{
        $dt="uploads/nonveg.png";
        $dtt="Non-Vegetarian";
      }

      if($pa>0){
        $a="In Stock";
      }
      else{
         $a="Out of Stock";
      }
      if(!empty($ppid)){
        $photo="SellerUpload/".$ppid;
      }
      else{
        $photo="uploads/NoProductPhoto.jpg";
      }
    }

}
$email=$_SESSION['email'];
$sql="SELECT * FROM sellerdetails WHERE Email=$email ";
if(mysqli_num_rows($result)>0){
  while($rows=mysqli_fetch_assoc($result)){
    $ssh=$rows['Shop_name'];
    $sn=$rows['Name'];
  }
}
$i=0;
$sum=0;
$sql1="SELECT * FROM productrating WHERE Product_no=$ps";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
  while($row=mysqli_fetch_assoc($result1)){
    
      $sum+=intval($row['rating']);
      $i++;
  }
}
if($i>0){
  $avg=$sum/$i;
}
else{
$avg=0;
}


?>

  <div class="row">
    <div class="col-4">
      <img src="<?php echo $photo?>" data-zoom-image="<?php echo $photo ?>"  style="width:22rem; margin:2rem 2rem 2rem 2rem" id="zoom">
    </div>
    <script>
      $("#zoom").elevateZoom();
    </script>
    <div class="col-5" style="background:rgb(255,255,255,0.200);margin:2rem 2rem 2rem 2rem;padding:1rem 2rem;border-radius:20px; box-shadow:10px 10px 30px rgb(0,0,0,0.100)">
     <p style="font-size:22px; font-weight:bolder; margin:0 0 5px 0"> <?php echo $pn.", ".$pw;?></p>
     <p style="color:rgb(6, 94, 145); margin:0 0 5px 0"> <?php echo $pb?></p>
     <div class="stars" style="border-bottom:1px solid black; padding:0 0 1rem 0">
     <span><?php echo $avg; ?></span>
      <i class="fa fa-star <?php echo ($avg>=1) ?'checked' : ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=2) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ( $avg>=3) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=4 ) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=5) ?'checked': ''?>"></i>
      <span style="color:rgb(6, 94, 145); margin:0 0 2rem 10px" ><?php echo $i ?> ratings</span>
    </div>
     
    <div style="border-bottom:1px solid black; padding:1rem 0 0.1rem 0">
    <p style="font-size:24px; font-weight:bold; color:red;margin:0px 0 5px 0"><span style="color:black;font-size:20px">Sale: </span>&nbsp; <?php echo " ₹ ". $pp.".00" ?></p>
    <p style="margin:0px 0 10px 0">Inclusive of all taxes</p>

    </div>

    <div style="border-bottom:1px solid black; padding:1rem 0 0.1rem 0">
    <p style="color:green;font-weight:bolder; font-size:16px"><span>Free Delivery</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Non-returnable</span></p>
  </div>
    
<div style=" padding:1rem 0 0.1rem 0; ">
<p style="font-weight:bolder;font-size:22px"><?php echo $a; ?></p>
<p style="font-size:20px; font-color:black">Sold By <spna style="color:rgb(6, 94, 145)"><?php echo $ssh." ( ".$sn." ) "; ?></span> <span style="color:black"> and Fullfilled by</span> <span style="color:rgb(6, 94, 145)">Shop Now</span></p>
<p style=" margin:0 0 5px 0;font-size:16px"><b>Brand:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $pb;?>  </p>
<?php if ($pt !="Stationary"){?>
<p style=" margin:0 0 5px 0;font-size:16px"><b>Package Weight:</b>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $pw;?>  </p><?php } ?>
<p style=" margin:0 0 5px 0;font-size:16px"><b>Diet Type:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $dtt;?>  </p>
<p style=" margin:0 0 5px 0;font-size:16px"><b>Number of Items:</b>&nbsp; <?php echo $pni;?>  </p>
<p style=" margin:0 0 15px 0;font-size:16px"><b>Type:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $pt;?>  </p>

<?php if ($pt !="Stationary"){?>
<p style="display:flex;font-size:16px"><img src="<?php echo $dt ?>" height="30rem" width="30rem "alt=""><span>&nbsp;&nbsp;This is a &nbsp;<?php echo $dtt ?>&nbsp;Product</span></p>
<?php } ?>
</div>
</div>
    <div class="col">
    <button type="button" style="margin:15rem 0rem 0rem 1rem"  class="Button Button-one" onclick="history.back();">Back</button>
  </div></div>


  <!-- Scroll -->
  <div style="font-size:28px; font-weight:bolder; color:rgb(6, 94, 145); margin:2rem">Other added products</div>

  <div class="media-scroller" id="scroll">
<?php 


  $conn=mysqli_connect("localhost","root","","project") or die ("Connection Failed");
  $email=$_SESSION['email'];
$sql="SELECT * FROM stock WHERE Email='$email' AND Serial_no NOT IN('$ps')";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
  {
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {

      $ps=$row['Serial_no'];
      $pn=$row['Product'];
      $pt=$row['Type'];
      $pw=$row['Weight'];
      $pp=$row['price'];
      $pa=$row['Available'];
      $pd=$row['Date'];
      $pb=$row['Brand'];
      $ppid=$row['Photo_Id'];
      if(!empty($ppid)){
        $photo="SellerUpload/".$ppid;
      }
      else{
        $photo="uploads/NoProductPhoto.jpg";
      }
      $i=0;
$sum=0;
$sql1="SELECT * FROM productrating WHERE Product_no=$ps";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
  while($row=mysqli_fetch_assoc($result1)){
    $ra=intval($row['rating']);
      $sum+=$ra;
      $i++;
  }
}
if($i>0){
  $avg=$sum/$i;
}
else{
$avg=0;
}

?>
<a href="ProductView.php?id=<?php echo $ps; ?>" style="text-decoration:none;">      
<div class="media-element" >
<div class="img"><img src="<?php echo $photo;?>"   ></div>
        <div class="productData">  <p class="heading" style="height:5rem;overflow:auto;width:16rem" ><span style="color:rgb(0,0,0,0.700);font-weight:bolder;"><b><?php echo $pn;?></b></spna> </p>
      <p ><span style="color:rgb(0,0,0,0.700);font-weight:bolder;">Brand:  &nbsp;</span><?php echo $pb;?></p>
      <div class="stars">
     <span style="color: black; margin:0.2rem"><?php echo $avg; ?></span>
      <i class="fa fa-star <?php echo ($avg>=1) ?'checked' : ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=2) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ( $avg>=3) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=4 ) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=5) ?'checked': ''?>"></i>
      <span style="color:rgb(6, 94, 145); margin:0 0 2rem 10px" ><?php echo $i ?> ratings</span>
    </div> 

      <p class="heading"  ><span style="color:red;font-weight:bolder;font-size:20px"><b><?php echo "₹ ".$pp.".00";?></b></spna> </p>
     
       <!-- <a href="#" class="fancy-link">click here </a> -->
      </div>
      
</div></a>
</a>
<?php
    }}
   
    
    ?>
    </div>
></div>

<script src="rating.js" defer></script>
 
 
</body></html>