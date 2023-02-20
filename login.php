
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="img/95461.png"/>
    <link  rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div  class="d-flex justify-content-center align-items-center v-100"  >

    <form class="shadow  w-450 p-3   border border-primary   rounded"   action="actionlogin.php" method="post" autocomplete="off">
       
        <h4 class= " display-4 fs-1 ">Login Account</h4>
             <?php  if(isset($_GET['error'])) {?>
        <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error'];?>
        </div>
        <?php  }?>
        <div class="mb-3">
        <label  class="form-label">Username</label>
        <input type="text" class="form-control" name="uname"  value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" >
        </div>
        <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password"  class="form-control"  value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?> " name="password">
        </div>
        <div class="form-check  m-3" >
    <input class="form-check-input" type="checkbox"  name="remamber" <?php if(isset($_COOKIE["username"])) { ?> checked <?php } ?> >
     <label class="form-check-label"  >
        save information
     </label>
</div>
    <button type="submit" class="btn btn-primary">login</button>
    <a  class="ms-3"link href="index.php">sign-up</a>
</form>
    </div>
</body>
</html>