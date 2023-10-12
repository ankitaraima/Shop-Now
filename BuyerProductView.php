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

$ps=$_GET['id'];
// $_SESSION['Email']=$em;
$email=$_SESSION['buyer'];
?>
<?php
$o=0;
$t=0;
$th=0;
$f=0;
$fi=0;
 $sql="SELECT * FROM  productrating WHERE Product_no='$ps'";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
  while ($row=mysqli_fetch_assoc($result)) {
    $r=$row['rating'];
    if($r==1){
      $o++;
    }
    else if($r==2){
      $t++;

    }
    else if($r==3){
      $th++;

    }
    else if($r==4){
      $f++;

    }
    else if($r==5){
      $fi++;

    }
    # code...
  }
 }
//  $dataPoints = array( 
//    array("y" => $o,"label" => "1" ),
//    array("y" => $t,"label" => "2" ),
//    array("y" => $th,"label" => "3" ),
//    array("y" => $f,"label" => "4" ),
//    array("y" => $fi,"label" => "5" )
//  );
  
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
/* width */
.heading::-webkit-scrollbar {
   width: 0.5rem;
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
</style>

<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		// text: "Rating"
	},
	axisY: {
		title: "Product Rating",
		// includeZero: true,
		
	},
	data: [{
    color: "rgb(255, 217, 0)", 
		type: "bar",
		yValueFormatString: "##0 Ratings",
		// indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
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
            $photo3="buyerUpload/".$bpid;
        }
        else{
            $bgn=strtolower($bgn);
            $photo3="uploads/".$bgn.".jpg";
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
  <a href="BuyerUserDetails.php" style="display:flex;"><img src="<?php echo $photo3 ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-left:2vh; cursor:pointer"></a></div>
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
      $pe=$row['Email'];
      if($pdt=="veg"){
        $dt="uploads/veg.png";
        $dtt="Vegetarian";
      }
      else{
        $dt="uploads/nonveg.png";
        $dtt="Non-Vegetarian";
      }

      if($pa>0){
        $a="<p style='color:green; font-weight:bolder;font-size:24px'>In Stock</p>";
      }
      else{
         $a="<p style='color:red; font-weight:bolder;font-size:24px'>Out of Stock</p>";
      }
      if(!empty($ppid)){
        $photo="SellerUpload/".$ppid;
      }
      else{
        $photo="uploads/NoProductPhoto.jpg";
      }
    }
    $sql1="SELECT * FROM sellerdetails WHERE Email='$pe'";
    $result1=mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1)>0){
      while($rows=mysqli_fetch_assoc($result1)){
        $ssh=$rows['Shop_name'];
        $sn=$rows['Name'];
        $bs=$rows['Serial_no'];
      }
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
    <div class="col-3">
      <img src="<?php echo $photo?>" data-zoom-image="<?php echo $photo ?>"  style="width:22rem; margin:2rem 4rem 2rem 2rem" id="zoom">
    </div>
    <script>
      $("#zoom").elevateZoom();
    </script>
    <div class="col-5" style="background:rgb(255,255,255,0.200);margin:2rem 2rem 2rem 5rem;padding:1rem 2rem;border-radius:20px; box-shadow:10px 10px 30px rgb(0,0,0,0.100)">
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
<p style="font-size:20px; font-color:black">Sold By <spna style="color:rgb(6, 94, 145)"><a  href="BuyerSellerView.php?id=<?php echo $bs?>" style="text-decoration:none;font-size:20px ;"><?php echo $ssh." ( ".$sn." ) "; ?></a></span> <span style="color:black"> and Fullfilled by</span> <span style="color:rgb(6, 94, 145)">Shop Now</span></p>
<p style=" margin:0 0 5px 0;font-size:16px"><b>Brand:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $pb;?>  </p>
<?php if ($pt !="Stationary"){?>
<p style=" margin:0 0 5px 0;font-size:16px"><b>Package Weight:</b>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $pw;?>  </p>
<p style=" margin:0 0 5px 0;font-size:16px"><b>Diet Type:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $dtt;?>  </p><?php } ?>
<p style=" margin:0 0 5px 0;font-size:16px"><b>Number of Items:</b>&nbsp; <?php echo $pni;?>  </p>
<p style=" margin:0 0 15px 0;font-size:16px"><b>Type:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $pt;?>  </p>
<?php if ($pt !="Stationary"){?>
<p style="display:flex;font-size:16px"><img src="<?php echo $dt ?>" height="30rem" width="30rem "alt=""><span>&nbsp;&nbsp;This is a &nbsp;<?php echo $dtt ?>&nbsp;Product</span></p><?php } ?>

</div>
</div>



<?php
$email=$_SESSION['buyer'];
$sql3="SELECT * FROM addtocart WHERE Email='$email' AND Product_no='$ps'";
$result3=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result3)>0){
   
    $cls="Added to cart";

  }
