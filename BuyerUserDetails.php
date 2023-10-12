<?php
ob_start();
session_start();
include_once('database.php');
if(isset($_SESSION['email'])){
  unset($_SESSION['email']);

}

if(!isset($_SESSION['buyer'])){
    header("Location:index.php");
}

// $ps=$_GET['id'];
// $_SESSION['Email']=$em;
$email=$_SESSION['buyer'];
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
.content{
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
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
  width:15em;
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
  width:15em;
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
    box-shadow: 5px 5px 20px rgba(43, 42, 42, 0.445);
  object-fit: cover;

    margin:2rem 6rem;
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
    /* display: grid; */
    gap: 1rem;
   display: flex;
  

    padding: 0  1rem  1rem;
    overflow-x:auto; 
     overscroll-behavior-inline: contain;

}
.media-element{
    /* display: grid; */
    /* grid-template-rows: min-content; */
    gap: 1rem;
    padding:1.5rem;
    width: 20rem;
    background:white;
    border-radius: 10px;
    box-shadow: 4px 4px 10px rgb(0,0,0,0.400);
    align-items: center;
    height:30rem;

}

.media-element:hover{
    background-color:rgb(6, 94, 145,0.100) ;
}
.ProductButtons{
    align-items: center;
    justify-content: center;
    margin:2rem 1rem;
}
.myimgdivshowhide{
  position:absolute;
  display: flex;
  height:2rem;
  width:2rem;
 border-radius: var(--size-5);
 margin:-3.2rem 2rem 20rem 17rem;

}
.productData{
    align-items: center;
    justify-content: center;
    margin:2rem 1rem;
    width:50rem;
}
.heading{
    
}
.productData > p{
    color:rgb(0,0,0,0.500);
    margin: 1rem 0;


}
.checked {
  color: orange;
}
.media-element > img{
    inline-size: 100%;
   aspect-ratio: 16/9;
   border-radius: 1rem;
    width:15rem;
    height:15rem;
   margin: 0.5rem 0 0.5rem 0.5rem;
}


.like1{
  font-size:36px;
  margin:-2.5rem 0 0 12rem;
   color:rgba(131, 131, 131, 0.521);
   cursor: pointer;
}
.like{
  font-size:36px;
  margin:-2.5rem 0 0 12rem;
   color:red;
   cursor: pointer;
}
.heading:hover{
  text-decoration: underline;
}
.star{
  padding:2rem;
  /* border:2px solid rgb(0,0,0,0.300); */
  border-radius: 20px;
  width:20rem;
  box-shadow: 4px 4px 10px rgb(0,0,0,0.400);

  /* display: flex; */
  background-color: rgb(255,255,255,0.500);
}
.fa-star{
  color:rgba(131, 131, 131, 0.521);
  cursor: pointer;
  
}
#star > p{
  width: 100%;
}
#star{
  width:100%;
  align-items: center;
  justify-content: center;
  display: flex;


}

#rating p {
  color:rgb(6, 94, 145) ;
  margin: 32px;
  font-size:28px;
  font-weight:bolder;
}
.checked{
  color:yellow;
}
</style>


    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " >
