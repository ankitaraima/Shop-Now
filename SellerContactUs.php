<?php
ob_start();
session_start();
include_once('database.php');
if(!isset($_SESSION['email'])){
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="icon" sizes="250x250" href="uploads/logo3.png">
   
    <title>Shop Now </title>
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
  width:28em;
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
.main{
    /* border-radius: var(--radius-4); */
    box-shadow: var(--shadow-3);
    padding:1em 2em;
    margin:1em 0;
}
input{
    color:black;
    border:none;
    
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
  width:20em;
  cursor: pointer;
  border:2px solid  rgb(243, 35, 35);
    color: rgb(243, 35, 35);;
  text-decoration: none;
  background: rgba(255, 255, 255, 0);

  text-decoration: none;
  color: rgb(243, 35, 35);
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
 background-color: rgb(243, 35, 35); 
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


    margin:2rem 4rem;
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
    display: grid;
    gap: var(--spacer);
    grid-auto-flow: column;
    grid-auto-columns: 24%;

    padding: 0 var(--spacer) var(--spacer);
    overflow-x:auto;
    overscroll-behavior-inline: contain;

}
.media-element{
    display: grid;
    grid-template-rows: min-content;
    gap: var(--size-1rem);
    padding:var(--spacer);
    background: var(--surface-6);
    border-radius: var(--radius-2);
    box-shadow: var(--shadow-4);

}
.media-element > img{
    inline-size: 100%;
   aspect-ratio: 16/9;
   object-fit: cover;
}





</style>
    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " onload="myFunction()" >
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link " href="SellerProducts.php" >Products</a>
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
        <a class="nav-link "  href="logout.php">Log out</a>
      </li>

    </ul>
  
  </div>
  <!-- <div class="float-right"><i class="fa fa-shopping-cart" style="font-size:30px"></i></div> -->
  <div class="float-right"><a href="SellerDetails.php" style="display:flex;"><img src="<?php echo $photo; ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-right:5vh;margin-left:5vh; cursor:pointer"></a></div>

</nav>

<div class="row">

    <div class="col-md-5 ml-5">
    <h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 2rem;  font-size: 48px;">Contact Us</h1>
    <img src="uploads/mail.gif" style="width:30em;height:20em;margin:5em 0"  alt="">
    <div style="position:relative; top:-10rem;"><a href = "mailto:ankita.raima@gmail.com"  style="display:flex; text-decoration:none; color:black; "><img src="uploads/mail.png" style="height:3em;  weight:3em; margin-left:0.4rem"alt="click here to mail" placeholder="click here to mail"><span style="font-size:16px;margin:0.6rem 0 0 0.5rem"> ankita.raima@gmail.com</span></a>
    <a href="tel:+919434800080" style="display:flex; text-decoration:none; color:black;"><img src="uploads/call.png" style="height:3.9em;  weight:3.9em; margin: 0 0 1em 0;"alt="click here to call"><span style="font-size:16px;margin:1.3rem 0 0 0.5rem">+91-943480080</span></a>
  </div>
    
    </div>
   
    <div class="col-md-4 ml-5;" style="background-color:rgb(238, 53, 53,0); width:100vh; margin:2rem 2rem; color:rgb(6, 94, 145) ;padding:0 0 "> 
    <div class="main "style="margin:1rem;background-color:white;font-size:18px; box-shadow: 4px 4px 10px rgb(0,0,0,0.400); border-radius:10px;
">

    <form id="contact-form" name="contact-form" action="SellerContactUs.php" method="POST">

               <p style="font-size:40px; width:10em">Your feedback matters!!</p>
                <div class="row">
              <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12 mb-5">
                      <p style="font-size:22px; width:20em">Rate this site</p>
                        <div class="md-form" style="border:2px solid rgb(0,0,0,0.100);border-radius:20px; align-item:center; justify-item:center;width:20.5rem; margin:0 0 0 5rem" >
                        <label><img src="uploads/angry.jpeg" style="width:3.4em; cursor:pointer; height:3.4em; display:flex;margin:0 0 0 0.2rem">
                            <input type="submit" style="display:none" name="btn1" class="btn1" value="1"> 
                        </label>   
                        <label><img src="uploads/komangry.jpeg" style="width:3.15em;cursor:pointer; height:3.15em; display:flex;">
                            <input type="submit" style="display:none" name="btn1" class="btn1"value="2"> 
                        </label>      
                        <label><img src="uploads/confuse.jpeg" style="width:3.3em;cursor:pointer; height:3.3em; display:flex;margin:">
                            <input type="submit" style="display:none" name="btn1" class="btn1" value="3"> 
                        </label>      
                        <label><img src="uploads/happy.jpeg" style="width:3.5em;cursor:pointer; height:3.5em; display:flex;">
                            <input type="submit" style="display:none" name="btn1" class="btn1" value="4"> 
                        </label>      
                        <label><img src="uploads/khubhappy.jpeg" style="width:3.1em;cursor:pointer; height:3.1em; display:flex;">
                            <input type="submit" style="display:none" name="btn1" class="btn1" value="5"> 
                        </label>             
                        </div>
                        <div  id="error" role="alert">
                    </div>
                    </div>
                    <!--Grid column-->
                    <div class="col-md-12 mb-4">

                        <div class="md-form">
                        <label for="message" class="name mb-2" style="font-size:22px">Your feedback</label>
                            <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                            <div id="message_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="row">

                <!--Grid column-->
                <div class="col-md-12 mb-5">

                    <div class="md-form">
                    <label  class="Button Button-one">Send
                    
                        <input type="submit" style="display:none" name="btn" id="btn">
                        
                    </label>          
                    </div>

                </div>
                </div>
            </form>
            </div>

</div></div>
</div>
<script src="jquery.js"></script>
<script> $(document).ready(function (){
      $('.btn1').click(function(){
        $("#error").addClass("alert alert-success");
      
      $("#error").html('*Thank you for your rating.');
      })
      
     
        
      $('#message').keyup(function () {
      
      var message= $('#message').val();
    // alert(message);
      // console.log(bn);
      if (message.indexOf("'") !== -1 ||message.indexOf('"') !== -1  ) {
      // console.log("Single quote is present.");
      $('#message_error').css("display","block");
      // Disable the button
    $('#btn').prop('disabled', true);
    
    }
    else{
      $('#message_error').css("display","none");
      $('#btn').prop('disabled', false);
    
    }
      
    }) 
    }
);

</script>
<?php
if(isset($_POST['btn1'])){
  $r= $_POST['btn1'];
  $email=$_SESSION['email'];
  $sql="SELECT * FROM feedback WHERE Email='$email'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
  $sql1="UPDATE feedback SET Rating='$r'  WHERE Email='$email'";
mysqli_query($conn,$sql1);
header("Refresh:4");
  }
  else{
    $sql1="INSERT INTO feedback (Email,Rating) VALUES('$email','$r')";
    if(mysqli_query($conn,$sql1)){
      echo "<div  class='alert alert-success' role='alert'>Thank You for your rating!!
      </div>";
      // header("Refresh:4");
    }
    else{
      echo "<div  class='alert alert-danger' role='alert'>Something went wrong. Please try again later.
      </div>";
      // header("Refresh:4");
    }
  }
}

$date=date("d-m-Y");

if(isset($_POST['btn'])){
  $m=$_POST['message'];
  $email=$_SESSION['email'];
  $sql="SELECT * FROM feedback WHERE Email='$email'";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
  $sql1="UPDATE feedback SET User_Type='Seller',Feedback='$m',Date='$date' WHERE Email='$email'";
  if(mysqli_query($conn,$sql1)){
    echo "<div  class='alert alert-success' role='alert'>Thank You for your rating!!
    </div>";
  }
  else{
    echo "<div  class='alert alert-danger' role='alert'>Something went wrong. Please try again later.
    </div>";
  }
  }
  else{
    $sql1="INSERT INTO feedback (Email,Feedback,User_Type,Date) VALUES('$email','$m','Seller','$date')";
    if(mysqli_query($conn,$sql1)){
      echo "<div  class='alert alert-success' role='alert'>Thank You for your rating!!
      </div>";
    }
    else{
      echo "<div  class='alert alert-danger' role='alert'>Something went wrong. Please try again later.
      </div>";
    }
  }
}
?>

<?php ob_end_flush();?>

<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
</div>
</body></html>