else{

  $cls="Add to cart";
}?>
<?php
$email=$_SESSION['buyer'];
$sql4="SELECT * FROM wishlist WHERE Email='$email' AND Product_no='$ps'";
$result4=mysqli_query($conn,$sql4);
if(mysqli_num_rows($result4)>0){
   
    $wish="Added to Wishlist";

  }
else{

  $wish="Add to Wishlist";
}?>
    <div class="col">
    <button type="button" style="margin:15rem 0rem 0rem 0rem"  class="Button Button-one" onclick="history.back();">Back</button>
    <form id="form">
        <input type="text" id="email"value="<?php echo $email;?>"style="display:none">
        <input type="text" id="ps" value="<?php echo $ps;?>" style="display:none">
        <button type='button' style='margin:1rem 0rem 0rem 0rem' id='addwishbtn'  class='Button Button-one' ><?php echo $wish?>&nbsp;&nbsp;&nbsp; <i class="fa fa-heart ml-4" style="font-size:20px"></i></button>
        <?php
        if($pa>0){
          ?>
            <button type='button' style='margin:1rem 0rem 0rem 0rem' id='addbtn'  class='Button Button-one' ><?php echo $cls?>&nbsp;&nbsp;&nbsp; <i class="fa fa-shopping-cart ml-4" style="font-size:24px"></i></button>
          <?php
        }?>
      
      </form>
  <?php
  
  if($pa>0){
      echo  "<a href='OrderOne.php?id=$ps' style='text-decoration:none'><button type='button' style='margin:1rem 0rem 0rem 0rem'  class='Button Button-one' > Order</button></a>";
    }
    
    ?>
   
  </div></div>



  
      <script>
         $( document ).ready(function() {
         $('#addbtn').click(function () {
            var ps=$('#ps').val();
            var email=$('#email').val();
            $.ajax({
            url:"addtocart2.php",
            type:"POST",
            data:{Email:email,Ps:ps},
            success: function (data) {
                if(data==0){
                    $("#addbtn").html('Add to cart');
                }
                else{
                    $("#addbtn").html('Added to cart');
                }
                
            } });
         })
         $('#addwishbtn').click(function () {
            var ps=$('#ps').val();
            var email=$('#email').val();
            $.ajax({
            url:"addtocart.php",
            type:"POST",
            data:{Email:email,Ps:ps},
            success: function (data) {
                if(data==0){
                    $("#addwishbtn").html('Add to Wishlist');
                }
                else{
                    $("#addwishbtn").html('Added to Wishlist');
                }
                
            } });
         }) 
         })
         

      </script>
     
<!-- rating part -->
<?php
$sql="SELECT * FROM productrating WHERE Email='$email' AND Product_no='$ps'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
  while($rows=mysqli_fetch_assoc($result)){
    $rate=$rows['rating'];

  }


}
// echo $rate;
?>
<div id="rating">
<p>Ratings</p> <br>
<?php
$s="SELECT * FROM orders WHERE Email='$email' AND Product_no='$ps' AND Delivery_Status='Delivered'";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r)>0){?>
  


      <div id="star" style="display:">  
     <center class="star">
      <i class="fa fa-star star1 fa-2x <?php echo ($rate>=1) ?'checked' : ''?>" data-index="0"></i>
      <i class="fa fa-star star1 fa-2x <?php echo ($rate>=2) ?'checked' : ''?>" data-index="1"></i>
      <i class="fa fa-star star1 fa-2x <?php echo ($rate>=3) ?'checked' : ''?>" data-index="2"></i>
      <i class="fa fa-star star1 fa-2x <?php echo ($rate>=4) ?'checked' : ''?>" data-index="3"></i>
      <i class="fa fa-star star1 fa-2x <?php echo ($rate>=5) ?'checked' : ''?>" data-index="4"></i>
      </center>

      </div>
      <?php
    }
    ?>
      </div>


