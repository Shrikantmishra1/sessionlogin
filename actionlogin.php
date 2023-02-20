<?php 
  session_start();
//   echo $_SESSION['fname']=$_POST['fname'];
//   echo $_SESSION['username']=$_POST['uname'];
//   echo $_SESSION['password']=$_POST['password'];

if (isset(($_POST['uname'])) && isset(($_POST['password']))){
            include('db_connection.php');
           $uname=$_POST['uname'];
           $password=md5($_POST['password']);
         
           $data='&uname='.$uname;

           if (empty($uname)){
            $err="username name is required";
            header("location:login.php?error=$err& $data");
            exit;
           }
           elseif (empty($password)){
            $err="password is required";
            header("locationlogin.php?error= $err& $data");
            exit;
           }
           else{
              $sql="SELECT * FROM  users WHERE uname ='$uname'";
              $result= $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $unamer=$row['uname'];
                    $userid=$row['id'];
                    $fname=$row['fname'];
                    $passwords=$row['password'];
                           $file    =$row['file'];
                    if($unamer ===$uname){
                        if ($passwords===$password){
                           $_SESSION['id']= $userid;
                           $_SESSION['fname']=$fname;  
                           $_SESSION['file']=$file;
                           header("location:home.php");
                            if(!empty($_POST['remamber'])){
                           setcookie("username",$unamer,time() + (86400 * 30),"/"); 
                           setcookie("password",$passwords,time() + (86400 * 30),"/");
                            }
                            else if(empty($_POST['remamber'])){
                              setcookie("username","",time() -(86400 * 30), "/"); 
                              setcookie("password","",time()- (86400 * 30), "/");
                            }
                                               
                          
                                                   
                            exit;
                       }else{
                            $err="password sometimes";
                            header("location:login.php?error= $err& $data");
                        }

                    }else{
                        $err="Invalid Details";
                        header("location:login.php?error= $err& $data");
                    }
                }
              } else{
                $err="Invalid Details";
                header("location:login.php?error= $err& $data");
              }
           }
     


}else{
    header("location:login.php?error=error");
    exit;
}

?>