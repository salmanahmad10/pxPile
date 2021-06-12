<?php include_once "../includes/db.php"; ?>

<?php
if (isset($_POST['signin-btn'])){
    session_start();
    $con=db_create_connection();
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_1 = mysqli_real_escape_string($con, $_POST['psw']);

    $rs=mysqli_query($con,"select * from users where user_email='$email' and user_password='$password_1'");
    if (mysqli_num_rows($rs)>0)
    {
      echo "sign in successfull";
      $rs2=mysqli_query($con,"select * from users where user_email='$email'");
      $row = mysqli_fetch_assoc($rs2);
      $_SESSION['logedIn']=TRUE;
      $_SESSION['username']=$row['user_username'];
      $_SESSION['userId']=$row['user_id'];
      $_SESSION['email']=$email;
      $_SESSION['password']=$password_1;
      print_r($_SESSION);
      header("Location: ../index.php");
      exit();
    }
    else{
      header("Location: ../index.php");
      exit();
    }
}
    print_r($_POST);
    $con->close();
    
?>