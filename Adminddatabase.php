<?php 
include('navadmin.php');
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
    <div class="row">

<div class="col-md-3 ml-8">
<!-- <h1 style="color:rgb(6, 94, 145); font-family: Alice; padding:0 2rem;  font-size: 48px;">Sign In</h1> -->
</div>

<div class="col-md-4 ml-5;" style="background-color:white; width:90vh; margin:7rem 2rem; box-shadow:2px 2px 10px rgba(43, 42, 42, 0.445);color:rgb(6, 94, 145) ;padding:0 2rem "> 
<a href="AdminCreateTable.php"  style="text-decoration:none"><button class="Button Button-one"  id="btn2" class="btn btn-primary" >Create a new table</button></a>

<?php
$dbname="project";
$sql = "SHOW TABLES FROM $dbname";
$result = $conn->query($sql);

// Check if any tables were found
if ($result->num_rows > 0) {
    // Loop through each table name and display it
    while($row = $result->fetch_assoc()) {
        $name= $row["Tables_in_$dbname"];
 
?>
<a href="AdminOpenTable.php?name=<?php echo $name?>" style="text-decoration:none"><button class="Button Button-one direct"   class="btn btn-primary" ><?php echo $name?></button><a>
<?php
    }
}
?>






<br>
</div></div>
</div>
    </body>
</html>
<script src="jquery.js"></script>
<script>

</script>
<script>
    var preloader= document.getElementById('loading');
    function myFunction(){
        preloader.style.display='none';
    }
</script>
<!-- Footer -->
</div></div>
</div>

</body></html>