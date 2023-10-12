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
    display: grid;
    gap: var(--spacer);
    grid-auto-flow: column;
    grid-auto-columns: 24%;

    padding: 0 var(--spacer) var(--spacer);
    overflow-x:auto;
    overscroll-behavior-inline: contain;

}
.media-element{
    /* display: grid; */
    display: flex;
    border: 1px solid rgba(0, 0, 0, 0.050);
    margin:2rem 1rem;
    background-color: white;
    align-items: center;
    border-radius: var(--radius-3);
    box-shadow: var(--shadow-2);
    cursor: pointer;
    /* justify-content: center; */
    /* grid-template-rows: min-content;
    gap: var(--size-1rem);
    padding:var(--spacer);
    background: var(--surface-6);
    border-radius: var(--radius-2);
    box-shadow: var(--shadow-4); */
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
.img > img{
    /* inline-size: 50%; */
   /* aspect-ratio: 16/9; */
   border-radius: var(--radius-3);

   height:15rem ;
   width:15rem;
   object-fit: cover;
   margin:2rem 4rem;
}





</style>
    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " onload="myFunction()">
<div id="loading"></div>

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
<h1 style="color:rgb(6, 94, 145) ;padding-left: 1vw; padding-bottom: 1rem; ">Available Products:</h1>

<div>
<?php 
function fetch(){

  $conn=mysqli_connect("localhost","root","","project") or die ("Connection Failed");
  $email=$_SESSION['email'];
$sql="SELECT * FROM stock WHERE Email='$email' ORDER BY Serial_no DESC";
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
<a href="ProductView.php?id=<?php echo $ps; ?>" style="text-decoration:none;">      
<div class="media-element" >
<div class="img"><img src="<?php echo $photo;?>" style="object-fit: cover;"  ></div>
        <div class="productData">  <p class="heading" style="width:100%;
    color:black; font-weight:bolder; font-size:26px;margin:00 0 2rem 0;" ><?php echo $pn;?> </p>
      <p ><span style="color:rgb(0,0,0,0.700);font-weight:bolder;">Brand:  &nbsp;</span><?php echo $pb;?></p>

      <p ><span style="color:rgb(0,0,0,0.700);font-weight:bolder;">Type:  &nbsp;</span><?php echo $pt;?></p>
      <p ><span style="color:rgb(0,0,0,0.700);font-weight:bolder;">Weight:  &nbsp;</span><?php echo $pw;?></p>
      <p ><span style="color:rgb(0,0,0,0.700);font-weight:bolder;">Available:  &nbsp;</span><?php echo $pa;?></p>
      <p><span style="color:rgb(0,0,0,0.700);font-weight:bolder;">Date:  &nbsp;</span><?php echo $pd;?></p>
     
      <div class="stars">
     <span style="color: black; margin:0.2rem"><?php echo $avg; ?></span>
      <i class="fa fa-star <?php echo ($avg>=1) ?'checked' : ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=2) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ( $avg>=3) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=4 ) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=5) ?'checked': ''?>"></i>
      <span style="color:rgb(6, 94, 145); margin:0 0 2rem 10px" ><?php echo $i ?> ratings</span>
    </div> 
      <p style="color:black; font-weight:bolder; font-size:42px; margin:0.5rem 0 2rem 0;" ><?php echo "₹". $pp .".00";?></p>
     
    </div><div class="ProductButtons">
       <!-- <a href="#" class="fancy-link">click here </a> -->
       <form action="SellerProducts.php" method="Post">
       <input type="text" style="display:none" id="id" name="ps" value="<?php echo $ps; ?>">
<label class="Button Button-one" style="margin:0.55rem ;">
Update
<input type="submit" name="button"style="margin:0.5rem ; display:none"></label>
<label class="Button1 Button-one1" style="margin:0.5rem ;">
Delete
<input type="submit" name="button1"  class="Button1 Button-one1" style="margin:0.5rem ; display:none"></label>

</form></div>
      
</div>
    </a>
<?php
    }}
  else{
    ?>
      <div class="alert alert-secondary" role="alert">
        Nothing to show.Add products by the Add Items option!!
      </div>
    <?php
  }}
    fetch();
    if(isset($_POST['button1'])){
      $ps=$_POST['ps'];
      $SQL="DELETE FROM stock WHERE Serial_no=$ps";
      if(mysqli_query($conn,$SQL)){
        header("Refresh:0");
        
      }
      
    }

    if(isset($_POST['button'])){
      $ps=$_POST['ps'];
      $_SESSION['serial']=$ps;
      header("Location:SellerUpdateProduct.php");
    }
    
    ?>
<!-- <footer height="10vh">hello</footer> -->

<div class="model"><div class="model-form">


</div></div>   

<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
</div>

</body></html>