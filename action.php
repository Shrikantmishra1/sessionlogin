<?php 
//   session_start();
//   echo $_SESSION['fname']=$_POST['fname'];
//   echo $_SESSION['username']=$_POST['uname'];
//   echo $_SESSION['password']=$_POST['password'];
 
  
if (isset(($_POST['fname']))&& isset(($_POST['uname'])) && isset(($_POST['password']))&&isset(($_FILES['uploadfile']))){
            include('db_connection.php');
           $fname=$_POST['fname'];
           $uname=$_POST['uname'];
           $password=md5($_POST['password']);
          
           $dir="upload/";
           $image=$_FILES['uploadfile']['name'];
           $temp_name=$_FILES['uploadfile']['tmp_name'];
        
           if($image!="")
           {
               if(file_exists($dir.$image))
               {
                   $image= time().'_'.$image;
               }
               $fdir= $dir.$image;
               move_uploaded_file($temp_name, $fdir);
           }
           {
            $sql="SELECT * FROM  users WHERE uname ='$uname'";
            $result= $conn->query($sql);
            if ($result->num_rows > 0) {
              $err="this username is alerady exist.. please try another";
              header("location:index.php?error=$err& $data");
          }
         }

           if (empty($fname)){
                    $err="full name is required";
                    header("location:index.php?error=$err& $data");
                    exit;
           }
           elseif (empty($uname)){
            $err="username name is required";
            header("location:index.php?error=$err& $data");
            exit;
           }
           elseif (empty($password)){
            $err="password is required";
            header("location:index.php?error= $err& $data");
            exit;
           }
           elseif (empty($image)){
            $err="image is required";
            header("location:index.php?error= $err& $data");
            exit;
           }
           
           else{
               
              
              $sql="INSERT INTO users(fname,uname,password,file) VALUES('$fname','$uname','$password','$image')";
              if ($conn->query($sql) === TRUE) {
                echo " record created successfully";
                header("location:index.php?success=your record created successfully");
                exit;
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
           }
     


}else{
    header("location:index.php?error=error");
    exit;
}

?>