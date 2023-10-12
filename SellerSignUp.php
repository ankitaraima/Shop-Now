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
input[type="radio"] {
  /* ...existing styles */
  /* display: grid; */
  background-color: white;
  cursor:pointer;
  font-weight: bolder;
  decoration:none;
  /* place-content: center; */
}

input[type="radio"]::before {
  content: "";
  width: 0.65em;
  height: 0.65em;
  border-radius: 50%;
  transform: scale(0);
  transition: 120ms transform ease-in-out;
  box-shadow: inset 1em 1em var(--form-control-color);
}

input[type="radio"]:checked::before {
  transform: scale(1);
}
input[type="radio"]::before {
  /* ...existing styles */

  /* Windows High Contrast Mode */
  background-color: CanvasText;
}
input[type="radio"]:focus {
  outline: max(2px, 0.15em) solid currentColor;
  outline-offset: max(2px, 0.15em);
}
</style>
    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; ">
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
  <!-- <div class="float-right"><i class="fa fa-shopping-cart" style="font-size:30px"></i></div> -->
 

<div>

</nav>
    <div class="row"><div class="col-md-4 ml-5;" >
<h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 2rem; font-size: 48px;">Sign Up</h1>
</div>

<div class="col-md-8" style="background-color:white; width:90vh; margin:2rem 0; box-shadow:2px 2px 10px rgba(43, 42, 42, 0.445)">
<div class="form-group mb-3 mt-3 ">
<form  method="POST" action="SellerSignUp.php" enctype="multipart/form-data">
    <label for="sn" style="color:rgb(6, 94, 145);" >Name</label>
    <input name="sn" id="sn" type="text" class="form-control"aria-describedby="emailHelp" placeholder="Enter Your name" style="max-width:500px" required>
    <div id="sn_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

  </div> 

  <div class="form-group mb-3 mt-3 ">
    <label for="sg" style="color:rgb(6, 94, 145);" >Gender:</label><br>
   <label style=" cursor:pointer;  padding:2px"> <input type="radio" name="sg" value="male" style="padding:10rem; background-color: #2196F3;"> Male</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="sg" value="female" style="padding:1rem;"> Female</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="sg" value="Others" style="padding:1rem;"> Others</label><br>

  </div> 
  <div class="form-group mb-3">
    <label for="se" style="color:rgb(6, 94, 145);">Email address</label>
    <input type="email"  class="form-control" name="se" id="se" aria-describedby="emailHelp" placeholder="Enter email"style="max-width:500px" required>
    <div id="se_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
    
  </div>
  <div class="form-group mb-3">
    <label for="su"style="color:rgb(6, 94, 145);">Username</label>
    <input style="max-width:500px" type="text" class="form-control" name="su" id="su" aria-describedby="emailHelp" placeholder="Enter a Username" required>
    <div id="su_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

  </div>
  <div id="usernameCheck"></div>

  <div class="form-group mb-3">
    <label for="sp" style="color:rgb(6, 94, 145);">Password</label>
    <input type="password" class="form-control" name="sp" id="sp" placeholder="Enter a Password" style="max-width:500px" required>
    <div id="sp_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

  </div>
  <div class="form-checkv mt-4 mb-4">
  <input class="form-check-input check" type="checkbox" value="" id="flexCheckDefault" >
  <label style="padding:0 0.5rem; color:rgb(6, 94, 145);"class="form-check-label" for="flexCheckDefault">
    Show Password
  </label>
  
</div>
 

  <div class="form-group mb-3">
    <label for="scp" style="color:rgb(6, 94, 145);">Confirm Password</label>
    <input type="password" class="form-control" name="scp" id="scp"placeholder="Re-enter your Password" style="max-width:500px" required>
    <div id="scp_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

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
    <label for="sph" style="color:rgb(6, 94, 145);">Phone No</label>
    <input type="number" class="form-control"  name="sph" id="sph" placeholder="Phone no" style="max-width:500px" required>
  </div>
  <div class="form-group mb-3">
    <label for="ssh" style="color:rgb(6, 94, 145);">Shop Name</label>
    <input type="text" class="form-control" name="ssh" id="ssh" placeholder="Enter your Shop name" style="max-width:500px" required>
    <div id="ssh_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