<div id="loading"></div>
<?php
$email=$_SESSION['buyer'];
$sql="SELECT * FROM buyerdetails WHERE Email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $bn=$row['Name'];
        $bgn=$row['Gender'];
        $be=$row['Email'];
        $bu=$row['Username'];
        $bp=$row['Password'];
        $bc=$row['City'];
        $ba=$row['Address'];
        $bs=$row['State'];
        $bph=$row['Phone_no'];
        $bpid=$row['Photo_Id'];
        $ques=$row['Question'];
        $ans=$row['Answer'];

        if(!empty($bpid)){
            $photo="buyerUpload/".$bpid;
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
<script src="jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="BuyerHomepage.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="BuyerUserDetails.php">User Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="BuyerCart.php"  >Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="BuyerOrders.php"  >Orders</a>
      </li>
      
      <li>
      <a class="nav-link" href="BuyerContactUs.php" >Contact Us</a>
      
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="logout.php">Log out</a>
      </li>

    </ul>
  
  </div>
 
  <div class="float-right icon">
  <a href="BuyerWishList.php"><i class=" fa fa-thin fa-heart " style="font-size:30px;margin:0 0 0 4vh;color:rgb(0,0,0,0.600)"></i></a></div>
<div class="float-right ">
  
  <a href="BuyerCart.php"><i class="fa fa-shopping-cart icon" style="font-size:36px;margin:0 1vh 0 1vh;color:rgb(0,0,0,0.600)"></i></a></div>
  <div class="float-right">
  <a href="BuyerUserDetails.php" style="display:flex;"><img src="<?php echo $photo ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-left:2vh; cursor:pointer"></a></div>
</nav>

<div>

<form  method="POST" action="BuyerUserDetails.php" enctype="multipart/form-data">
    <div class="row"><div class="col-md-4 ml-5;" >
<h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 3rem; font-size: 48px;">User Details</h1>
<img  class="photo" src="<?php echo $photo; ?>" alt="DP">
<form action="BuyerUserDetails.php" method="Post" enctype="multipart/form-data">
     <label class="Button Button-one  myfile" style="margin:1rem 5rem;">
Upload Image 
<input type="file" name="myfile" accept="image/jpeg, image/png, image/jpg" style="background-color:white; color:black; display:none">

</label>
<div class="myimgdivshowhide image" >
	<img src="uploads/choosen.png" alt="display image on button click" class="img-responsive img-thumbnail image" style="display:none; " />
</div>
<label class="Button Button-one" style="margin:1rem 5rem;">
Save Photo
<input type="submit" name="button" class="button" style="margin:1rem 5rem; display:none"></label>
<label class="Button Button-one" style="margin:1rem 5rem;">
Remove Photo
<input type="submit" name="button12"  class="Button Button-one" style="margin:1rem 5rem; display:none"></label>

</form>
<div class='button1 button-one1 ' name='dltbtn' id='dltbtn'  style="height:2.5rem;margin:2rem 0 0 5rem"  >Delete Account</div>
<div class='button button-one ' name='passbtn' id='passbtn'  style="height:2.5rem;margin:2rem 0 0 5rem"  >Change Password</div>

<div id="changepass" style="padding:1rem;background:white;box-shadow:2x 2x 20 rgb(0,0,0,0.200);width:15rem;margin-left:5rem;display:none"
><label for="oldpass" style="margin:1rem 0.5rem;color:rgb(6, 94, 145);font-weight:bold">Old password:</label><br>
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
            url:"BuyerChangePassword.php",
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
            url:"deleteAccountBuyer.php",
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
    $email=$_SESSION['buyer'];
    $sql="SELECT * FROM buyerdetails WHERE Email='$email'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while($row=mysqli_fetch_assoc($result)){
          $id=$row['Serial_no'];
    $date=date("Ymdhis");
    
      }
    }

    $ppid1=$id.$date;
    if($file_name!= "" ){ 
        $extension = pathinfo($file_name, PATHINFO_EXTENSION);
        $imgExtArr = ['jpg', 'jpeg', 'png','JPEG','JPG','PNG'];
    if(in_array($extension, $imgExtArr))
    {
    $file_tmp_name=$_FILES['myfile']['tmp_name'];
    $new_name=$ppid1.".".$extension;
    if(move_uploaded_file($file_tmp_name,"buyerUpload/".$new_name)){
        // if(move_uploaded_file($file_tmp_name,"upload/"."Hello".".".$extension)){
       
        $sql1="UPDATE buyerdetails SET Photo_Id='$new_name' WHERE Email='$email'";
        $update=mysqli_query($conn,$sql1);
        header("Refresh: 0");
        
    }
    
}
    }
}


