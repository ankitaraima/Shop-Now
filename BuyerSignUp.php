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

<div class="row"><div class="col-md-4 ml-5;" >
<h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 2rem; font-size: 48px;">Sign Up</h1>
</div>

<div class="col-md-8" style="background-color:white; width:90vh; margin:2rem 0; box-shadow:2px 2px 10px rgba(43, 42, 42, 0.445)">
<div class="form-group mb-3 mt-3 ">
<form  method="POST" action="BuyerSignUp.php">
    <label for="bn" style="color:rgb(6, 94, 145);" >Name</label>
    <input name="bn" id="bn" type="text" class="form-control"aria-describedby="emailHelp" placeholder="Enter Your name" style="max-width:500px" required>
    <div id="bn_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
  </div> 

  <div class="form-group mb-3 mt-3 ">
    <label for="bg" style="color:rgb(6, 94, 145);" >Gender:</label><br>
   <label style=" cursor:pointer;  padding:2px"> <input type="radio" name="bg" value="male" style="padding:10rem; background-color: #2196F3;"> Male</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="bg" value="female" style="padding:1rem;"> Female</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="bg" value="Others" style="padding:1rem;"> Others</label><br>

  </div> 
  <div class="form-group mb-3">
    <label for="be" style="color:rgb(6, 94, 145);">Email address</label>
    <input type="email"  class="form-control" name="be" id="be" aria-describedby="emailHelp" placeholder="Enter email"style="max-width:500px" required>
    <div id="be_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
  </div>
  <div class="form-group mb-3">
    <label for="bu"style="color:rgb(6, 94, 145);">Username</label>
    <input style="max-width:500px" type="text" class="form-control" name="bu" id="bu" aria-describedby="emailHelp" placeholder="Enter a Username" required>
    <div id="bu_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
  </div>
  <div id="usernameCheck"></div>

  <div class="form-group mb-3">
    <label for="bp" style="color:rgb(6, 94, 145);">Password</label>
    <input type="password" class="form-control" name="bp" id="bp" placeholder="Enter a Password" style="max-width:500px" required>
    <div id="bp_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
  </div>
  <div class="form-checkv mt-4 mb-4">
  <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" >
  <label style="padding:0 0.5rem; color:rgb(6, 94, 145);"class="form-check-label" for="flexCheckDefault">
    Show Password
  </label>
</div>
 

  <div class="form-group mb-3">
    <label for="bcp" style="color:rgb(6, 94, 145);">Confirm Password</label>
    <input type="password" class="form-control" name="bcp" id="bcp"placeholder="Re-enter your Password" style="max-width:500px" required>
    <div id="bcp_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
  </div>
  <div class="form-checkv mt-4 mb-4">
  <input class="form-check-input check1" type="checkbox" value="" id="flexCheckDefault1" >
  <label style="padding:0 0.5rem; color:rgb(6, 94, 145);"class="form-check-label" for="flexCheckDefault1">
    Show Password
  </label>


</div>
<div  id="error" role="alert">
</div>
<div class="form-group mb-3">
<label for="ques" style="color:rgb(6, 94, 145);">Choose Question:</label>
<select class="form-select" name="ques" aria-label="Default select example" required>
  <option value="What is your nickname ?" selected>What is your nickname ?</option>
  <option value="What is your pet name ? ">What is your pet name ?</option>
  <option value="What is your bestfriend name ?">What is your bestfriend's name ?</option>
  <option value="What is the name of your first school ?">What is the name of your first school ?</option>
  <option value="Menton a memorable day">Menton a memorable day</option>

</select>

</div>
<div class="form-group mb-3">
    <label for="ans" style="color:rgb(6, 94, 145);">Answer:</label>
    <input type="text" class="form-control" name="ans" id="ans" placeholder="Answer of above Question" style="max-width:500px" required>
    <div id="ans_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

</div>
  <div class="form-group mb-3">
    <label for="bph" style="color:rgb(6, 94, 145);">Phone No</label>
    <input type="number" class="form-control"  name="bph" id="bph" placeholder="Phone no" style="max-width:500px" required>
    <div id="bph_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
  </div>
  <div class="form-group mb-3">
    <label for="bc" style="color:rgb(6, 94, 145);">City</label>
    <input type="text" class="form-control" name="bc" id="bc" placeholder="Enter your city name" style="max-width:500px" required>
    <div id="bc_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>
  <div class="form-group mb-3">
    <label for="ba" style="color:rgb(6, 94, 145);">Address</label>
    <input type="text" class="form-control" name="ba" id="ba" placeholder="Enter full address" style="max-width:500px" required>
    <div id="ba_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>

<div class="form-group mb-3">
    <label for="bs" style="color:rgb(6, 94, 145);">State</label>
    <input type="text" class="form-control" name="bs" id="bs" placeholder="State" style="max-width:500px" required>
    <div id="bs_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>

<div  id="errorinsubmission" role="alert">
</div>