</div>
<div class="form-group mb-3 mt-3 ">
    <label for="st" style="color:rgb(6, 94, 145);" >Shop Type:</label><br>
   <label style=" cursor:pointer;  padding:2px"> <input type="radio" name="st" value="Confectionery" style="padding:10rem; background-color: #2196F3;"> Confectionery</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="st" value="Grocery" style="padding:1rem;"> Grocery</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="st" value="Stationery" style="padding:1rem;">Stationery</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="st" value="Others" style="padding:1rem;">Others</label><br>
  </div> 
  <div class="form-group mb-3">
    <label for="sa" style="color:rgb(6, 94, 145);">Address</label>
    <input type="text" class="form-control" name="sa" id="sa" placeholder="Enter full address of your shop" style="max-width:500px" required>
    <div id="sa_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

</div>

<div class="form-group mb-3">
    <label for="ss" style="color:rgb(6, 94, 145);">State</label>
    <input type="text" class="form-control" name="ss" id="ss" placeholder="State" style="max-width:500px" required>
    <div id="ss_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

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
    <label for="myfile" style="color:rgb(6, 94, 145);">Add a supported document for checking your identity(MUST BE IN PDF FORM): </label><br>
    <input type="file" name="myfile" required>

</div>

<div  id="errorinsubmission" role="alert">
</div>

<button class="Button Button-one" type='submit' class='btn btn-danger btn-rounded ' name='btn1' id='btn1'  style="width:20rem" >Request to Create Account</button>

<!-- <button type="submit" class="btn btn-danger btn-rounded mb-5 mr-5 " name="btn" id="btn" >Save</button> -->

</form>
<br><br>
<p >Already have an account? <a class="fancy-link" href="SellerSignin.php" style="color:rgb(6, 94, 145);">Click Here</a>
<div>
<script src="jquery.js"></script>

