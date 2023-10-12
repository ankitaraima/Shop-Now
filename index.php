<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- <link rel="stylesheet" href="styless.css"> -->
    <!-- <link rel="apple-touch-icon" sizes="114x114" href="${resource(dir: 'uploads', file:'logo2.png')}"> -->
    <link rel="icon" sizes="250x250" href="uploads/logo3.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Shop Now</title>
    <style>

  
.media-element{
    --spacer-2rem;
    display: grid;
    grid-template-rows: min-content;
    gap: var(--spacer);
    padding:var(--spacer);
    background: var(--surface-6);
    border-radius: var(--radius-2);
   

}
.Button{
  position: relative;
  display:flex;

  height: 6vh;
  margin:2em 0 1rem 2em;
  width:11em;
  cursor: pointer;
  border:2px solid rgb(6, 94, 132);
    color:rgb(6, 94, 132);
  text-decoration: none;
  background: rgba(255, 255, 255, 0);

  text-decoration: none;
  color:rgb(6, 94, 132);
  font-size:1.25rem;
  font-weight: bold;
  padding:0.5em 1.51em;
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

#header{
    /* color:linear-gradient(0deg, rgba(0,205,20,0.6867121848739496) 21%, rgba(255,255,255,1) 77%); */
  
	font-size: 10em; 
	/* font-family:  'Dancing Script', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode'; */
	font-style: oblique 40deg;
	font-weight: bolder; 
    /* text-shadow: 2px 4px 4px rgba(90,100,10,0.6); */
    text-shadow: 5px 10px 15px rgba(0, 0, 0, 0.658);
    font-family: "Satisfy variant0", Tofu;
	 margin: 0vh 0 0 8vh;
     color:rgba(0, 255, 55, 1);
	 -webkit-text-stroke: 2px rgb(13, 0, 88,0.75);
    /* color: rgba(88, 88, 88, 0.61); */
}
/* .notdesk{
  height:100%;
  width:100vw;
  background-color:rgb(94, 253, 73);
	/* color: ; */
/* 
  z-index:999;
  position:absolute;
  align-items: center;
  justify-content: center;


} */
/* .notdeskcon{ */
  /* width: auto;
  height: auto; */
  /* margin: 0 auto;
  padding: 10px;
  position: relative;
  height:10rem;
  width:10rem;
  color:black; */
  /* align-items: center; */
  /* background-color: red; */
  /* position: relative;
   */
   /* display: flex; */
   /* justify-content: center; */
/* }  */
</style>
</head>
<body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
background-color:white;
background-image: url('uploads/image2.jpg'); 

background-repeat:no-repeat;
background-size:cover;

background-size: cover;">
<!-- <div class="notdesk">
<div class="notdeskcon">
  <img src="uploads/logo1.png" style="height:10rem;width:12rem" alt="">
</div>
<div class="notdeskcon" style="width:30rem;align-item:center;justify-content:center; position: relative;">
  <p style=" align-items: center;">THIS WEBSITE CAN BE DISPLAYED ONLY ON DESKTOP</p>
</div>
<div class="notdeskcon"></div>

</div> -->
<div>
<div class="media-element">
  <div class="main" style=""><h5 id="header" style="font-weight:bolder; font-size:7em; padding:10rem 0 0 3rem;  color:rgb(34, 84, 270);">Shop Now</h5></div>
       
       <p style="color:rgba(88, 88, 88, 0.900); font-weight:bold; font-size:1rem; padding:1em 0 0 6em; height:21vh;line-height: 1.6; width:50rem">An online grocery shop aims at delivering the best quality grocery items directly to customer's doorstep at competitive prices. Users in this case have the ability to order products from the company's website and choose a time slot for the delivery.</p>
       <!-- <a href="#" class="fancy-link">click here </a> -->
     
       
</div>
<div style="display:flex; margin:1em 0 0 3em;"><button class="Button Button-one" id="btn1">Join as a Seller</button>
       <button class="Button Button-one" id="btn2">Join as Buyer</button>
       <button class="Button Button-one" id="btn3">Join as Admin</button></div>
<script src="jquery.js"></script>
<script>
  $('#btn1').click(function(){
   window.location.href='Seller.php';
})
$('#btn2').click(function(){
   window.location.href='Buyer.php';
})
$('#btn3').click(function(){
   window.location.href='Admin.php';
})
</script>
</body></html>