if(isset($_POST['button12'])){
    $email=$_SESSION['buyer'];
    $sql="UPDATE buyerdetails
    SET Photo_Id = NULL
    WHERE Email='$email'";
     $update=mysqli_query($conn,$sql);
     header("Refresh: 0");
}
?>
<br><br><br>
<div class="col-md-8" style="background-color:white; width:90vh; margin:2rem 0; box-shadow:2px 2px 10px rgba(43, 42, 42, 0.445)">
<div class="form-group mb-3 mt-3 ">
    <label for="bn" style="color:rgb(6, 94, 145);" >Name</label>
    <input name="bn" id="bn" type="text" class="form-control"aria-describedby="emailHelp" placeholder="Enter Your name" style="max-width:500px" required  value="<?php echo $bn?>" >
    <div id="bn_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
  </div> 
  <div class="form-group mb-3 mt-3 ">
    <label for="bgn" style="color:rgb(6, 94, 145);" >Gender:</label><br>
   <label style=" cursor:pointer;  padding:2px"> <input type="radio" <?php echo ($bgn=='male')? "checked='checked'":"" ?> name="bgn" value="male" style="padding:10rem; background-color: #2196F3;"> Male</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="bgn" value="female" style="padding:1rem;"  <?php echo ($bgn=='female')? "checked='checked'":"" ?>> Female</label><br>
   <label style=" cursor:pointer;  padding:2px"><input type="radio" name="bgn" value="Others" style="padding:1rem;" <?php echo ($bgn=='Others')? "checked='checked'":"" ?>> Others</label><br>

  </div> 
  <div class="form-group mb-3">
    <label for="be" style="color:rgb(6, 94, 145);">Email address</label>
    <input type="email"  class="form-control" name="be" id="be" aria-describedby="emailHelp" placeholder="Enter email"style="max-width:500px" required value="<?php echo $be?>" readonly>
    <small id="emailHelp" class="form-text text-muted" style="color:red;" >*You can't change your Email address. </small>
  </div>
  <div class="form-group mb-3">
    <label for="bu"style="color:rgb(6, 94, 145);">Username</label>
    <input style="max-width:500px" type="text" class="form-control" name="bu" id="bu" aria-describedby="emailHelp" placeholder="Enter a Username" required value="<?php echo $bu?>">
    <div id="bu_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>

<div  id="error" role="alert">
</div>
  <div class="form-group mb-3">
    <label for="bph" style="color:rgb(6, 94, 145);">Phone No</label>
    <input type="number" class="form-control"  name="bph" id="bph" placeholder="Phone no" style="max-width:500px" required value="<?php echo $bph; ?>">
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
    <label for="bc" style="color:rgb(6, 94, 145);">City</label>
    <input type="text" class="form-control" name="bc" id="bc" placeholder="Enter your City" style="max-width:500px" required value="<?php echo $bc?>">
    <div id="bc_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>
  <div class="form-group mb-3">
    <label for="ba" style="color:rgb(6, 94, 145);">Address</label>
    <input type="text" class="form-control" name="ba" id="ba" placeholder="Enter full address of your shop" style="max-width:500px" required value="<?php echo $ba?>">
    <div id="ba_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>

<div class="form-group mb-3">
    <label for="bs" style="color:rgb(6, 94, 145);">State</label>
    <input type="text" class="form-control" name="bs" id="bs" placeholder="State" style="max-width:500px" required value="<?php echo $bs?>">
    <div id="bs_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
</div>

<div style="display:flex"><button class="Button Button-one" type='submit'  class='btn btn-danger btn-rounded ' name='btn1' id='btn1'  >Update Account</button>
</div>



<!-- <button type="submit" class="btn btn-danger btn-rounded mb-5 mr-5 " name="btn" id="btn" >Save</button> -->

</form>
<br><br>

<div>
<script src="jquery.js"></script>

<script> $(document).ready(function (){

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
<?php
if(isset($_POST['btn1'])){
 

  $bn=$_POST['bn'];
  $bgn=$_POST['bgn'];
  $be=$_POST['be'];
  $bu=$_POST['bu'];
  
  $bph=$_POST['bph'];
  $bc=$_POST['bc'];
  $ba=$_POST['ba'];
  $bs=$_POST['bs'];
  $ans=$_POST['ans'];
  $ans=strtolower($ans);
  $ques=$_POST['ques'];
  $sql="UPDATE buyerdetails SET NAME='$bn', Gender='$bgn', Username='$bu',City='$bc', Phone_no='$bph' , Address='$ba',State='$bs',Question='$ques',Answer='$ans' WHERE Email='$be' ";
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