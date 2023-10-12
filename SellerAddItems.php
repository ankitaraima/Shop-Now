<?php
ob_start();
session_start();
include_once('database.php');
if(!isset($_SESSION['email'])){
  header("Location: index.php");

}
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" sizes="250x250" href="uploads/logo3.png">
    
    <title>Shop Now</title>
<style>
    /* div.slider {
  /* background-color: #333; */
  /* overflow: auto; */
  /* white-space: nowrap; */
  /* height: 80vh; */
  /* width: 100vw; */
  /* margin-left: 10px; */
  /* margin-top: 10px; */
/* } */

/* div.card { */
  /* display: inline-block; */
 
 
/* } */ 

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


.Button > a{
  text-decoration: none;
  color:white;
  font-size:16px;
  font-weight: bolder ;

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
    gap:1rem;
    grid-auto-flow: column;
    grid-auto-columns: 24%;

    padding: 0  1rem  1rem;
    overflow-x:auto;
    overscroll-behavior-inline: contain;

}
.media-element{
    display: grid;
    grid-template-rows: min-content;
    gap:  1rem;
    padding: 1rem;
    background: white;
    border-radius: 12px;
     box-shadow: 4px 4px 10px rgb(0,0,0,0.100);


}
.media-element > img{
    inline-size: 100%;
   aspect-ratio: 16/9;
   object-fit: cover;
}
.snap-inline{
    /* scroll-snap-type: inline mandatory;
    scroll-padding-inline: var(--spacer); */
}

.snap-inline > *{
    /* scroll-snap-align: start; */
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="SellerProducts.php">Products</a>
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
        <a class="nav-link " href="logout.php">Log out</a>
      </li>

    </ul>
  
  </div>
  <!-- <div class="float-right"><i class="fa fa-shopping-cart" style="font-size:30px"></i></div> -->
  <div class="float-right"><a href="SellerDetails.php" style="display:flex;"><img src="<?php echo $photo; ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-right:5vh;margin-left:5vh; cursor:pointer"></a></div>
</nav>
<div class="media-scroller snap-inline" id="scroll">
    <div class="media-element">
        <img src="uploads/groceryItem.jpg" height="225px" width="225px" alt="">
       <h5 style="font-weight:bolder; font-size:26px;">Grocery</h5>
       <p style="color:rgba(88, 88, 88, 0.36); font-weight:bold; font-size:16px; height:21vh">Includes Bakery and Bread, Meat and Seafood, Pasta and Rice, Oils, Sauces, Salad Dressings, and Condiments, Cereals and Breakfast Foods, Soups and Canned Goods, Frozen Foods, Dairy, Cheese, and Eggs etc.</p>
       <!-- <a href="#" class="fancy-link">click here </a> -->
       <a href="SellerGrocery.php?name=1" style="text-decoration:none"><div class="Button Button-one">Add Items</div></a>

    </div>
    <div class="media-element">
        <img src="uploads/stationary.jpeg" height="225px" width="225px" alt="">
       
       <h5 style="font-weight:bolder; font-size:26px;">Stationery </h5>
       <p style="color:rgba(88, 88, 88, 0.36); font-weight:bold; font-size:16px; height:21vh"> Includes cut paper, envelopes, continuous form paper, and other office supplies,A4 size and photocopier paper, Writing and correction pen and holder,Printer Cartridges etc.  </p>
       <!-- <a href="#" class="fancy-link">click here </a> -->
       <a href="SellerStationary.php" style="text-decoration:none"><div class="Button Button-one">Add Items</div></a>

    </div>
    <div class="media-element">
        <img src="uploads/confectionery.jpeg" height="225px" width="225px" alt="">
        <h5 style="font-weight:bolder; font-size:26px;">Confectionery </h5>
       <p style="color:rgba(88, 88, 88, 0.36);  font-weight:bold; font-size:16px; height:21vh">Includes sugar candies, chocolates, candied fruits and nuts, chewing gum, and sometimes ice cream etc.</p>
       <!-- <a href="#" class="fancy-link">click here </a> -->
      <a href="SellerGrocery.php?name=3" style="text-decoration:none"><div class="Button Button-one">Add Items</div></a>

    </div>
    <div class="media-element">
        <img src="uploads/othersGrocery.jpg" height="225px" width="225px" alt="">
        <h5 style="font-weight:bolder; font-size:26px; ">Others</h5>
       <p style="color:rgba(88, 88, 88, 0.36); font-weight:bold; font-size:16px; height:20vh">Others.</p>
       <!-- <a href="#" class="fancy-link">click here </a> -->
       <a href="SellerGrocery.php?name=4" style="text-decoration:none"><div class="Button Button-one">Add Items</div></a>

    </div>

    
   
    </div>


<?php ob_end_flush();
?>

<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
</div>
</body></html>