<script> $(document).ready(function (){
$('#scp').keyup(function () {
  var sp= $('#sp').val();
    var scp= $('#scp').val();
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
$('#sn').keyup(function () {
  var sn= $('#sn').val();
  // console.log(bn);
  if (sn.indexOf("'") !== -1 ||sn.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#sn_error').css("display","block");
  // Disable the button
$('#btn1').prop('disabled', true);

}
else{
  $('#sn_error').css("display","none");
  $('#btn1').prop('disabled', false);

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
$('#se').keyup(function () {
  var se= $('#se').val();
  // console.log(bn);
  if (se.indexOf("'") !== -1 ||se.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#se_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#se_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})

$('#su').keyup(function () {
  var su= $('#su').val();
  // console.log(bu);
  if (su.indexOf("'") !== -1 ||su.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#su_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#su_error').css("display","none");
$('#btn1').prop('disabled', false);


}
})
$('#sp').keyup(function () {
  var sp= $('#sp').val();
  // console.log(bn);
  if (sp.indexOf("'") !== -1 ||sp.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#sp_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#sp_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})
$('#scp').keyup(function () {
  var scp= $('#scp').val();
  // console.log(bn);
  if (scp.indexOf("'") !== -1 ||scp.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#scp_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#scp_error').css("display","none");
  $('#btn1').prop('disabled', false);

}
  
})


$('#sph').keyup(function () {
  var sph= $('#sph').val();
  // console.log(bn);
  if (sph.indexOf("'") !== -1 ||sph.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#sph_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#sph_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})

$('#ssh').keyup(function () {
  var ssh= $('#ssh').val();
  // console.log(bc);
  if (ssh.indexOf("'") !== -1 ||ssh.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#ssh_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#ssh_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})

$('#sa').keyup(function () {
  var sa= $('#sa').val();
  // console.log(ba);
  if (sa.indexOf("'") !== -1 ||sa.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#sa_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#sa_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})

$('#ss').keyup(function () {
  var ss= $('#ss').val();
  // console.log(bn);
  if (ss.indexOf("'") !== -1 ||ss.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#ss_error').css("display","block");
$('#btn1').prop('disabled', true);

}
else{
  $('#ss_error').css("display","none");
$('#btn1').prop('disabled', false);


}
  
})



});




</script>
<script src="jquery.js"></script>
<script type='text/javascript'>
        $(document).ready(function(){
            $('.check').click(function(){
            
                $(this).is(':checked') ? $('#sp').attr('type', 'text') : $('#sp').attr('type', 'password');
            });
            $('.check1').click(function(){
            
            $(this).is(':checked') ? $('#scp').attr('type', 'text') : $('#scp').attr('type', 'password');
        });
        });
    </script>
<?php
if(isset($_POST['btn1'])){
 

  $sn=$_POST['sn'];
  $se=$_POST['se'];
  $su=$_POST['su'];
  $sp=$_POST['sp'];
  $sph=$_POST['sph'];
  $ssh=$_POST['ssh'];
  $sa=$_POST['sa'];
  $ss=$_POST['ss'];
  $scp=$_POST['scp'];
  $sg=$_POST['sg'];
  $st=$_POST['st'];
  $ques=$_POST['ques'];
  $ans=$_POST['ans'];

  $ans=strtolower($ans);


if($sp!=$scp){
  echo "<div  class='alert alert-danger' role='alert'>Incorrect Password !!
  </div>";
}
else{
  $sql="SELECT * FROM sellerdetails WHERE Email='$se' AND Allow IN('allowed','restricted') ";
  $sql1="SELECT * FROM sellerdetails WHERE Email='$se' AND Allow ='' ";

  $result=mysqli_query($conn,$sql);
  $result1=mysqli_query($conn,$sql1);

  if(mysqli_num_rows($result)>0){
    echo "<div  class='alert alert-danger' role='alert'>You already have an account. Please Sign in..
  </div>";
  // header("Location: SellerSignin.php");
  }
  elseif(mysqli_num_rows($result1)>0){
    echo "<div  class='alert alert-danger' role='alert'>Request haas already been Sent.Wait for admin's response.Try to Sign In after few days..Thank you!! 
  </div>";
  // header("Location: SellerSignin.php");
  }
  else{
    $file_name=$_FILES['myfile']['name'];
    // $email=$_SESSION['email'];
    if($file_name!= "" ){ 
        $extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $imgExtArr = ['PDF','pdf'];
    if(in_array($extension, $imgExtArr))
    {
    $new_name=$se.".".$extension;
    $file_tmp_name=$_FILES['myfile']['tmp_name'];
    // $name=
    if(move_uploaded_file($file_tmp_name,"SellerUpload/".$se.".".$extension)){
        // if(move_uploaded_file($file_tmp_name,"upload/"."Hello".".".$extension)){
       
          $sql="INSERT INTO sellerdetails(Name,Gender,Email,Username,Password,Phone,Shop_name,Shop_Type,Address,State,Allow,Identity,Question,Answer) VALUES('$sn','$sg','$se','$su','$sp','$sph','$ssh','$st','$sa','$ss','','$new_name','$ques','$ans')";
          if(mysqli_query($conn,$sql)){
            echo "<div  class='alert alert-success' role='alert'>Request sent.Try to log in after 48hr.Thank you!!
            </div>";
          }
          else{
            echo "<div  class='alert alert-danger' role='alert'>Something Went Wrong!!
            </div>";
          }
            // $_SESSION['email']=$se;
            // header("Location: SellerProducts.php");
         
        
    }
    
}
else{
  echo "<div  class='alert alert-danger' role='alert'>You have to add an identity proof in PDF FORMAT!!
  </div>";
}
    }
   
  }

 
}}
ob_end_flush();
?>



<!-- <script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script> -->
  </div></div>
</div>

</body></html>
