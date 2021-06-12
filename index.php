<?php include_once "includes/db.php" ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Manjari&display=swap"
      rel="stylesheet"
    />

    <link 
    href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
    rel="stylesheet"  type='text/css'>

    <script type="text/javascript" src="scripts/modalImage.js"></script>
    <script type="text/javascript" src="scripts/modalForm.js"></script>
    <script src="scripts/commentSubmitStyle.js"></script>
    <script src="scripts/sidebar.js"></script>
    <title>Px Pile</title>
  </head>
  <body>
  <!--headers -->
  <?php 
    session_start();
    if(!empty($_SESSION)){
    if($_SESSION['logedIn']==TRUE){
      include 'includes/header2.php';
     
    }
  }
    else{
      include 'includes/header.php';
      
    
  }
?>
    <section class="hero">
      <div class="search">
        <input type="text" class="searchTerm" placeholder="search Images" />
      </div>
      <div
        class="background-image"
        style="background-image: url(images/indexImage.jpg); height: 100vh;"
      ></div>
      <div class="hero-content">

      <?php 
      if(!empty($_SESSION)){
        if($_SESSION['logedIn']){
          include 'includes/postUploadForm.php';
        }
     
      }else{
        echo '<h1>Px Pile</h1>
        <h2>Share your images</h2>';
      }
      ?>


        
        <?php 
    if(empty($_SESSION)){
        include 'includes\signInSignUp.php';
      }
    
      ?>
      </div>
    </section>
    <!-- sign  up form -->
    <?php include 'includes/sign-up-form.php'  ?>
    <!-- sign up form ends -->
    <!-- sign in form -->
    <?php include 'includes/sign-in-form.php'  ?>
    <!-- sign in form ends -->
    <div class="toggle-btn" onclick="toggleSidebar()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    
    <section>
    <!-- side bar  -->
    <?php include 'includes/sidebar.php' ?>
      <!-- image gallery -->
      <h1>Images from people around the world</h1>
      
      
      <div class="masonryHolder">
      <?php
        $con=db_create_connection();
        $rs=mysqli_query($con,"select * from posts");
        global $row;
        while($row = mysqli_fetch_array($rs))
        {
          //image info
          $imageAddress=$row['post_image'];
          $imageUser=$row['user_id'];
          $imageDiscription=$row['post_description'];

          $rs2=mysqli_query($con,"select * from users where user_id='imageUser'");
          global $row2;
          $row2 = mysqli_fetch_assoc($rs2);
          //userinfo
          $username=$row2['user_username'];
          $user_followers=$row2['user_followers'];

          echo '<div class="masonryBlocks">
          <img
            src="'.$imageAddress.'"
            onclick="openModal();currentSlide(1); hideOverflow();"
            class="hover-shadow"
          />
          '.$imageDiscription.'
        </div>';
        }
      ?>
      </div>
      
      <div id="myModal" class="modal">
      <?php
        $con=db_create_connection();
        $rs=mysqli_query($con,"select * from posts");
        global $row;
        while($row = mysqli_fetch_array($rs))
        {
          //image info
          $imageAddress=$row['post_image'];
          $imageUser=$row['user_id'];
          $imageDiscription=$row['post_description'];

          $rs2=mysqli_query($con,"select * from users where user_id='imageUser'");
          global $row2;
          $row2 = mysqli_fetch_assoc($rs2);
          //userinfo
          $username=$row2['user_username'];
          $user_followers=$row2['user_followers'];


          echo '<div class="imageUploader" style="position: absolute;left: 20px;top: 100px;">
          <img
            src="'.$imageAddress.'"
            style="height: 50px;"
            alt=""
            
          />
          <p>
            <h1>'.$username.'</h1>
            <h3> Followers :'.$user_followers.'</h3>
          </p>
          <p class="image-details" style="max-width: 400px;">image discription: 
            '.$imageDiscription.'
          </p>
        </div>';
        
        }
        ?>

        

        <span class="close cursor" onclick="closeModal();toggleCommentOff()">&times;</span>
        <div class="modal-content">
          
        <?php
        $con=db_create_connection();
        $rs=mysqli_query($con,"select * from posts");
        global $row;
        while($row = mysqli_fetch_array($rs))
        {
          //image info
          $imageAddress=$row['post_image'];
          
          $imageUser=$row['user_id'];
          $imageDiscription=$row['post_description'];

          $rs2=mysqli_query($con,"select * from users where user_id='imageUser'");
          global $row2;
          $row2 = mysqli_fetch_assoc($rs2);
          //userinfo
          $username=$row2['user_username'];
          $user_followers=$row2['user_followers'];

          echo '<div class="mySlides">
                    <img
          src="'.$imageAddress.'"
            style="width: 100%;"
          />
        </div>';
          
        }?>

          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <a class="icon" href="#"> <i class="fa fa-thumbs-up "></i></a>
        <a class="icon" href="#" onclick="toggleCommentOn()"> <i class="fa fa-comment"></i></a>
        <a class="icon" href="#"> <i class="fa fa-share"></i></a>
        <form action="/form/submit" method="POST" id="comment-box"> 
          <textarea cols="110" rows="5" ></textarea>
          <br>
          <input type="submit" name="submit" value="Send">
        </form>
      </div>
    </section>
    <!-- footer -->
    <?php include 'includes/footer.php';?>

  </body>
</html>
