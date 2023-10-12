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
$em=$_GET['id'];
$_SESSION['Email']=$em;
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
   /* height:38rem; */
  

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
    height:30rem;
    background:white;
    border-radius: 10px;
    box-shadow: 4px 4px 10px rgb(0,0,0,0.400);
    align-items: center;
    height:38rem;

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
  font-size:46px;
  margin:-2.5rem 0 0 12rem;
   color:rgba(131, 131, 131, 0.521);
   cursor: pointer;
}
.like{
  font-size:46px;
  margin:-2.5rem 0 0 12rem;
   color:red;
   cursor: pointer;
}
.heading:hover{
  text-decoration: underline;
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position:fixed">
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
    <div style="margin:0 0 0 5rem "> <div class="input-group float-right ml-3" id="liveSearchResult" style="disply:flex;width:25rem;position:relative;float:right;">
  <input type="text" class="form-control rounded ml-4 float-right" id="search"  placeholder="Search" aria-label="Search" aria-describedby="search-addon" />

</div></div>
  </div>
 
  <div class="float-right icon">
  <a href="BuyerWishList.php"><i class=" fa fa-thin fa-heart " style="font-size:30px;margin:0 0 0 4vh;color:rgb(0,0,0,0.600)"></i></a></div>
<div class="float-right ">
  
  <a href="BuyerCart.php"><i class="fa fa-shopping-cart icon" style="font-size:36px;margin:0 1vh 0 1vh;color:rgb(0,0,0,0.600)"></i></a></div>
  <div class="float-right">
  <a href="BuyerUserDetails.php" style="display:flex;"><img src="<?php echo $photo ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-left:2vh; cursor:pointer"></a></div>
</nav>

<div class="search" style="position:fixed;display:block; z-index:-1; background:white;max-height:20rem;width:25rem; top:4rem;left:44rem;overflow: auto;border:1px solid rgb(0,0,0,0.200)">


</div>
<br>
<?php 
$email=$_SESSION['Email'];  
$s="SELECT * FROM sellerdetails WHERE Email='$email' ";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r)>0){
  while($ro=mysqli_fetch_assoc($r)){
    $bn=$ro['Name'];
    $bs=$ro['Serial_no'];
  
?>
<br>
<br>
<br>
<br>
<h1 style="color:rgb(6, 94, 145) ;padding-left: 1vw; padding-bottom: 1rem; ">Available Products:<span> <a  href="BuyerSellerView.php?id=<?php echo $bs?>" style="text-decoration:none;font-size:20px ;"><p class="fw-bold link2 mb-1"><?php echo $bn?></p></a></span></h1>

<div class="media-scroller snap-inline" id="scroll">

<?php 
  }}
function fetch(){

  $conn=mysqli_connect("localhost","root","","project") or die ("Connection Failed");
 
$email=$_SESSION['Email'];  
$sql="SELECT * FROM stock WHERE Email='$email'  ";
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
      if($pa>0){
        $av="<p style='color:green; font-size:20px; font-weight:bold;'>In stock</p>";
      }
      else{
        $av="<p style='color:red;font-size:20px; font-weight:bold;'>Out of stock</p>";
      }

        if($pa==2){
        $apl="<div style='height:2rem'><p style='color:red;font-size:12px; font-weight:bold;'>Only two left</p></div>";

        }
        else if($pa==1){
        $apl="<div style='height:2rem'><p style='color:red;font-size:12px; font-weight:bold;'>Only one left</p></div>";

        }
        else if($pa>2 and $pa<=10){
        $apl="<div style='height:2rem'><p style='color:red;font-size:12px; font-weight:bold;'>Only a few left</p></div>";

        }
        else{
        $apl="<div style='height:2rem'><p style='color:red;font-size:12px; font-weight:bold;'></p></div>";

        }
      if(!empty($ppid)){
        $photo="SellerUpload/".$ppid;
      }
      else{
        $photo="uploads/NoProductPhoto.jpg";
      }
      $i=0;
$sum=0;
$sql1="SELECT * FROM productrating WHERE Product_no=$ps ORDER BY rating DESC";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
  while($row=mysqli_fetch_assoc($result1)){
     $rate=$row['rating'];
     $rate=intval($rate);
    
    $sum+=$rate;
      $i++;
  }
}
if($i>0){
  $avg=$sum/$i;
}
else{
$avg=0;
}
$email=$_SESSION['buyer'];
$sql3="SELECT * FROM wishlist WHERE Email='$email' AND Product_no='$ps'";
$result3=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result3)>0){
   
  $cls="fa fa-heart likebtn like";

  }
