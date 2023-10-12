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
    <link rel="icon" sizes="250x250" href="uploads/logo3.png">
    
    <title>Shop Now</title>
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
.content{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
}

.Button1{
  position: relative;
  display:flex;

  height: 6vh;
  margin:2em 0 1rem 0.25em;
  width:10em;
  cursor: pointer;
  border:2px solid  red;
    color:red;;
  text-decoration: none;
  background: rgba(255, 255, 255, 0);

  text-decoration: none;
  color: red;
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
 background-color: red; 
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


.shipped{
  position: relative;
  display:flex;

  height: 6vh;
  margin:2em 0 1rem 0.25em;
  width:10em;
  cursor: pointer;
  border:2px solid  rgb(245, 163, 11);
    color:rgb(245, 163, 11);;
  text-decoration: none;
  background: rgba(255, 255, 255, 0);

  text-decoration: none;
  color: rgb(245, 163, 11);;
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

.shipped::after{
 content:'';
 position: absolute;
 color:white;
 width:100%;
 height: 100%;
 border-radius: var(--radius-5);
 background-color: rgb(245, 163, 11);; 
 top:0;
 left:0;
 z-index: -1;
 transition:transform 200ms ease-in;
}
.shipped:hover{
    color:white;
}
.shipped-one1::after{
    border-radius: var(--radius-4);
  transform: scaleX(0);
  transform-origin: left;
  transform-origin: right;
  color:white;
}
.shipped-one1:hover::after{
    border-radius: var(--radius-4);
  transform: scaleX(1);
  transform-origin: left;
  color:white;
}

.delivery{
  position: relative;
  display:flex;

  height: 6vh;
  margin:2em 0 1rem 0.25em;
  width:10em;
  cursor: pointer;
  border:2px solid  rgb(245, 163, 11);
    color:rgb(245, 163, 11);;
  text-decoration: none;
  background: rgba(255, 255, 255, 0);

  text-decoration: none;
  color: rgb(245, 163, 11);;
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

.delivery::after{
 content:'';
 position: absolute;
 color:white;
 width:100%;
 height: 100%;
 border-radius: var(--radius-5);
 background-color: rgb(245, 163, 11);; 
 top:0;
 left:0;
 z-index: -1;
 transition:transform 200ms ease-in;
}
.delivery:hover{
    color:white;
}
.delivery-one1::after{
    border-radius: var(--radius-4);
  transform: scaleX(0);
  transform-origin: left;
  transform-origin: right;
  color:white;
}
.delivery-one1:hover::after{
    border-radius: var(--radius-4);
  transform: scaleX(1);
  transform-origin: left;
  color:white;
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
  border-radius: var(--radius-1);
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
 border-radius: var(--radius-1);
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
    border-radius: var(--radius-4=1);
  transform: scaleX(0);
  transform-origin: left;
  transform-origin: right;
  color:white;
}
.Button-one:hover::after{
    border-radius: var(--radius-1);
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
    display: grid;
    grid-template-rows: min-content;
    gap: var(--size-1rem);
    padding:var(--spacer);
    background: var(--surface-6);
    border-radius: var(--radius-2);
    box-shadow: var(--shadow-4);

}
.media-element > img{
    inline-size: 100%;
   aspect-ratio: 16/14;
   object-fit: cover;


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
   border-radius: var(--radius-3);

   height:10rem ;
   width:10rem;
   object-fit: cover;
   margin:2rem 4rem;
}

.name{
color:black;
text-decoration:none;

}
.name:hover{
text-decoration:underline;

}



</style>
    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " >
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
  <div class="float-right"><a href="SellerDetails.php" style="display:flex;"><img src="<?php echo $photo;?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-right:5vh;margin-left:5vh; cursor:pointer"></a></div>

</nav>

<section class="h-100" style="width:100%">
  <div class="container h-100 py-5"style="width:100%">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">

        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3 class="fw-normal mb-0" style="color:rgb(6, 94, 145); font-size:40px; font-weight:bolder">Orders</h3>
          
        </div>
       
        <div class="card rounded-3 mb-4" >
          <div class="card-body ">
        <?php
        $email=$_SESSION['email'];
        $orderIds = array();
        $sql = "SELECT DISTINCT Order_Id FROM orders WHERE Seller_Email='$email'";
        $result =mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
          
          while($row=mysqli_fetch_assoc($result)){
            $orderIds[] = $row['Order_Id'];
          }}             
          else{
              ?>
               <div class="alert alert-secondary" role="alert"> Nothing to show!! </div>
              <?php
          }
          ?><?php
            foreach ($orderIds as $orderId) {
              ?>
               <div class="ankita">
            <div class="row d-flex justify-content-between align-items-center mb-2 mt-3" style=" border-bottom: 1px solid rgb(0,0,0,0.200);">
            <?php
              $c=0;
          $ppids = array();

              $ele=$orderId;?>
                <div class="col-4 ">
              
                 <span style="font-weight:bolder;color:rgb(6, 94, 145);margin:1rem 0.5rem;font-size:20px">Order Id:</span> <span style="font-weight:bolder;color:rgb(0,0,0,0.600)"><?php echo $orderId?></span>
              </div>
            <div class="col-5 ">

              <?php
              $sql1="SELECT * FROM orders WHERE Order_Id='$ele'";
              // echo $sql1;
              $so=0;
              $i=0;
              $can=0;
              $result1 =mysqli_query($conn,$sql1);
              if(mysqli_num_rows($result1)>0){
                while($row1=mysqli_fetch_assoc($result1)){
                  $c=$c+1;
                  $pn=$row1['Product_no'];
                  $ds=$row1['Delivery_Status'];
                  if(!($ds=='Delivered')){
                    $so++;
                  }
                 
                  $s="SELECT * FROM stock WHERE Serial_no='$pn'";
                  $r=mysqli_query($conn,$s);
                  if(mysqli_num_rows($r)>0){
                   while($ro=mysqli_fetch_assoc($r)){
                    $pid=$ro['Photo_Id'];
                    $ppid="SellerUpload/$pid";
                    // $ppids[]=$ppid;
                    if($c<=4){
                    ?>
                     <img src="<?php echo $ppid?>" height="50rem" width="50rem" style="  border-radius: 50%;margin:0.5rem 0 1rem 0.5rem;border:2px solid rgb(0,0,0,0.200)" alt="">
                     
                    <?php
                    }
                    else if($i==0){
                        ?>
                     <span style="margin:4rem 0 0 1rem;position:relative;top:0.5rem" >more</span> 
                        <?php
                        $i++;

                    }
                    else{
                      ?>
                      <span></span>
                      <?php
                    }
                   }
                  }
                
                }
                  ?>
                 
                  <?php
                }
                ?>
 
        </div>
        <div class="col-md-1 ">
            <a href="SellerOpenOrderProduct.php?id=<?php echo $orderId?>" style="text-decoration:none"> <div class="Button Button-one" style="width:4rem;margin:0 4rem 1rem 0;">View</div>
            </a> <a href="invoice.php?id=<?php echo $orderId?>" style="text-decoration:none"> <div class="Button Button-one" style="width:4rem;margin:0 4rem 1rem 0;">Invoice</div>
           </a> </div>

             <div class="col-md-2 ">
           <span style="color:<?php echo ($so!=0)?"red":"green" ?>;font-weight:bolder;font-size:20px"><?php echo ($so!=0)?"Not Delivered":"Delivered"?></span>
            </a></div>
                     </div >
                         
                          <?php 
                    }

                    ?>
              </div>
                
            </div>
        </div>
        
    </div>
  </div>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
   $( document ).ready(function() {
    $(document).on("click",".canclebtn",function(){
      if(confirm("Do yo really want to cancel this product?")){
        var ps= $(this).data("id");
        var pni=$(this).data("pni");
        var pid=$(this).data("pid");

        // alert(ps);

// $('.modal').modal('toggle');

var ele=this;
// console.log(ps);


$.ajax({
url:"productName.php",
type:"POST",
data:{Ps:ps,Pni:pni,Pid:pid},
success: function (data) {
    
    if(data==1){
      $(ele).closest(".ankita").fadeOut();
      // $(".modal").load(location.href + ".modal");
      location.reload();
      


    }
    else{
      alert("Something went wrong");
// $('.modal').modal('show');

    }

       
   
    
} });
      }
      // $('.modal').modal('');
    })
    
 
        })

</script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>