<?php
ob_start();
session_start();
include_once('database.php');
if(isset($_SESSION['email'])){
  header("Location: SellerProducts.php");

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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
  /* width:90%; */
  background-image:url("uploads/b1.jpg");
  background-blend-mode: lighten;
}
input{
    color:black;
    
}
nav{
  width:100%;
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
  width:11em;
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

</style>
    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " onload="myFunction()">
<div id="loading"></div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="#" style="cursor:no-drop;">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" style="cursor:no-drop;">User Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="cursor:no-drop;" href="#"  >Add Items</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="cursor:no-drop;" href="#"  >Orders</a>
      </li>
     
      <li>
      <a class="nav-link" href="#" style="cursor:no-drop;" >Contact Us</a>
      
      </li>
      <li class="nav-item">
        <a class="nav-link " style="cursor: no-drop;" href="#">Log out</a>
      </li>

    </ul>
  
  </div>
<br>

</nav>
<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary ml-0 mr-0">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2"> -->

  <!-- <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a></div> -->
  <!-- <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div> -->
</nav>


<form method="POST" action="SellerSignin.php">
<div class="row">

    <div class="col-md-4 ml-5;">
    <h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 2rem;  font-size: 48px;">Sign In</h1>
    </div>
   
    <div class="col-md-4 ml-5;" style="background-color:white; width:90vh; margin:2rem 0; box-shadow:2px 2px 10px rgba(43, 42, 42, 0.445);color:rgb(6, 94, 145) ;padding:0 2rem "> 
    <div class="form-group mt-5 mr-2" >
    <label for="se" style="font-weight:bold;font-size: 20px; margin-bottom: 0.5vw; ">Email:</label>
    <input type="email" class="form-control" style="border-radius: 20px;" name="se" id="se myInput" aria-describedby="emailHelp" placeholder="Email" autocomplete="">
    <div id="se_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
    
  </div>
 <div id='remember' style="display:block">
  <div class="form-group mt-3">
    <label for="sp" style="font-weight:bold; font-size: 20px;  margin-bottom: 0.5vw;">Password:</label>
    <input type="password" style="border-radius: 20px;" class="form-control" id="sp" name="sp" placeholder="Password">
    <div id="sp_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

  </div>
  <div class="form-checkv mt-4">
  <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" >
  <label style="padding:0 0.5rem;"class="form-check-label" for="flexCheckDefault">
    Show Password
  </label>
</div>
<span id='forgetPass' style="color:rgb(6, 94, 145);text-decoration:underline;cursor:pointer;position:relative;top:-1.5rem;float:right" >Forget your Password ?</span>

</div>



<!-- </div> -->
<div class="form-checkv mt-2 mb-0" id="error">
</div>
  <button class="Button Button-one mb-2"type="submit" name="btn" id="btn myButton" class="btn btn-primary" >Submit</button>
</form>
<!-- <br> -->
<p style="color:black;margin-top:2rem">Don't have an account? <a href="SellerSignUp.php" class="fancy-link" style="color:rgb(6, 94, 145);">Click Here</a></div></div>
</div>
<?php
if(isset($_POST['btn'])){
if($_POST['se']==''){
  echo "<div class='alert alert-danger  mt-3 px-5' role='alert' ><b>
  Enter your email first<b> 
</div>";
}
elseif($_POST['sp']==''){
$se=$_POST['se'];
header("Location:forgetPassSeller.php?email=$se");
} 
else{ 
$se=$_POST['se'];
$sp=$_POST['sp'];
$sql="SELECT * FROM sellerdetails WHERE Email='$se' AND Password='$sp' AND Allow='allowed'";
$sql1="SELECT * FROM sellerdetails WHERE Email='$se' AND Allow='allowed'";

$sql2="SELECT * FROM sellerdetails WHERE Email='$se' AND Password='$sp' AND Allow='restricted'";
$sql3="SELECT * FROM sellerdetails WHERE Email='$se' AND Password='$sp' AND Allow=''";


$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
$result2=mysqli_query($conn,$sql2);
$result3=mysqli_query($conn,$sql3);

if(mysqli_num_rows($result)>0){
    $_SESSION['email']=$se;
    // $email="";
    header("Location:SellerProducts.php");
}
elseif(mysqli_num_rows($result1)>0){

    echo "<div class='alert alert-danger  mt-3 px-5' role='alert' ><b>
    Password is incorrect<b> 
  </div>";
}
elseif(mysqli_num_rows($result2)>0){
  echo "<div class='alert alert-danger  mt-3 px-5' role='alert' ><b>
  Your Account is restrictred<b> 
</div>";
}
elseif(mysqli_num_rows($result3)>0){
  echo "<div class='alert alert-danger  mt-3 px-5' role='alert' ><b>
Request is already sent. Please wait for admin's response..<b> 
</div>";
}
else{
    echo "<div class='alert alert-danger  mt-3 px-5' role='alert' ><b>
    The User doesn't exist. Please create an account first<b> 
  </div>";
}

}}
ob_end_flush();
?>
<script src="jquery.js"></script>
<script type='text/javascript'>
        $(document).ready(function(){
            $('.check').click(function(){
            
                $(this).is(':checked') ? $('#sp').attr('type', 'text') : $('#sp').attr('type', 'password');
            });
      

        $('#se').keyup(function () {
  var se= $('#se').val();
  // console.log(bn);
  if (se.indexOf("'") !== -1 ||se.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#se_error').css("display","block");
$('#btn').prop('disabled', true);

}
else{
  $('#se_error').css("display","none");
$('#btn').prop('disabled', false);


}
  
})

$('#sp').keyup(function () {
  var sp= $('#sp').val();
  // console.log(bn);
  if (sp.indexOf("'") !== -1 ||sp.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#sp_error').css("display","block");
$('#btn').prop('disabled', true);

}
else{
  $('#sp_error').css("display","none");
$('#btn').prop('disabled', false);


}})

 $('#forgetPass').click(function(){
  // alert('click');
  $('#remember').css('display','none');
 } )
 $('#myButton').prop('disabled', true);

      // Check the input field on keyup event
      $('#myInput').keyup(function() {
        var inputText = $(this).val();
        
        // Enable or disable the button based on the input field value
        if (inputText === '') {
          $('#myButton').prop('disabled', true);
        } else {
          $('#myButton').prop('disabled', false);
        }
      });
});
    </script>
<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body></html>