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
if(!isset($_SESSION['admin'])){
    header("Location:index.php");
}

?>
<?php
$so=0;
$st=0;
$sth=0;
$sf=0;
$sfi=0;

$bo=0;
$bt=0;
$bth=0;
$bf=0;
$bfi=0;
 $sql="SELECT * FROM  feedback WHERE User_Type='Seller'";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
  while ($row=mysqli_fetch_assoc($result)) {
    $r=$row['Rating'];
    if($r==1){
      $so++;
    }
    else if($r==2){
      $st++;

    }
    else if($r==3){
      $sth++;

    }
    else if($r==4){
      $sf++;

    }
    else if($r==5){
      $sfi++;

    }
  
  }
 }


 $sql2="SELECT * FROM  feedback WHERE User_Type='Buyer'";
 $result2=mysqli_query($conn,$sql2);
 if(mysqli_num_rows($result2)>0){
  while ($row2=mysqli_fetch_assoc($result2)) {
    $s=$row2['Rating'];
    if($r==1){
      $bo++;
    }
    else if($s==2){
      $bt++;

    }
    else if($s==3){
      $bth++;

    }
    else if($s==4){
      $bf++;

    }
    else if($s==5){
      $bfi++;

    }
    # code...
  }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" sizes="250x250" href="uploads/logo3.png">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
      
        const so = <?php echo $so?>;
        const st = <?php echo $st?>;
        const sth = <?php echo $sth?>;
        const sf = <?php echo $sf?>;
        const sfi = <?php echo $sfi?>; 


        const bo = <?php echo $bo?>;
        const bt = <?php echo $bt?>;
        const bth = <?php echo $bth?>;
        const bf = <?php echo $bf?>;
        const bfi = <?php echo $bfi?>; 
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Rating', 'Seller','Buyer'],
          ['5',sfi,bfi],
          ['4',sf,bf],
          ['3',sth,bth],
          ['2',st,bt],
          ['1',so,bo]
        ]);

        var options = {
          chart: {
            title: 'Rating',
            subtitle: 'Sales',
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <title>Shop Now</title>
    <style>
  
*{
    padding:0;
    margin:0;
    text-decoration: none;
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
.fa-shopping-cart:hover{
color:red
}
.fancy-link{
  text-decoration: none;
  color:rgb(6, 94, 132);
  position:relative;
  font-size:20px;
}

#cards{
    position:relative;
    top:7rem;
    display:flex;
    width:100%;
    height:60%;
}
.card{
    height:12rem;
    width:20rem;
    margin:1rem;
    display:flex;

}
/* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.flip-card {
  background-color: transparent;
  width: 300px;
  height: 200px;
  margin:0 0.5rem;
  border: 1px solid #f1f1f1;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
}

/* This container is needed to position the front and back side */
.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Do an horizontal flip when you move the mouse over the flip box container */
.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

/* Position the front and back side */
.flip-card-front, .flip-card-back {
  position: absolute;
  /* display:flex; */
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.flip-card-front {
  background-color: #bbb;
  color: black;
  cursor: pointer;
}

/* Style the back side */
.flip-card-back {
  background-color: dodgerblue;
  color: white;
  transform: rotateY(180deg);
  cursor: pointer;
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
  margin:2em 0 1rem 1.8em;
  width:90%;
  cursor: pointer;
  border:2px solid  rgba(22, 6, 252, 0.521);
    color: rgba(22, 6, 252, 0.521);
  text-decoration: none;
  background: rgba(255, 255, 255, 0);

  text-decoration: none;
  color: rgba(22, 6, 252, 0.521);
  font-size:1rem;
  font-weight: bold;
  padding:0.5em 0.5em;
  z-index:1;
  align-items: center;
  vertical-align: middle;
  text-align: center;
  justify-content: center;
  border-radius:100px;
    box-shadow: var(--shadow-3);
}
.Button::after{
 content:'';
 position: absolute;
 color:white;
 width:100%;
 height: 100%;
 border-radius:100px;
 
 background-color: rgba(22, 6, 252, 0.521);
 top:0;
 left:0;
 z-index: -1;
 transition:transform 200ms ease-in;
}
.Button:hover{
    color:white;
}
.Button-one::after{
  border-radius:100px;

  transform: scaleX(0);
  transform-origin: left;
  transform-origin: right;
  color:white;
}
.Button-one:hover::after{
  border-radius:100px;

  transform: scaleX(1);
  transform-origin: left;
  color:white;
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




/* width */
.flip-card-back-p::-webkit-scrollbar {
   width: 10px;
}

/* Track */
.flip-card-back-p::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 15px;
}
 
/* Handle */
.flip-card-back-p::-webkit-scrollbar-thumb {
    background: rgba(88, 88, 88, 0.16);
  border-radius: 15px;
}

/* Handle on hover */
.flip-card-back-p::-webkit-scrollbar-thumb:hover {
 background: rgba(88, 88, 88, 0.26); 
}
.media-scroller{
    --spacer: 1rem;
    display: grid;
    gap: 1rem;
    grid-auto-flow: column;
    grid-auto-columns: 24%;
    height:21rem;
    padding: 0 1rem 1rem;
    overflow-x:auto;
    overscroll-behavior-inline: contain;
    height: 24rem;

}
.media-element{
    display: grid;
    grid-template-rows: min-content;
    gap: 1rem;
    padding:1rem;
    background:white;
    border-radius: 10px;
    box-shadow: 4px 4px 10px rgb(0,0,0,0.400);

}
.media-element > img{
    inline-size: 100%;
   aspect-ratio: 16/9;
   object-fit: cover;
   height: 10em;
}
.bg-image {
  /* The image used */
 
  
  /* Add the blur effect */
  /* filter: blur(3px);
  -webkit-filter: blur(3px); */
  
  /* Full height */
  height: 100%; 
  border-bottom: 2px solid rgb(0,0,0,0.800);
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  margin-top: 2.8rem;
  justify-content: center;
  /* text-align: center; */
}


#create{
  width:35rem;
  background-color: rgba(22, 6, 252, 0.521);
  /* height:40rem; */
  height:auto;

  margin-bottom: 2rem;
  color:white;
    border-bottom-left-radius: 100px;
    border-top-right-radius: 100px;

    border-bottom-right-radius: 100px;

    box-shadow: 10px 10px 10px rgb(0,0,0,0.200);
    padding:1rem;
}


#formdiv{
  width:33rem;
  background-color: rgb(255,255,255,0.300);
  /* height:38rem; */
  height:auto;
  border-bottom-left-radius: 100px;
    border-top-right-radius: 100px;
    box-shadow: 10px 10px 10px rgb(0,0,0,0.200);

    border-bottom-right-radius: 100px;
    text-align: center;
}
#formdiv h3{
  -webkit-text-stroke: 1px white;
  color:rgb(0,0,0,0.100);
padding-top:1rem;
  padding-bottom:0.1rem;
  font-weight:bolder;
  font-size:50px;
}

