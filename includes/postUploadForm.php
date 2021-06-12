<form action="includes/uploads.php" enctype="multipart/form-data" method="POST">
        <div class="post-form">
          <div class="container">
          
          
            <label for="post-discription"></label>
            <textarea rows="6" cols="100"  placeholder="share your thoughts, use hashtag for better search" name="post-discription" required ></textarea>
            <label for="image"></label>
            <br>
            <input type="file"name="fileToUpload" id="fileToUpload" required>
        
            <div class="clearfix">
              <button type="submit" class="signupbtn" name="submit-btn">upload</button>
            </div>
          </div>
        </div>
      </form>