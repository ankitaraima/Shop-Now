<?php 
include('navadmin.php');
include_once('database.php');

$table=$_GET['name'];
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
<style>
  .Name{
    height:2rem;
    margin:0 0;
  }
  .td1{
    text-align:center;width:10rem;height:2rem;padding:1rem 0;
  }
  .pri{
    margin:0;text-align:center;width:10rem;height:2rem;padding:0.5px
  }
  .Length{
    height:2rem;margin:0 0;
  }
</style>
    </head>
    <body>
    <form style="margin-top:4rem">
  <div class="form-group row">
    <label id="inputTable" for="inputTable" style="font-weight:bolder; font-size:1rem;color:rgb(6, 94, 145)" class="col-sm-2 col-form-label">Table Name:</label>
    <div class="col-sm-10">
    <input type="text" class="form-control TabName" id="inputTable"  placeholder="Table  Name" style="width:10rem; height:2rem">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label" style="font-weight:bolder; font-size:1rem;color:rgb(6, 94, 145)">No. of column: </label>
    <div class="col-sm-10" style="display:flex">
      <input type="number" class="form-control" id="inputNumber" name="noOfCol" value="2" placeholder="No. of column" style="width:10rem; height:2rem">
     <div class="Button Button-one" id="btnGo" style="width:4rem; height:2rem;margin-top:-0.1rem">Go</div>


    </div>
  </div>
</form>
<form >

  <table class="table table-striped">
  <thead style="text-align:center">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Length/Value</th>
      <th scope="col">Auto Incement</th>
      <th scope="col">NULL</th>
      <th scope="col">Index</th>


    </tr>
  </thead>
  <tbody id="tbody">
  <!-- <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script> -->
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <tr>
      <td class="td1" >    <input type="text" class="form-control Name" id="inputTable" name="name[]" placeholder="Name" style=""></td>
      <td class="td1" ><select class="custom-select type pri" name="type[]" >
  <option value="INT" selected>INT</option>
  <option value="VARCHAR">VARCHAR</option>
  <option value="TEXT">TEXT</option>
</select></td>
<td class="td1"  >    <input type="number" class="form-control Length" id="inputTable" name="length[]" placeholder="Length"></td>
   
    <td class="td1" > 
      <input type="checkbox" class="ai"  >
   </td>
   <td class="td1" > 
      <input type="checkbox" class="nu" name="null[]" >
   </td>
   <td class="td1" ><select class="custom-select ind pri" name="type[]" >
  <option selected value="0">...</option>
  <option value="PRIMARY">PRIMARY</option>
  <option value="UNIQUE">UNIQUE</option>
 

</select></td>

    </tr>
 

  </tbody>
</table>
<div class="Button Button-one save" style="width:4rem" >Save
<input  style="display:none" Value="Save">
</div>
</form>

<form action="AdminCreateTable.php" method="post" id="formfinal">
  <input type="text" id="myHiddenFieldSql" name="myHiddenFieldSql" value="" style="display:none">
  <input type="text" id="myHiddenFieldTable" name="myHiddenFieldTable" value="" style="display:none">

  <input type="submit" value="Submit" style="display:none" name="btn4">
