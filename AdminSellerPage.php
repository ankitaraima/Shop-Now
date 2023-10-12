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
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="icon" sizes="250x250" href="uploads/logo3.png"> -->
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light  pr-4" style="position:fixed; width:97%;" >
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
<table class="table align-middle mb-0 bg-white" style=" position:relative;top:5rem;">
  <thead class="bg-light mt-4">
    <tr>
      <th>Name</th>
      <th>Contact</th>
      <th>Address</th>
      <th>Shop</th>
      <th>Type</th>

      <th>Allow</th>
      
    </tr>
  </thead>
  <tbody>
<?php 
$sql="SELECT * FROM sellerdetails";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $Serial_no=$row['Serial_no'];
        $Name=$row['Name'];
        $Gender=$row['Gender'];
        $Email=$row['Email'];
        $Username=$row['Username'];
        $Phone=$row['Phone'];
        $Shop_name=$row['Shop_name'];
        $Shop_Type=$row['Shop_Type'];
        $Address=$row['Address'];
        $State=$row['State'];
        $Photo_Id=$row['Photo_Id'];
        $Allow=$row['Allow'];
        if(!empty($Photo_Id)){
            $photo="uploads/".$Photo_Id;
        }
        else{
            // $bgn=strtolower($bgn);
            $photo="uploads/".$Gender.".jpg";
        }
        if($Allow=="allowed" || $Allow=="restricted" ){

       
?>


<tr <?php echo ($Allow=='restricted')? "style='background:rgba(243, 30, 30, 0.400)'":"" ?>>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="<?php echo $photo ?>"
              alt=""
              style="width: 45px; height: 45px; object-fit: cover;"
              class="rounded-circle"
              />
          <div class="ms-3">
          <a  href="SellerView.php?id=<?php echo $Serial_no?>" style="text-decoration:none; color:black"><p class="fw-bold link2 mb-1"><?php echo $Name?></p></a>
      <p class="text-muted mb-0"><?php echo $Gender?></p>
          


          </div>
        </div>
      </td>
      <td>
      <p class="text-muted mb-1"><?php echo $Email?></p>
        <p class="text-muted mb-0"><?php echo $Phone?></p>
      </td>
     
      <td>
      <p class="text-muted mb-1"><?php echo $Address?></p>
     <p class="text-muted mb-0"><?php echo $State?></p>

      </td>
      <td>
      <p class="text-muted mb-1"><?php echo $Shop_name?></p>
     <p class="text-muted mb-0"><?php echo $Shop_Type?></p>

      </td>
      <td>Seller</td>
      <td>
     <p class="text-muted mb-0"><?php echo $Allow?></p>
       
      </td>
    </tr>
        
    <?php 
     }

    }
}
    ?>
  </tbody>
</table>
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