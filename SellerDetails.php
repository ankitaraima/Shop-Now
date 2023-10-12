<?php
ob_start();
session_start();
include_once('database.php');
if(!isset($_SESSION['email'])){
  header("Location: index.php");

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
.myimgdivshowhide{
  position:absolute;
  display: flex;
  height:2rem;
  width:2rem;
 border-radius: var(--size-5);
 margin:-3.2rem 2rem 20rem 17rem;

}

.image{
 /* display:none; */

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
.Button1{
  position: relative;
  display:flex;

  height: 6vh;
  margin:2em 0 1rem 0.25em;
  width:11em;
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
.photo{
    position: relative;
    height:35vh;
    width:35vh;
    border-radius:360px ;
    /* border-radius: var(--radius-8); */
    box-shadow: 5px 5px 20px rgba(43, 42, 42, 0.445);;
    /* object-fit: scale-down; */
    object-fit: cover;

    margin:2rem 4rem;
    border:4px solid rgb(6, 94, 145);

}
</style>
    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " onload="myFunction()">
<div id="loading"></div>
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
        $ques=$row['Question'];
        $ans=$row['Answer'];

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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="SellerProducts.php">Products</a>
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
        <a class="nav-link " href="logout.php">Log out</a>
      </li>

    </ul>
  
  </div>
  <!-- <div class="float-right"><i class="fa fa-shopping-cart" style="font-size:30px"></i></div> -->
  <div class="float-right"><a href="SellerDetails.php" style="display:flex;"><img src="<?php echo $photo; ?>" style="height:9vh; width:9vh;  border-radius: 50px; margin-right:5vh;margin-left:5vh; cursor:pointer; object-fit: cover;"></a></div><br>

</nav>

<div>

<form  method="POST" action="SellerDetails.php" enctype="multipart/form-data">
    <div class="row"><div class="col-md-4 ml-5;" >
<h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 2rem; font-size: 48px;">User Details</h1>
<img  class="photo" src="<?php echo $photo; ?>" alt="DP">
<form action="SellerDetails.php" method="Post" enctype="multipart/form-data">
     <label class="Button Button-one  myfile" style="margin:1rem 5rem;">
Upload Image 
<input type="file" name="myfile" accept="image/jpeg, image/png, image/jpg" style="background-color:white; color:black; display:none">

</label>
<div class="myimgdivshowhide image" >
	<img src="uploads/choosen.png" alt="display image on button click" class="img-responsive img-thumbnail image" style="display:none;" />
</div>
<label class="Button Button-one" style="margin:1rem 5rem;">
Save Photo
<input type="submit" name="button" class="button" style="margin:1rem 5rem; display:none"></label>
<label class="Button Button-one" style="margin:1rem 5rem;">
Remove Photo
<input type="submit" name="button1"  class="Button Button-one" style="margin:1rem 5rem; display:none"></label>

</form>
<div class='button1 button-one1 ' name='dltbtn' id='dltbtn'  style="height:2.5rem;margin:2rem 0 0 5rem"  >Delete Account</div>
<div class='button button-one ' name='passbtn' id='passbtn'  style="height:2.5rem;margin:2rem 0 0 5rem"  >Change Password</div>

<div id="changepass" style="padding:1rem;background:white;box-shadow:2x 2x 20 rgb(0,0,0,0.200);width:15rem;margin-left:5rem;display:none"
><label for="oldpass" style="margin:1rem 0.5rem;color:rgb(6, 94, 145);font-weight:bold">Previous Password password:</label><br>
<input type="password" name="oldpass" id="oldpass"><br>
<label for="newpass" style="margin:1rem 0;color:rgb(6, 94, 145);font-weight:bold">New password:</label><br>
<input type="password" name="newpass" id="newpass"><br>
<label for="conpass" style="margin:1rem 0;color:rgb(6, 94, 145);font-weight:bold">Confirm password:</label><br>
<input type="password" name="conpass" id="conpass"><br>

<div class='button button-one ' name='cng' id='cng'  style="height:2.5rem; width:10rem;margin-bottom:0.5rem"  >Change</div><br>
<div class="resultcng" style="display:none;margin:0.5rem;"></div>
</div>
</div>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){
	$('.myfile').click(function(){
    $(".image").removeAttr("style");
	});
  $('#passbtn').click(function(){
    $('#changepass').css("display","block").fadeIn();
  })

  $('#cng').click(function(){
    // console.log("clicked");
    var old=$('#oldpass').val();
    var newpass=$('#newpass').val();
    var conn=$('#conpass').val();
    // console.log(old);
    if(old !=''  || newpass!=''  || conn !=''){
      $.ajax({
            url:"SellerChangePassword.php",
            type:"POST",
            data:{Old:old,Newpass:newpass,confirm:conn},
            success: function (data) {
      $('.resultcng').css("display","block");

               $('.resultcng').html(data);
            } });
    }
    else{
      $('.resultcng').css("display","block");
      var htm="<div class='alert alert-danger' role='alert'>ALL FIELD NEED TO BE FILLED!!</div>"
      $('.resultcng').html(htm);
      // alert("ALL FIELD NEED TO BE FILLED");
    }
  })

  $('#dltbtn').click(function(){
    if (confirm('Do you really want to delete this account?')) {
      var msg = window.prompt("Please enter your password", "password");
      $.ajax({
            url:"deleteAccountSeller.php",
            type:"POST",
            data:{Pass:msg},
            success: function (data) {
                
                if(data==1){
                 alert("Account is deleted successfully");
                 $.ajax({
            url:"logout.php"})
                
                 window.location.href = "index.php";
            

                }
                else{
                
                  alert("Incorrect Password");
                }  
            } });
} else {
    alert('Account is not deleted');
}

	});




});

</script>
<?php
if(isset($_POST['button'])){
  $file_name=$_FILES['myfile']['name'];
    $email=$_SESSION['email'];
    if($file_name!= "" ){ 
        $extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $imgExtArr = ['jpg', 'jpeg', 'png','JPEG','JPG','PNG'];
    if(in_array($extension, $imgExtArr))
    {
    $new_name=$email.".".$extension;
    $file_tmp_name=$_FILES['myfile']['tmp_name'];
    if(move_uploaded_file($file_tmp_name,"uploads/".$email.".".$extension)){
        // if(move_uploaded_file($file_tmp_name,"upload/"."Hello".".".$extension)){
       
        $sql1="UPDATE sellerdetails SET Photo_Id='$new_name' WHERE Email='$email'";
        $update=mysqli_query($conn,$sql1);
        header("Refresh: 1");
        
    }
    
}
    }
}


if(isset($_POST['button1'])){
    $email=$_SESSION['email'];
    $sql="UPDATE sellerdetails
    SET Photo_Id = NULL
    WHERE Email='$email'";
     $update=mysqli_query($conn,$sql);
     header("Refresh: 1");
}
?>
<br><br><br>
<div class="col-md-8" style="background-color:white; width:90vh; margin:2rem 0; box-shadow:2px 2px 10px rgba(43, 42, 42, 0.445)">
<div class="form-group mb-3 mt-3 ">
    <label for="sn" style="color:rgb(6, 94, 145);" >Name</label>
    <input name="sn" id="sn" type="text" class="form-control"aria-describedby="emailHelp" placeholder="Enter Your name" style="max-width:500px" required  value="<?php echo $sn?>" >
    <div id="sn_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
  </div> 
  <div class="form-group mb-3 mt-3 ">
    <label for="sg" style="color:rgb(6, 94, 145);" >Gender:</label><br>
   <label style=" cursor:pointer;  padding:2px"> <input type="radio" <?php echo ($sgn=='male')? "checked='checked'":"" ?> name="sg" value="male" style="padding:10rem; background-color: #2196F3;"> Male</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="sg" value="female" style="padding:1rem;"  <?php echo ($sgn=='female')? "checked='checked'":"" ?>> Female</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="sg" value="Others" style="padding:1rem;" <?php echo ($sgn=='Others')? "checked='checked'":"" ?>> Others</label><br>

  </div> 
  <div class="form-group mb-3">
    <label for="se" style="color:rgb(6, 94, 145);">Email address</label>
    <input type="email"  class="form-control" name="se" id="se" aria-describedby="emailHelp" placeholder="Enter email"style="max-width:500px" required value="<?php echo $se?>" readonly>
    <small id="emailHelp" class="form-text text-muted" style="color:red;" >*You can't change your Email address. </small>
  </div>
  <div class="form-group mb-3">
<label for="ques" style="color:rgb(6, 94, 145);">Choose Question:</label>
<select class="form-select" name="ques" aria-label="Default select example" required>
  <option value="What is your nickname?" <?php echo ($ques=='What is your nickname?')?'selected':''; ?>>What is your nickname ?</option>

  <option value="What is your pet name ?" <?php echo ($ques=='What is your pet name ?')?'selected':''; ?>>What is your pet name ?</option>

  <option value="What is your bestfriend name ?" <?php echo ($ques=='What is your bestfriend name ?')?'selected':''; ?> >What is your bestfriend's name ?</option>
  <option value="What is the name of your first school ?" <?php echo ($ques=='What is the name of your first school ?')?'selected':''; ?>>What is the name of your first school ?</option>
  <option value="Menton a memorable day" <?php echo ($ques=='Menton a memorable day')?'selected':''; ?>>Menton a memorable day</option>

</select>

</div>
<div class="form-group mb-3">
    <label for="ans" style="color:rgb(6, 94, 145);">Answer:</label>
    <input type="text" class="form-control" name="ans" id="ans" placeholder="Answer of above Question" style="max-width:500px" value="<?php echo $ans?>" required>
    <div id="ans_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

</div>
  <div class="form-group mb-3">
    <label for="su"style="color:rgb(6, 94, 145);">Username</label>
    <input style="max-width:500px" type="text" class="form-control" name="su" id="su" aria-describedby="emailHelp" placeholder="Enter a Username" required value="<?php echo $su?>">
    <div id="su_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>

<div  id="error" role="alert">
</div>
  <div class="form-group mb-3">
    <label for="sph" style="color:rgb(6, 94, 145);">Phone No</label>
    <input type="number" class="form-control"  name="sph" id="sph" placeholder="Phone no" style="max-width:500px" required value="<?php echo $sph; ?>">
  </div>
  <div class="form-group mb-3">
    <label for="ssh" style="color:rgb(6, 94, 145);">Shop Name</label>
    <input type="text" class="form-control" name="ssh" id="ssh" placeholder="Enter your Shop name" style="max-width:500px" required value="<?php echo $ssh?>">
    <div id="ssh_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>
  <div class="form-group mb-3">
    <label for="sa" style="color:rgb(6, 94, 145);">Address</label>
    <input type="text" class="form-control" name="sa" id="sa" placeholder="Enter full address of your shop" style="max-width:500px" required value="<?php echo $sa?>">
    <div id="sa_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>

<div class="form-group mb-3">
    <label for="ss" style="color:rgb(6, 94, 145);">State</label>
    <input type="text" class="form-control" name="ss" id="ss" placeholder="State" style="max-width:500px" required value="<?php echo $ss?>">
    <div id="ss_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>

<div  id="errorinsubmission" role="alert">
</div>

<button class="Button Button-one" type='submit' class='btn btn-danger btn-rounded ' name='btn1' id='btn1'  >Update Account</button>

<!-- <button type="submit" class="btn btn-danger btn-rounded mb-5 mr-5 " name="btn" id="btn" >Save</button> -->

</form>
<br><br>

<div>
<script src="jquery.js"></script>

<script> $(document).ready(function (){

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
<?php
if(isset($_POST['btn1'])){
 

  $sn=$_POST['sn'];
  $sg=$_POST['sg'];
  $se=$_POST['se'];
  $su=$_POST['su'];
  
  $sph=$_POST['sph'];
  $ssh=$_POST['ssh'];
  $sa=$_POST['sa'];
  $ss=$_POST['ss'];
  $ans=$_POST['ans'];
  $ans=strtolower($ans);
  $ques=$_POST['ques'];

  
  $sql="UPDATE sellerdetails SET NAME='$sn', Gender='$sg', Username='$su',Shop_name='$ssh', Phone='$sph' , Address='$sa',State='$ss',Question='$ques',Answer='$ans' WHERE Email='$se' ";
  if(mysqli_query($conn,$sql)){
    echo "<div  class='alert alert-success' role='alert'>Information Updated Successfully..
  </div>";
  header("Refresh: 0");
  }
  else{
    echo "<div  class='alert alert-danger' role='alert'>Something went wrong. Please try again later.
  </div>";
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

  </div></div>
</div>
</body></html>
