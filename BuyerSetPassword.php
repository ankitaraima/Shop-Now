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
if(isset($_GET['id'])){
    $em=$_GET['id'];
    $_SESSION['bem']=$em;
    $em=$_SESSION['bem'];
    }
    else{
    $em=$_SESSION['bem'];
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
  margin:1em 0 0rem 0.25em;
  width:27em;
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
<form method="POST" action="BuyerSetPassword.php" >
<div class="row">

    <div class="col-md-4 ml-5;">
    <h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 2rem;  font-size: 48px;">Change Password </h1>
    </div>
   
    <div class="col-md-4 ml-5;" style="background-color:white; width:90vh; margin:2rem 0; box-shadow:2px 2px 10px rgba(43, 42, 42, 0.445);color:rgb(6, 94, 145) ;padding:0 2rem 2rem  "> 
    <div class="form-group mt-5 mr-2" >
    <label for="pass" style="font-weight:bold;font-size: 20px; margin-bottom: 0vw; ">Password:</label>
    <input type="password" class="form-control mb-0" style="border-radius: 20px;" name="pass" id="pass" aria-describedby="emailHelp" placeholder="Password" autocomplete="off">
    <div id="pass_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
    <div class="form-checkv mt-4 mb-4">
  <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" >
  <label style="padding:0 0.5rem; color:rgb(6, 94, 145);"class="form-check-label" for="flexCheckDefault">
    Show Password
  </label>
  
</div>
    <div class="form-group mt-2 mr-2 " >
    <label for="conpass" style="font-weight:bold;font-size: 20px; margin-bottom: 0.5vw; ">Confirm Password:</label>
    <input type="password" class="form-control mb-0" style="border-radius: 20px;" name="conpass" id="conpass"  placeholder="Confirm Password" autocomplete="off">
    <div id="conpass_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
  </div>
  <div class="form-checkv mt-4 mb-0">
  <input class="form-check-input check1" type="checkbox" value="" id="flexCheckDefault1" >
  <label style="padding:0 0.5rem; color:rgb(6, 94, 145);"class="form-check-label" for="flexCheckDefault1">
    Show Password
  </label>


</div>
<div  id="error" role="alert">
</div>




<!-- </div> -->
<div class="form-checkv mt-4 mb-0" id="error">

  <button class="Button Button-one mb-0"type="submit" name="btn" id="btn" class="btn btn-primary"  style="display:flex">Submit</button>
  <button class="Button Button-one mb-2"type="submit" name="btn1" id="btn1" class="btn btn-primary" style="display:flex;margin-bottom:50rem">Skip for now</button></div>
</form>
<?php
// echo $em;
if(isset($_POST['btn1'])){
    $_SESSION['buyer']=$em;
    header("Location: BuyerHomepage.php");

}
if(isset($_POST['btn'])){
    $sp=$_POST['pass'];
    $scp=$_POST['conpass'];


    if($sp!=$scp){
        echo "<div  class='alert alert-danger' role='alert'>Incorrect Password !!
        </div>";
      }
      else{
        $sql="UPDATE buyerdetails  SET Password='$sp' WHERE Email='$em' ";
        if(mysqli_query($conn,$sql)){
    $_SESSION['buyer']=$em;
    header("Location: BuyerHomepage.php");

        }
        else{
            echo "<div  class='alert alert-danger' role='alert'>Something went wrong..Skip for now and try again later..Thank you!!
            </div>";
        }
    
    }
}
?>
<script src="jquery.js"></script>
<script type='text/javascript'>
        $(document).ready(function(){
            $('.check').click(function(){
            
                $(this).is(':checked') ? $('#pass').attr('type', 'text') : $('#pass').attr('type', 'password');
            });
            $('.check1').click(function(){
            
            $(this).is(':checked') ? $('#conpass').attr('type', 'text') : $('#conpass').attr('type', 'password');
        });

        $('#pass').keyup(function () {
  var pass= $('#pass').val();
  // console.log(ba);
  if (pass.indexOf("'") !== -1 ||pass.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#pass_error').css("display","block");
$('#btn').prop('disabled', true);

}
else{
  $('#pass_error').css("display","none");
$('#btn').prop('disabled', false);


}
  
})

$('#conpass').keyup(function () {
  var conpass= $('#conpass').val();
  // console.log(ba);
  if (conpass.indexOf("'") !== -1 ||conpass.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#conpass_error').css("display","block");
$('#btn').prop('disabled', true);

}
else{
  $('#conpass_error').css("display","none");
$('#btn').prop('disabled', false);


}
  
});
$('#conpass').keyup(function () {
  var sp= $('#pass').val();
    var scp= $('#conpass').val();
    if(scp!=sp){
      $("#error").removeClass("alert alert-success");
      $("#error").addClass("alert alert-danger");
      $("#error").html('*Incorrect Password');
      var chk = 0; 


    }
    
    else{
      $("#error").removeClass("alert alert-danger");
      $("#error").addClass("alert alert-success");
      
      $("#error").html('*correct Password');
      
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