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
if(isset($_SESSION['admin'])){
    header("Location:AdminHomepage.php");
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

 

</nav>

<form>
<div class="row">

    <div class="col-md-4 ml-5;">
    <h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 2rem;  font-size: 48px;">Sign In as Admin</h1>
    </div>
   
    <div class="col-md-4 ml-5;" style="background-color:white; width:90vh; margin:2rem 0; box-shadow:2px 2px 10px rgba(43, 42, 42, 0.445);color:rgb(6, 94, 145) ;padding:0 2rem "> 
    <div class="form-group mt-5 mr-2" >
    <label for="be" style="font-weight:bold;font-size: 20px; margin-bottom: 0.5vw; ">Email:</label>
    <input type="email" class="form-control" style="border-radius: 20px;" name="be" id="be" aria-describedby="emailHelp" placeholder="Email">
    <div id="be_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
    
  </div>
 
  <div class="form-group mt-3">
    <label for="bp" style="font-weight:bold; font-size: 20px;  margin-bottom: 0.5vw;">Password:</label>
    <input type="password" style="border-radius: 20px;" class="form-control" id="bp" name="bp" placeholder="Password" required>
    <div id="bp_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

  </div>
  <div class="form-checkv mt-4">
  <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" >
  <label style="padding:0 0.5rem;"class="form-check-label" for="flexCheckDefault">
    Show Password
  </label>
</div>
  <div class="Button Button-one" name="btn" id="btn" class="btn btn-primary" >Submit</div>
  <div id="error" class='alert mt-3 px-5'></div>
</form>
<br>
</div></div>
</div>

<script src="jquery.js"></script>
<script type='text/javascript'>
        $(document).ready(function(){
          $('#bp').keyup(function () {
  var bp= $('#bp').val();
  // console.log(bn);
  if (bp.indexOf("'") !== -1 ||bp.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#bp_error').css("display","block");
$('#btn').prop('disabled', true);

}
else{
  $('#bp_error').css("display","none");
$('#btn').prop('disabled', false);


}
  
})

$('#be').keyup(function () {
  var be= $('#be').val();
  // console.log(bn);
  if (be.indexOf("'") !== -1 ||be.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#be_error').css("display","block");
$('#btn').prop('disabled', true);

}
else{
  $('#be_error').css("display","none");
$('#btn').prop('disabled', false);


}
  
})

            $('.check').click(function(){
            
                $(this).is(':checked') ? $('#bp').attr('type', 'text') : $('#bp').attr('type', 'password');
            });

            $('#btn').click(function(){
            var be= $('#be').val();
            var bp= $('#bp').val();
                console.log(be);
                console.log(bp);
            $.ajax({
            url:"checkAdmin.php",
            type:"POST",
            data:{be:be,bp:bp},
            success: function (data) {
                // $('#error').html(data);
                //    $('#error').addClass('alert-success');
                if(data==1){
                    
                    window.location.href = "AdminHomepage.php";

                }
                else if(data==2){
                    $('#error').html("Password Incorrect");
                   $('#error').addClass('alert-danger');
                }
                else if(data==3){
                    $('#error').html("Your account is restricted, you can't use this account and can't create new account with this email id.");
                   $('#error').addClass('alert-danger');
                }
                else{
                    $('#error').html("You don't have an account as admin");
                   $('#error').addClass('alert-danger');
                }
                
            } });
            })
        });
    </script>
<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
<!-- Footer -->
</div>
    </body></html>