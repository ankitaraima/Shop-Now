<?php
ob_start();
session_start();
include_once('database.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $_SESSION['order_id']=$id;
}
$id=$_SESSION['order_id'];

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    /* display: grid; */
    gap: 1rem;
   display: flex;
   /* height:38rem; */
  

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
    height:30rem;
    background:white;
    border-radius: 10px;
    box-shadow: 4px 4px 10px rgb(0,0,0,0.400);
    align-items: center;
    height:38rem;

}

.media-element:hover{
    background-color:rgb(6, 94, 145,0.100) ;
}
.ProductButtons{
    align-items: center;
    justify-content: center;
    margin:2rem 1rem;
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
  font-size:46px;
  margin:-2.5rem 0 0 12rem;
   color:rgba(131, 131, 131, 0.521);
   cursor: pointer;
}
.like{
  font-size:46px;
  margin:-2.5rem 0 0 12rem;
   color:red;
   cursor: pointer;
}
.heading:hover{
  text-decoration: underline;
}
</style>
   
</head>
<body style="background-color:hsl(0,0%,95%); margin:0 20px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " >
<div id="loading"></div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
<?php
// Assuming you have already established a database connection

// Query to fetch the first row
$query = "SELECT * FROM orders  WHERE Order_Id='$id' LIMIT 1";
$result = mysqli_query($conn, $query);
$day=0;
// Check if the query was successful
if ($result) {
    // Fetch the row as an associative array
    $row = mysqli_fetch_assoc($result);

    // Display the value(s)
    if ($row) {
       $Name=$row['Name'];
       $Emai=$row['Email'];
       $Phone_no=$row['Phone_no'];
       $Address=$row['Address'];
        $Seller_Email=$row['Seller_Email'];
        $Order_date=$row['Order_Date'];
        $Date=$row['Date'];

// Creates DateTime objects
$convertedDate1 = date_create_from_format('d/m/Y', $Order_date);
$convertedDate2 = date_create_from_format('d/m/Y', $Date);

// Calculate the difference between the two dates
// $dateDiff = date_diff($convertedDate2, $convertedDate2);

// Display the difference
if ($convertedDate1 && $convertedDate2) {
    // Calculate the difference between the two dates
    $dateDiff = date_diff($convertedDate1, $convertedDate2);

    // Display the difference
    if( $dateDiff->format('%R%a')==5){
        $day=5;
    }
    else{
        $day=1;
    }
} 
else {
    echo "Failed to convert the dates.";
}
// Free the result set
// mysqli_free_result($result);



    } else {
        echo "No rows found.";
    }

    // Free the result set
    mysqli_free_result($result);
} else {
    // Display an error message if the query fails
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
// mysqli_close($conn);
?>

<div class="card">
  <div class="card-body">
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID: #<?php echo $id?></strong></p>
        </div>
        <div class="col-xl-3 float-end">
          <button class="btn btn-light text-capitalize border-0 mb-3" id="downloadBtn" data-mdb-ripple-color="dark"><i
              class="fa fa-print text-primary" ></i> Print</button>
          <a class="btn btn-light text-capitalize mb-3" onclick="history.back()" data-mdb-ripple-color="dark"><i
              class="fa fa-file-pdf text-danger"></i> Back </a>
        </div>
        <hr>
      </div>

      <div class="container">
        <div class="col-md-12">
          <div class="text-center">
            <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
            <p class="pt-0"> <img src="uploads/logo3.png" alt="logo" height="40rem" width="40rem"><b style="color:rgb(6, 94, 145);margin-left:1rem;font-size:1.5rem">Shop Now</b></p>
          </div>

        </div>


        <div class="row">
          <div class="col-xl-8">
            <ul class="list-unstyled">
              <li class="text-muted">To:&nbsp; <span style="color:#5d9fc5;"><?php echo $Name ?></span></li>
              <li class="text-muted"><i class="fa fa-envelope mr-2"></i><?php echo $Emai ?></li>
              <li class="text-muted"><i class="fa fa-phone mr-2"></i><?php echo $Phone_no ?></li>
              <li class="text-muted"><i class="fa fa-home mr-2"></i><?php echo $Address ?></li>
            </ul>
          </div>
          <div class="col-xl-4">
            <p class="text-muted">Invoice</p>
            <ul class="list-unstyled">
              <li class="text-muted"><i class="fa fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">ID:</span>#<?php echo $id?></li>
              <li class="text-muted"><i class="fa fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">Order Date: </span><?php echo $Order_date?></li>
<?php 
 $sql1="SELECT * FROM orders WHERE Order_Id='$id'";
 // echo $sql1;
 $so=0;
 $can=0;
 $result1 =mysqli_query($conn,$sql1);
 if(mysqli_num_rows($result1)>0){
   while($row1=mysqli_fetch_assoc($result1)){
    //  $c=$c+1;
     $pn=$row1['Product_no'];
     $ds=$row1['Delivery_Status'];
     if(!($ds=='Delivered')){
       $so++;
     }}}
?>


              <li class="text-muted"><i class="fa fa-circle" style="color:#84B0CA ;"></i> <span
                  class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">
                   <?php echo ($so!=0)?"Unpaid":"paid" ?></span></li>
                  
            </ul>
          </div>
        </div>

        <div class="row my-2 mx-1 justify-content-center">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#84B0CA ;" class="text-white">
              <tr >
                <!-- <th scope="col">#</th> -->
                <th scope="col">Product</th>
                <th scope="col">Brand</th>

                <th scope="col">Quantity</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            <tbody>
              
            <?php 
                            $total=0;
                        
        if($day==1){
            $total=$total+50;
        }
            $sql3="SELECT * FROM orders WHERE Order_Id='$id'";
            $result3=mysqli_query($conn,$sql3);
            if(mysqli_num_rows($result3)>0){
                while($row3=mysqli_fetch_assoc($result3)){
                    $Product_name=$row3['Product_name'];
                    $Brand=$row3['Brand'];
                    $no_item=$row3['no_item'];
                    $Product_no=$row3['Product_no'];
                    $sql4="SELECT * FROM stock WHERE Serial_no='$Product_no'";
                    $result4=mysqli_query($conn,$sql4);
                    if(mysqli_num_rows($result4)>0){
                while($row4=mysqli_fetch_assoc($result4)){
                    $Price=$row4['price'];
                }}
                $Amount=$Price*$no_item;
                $total=$total+$Amount;



            ?>
          <tr>
                <!-- <th scope="row">1</th> -->
                <td><?php echo $Product_name?></td>
                <td><?php echo $Brand?></td>
                <td><?php echo $no_item?></td>
                <td>₹<?php echo " ".$Price?></td>
                <td>₹<?php echo " ".$Amount?></td>

              </tr>
             
               <?php }}?>
              
            </tbody>

          </table>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <p class="ms-3">Payment mode - Cash On Delivery</p>

          </div>
          <div class="col-xl-3">
          
            <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                style="font-size: 22px;"><?php echo "₹".$total?></span></p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xl-10">
            <p>Thank you from Shop Now for your purchase</p>
          </div>
          
        </div>

      </div>
    </div>
  </div>
</div>
<!-- <button id="downloadBtn">Download as PDF</button> -->
<!-- <script src="html2pdf.bundle.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<script>
  // Get a reference to the download button
  const downloadBtn = document.getElementById("downloadBtn");

  // Add click event listener to the button
  downloadBtn.addEventListener("click", () => {
    // Select the HTML element to convert to PDF (in this case, the whole page)
    const element = document.body;

    // Set the options for the PDF conversion
    const options = {
      filename: "Invoice_ShopNow.pdf", // Specify the name of the downloaded PDF file
      margin: 10,
      jsPDF: { format: "a4", orientation: "portrait" }, // PDF format and orientation
    };

    // Use html2pdf library to convert the selected element to PDF
    html2pdf().set(options).from(element).save();
  });
</script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body></html>
