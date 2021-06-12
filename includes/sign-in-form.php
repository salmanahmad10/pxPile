<?php include_once "includes/db.php" ?>;

<div id="id02" class="modal-form">
      <span
        onclick="document.getElementById('id02').style.display='none'"
        class="close"
        title="Close Modal"
        >&times;</span
      >
      <form class="modal-form-content" method="post" action="views/signin.php">
        <div class="container">
          <h1>Sign Iin</h1>
          <p>Please fill in this form to create an account.</p>
          <hr />
          <label for="email"><b>Email</b></label>
          <input
            type="text"
            placeholder="Enter Email"
            name="email"
            required
          />

          <label for="psw"><b>Password</b></label>
          <input
            type="password"
            placeholder="Enter Password"
            name="psw"
            required
          />

          <label>
            <input
              type="checkbox"
              checked="checked"
              name="remember"
              style="margin-bottom: 15px;"
            />
            Remember me
          </label>
          <div class="clearfix">
            <button
              type="button"
              onclick="document.getElementById('id02').style.display='none'"
              class="cancelbtn"
            >
              Cancel
            </button>
            <button type="submit" class="signInbtn" name="signin-btn">Sign in</button>
          </div>
        </div>
      </form>
    </div>