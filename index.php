<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="icon" type="image/png" href="img/3293466.png"/>
    <!-- css link here -->
    <link  rel="stylesheet" href="style.css">
    <!-- bootstrap link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div  class="d-flex justify-content-center align-items-center v-100"  >
     <form class="shadow  w-450 p-3 border border-primary   rounded"   action="action.php" method="post"  autocomplete="off
     "   enctype="multipart/form-data">
          <h4 class= " display-4 fs-1 ">Create Account</h4>
              <?php  if(isset($_GET['error'])) {?>
              <div class="alert alert-danger" role="alert">
              <?php echo $_GET['error'];?>
              </div>
              <?php  }?>
        <?php  if(isset($_GET['success'])) {?>
        <div class="alert alert-success" role="alert">
              <?php echo $_GET['success'];?>
        </div>
        <?php  }?>
        <div class="mb-3">
        <label  class="form-label">Full-name</label>
        <input type="text" class="form-control" name="fname" value="<?php echo (isset($_GET['fname']))?$_GET['fname']:
        ""?>">
        </div>
        <div class="mb-3">
        <label  class="form-label">Username</label>
        <input type="text" class="form-control" name="uname"  value="<?php echo (isset($_GET['fname']))?$_GET['fname']:
        ""?>">
        </div>
        <div class="mb-3">
        <label  class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
        </div>
        <label  class="form-label ">Upload File</label>
        <input  type="file" class="form-control m-2"  name="uploadfile" accept=".png,.gif,.jpg,.webp" required>
  
    <button type="submit" class="btn btn-primary  ">Signup</button>
    <a link href="login.php">Login</a>
</form>
    </div>
</body>
</html>