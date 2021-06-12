<?php include_once "includes/db.php"; ?>
<?php 
 
  $username=$_SESSION['username'];
?>
<header>
      <h1>
        Px Pile
      </h1>
      <img src="images/logo/pxPileLogo.png" height="100px" alt="" />
      <nav>
         
         
        <div class="dropdown">
          <button class="dropbtn"><?php echo $username; ?></button>
          <div class="dropdown-content">
            <a href="#">Profile</a>
            <a href="#">setting</a>
            <a href="views/logout.php">logout</a>
          </div>
        </div>
        
      </nav>
    </header>