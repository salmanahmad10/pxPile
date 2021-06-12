<?php include_once "../includes/db.php"; ?>
<?php
session_start();
if(!empty($_SESSION)){

if($_SESSION['logedIn']==TRUE){
    print_r($_SESSION);
    $userId=$_SESSION['userId'];
    $con=db_create_connection();
    $target_dir = "../uploads/";
    $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
    print($target_file);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if(isset($_POST["submit-btn"])) {
    
    }
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
   
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
    }
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
     } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $imageaddress=substr($target_file,3);    
        

            $postDiscription=$_POST['post-discription'];
            $tags=explode("#",$postDiscription);
            $imageTags=$tags[1];
            $query="insert into posts(user_id,post_description,post_image,post_tag) values('$userId','$postDiscription','$imageaddress','$imageTags')";
            $rs=mysqli_query($con,$query) or die("Could Not Perform the Query");
            echo "image uploaded";
            header("Location: ../index.php");
            exit();
        } else {
        echo "Sorry, there was an error uploading your file.";
        header("Location: ../index.php");
            exit();
        }

    }
}
}

?>