#formdiv form{
  text-align:left ;
  padding:1rem;

}
#formdiv label{
  font-weight: bolder;
  font-size:18px;
  margin-bottom:0.2rem;

}
#formdiv input{
  /* font-weight: bolder; */
  font-size:18px;
  color: rgba(22, 6, 252, 0.521);
  border-bottom-left-radius: 100px;
    border-top-right-radius: 100px;

    border-bottom-right-radius: 100px;
}
</style>
    </head>
    <body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " onload="myFunction()">
   
<div id="loading"></div>
<?php
$email=$_SESSION['admin'];
$sql="SELECT * FROM admindetails WHERE Email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $bn=$row['Name'];
        $bgn=$row['Gender'];
        $be=$row['Email'];
        $bp=$row['Password'];
        $bph=$row['Phone_no'];
        $bpid=$row['Photo_id'];
        if(!empty($bpid)){
            $photo="adminUpload/".$bpid;
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
<?php
$s="SELECT * FROM sellerdetails WHERE Allow=''";
$r=mysqli_query($conn,$s);
if(mysqli_num_rows($r)>0){
  $req="<i class='fa-solid fa-circle' style='color: #ff1900;font-size:5px'></i>";
}
else{
  $req="";
}
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light  pr-4 container-fluid" style="z-index:99;position:fixed; width:97%" >
    <img src="uploads/logo.jpg" height="60rem" width="65rem" class="logo mt-2 mb-2 ml-2">

  <a class="navbar-brand" href="index.php" style="color:rgb(6, 94, 145) ;padding-left: 1vw; "> Shop Now</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-4">
      <li class="nav-item active">
        <a class="nav-link " href="AdminHomepage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="AdminUserDetails.php">User Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="AdminBuyerPage.php" >Buyers</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link "  href="AdminSellerPage.php"  >Sellers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  href="AdminPage.php"  >Admin</a>
      </li>
     
      <li>
      <a class="nav-link" href="SellerRequests.php" >Requests&nbsp;<?php echo $req ?></a>
      
      </li>
      <li>
      <a class="nav-link" href="reports.php" >Reports</a>
      
      </li>
      <li>
      <a class="nav-link" href="Adminddatabase.php" >Database</a>
      
      </li>
      <li>
      <a class="nav-link" href="AdminFeedback.php" >Feedbacks</a>
      
      </li>
      <li class="nav-item">
        <a class="nav-link " href="logout.php">Log out</a>
      </li>
      
    </ul>


<div class="float-right icon">

  <a href="AdminUserDetails.php" style="display:flex;"><img src="<?php echo $photo ?>" style="height:9vh; width:9vh; object-fit: cover;  border-radius: 50px; margin-left:15rem; cursor:pointer"></a></div>
  
</nav>
<table class="table align-middle mb-0 bg-white" style=" position:relative;top:5rem;">
  <thead class="bg-light mt-4">
    <tr>
      <th>Reported User</th>
      <th>Reported User Type</th>
      <th>Reported By</th>
      <th>Reporter Type </th>
     
      
    </tr>
  </thead>
  <tbody>
<?php 
$sql="SELECT * FROM reports ";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        $Serial_no=$row['Serial_no'];
        $Type=$row['Type'];
        $Email=$row['Email'];
        $ReportedBy=$row['ReportedBy'];
        $ReportedByType=$row['ReportedByType'];
        if($Type=='Seller'){
            $s="SELECT * FROM sellerdetails WHERE Email='$Email'";
            $r=mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
                while($ro=mysqli_fetch_assoc($r)){
                    $ss=$ro['Serial_no'];

                    $Name="<a href='SellerView.php?id=$ss' style='text-decoration:none'>".$ro['Name']."</a>";
        }
        }}
        else{
            $s="SELECT * FROM buyerdetails WHERE Email='$Email'";
            $r=mysqli_query($conn,$s);
            if(mysqli_num_rows($r)>0){
                while($ro=mysqli_fetch_assoc($r)){
                    $ss=$ro['Serial_no'];

                    $Name="<a href='BuyerView.php?id=$ss' style='text-decoration:none'>".$ro['Name']."</a>";
        }}}

        if($ReportedByType=='Seller'){
            $si="SELECT * FROM sellerdetails WHERE Email='$ReportedBy'";
            $ri=mysqli_query($conn,$si);
            if(mysqli_num_rows($r)>0){
                while($roi=mysqli_fetch_assoc($ri)){
                    $ss=$roi['Serial_no'];
                    $ReName="<a href='SellerView.php?id=$ss' style='text-decoration:none'>".$roi['Name']."</a>";
        }
        }}
        else{
            $si="SELECT * FROM buyerdetails WHERE Email='$ReportedBy'";
            $ri=mysqli_query($conn,$si);
            if(mysqli_num_rows($ri)>0){
                while($roi=mysqli_fetch_assoc($ri)){
                    $ss=$roi['Serial_no'];
                    $ReName="<a href='BuyerView.php?id=$ss' style='text-decoration:none'>".$roi['Name']."</a>";

        }}}
       

       
?>


<tr >
     
      <td>
      <p class="text-muted mb-1"><?php echo $Name?></p>
    
      </td>
     
      <td>
      <p class="text-muted mb-1"><?php echo $Type?></p>
    

      </td>
      <td>
      <p class="text-muted mb-1"><?php echo $ReName?></p>
     

      </td>
      <!-- <td>Seller</td> -->
      <td>
     <p class="text-muted mb-0"><?php echo $ReportedByType?></p>
       
      </td>
    </tr>
        
    <?php 
     }

 }

    ?>
  </tbody>
</table>
<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
    </body></html>