<?php
ob_start();
session_start();
include_once('database.php');
if(isset($_SESSION['email'])){
  unset($_SESSION['email']);

}

if(isset($_SESSION['buyer'])){
    header("Location:BuyerHomepage.php");
}
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="#">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" sizes="250x250" href="uploads/logo3.png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
        <a class="nav-link " href="#" style="cursor:no-drop;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" style="cursor:no-drop;">User Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " style="cursor:no-drop;" href="#"  >Cart</a>
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
 

</nav>

<div class="row">

    <div class="col-md-3 ml-8">
    <!-- <h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 2rem;  font-size: 48px;">Sign In</h1> -->
    </div>
   
    <div class="col-md-4 ml-5;" style="background-color:white; width:100vh; margin:7rem 2rem; box-shadow:2px 2px 10px rgba(43, 42, 42, 0.445);color:rgb(6, 94, 145) ;padding:0 2rem "> 
    <h5 style="font-weight:bold; margin:2rem 1rem; font-size:2rem">Join as Buyer</h5>

  <button class="Button Button-one"  id="btn1" class="btn btn-primary" >Sign Up as Buyer</button>
  <button class="Button Button-one"  id="btn2" class="btn btn-primary" >Sign In as Buyer</button>

<br>
<p style="color:black;">Go to Homepage <a href="index.php" class="fancy-link" style="color:rgb(6, 94, 145);">Click Here</a></div></div>
</div>

<script src="jquery.js"></script>

    <script>
  $('#btn1').click(function(){
   window.location.href='BuyerSignUp.php';
})
$('#btn2').click(function(){
   window.location.href='BuyerSignIn.php';
})

</script>

<?php ob_end_flush();?>


<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
</div>
    </body></html>