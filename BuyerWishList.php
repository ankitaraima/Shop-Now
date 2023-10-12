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
<section class="h-100" >
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-15">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0" style="color:rgb(6, 94, 145); font-size:40px; font-weight:bolder">Wish List</h3>
          
        </div>
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">

<?php
$email=$_SESSION['buyer'];
 $sql="SELECT  * FROM wishlist WHERE Email='$email' ";
 $result=mysqli_query($conn,$sql);
 $sum=0;
 if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
    $ps=$row['Product_no'];
    $sql1="SELECT * FROM stock WHERE Serial_no='$ps'";
    $result1=mysqli_query($conn,$sql1);
    
    if(mysqli_num_rows($result1)>0){
   while($row1=mysqli_fetch_assoc($result1)){
        $pn=$row1['Product'];
        $pb=$row1['Brand'];
        $pp=$row1['price'];
        $pw=$row1['Weight'];
        $pa=$row1['Available'];
        $sum+=$pp;
        if($pa>0){
            $av="<p style='color:green'>In stock</p>";
        }
        else{
            $av="<p style='color:red'>Out of stock</p>";
        }
        $ppid=$row1['Photo_Id'];
        if(empty($ppid)){
            $photo="uploads/NoProductPhoto.jpg";
        }
        else{
            $photo="SellerUpload/$ppid";

        }

   }}
?>


            <div class="ankita">
            <div class="row d-flex justify-content-between align-items-center mb-3 mt-3" style=" border-bottom: 1px solid rgb(0,0,0,0.200);">
              <div class="col-md-3 col-lg-3 col-xl-3">
                <img
                  src="<?php echo $photo?>"
                  class="img-fluid rounded-3 mb-3" alt="" >
              </div>
              <div class="col-md-4 col-lg-4 col-xl-4">
              <a href="BuyerProductView.php?id=<?php echo $ps?>" style="text-decoration:none"><p class="lead fw-normal heading mb-2" style="color:black"><?php echo $pn?></p></a>
                <p><span class="text-muted">Brand: </span><?php echo $pb?> <br><span class="text-muted">Weight: </span><?php echo $pw?></p>
                <?php echo $av?>
              </div>
              <!-- <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fa fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="2" type="number"
                  class="form-control form-control-sm" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                  <i class="fa fa-plus"></i>
                </button>
              </div> -->
              <div class="col-md-2 col-lg-2 col-xl-2 offset-lg-2" style="align-item:center;align-text:center">
                <p class="mb-4" style="font-weight:bold;font-size:20px" ><?php echo "₹ ".$pp.".00"?></p>
                <div >
            <div class="Button Button-one move" data-id="<?php echo $ps;?>" style="width:7rem;margin:0 4rem 0 0;">Add to cart</div>
             </div>

              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" class="text-danger"><i class="fa fa-close fa-2x" data-id="<?php echo $ps;?>" style="color:rgb(0,0,0,0.300)"></i></a>
              </div>
            </div >
            </div>
       
            <script src="jquery.js"></script>
      <script>
        $( document ).ready(function() {
          // loadtable();
          $(document).on("click",".fa-close",function(){
            var ps= $(this).data("id");
            var email='<?php echo $_SESSION['buyer']?>';
            // console.log(ps);
            var ele=this;
            $.ajax({
            url:"deleteFromWishList.php",
            type:"POST",
            data:{Email:email,Ps:ps},
            success: function (data) {
                if(data==1){
                  $(".total").load(location.href + " .total");
                $(ele).closest(".ankita").fadeOut();

                   
                }
                else{
                  $("#error").html("SOMETHING WENT WRONG").slideDown();
                }
                
            } });
           
          })
          $(document).on("click",".move",function(){
            var ps= $(this).data("id");
            var email='<?php echo $_SESSION['buyer']?>';
            // console.log(ps);
            var ele=this;
            $.ajax({
            url:"removeFromWishList.php",
            type:"POST",
            data:{Email:email,Ps:ps},
            success: function (data) {
                if(data==1){
                  $(".total").load(location.href + " .total");
                $(ele).closest(".ankita").fadeOut();

                   
                }
                else{
                  $("#error").html("SOMETHING WENT WRONG").slideDown();
                }
                
            } });
           
          })
         
})
      </script>
        <?php
        }
    }
    else{
        ?>
        <div class="alert alert-secondary" role="alert">
        The cart is empty!!
      </div>
      <?php
    }
    ?>
        </div>
        </div>
        
    </div>
  </div>
</section>
    </body>
    </html>