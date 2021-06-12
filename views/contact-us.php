<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Contact us</title>
    <link rel="stylesheet" href="../styles/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Manjari&display=swap"
      rel="stylesheet"
    />
  </head>
  <style>
    * {
      overflow: hidden;
    }
    .about-us-bottom-right {
      position: absolute;
      bottom: 8px;
      right: 16px;
    }
    form {
      position: relative;
      top: 10%;
    }
    .feedback-form {
      position: relative;
      top: 100%;
    }
  </style>
  <body>
    <header>
      <h1>
        Px Pile
      </h1>
      <img src="images/logo/pxPileLogo.png" height="100px" alt="" />
      <nav>
        <li><a href="../index.php">home</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="contact-us.php">contact us</a></li>
      </nav>
    </header>
    <section>
      <div
        class="background-image"
        style="
          background: rgb(255, 206, 68);
          background: linear-gradient(
            90deg,
            rgba(255, 206, 68, 1) 0%,
            rgba(76, 139, 245, 1) 100%
          );
        "
      ></div>

      <form
        class="modal-form-content feedback-form"
        style="color: black;"
        action="contact-us.html"
      >
        <div class="container">
          <h1>Send us your feedback</h1>
          <hr />
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" required />

          <label for="message"><b>Your feedback</b></label
          ><br />
          <textarea
            id="text-area"
            rows="10"
            cols="200"
            style="border: none; box-sizing: border-box; font-size: 20px;"
            placeholder="type here"
          ></textarea>

          <div class="clearfix">
            <button type="submit" class="signupbtn">Submit</button>
          </div>
        </div>
      </form>
    </section>
  </body>
</html>