<script src="jquery.js"></script>
<script>
  var rateIndex=-1;

   $( document ).ready(function() {
    // resetStarColors();
    $('.star1').click(function () {
       rateIndex=parseInt($(this).data('index'));
       localStorage.setItem('rateIndex',rateIndex);
            var ps="<?php echo $ps;?>";
            var email="<?php echo $_SESSION['buyer']?>";
            console.log("hello");

            console.log(ps);
            console.log(email);

            $.ajax({
            url:"productrating.php",
            type:"POST",
            data:{Email:email,Ps:ps,Index:rateIndex},
            success: function (data) {
                if(data==0){
                  
                }
                else{
                    
                }
                
            } });
         })
           

      });
      $('.star1').mouseover(function () {
        
        var currentindex=parseInt($(this).data('index'));
        // resetStarColors();
        for( var i=0;i<= currentindex; i++){
          $('.star1:eq('+i+')').css("color", "yellow");
          // console.log('.fa-star:eq('+i+')');
          
        }
      });
      $('.star1').mouseleave(function () {
        resetStarColors();
        if(rateIndex != -1){
          for( var i=0;i<= rateIndex; i++){
          $('.star1:eq('+i+')').css("color", "yellow");
        }}
      });
     
function resetStarColors(){
  $('.star1').css('color','rgba(131, 131, 131, 0.521)');
}
   
</script>
<!-- chart -->

<!-- <div id="chartContainer" ></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->


<div id="myChart" style="height: 40%; width: 50%; margin:2rem 0 2rem 20rem; color:yellow"></div>
<script>

const o = <?php echo $o?>;
const t = <?php echo $t?>;
const th = <?php echo $th?>;
const f = <?php echo $f?>;
const fi = <?php echo $fi?>; 

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
const data = google.visualization.arrayToDataTable([
  ['Rating', 'No of rating'],
  ['5',fi],
  ['4',f],
  ['3',th],
  ['2',t],
  ['1',o]
]);

const options = {
  title:'Rating'
};

const chart = new google.visualization.BarChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>

<script>
$( document ).ready(function() {
    // resetStarColors();
    $('#msg').click(function () {
            // console.log("clicl");
            var Message = $('#textAreaExample').val();
            var ps="<?php echo $ps;?>";
            var email="<?php echo $_SESSION['buyer']?>";
            // $(".card-body").load(location.href + " .card-body");


            $.ajax({
            url:"review.php",
            type:"POST",
            data:{Email:email,Ps:ps,Msg:Message},
            success: function (data) {
                if(data==0){

                    $('#textAreaExample').val('');
                }
                else{
                  $('#textAreaExample').val('');
                  $(".card-body").load(location.href + " .card-body");


                }
                
            } });
         })
           

      });
</script>
<!-- <script>
        $( document ).ready(function() {
          
          var ps=<?php echo $ps ?>;
          $(document).on("click",".likebtn",function(){
            var mail= $(this).data("id");
            // console.log(ps);
            var ele=this;
            $.ajax({
            url:"like.php",
            type:"POST",
            data:{Mail:mail,Ps:ps},
            success: function (data) {
                if(data==1){
                  $(ele).closest(".likebtn").html("<?php echo ($like++).' '; ?> Likes");
                  
                  
                 
                }
                else{
                 
                }
                
            } });
           
          })
         
})
      </script> -->
  <!-- Scroll -->
  <div style="font-size:28px; font-weight:bolder; color:rgb(6, 94, 145); margin:2rem">Other products from&nbsp;<?php echo $ssh?></div>

  <div class="media-scroller" id="scroll">
<?php 


  $conn=mysqli_connect("localhost","root","","project") or die ("Connection Failed");
  
$sql="SELECT * FROM stock WHERE Email='$pe' AND Serial_no NOT IN('$ps')";
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
<a href="BuyerProductView.php?id=<?php echo $ps; ?>" style="text-decoration:none;">      
<div class="media-element" style="color:black">
<img src="<?php echo $photo;?>" >  
      <p class="heading" style="height:5rem;overflow:auto" ><span style="color:rgb(0,0,0,0.700);font-weight:bolder;"><b><?php echo $pn;?></b></spna> </p>
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

      <p   ><span style="color:red;font-weight:bolder;font-size:20px"><b><?php echo "₹ ".$pp.".00";?></b></spna> </p>
     
       <!-- <a href="#" class="fancy-link">click here </a> -->
      
      
</div></a>
</a>
<?php
    }}
   
    
    ?>
    </div>
</div>


</div>



</body></html>