<button class="Button Button-one" type='submit' class='btn btn-danger btn-rounded ' name='btn1' id='btn1'  >Create Account</button>

<!-- <button type="submit" class="btn btn-danger btn-rounded mb-5 mr-5 " name="btn" id="btn" >Save</button> -->

</form>
<br><br>
<p >Already have an account? <a class="fancy-link" href="BuyerSignIn.php" style="color:rgb(6, 94, 145);">Click Here</a>
<div>
<script src="jquery.js"></script>

<script> $(document).ready(function (){
$('#bcp').keyup(function () {
  var bp= $('#bp').val();
    var bcp= $('#bcp').val();
    if(bcp!=bp){
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
})
$('#ans').keyup(function () {
  var ans= $('#ans').val();
  // console.log(bn);
  if (ans.indexOf("'") !== -1 ||ans.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#ans_error').css("display","block");
  // Disable the button
$('#btn1').prop('disabled', true);

}
else{
  $('#ans_error').css("display","none");
  $('#btn1').prop('disabled', false);

}
  
})
$('#bn').keyup(function () {
  var bn= $('#bn').val();
  console.log(bn);
  if (bn.indexOf("'") !== -1 ||bn.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#bn_error').css("display","block");
  // Disable the button
$('#btn1').prop('disabled', true);

}
else{
  $('#bn_error').css("display","none");
  $('#btn1').prop('disabled', false);

}
  
})
$('#be').keyup(function () {
  var be= $('#be').val();
  console.log(bn);
  if (be.indexOf("'") !== -1 ||be.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#be_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#be_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})

$('#bu').keyup(function () {
  var bu= $('#bu').val();
  console.log(bu);
  if (bu.indexOf("'") !== -1 ||bu.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#bu_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#bu_error').css("display","none");
$('#btn1').prop('disabled', false);


}
})
$('#bp').keyup(function () {
  var bp= $('#bp').val();
  console.log(bn);
  if (bp.indexOf("'") !== -1 ||bp.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#bp_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#bp_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})
$('#bcp').keyup(function () {
  var bcp= $('#bcp').val();
  console.log(bn);
  if (bcp.indexOf("'") !== -1 ||bcp.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#bcp_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#bcp_error').css("display","none");
  $('#btn1').prop('disabled', false);

}
  
})


$('#bph').keyup(function () {
  var bph= $('#bph').val();
  console.log(bn);
  if (bph.indexOf("'") !== -1 ||bph.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#bph_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#bph_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})

$('#bc').keyup(function () {
  var bc= $('#bc').val();
  console.log(bc);
  if (bc.indexOf("'") !== -1 ||bc.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#bc_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#bc_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})

$('#ba').keyup(function () {
  var ba= $('#ba').val();
  console.log(ba);
  if (ba.indexOf("'") !== -1 ||ba.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#ba_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#ba_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})

$('#bs').keyup(function () {
  var bs= $('#bs').val();
  console.log(bn);
  if (bs.indexOf("'") !== -1 ||bs.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#bs_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#bs_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})



});

</script>


<script src="jquery.js"></script>
<script type='text/javascript'>
        $(document).ready(function(){
            $('.check').click(function(){
            
                $(this).is(':checked') ? $('#bp').attr('type', 'text') : $('#bp').attr('type', 'password');
            });
            $('.check1').click(function(){
            
            $(this).is(':checked') ? $('#bcp').attr('type', 'text') : $('#bcp').attr('type', 'password');
        });
        });
    </script>
<?php
if(isset($_POST['btn1'])){
 

  $bn=$_POST['bn'];
  $be=$_POST['be'];
  $bu=$_POST['bu'];
  $bp=$_POST['bp'];
  $bph=$_POST['bph'];
  $bc=$_POST['bc'];
  $ba=$_POST['ba'];
  $bs=$_POST['bs'];
  $bcp=$_POST['bcp'];
  $bg=$_POST['bg'];
  $ques=$_POST['ques'];
  $ans=$_POST['ans'];
 $ans=strtolower($ans);

if($bp!=$bcp){
  echo "<div  class='alert alert-danger' role='alert'>Something went wrong!!
  </div>";
}
else{

  $sql="SELECT * FROM buyerdetails WHERE Email='$be' ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    echo "<div  class='alert alert-danger' role='alert'>You already have an account. Please Sign in..
  </div>";
  // header("Location: SellerSignin.php");
  }
  else{
    $sql="INSERT INTO buyerdetails(Name,Gender,Email,Username,Password,Phone_no,City,Address,State,Allow,Question,Answer) VALUES('$bn','$bg','$be','$bu','$bp',$bph,'$bc','$ba','$bs','allowed','$ques','$ans')";
    mysqli_query($conn,$sql);
      $_SESSION['buyer']=$be;
      header("Location:BuyerHomepage.php");
   
  }

}

}
ob_end_flush();
?>



<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
<!-- Footer -->
</div></div>
</div>

</body></html>
