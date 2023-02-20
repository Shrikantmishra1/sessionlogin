
<?php
session_start();
if(isset(($_SESSION['id']))&&isset(($_SESSION['fname']))){
      
      
?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="icon" type="image/png" href="img/95461.png"/>
    <link  rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

 
  <div  class="d-flex justify-content-center align-items-center v-100 "  >

    <div class="shadow  w-450  p-3  border border-primary"><br>

       <div class="image ">
   
     <img src="upload/<?php echo $_SESSION['file'];?>" class="rounded-circle  shadow" width="150" height="150" > </div>
       <h4 class="d-4 text-align-center mx-auto"> Welcome <?php echo $_SESSION['fname']?></h4>
        <a href="logout.php" class="btn btn-warning mx-auto">logout</a> 
     
   </div>
    </div>
   
</body>
</html>
<?php }?>