</form>
<!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"> </script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$( document ).ready(function() {
  $("#btnGo").click(function (){
    var num=$('#inputNumber').val();
    for(var i=1;i<=num;i++){
      $('#tbody').append('<tr>');
      $('#tbody').append(' <td class="td1" >    <input type="text" class="form-control Name" id="inputTable" name="name[]" placeholder="Name" style=""></td>');
      $('#tbody').append('<td class="td1" ><select class="custom-select type pri" name="type[]" ><option value="INT" selected>INT</option><option value="VARCHAR">VARCHAR</option> <option value="TEXT">TEXT</option></select></td>');
      $('#tbody').append('<td class="td1"  >    <input type="number" class="form-control Length" id="inputTable" name="length[]" placeholder="Length"></td>');
      $('#tbody').append(' <td class="td1" > <input type="checkbox" class="ai" name="ai[]" ></td>');
      $('#tbody').append(' <td class="td1" > <input type="checkbox" class="nu" name="null[]" ></td>');
      $('#tbody').append(' <td class="td1" ><select class="custom-select ind pri" name="type[]" ><option selected value="0">...</option><option value="PRIMARY">PRIMARY</option><option value="UNIQUE">UNIQUE</option></select></td>');
      $('#tbody').append('</tr>');
    }
  }) 
  $(".save").click(function (){
    var err=0;
    var TabName=$('.TabName').val();
    if ($('.TabName').val().length === 0) {
      alert("Please give a table name first!!");
      // err++;
    }
    else{
      var values = [];
$('.Name').each(function() {
  var inputValue = $(this).val();
  if(inputValue==""){
    alert("Column name should not be empty");
    err++;
  }
  values.push(inputValue);
});
console.log(values);
     

  var lengths = [];


$('.Length').each(function() {
  var inputValuelen = $(this).val();
  lengths.push(inputValuelen);
});
console.log(lengths);


var type = [];
$('.type').each(function() {
  var inputValuetype = $(this).val();
  type.push(inputValuetype);
});
console.log(type);

var checkboxValues = $('input.ai').map(function() {
    return this.checked ? 1 : 0;
}).get();
console.log(checkboxValues);


var checkboxValues1 = $('input.nu').map(function() {
    return this.checked ? 1 : 0;
}).get();
console.log(checkboxValues1);


var ind = [];
$('.ind').each(function() {
  var inputValueind = $(this).val();
  ind.push(inputValueind);
});
console.log(ind);
// var err=0;    
var sql="CREATE TABLE "+TabName+" (";

for(var i=0;i< values.length;i++){
  var count=0;
  $.each(values, function(index, element) {
    if (element === values[i]) {
      count++;
    }
  });
  lengthi=parseInt(lengths[i]);
  // alert(typeof(255));
  if(values[i]!=""){   
     if(count != 1) {
        alert("Multiple column names can't be same");
        err++;
      }
      else{ 
        if(lengths[i]==""){
        alert("please give the column length");
        err++;

      }
      else if(type[i]=="INT" && lengthi >255  ){
        alert("int length can be maximum of 255");
        err++;
      }
    else{
      var aivar;
      var nuvar;
      if(checkboxValues[i]==0){
        aivar="";
      }
      else{
        aivar="AUTO_INCREMENT";
      }

      if(checkboxValues1[i]==0){
        nuvar="";
      }
      else{
        if(ind[i]=="PRIMARY"){
        nuvar="";
        }
        else{
          nuvar="NOT NULL";
        }
      }
      if(i!=0){
        sql=sql+",";
      }
      var ind;
     if(ind[i]=="PRIMARY"){
      
      sql=sql+values[i]+" "+  type[i]+" ("+lengths[i]+") "+aivar+" "+nuvar+" "+ind[i]+" KEY ";
     }
     else if(ind[i]=="UNIQUE"){
      sql=sql+values[i]+" "+  type[i]+" ("+lengths[i]+") "+aivar+" "+nuvar+" "+ind[i]+" ";
     }
     else{
      sql=sql+values[i]+" "+  type[i]+" ("+lengths[i]+") "+aivar+" "+nuvar+" ";
     }
       
    }

    }
  }
  


        
    }
    sql=sql+");";
  $('#myHiddenFieldTable').val(TabName);
  $('#myHiddenFieldSql').val(sql);


// Submit the form
if(err==0){
$('#formfinal').submit();
  } }}) })



</script>
<?php


if(isset($_POST['myHiddenFieldSql'])){
  // echo "hello";
$sql=$_POST['myHiddenFieldSql'];
$tabname=$_POST['myHiddenFieldTable'];
$sql2 = "SHOW TABLES LIKE '$tabname'";
$result2=mysqli_query($conn,$sql2);
// echo $sql;
if(mysqli_num_rows($result2)>0){
    echo "<script>alert('Table already exists')</script>";
}
else{
    if(mysqli_query($conn,$sql)){

        echo "<script>alert('Table is created successfully')</script>";
    }
    else{
        echo "<script>alert('Somthing Went Wrong')</script>";
    }
}
}
?>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
</body>

</html>  