else{

  $cls="fa fa-heart likebtn like1";
}
?>

<div class="media-element" >
<img src="<?php echo $photo;?>" style="object-fit: cover;"  >
         <a href="BuyerProductView.php?id=<?php echo $ps?>" style="text-decoration:none"> <p class="heading" style="
    color:black; font-weight:bolder; font-size:16px;margin:0 0 1rem 0; height:6rem;overflow:auto" ><?php echo $pn.','.$pb.','.$pw?> </p></a>
   
      <?php echo $av;?>
      <?php echo $apl;?>

      
     
      <div class="stars">
     <span style="color: black; margin:0.2rem"><?php echo $avg; ?></span>
      <i class="fa fa-star <?php echo ($avg>=1) ?'checked' : ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=2) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ( $avg>=3) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=4 ) ?'checked': ''?>"></i>
      <i class="fa fa-star <?php echo ($avg>=5) ?'checked': ''?>"></i>
      <span style="color:rgb(6, 94, 145); margin:0 0 2rem 10px" ><?php echo $i ?> ratings</span>
    </div> 
   
      <p style="color:black; font-weight:bolder; font-size:32px; margin:0.5rem 0 0rem 0;" ><?php echo "₹". $pp .".00";?>


      <form id="form">
        <input type="text" id="email" style="display:none" value="<?php echo $email?>">
        <input type="text" id="ps" style="display:none"  value="<?php echo $ps?>">
      <i class="<?php echo $cls?>"  aria-hidden="true" data-id="<?php echo $ps;?>"></i></form></p>
     
      <script src="jquery.js"></script>
      <script>
        $( document ).ready(function() {
          // var email=$("#email").val();
          var ps=$("#ps").val();
          var ele=this;
          function loadtable(){
        $.ajax({
            url:"load.php",
            type:"POST",
            success: function (data) {
              if(data==0){
                  $(".likebtn").addClass("like1");
                  $(".likebtn").removeClass("like");
                }
                else{
                  $(".likebtn").addClass("like");
                  $(".likebtn").removeClass("like1");
                }
                
            } });
    }
          // loadtable();
          $(document).on("click",".likebtn",function(){
            var ps= $(this).data('id');
            // console.log(ps);
            
            var email="<?php echo $_SESSION['buyer']?>";
            var ele=this;
            $.ajax({
            url:"addtocart.php",
            type:"POST",
            data:{Email:email,Ps:ps},
            success: function (data) {
                if(data==0){
                  $(ele).closest("i").addClass("like1");
                  $(ele).closest("i").removeClass("like");
                  // $("#form").load(location.href + " #form");

                }
                else{
                  $(ele).closest("i").addClass("like");
                  $(ele).closest("i").removeClass("like1");
                  // $("#form").load(location.href + " #form");

                }
                
            } });
           
          })
         
})
      </script>
     
     
</div>
 </a>
   
<?php
    }}
  else{
    echo "<div class='alert alert-secondary' style='height:30rem;font-size:30px; width:20rem;justify-content:conter;text-align:center;padding-top:10rem;color:rgb(0,0,0,0.300);font-weight:bolder;box-shadow:2px 2px 40px rgb(0,0,0,0.200)' role='alert'>
    This Seller doesn't add any item yet!!
  </div>";
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
  $(document).ready(function(){
    $('#search').keyup(function(){
      console.log("keyup");
      var Search_term=($(this).val());
      
      if ($(this).val()){
        $(".search").css("display", "block");

        $(".search").css("z-index", "9999");
       
      }
      else{
        $(".search").css("display", "none");
      }
      
      // liveSearch($(this).val())
var em="<?php echo $_SESSION['Email']?>";
      $.ajax({
            url:"liveSearchShop.php",
            type:"POST",
            data:{Search:Search_term,Email:em},
            success: function (data) {
              $(".search").html(data);
              
            }
            })
            

    })
    
  });
</script>
<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
</div>

</body></html>