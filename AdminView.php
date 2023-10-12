<?php
ob_start();
session_start();
include_once('database.php');
if(isset($_SESSION['email'])){
  unset($_SESSION['email']);

}
if(isset($_SESSION['buyer'])){
    unset($_SESSION['buyer']);
}
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}
$ss=$_GET['id'];
$_SESSION['id']=$ss;
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

#cards{
    position:relative;
    top:7rem;
    display:flex;
    width:100%;
    height:100%;
}
.card{
    height:12rem;
    width:20rem;
    margin:1rem;
    display:flex;

}
/* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  margin:0 0.5rem;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  /* display:flex; */
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
  cursor: pointer;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
  cursor: pointer;
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
.Button1{
  position: relative;
  display:flex;

  height: 6vh;
  margin:2em 0 1rem 0.25em;
  width:100%;
  cursor: pointer;
  border:2px solid red;
    color:red;
  text-decoration: none;
  background: rgb(255,255,255);

  text-decoration: none;
  color:red;
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
 background-color:red;
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
.Button{
  position: relative;
  display:flex;

  height: 6vh;
  margin:2em 0 1rem 0.25em;
  width:100%;
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
.flip-card-back-p::-webkit-scrollbar {
   width: 10px;
}

/* Track */
.flip-card-back-p::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 15px;
}
 
/* Handle */
.flip-card-back-p::-webkit-scrollbar-thumb {
    background: rgba(88, 88, 88, 0.16);
  border-radius: 15px;
}

/* Handle on hover */
.flip-card-back-p::-webkit-scrollbar-thumb:hover {
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
.d-flex .ms-3 .link2:hover{
    text-decoration: underline;

}


.profile{
    width:40rem;
    height:auto;
    background-color: white;
    box-shadow: 2px 2px 20px rgb(0,0,0,0.200);
    border-radius: 20px;
    /* margin:2rem 0 0 10rem; */
    padding:2rem;
    text-align:center
   
}
.profile img{
    object-fit: cover;
    /* margin:2rem 0 2rem 12rem; */

   
}
.profile .header{
    font-size:4rem;
    /* padding:0rem 9rem 0 9.5rem; */
    font-weight: Bolder;
    color:black;
   
}
.profile p{
    font-size:20px;
    color:rgb(0,0,0,0.600);
    /* padding:0rem 9rem 0 9.5rem; */
    
   
}
.profile span{
    font-size:20px;
    /* padding:0rem 9rem 0 9.5rem; */
    font-weight:bolder;
   
}
</style>
    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " onload="myFunction()">
   
<div id="loading"></div>
<?php
$email=$_SESSION['admin'];
$sql="SELECT * FROM admindetails WHERE Email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $bn=$row['Name'];
        $bgn=$row['Gender'];
        $be=$row['Email'];
        $bp=$row['Password'];
        $bph=$row['Phone_no'];
        $bpid=$row['Photo_id'];
        if(!empty($bpid)){
            $photo="adminUpload/".$bpid;
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
<?php
$s="SELECT * FROM sellerdetails WHERE Allow=''";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r)>0){
  $req="<i class='fa-solid fa-circle' style='color: #ff1900;font-size:5px'></i>";
}
else{
  $req="";
}
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  pr-4" style="z-index:99;width:97%;" >
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-4">
      <li class="nav-item active">
        <a class="nav-link " href="AdminHomepage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AdminUserDetails.php">User Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="AdminBuyerPage.php" >Buyers</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link "  href="AdminSellerPage.php"  >Sellers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="AdminPage.php"  >Admin</a>
      </li>
      <li>
      <a class="nav-link" href="SellerRequests.php" >Requests&nbsp;<?php echo $req ?></a>
      
      </li>
      <li>
      <a class="nav-link" href="reports.php" >Reports</a>
      
      </li>
      <li>
      <a class="nav-link" href="Adminddatabase.php" >Database</a>
      
      </li>
      <li>
      <a class="nav-link" href="AdminFeedback.php" >Feedbacks</a>
      
      </li>
      <li class="nav-item">
        <a class="nav-link " href="logout.php">Log out</a>
      </li>
      
    </ul>


<div class="float-right icon">

  <a href="AdminUserDetails.php" style="display:flex;"><img src="<?php echo $photo ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-left:15rem; cursor:pointer"></a></div>
  
</nav>

<div class="d-flex justify-content-center  mt-2 p-2" >
    <div class="profile" >
    <?php 
    $ss=$_SESSION['id'];
$sql="SELECT * FROM admindetails WHERE Serial_no='$ss'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $Serial_no=$row['Serial_no'];
        $Name=$row['Name'];
        $Gender=$row['Gender'];
        $Email=$row['Email'];
        $Phone_no=$row['Phone_no'];
        $Photo_id=$row['Photo_id'];
        $Allow=$row['Allow'];
        if(!empty($Photo_id)){
            $photo="adminUpload/".$Photo_id;
        }
        else{
            // $bgn=strtolower($bgn);
            $photo="uploads/".$Gender.".jpg";
        }
       
        if($Allow=="allowed" && $Email!=$_SESSION['admin']){
$btn3="<div class='Button1 button-one1' id='btn3'>Restrict this Account</div>";

        }
        elseif($Allow=="restricted" && $Email!=$_SESSION['admin'])
{
        $btn3="<div class='Button button-one' id='btn3'>Allow this Account</div>";
      }
 else{
  $btn3="<div></div>";
 }     
?>
    
<img  class="rounded-circle mt-5 mb-2" src="<?php echo $photo?>" height="250px" width="250px" alt="">
<p class="header"><?php echo $Name?> </p>
<p><span style="color:rgb(6, 94, 145)">ADMIN</span></P>


<p><span>Gender:</span> &nbsp;<?php echo $Gender?> </p>
<p ><span>Email: &nbsp;</span><?php echo $Email?> </p>
<p ><span>Phone: &nbsp;</span><?php echo $Phone_no?> </p>



<p ><span>Acount Status:</span> &nbsp;<?php echo $Allow?> </p>
<div id="error" class="alert"></div>
<?php echo $btn3?>   
<div class="Button button-one" id="btn1">Back</div>




<?php
        }
    }

?>

    </div>
</div>
<script src="jquery.js"></script>
<script>
   $( document ).ready(function() {
    $('#btn1').click(function(){
      window.location.href = "AdminPage.php";
    })


    $('#btn3').click(function(){
      var ss=<?php echo $_SESSION['id']?>;
      var allow="<?php echo $Allow?>";
      // alert(ss);
      $.ajax({
            url:"restrictAdmin.php",
            type:"POST",
            data:{ss:ss,allow:allow},
            success: function (data) {
              if(data==1){
              $('#btn3').attr('value', 'Allow this Account');  
              window.location.href = "AdminPage.php";
                
                // $('.profile').load(document.URL +  '.profile');
              }
              else{
                $("#error").html("Something went wrong.Please try again later");
                $("#error").addClass('alert-danger');
              }
            }})
    })
   })


</script>
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