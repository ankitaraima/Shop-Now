<?php 
include('navadmin.php');
$table=$_GET['id'];
$_SESSION['table']=$table;
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

    </head>
    <body>
     <br>   
     <br>   
     <br>   
     <br>   
     <br>   
    <div class="col" style="margin-right:3rem">
    <h1 style="padding:0 1rem;color:rgb(6, 94, 145)">Table: <?php echo $table?></h1>
        <table class="table table-striped" style="margin-top:1rem; margin-right:3rem">
  <thead>
    <tr style="color:white;text-align:center;background:rgb(6, 94, 145)">
        <th>Column</th>
        <th>Type</th>
        <th>Null</th>
        <th>Value</th>

<tr>
  </thead>
  <tbody style="text-align:center">


<?php
// You can use the information_schema columns table:
  $field = array();
$sql="SHOW FIELDS FROM $table FROM project";
$result=mysqli_query($conn,$sql);
if($result){
  while($row=mysqli_fetch_assoc($result)){
    array_push($field, $row['Field']);
   ?>
    <tr>
    <td><?php echo $row['Field'] ?></td>

    <td><?php echo $row['Type'] ?></td>
    <td><?php echo $row['Null'] ?></td>
    <td><textarea name="inval" class="ind" rows="10" cols="50" name="input[]" style="align:left;padding:1rem ;margin:0; font-size:20px"></textarea></td>

    


  </tr>
<?php
  
  }
}
$jsonArray = json_encode($field);
?>
 
      
   
  </tbody>
</table>
<div class="Button Button-one save" style="width:6rem;float:right" >Save
<input  style="display:none;" Value="Save">
</div>
        </div>
</div>
 <script src="jquery.js"></script>
 <script>
  $( document ).ready(function() {
  
          // loadtable();
          $(".save").click(function() {
            var field=<?php echo $jsonArray ?>;
          //  alert(field);
          //  var myArray = [];
           var arrayLength = field.length;
           var ind=[];
           $('.ind').each(function() {
          var inputValueind = $(this).val();
          ind.push(inputValueind);

          });
          // console.log(ind);

          
            // $.ajax({
            // url:"dropTable.php",
            // type:"POST",
            // data:{id:id},
            // success: function (data) {
            //     if(data==1){
                 
            //       window.location.href = "Adminddatabase.php";
                   
            //     }
            //     else{
            //      alert("Somthing went wrong");
            //     }
                
            // } });

var table="<?php echo $table?>";
var sql="INSERT into "+table+" (";
for (var i=0; i<arrayLength;i++){
  if(i!=0){
  sql+=",";
}


sql+=field[i];

}
sql+=")";
sql+="VALUES( ";
for (var i=0; i<ind.length;i++){
  if(i!=0){
  sql+=",";
}
sql+="'";
sql+=ind[i];
sql+="' ";

}
sql+=");"



$.ajax({
            url:"insertTable.php",
            type:"POST",
            data:{sql:sql},
            success: function (data) {
                if(data==1){
                 
                  window.location.href = "AdminOpenTable.php?name="+table;
                   
                }
                else{
                 alert("Something went wrong");
                }
                
            } });




  })})
 </script>
     <script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }


</script>
    <?php 
    ?> 
  
    </body>
</html>