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
input{
    color:black;

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
  <div class="float-right"><a href="SellerDetails.php" style="display:flex;"><img src="<?php echo $photo; ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-right:5vh;margin-left:5vh; cursor:pointer"></a></div>

</nav>
<form method="POST" action="SellerGrocery.php" enctype="multipart/form-data" >
<div class="row">

    <div class="col-md-4 ml-5;">
    <h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 2rem;  font-size: 48px;">Add Items</h1>
    </div>
   
    <div class="col-md-4 ml-5;" style="background-color:white; width:90vh; margin:2rem 0; box-shadow:2px 2px 10px rgba(43, 42, 42, 0.445);color:rgb(6, 94, 145) ;padding:0 2rem "> 
    <div class="form-group mt-5 mr-2" >
    <label for="spn" style="font-weight:bold;font-size: 15px; margin-bottom: 0.5vw; " required>Product Name:</label>
    <input type="text" class="form-control" style="border-radius: 20px;" name="spn" id="spn" placeholder="Enter Product name" autocomplete="off">
    <div id="spn_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>

  </div>


  <div class="form-group mt-5 mr-2 mb-5" >
    <label for="spt" style="font-weight:bold;font-size: 15px; margin-bottom: 0.5vw; ">Product Type:</label>
    <input type="text" class="form-control" style="border-radius: 20px;" name="spt" id="spt" value="Stationary" readonly>
  </div>


  <div class="form-group mt-5 mr-2" >
    <label for="spb" style="font-weight:bold;font-size: 15px; margin-bottom: 0.5vw; ">Set Product Brand:</label>
    <input type="text" class="form-control" style="border-radius: 20px;" name="spb" id="spb" placeholder="Enter Product Brand" required>
    <div id="spb_error" style="color:red;display:none">*This field shouldn't contain apostrophe (' and "")</div>
  </div>

 

  <div class="form-group mt-5 mr-2" >
    <label for="spni" style="font-weight:bold;font-size: 15px; margin-bottom: 0.5vw; ">No. of items:</label>
    <input type="number" class="form-control" style="border-radius: 20px;" name="spni" id="spni" placeholder="Enter no of items" required>
  </div>
  <div class="form-group mt-5 mr-2" >
    <label for="spp" style="font-weight:bold;font-size: 15px; margin-bottom: 0.5vw; ">Set Product Price:</label>
    <input type="number" class="form-control" style="border-radius: 20px;" name="spp" id="spp" placeholder="Enter Product price" required>
  </div>

  <div class="form-group mt-5 mr-2" >
    <label for="spa" style="font-weight:bold;font-size: 15px; margin-bottom: 0.5vw; ">Product Available:</label>
    <input type="number" class="form-control" style="border-radius: 20px;" name="spa" id="spa" placeholder="No. of Product available" required>
  </div>
  <div class="form-group mt-5 mr-2" >
    <label for="spph" style="font-weight:bold;font-size: 15px; margin-bottom: 0.5vw; ">Add photo of the Product:</label><br>
    <input type="file" name="myfile" style="background-color:white; color:black" required>
    
  </div>
  <button class="Button Button-one"type="submit" name="btn" id="btn" class="btn btn-primary" >Add item</button>
</form>
<br>
<p style="color:black;">Want to go back? <a href="SellerAddItems.php" class="fancy-link" style="color:rgb(6, 94, 145);">Click Here</a></div></div>
</div>
<script src="jquery.js"></script>
<script>
   $(document).ready(function(){
   $('#spn').keyup(function () {
  var spn= $('#spn').val();
  // console.log(bn);
  if (spn.indexOf("'") !== -1 ||spn.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#spn_error').css("display","block");
$('#btn').prop('disabled', true);

}
else{
  $('#spn_error').css("display","none");
$('#btn').prop('disabled', false);


}
});


$('#spb').keyup(function () {
  var spb= $('#spb').val();
  // console.log(bn);
  if (spb.indexOf("'") !== -1 ||spb.indexOf('"') !== -1  ) {
  // console.log("Single quote is present.");
  $('#spb_error').css("display","block");
$('#btn').prop('disabled', true);

}
else{
  $('#spb_error').css("display","none");
$('#btn').prop('disabled', false);


}
});
   });
</script>
<?php
if(isset($_POST['btn'])){
//   $spdt=$_POST['sdt'];
  $spb=$_POST['spb'];
  $spni=$_POST['spni'];
    $spn=$_POST['spn'];
    $spt=$_POST['spt'];
    // $spw=$_POST['spw'];
    $spp=$_POST['spp'];
    $spa=$_POST['spa'];
    $email=$_SESSION['email'];
    $date=date("Ymdhis");
    $date1=date("Y-m-d");
    $file_name=$_FILES['myfile']['name'];
    $file_tmp_name=$_FILES['myfile']['tmp_name'];
    $sql="INSERT INTO stock(Email,Product,Type,price,Available,Date,Brand,no_item) VALUES ('$email','$spn','$spt',$spp,$spa,'$date1','$spb','$spni')";
    $insert=mysqli_query($conn,$sql);
    $id=mysqli_insert_id($conn);

    $ppid=$id.$date;
        if($insert){
            if($file_name!= "" ){ 
                    $extension = pathinfo($file_name, PATHINFO_EXTENSION);
              
                  $imgExtArr = ['jpg', 'jpeg', 'png','JPEG','JPG','PNG'];
                if(in_array($extension, $imgExtArr))
                {

                    $new_name=$ppid.".".$extension;
                    move_uploaded_file($file_tmp_name,"SellerUpload/".$new_name);
                    $sql1="UPDATE stock SET Photo_Id='$new_name' WHERE Serial_no=$id";
                    $update=mysqli_query($conn,$sql1);
                    if($update){
                    echo "<div class='alert alert-success  mt-3 px-5' role='alert'style='margin:2rem 2rem 4rem 2rem;' ><b>Item added Successfully</b> </div>";
                        }
                        else{
                            echo "<div class='alert alert-danger  mt-3 px-5' role='alert' style='margin:2rem 2rem 4rem 2rem;' ><b>
                            Item adding Unsuccessful<b> 
                        </div>";
                        }
                }  
            } 
            
        }
           
        else
        {
            echo "<div class='alert alert-danger  mt-3 px-5' role='alert' style='margin:2rem 2rem 4rem 2rem;' ><b>
            The file can't be added. Choose another image.<b> 
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
</div>
    </body></html>