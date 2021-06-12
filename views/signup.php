<?php include_once "../includes/db.php" ?>;

<?php
if (isset($_POST['submit-btn'])){
    $con=db_create_connection();
    $username = mysqli_real_escape_string($con, $_POST["username"]);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_1 = mysqli_real_escape_string($con, $_POST['psw']);
    $password_2 = mysqli_real_escape_string($con, $_POST['psw-repeat']);
    print_r($_POST);
    
    $rs=mysqli_query($con,"select * from users where user_email='$email'");
    if (mysqli_num_rows($rs)>0)
    {
      echo "<script>alert('account already exists')</script>";
     
      header("Location: ../index.php");
      exit();
    }
    $query="insert into users(user_email,user_username,user_password) values('$email','$username','$password_1')";
    $rs=mysqli_query($con,$query) or die("Could Not Perform the Query");
    echo "<script>alert('account created successfully')</script>";
   

    $con->close();
}


header("Location: ../index.php");
exit();

?>