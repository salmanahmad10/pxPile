Roll no : FA-17/BSCS/082,FA-17/BSCS/069

Read me file
project consist of following directories
-IMAGES

-INCLUDES
  -db.php
  -footer.php
  -header.php
  -header2.php
  -postUploadForm.php
  -sidebar.php
  -sign-in-form.php
  -sign-up-form.php
  -signIn-signUp.php
  -uploads.php

-SCRIPTS
  -commentSubmitStyle.js
  -modalForm.js
  -modalImage.js
  -sidebar.js`

-UPLOADS

-VIEWS
  -about.php
  -logout.php
  -signin.php
  -contact.php
  -signup.php

-INDEX.PHP
------------------------------------------------------------------------------------------------------------------------------
IMAGES Folder:
Images folder contains all the images that is used in the website

INCLUDES Folder:
Includes folder contains the all the resuable files which are used multiple times in the website.
  -db.php:
	db.php files contains the connction to phpmyadmin database.it is used in everyfile where database connction is required.
  -footer.php:
	footer.php contains the footer of website which is used in almost everypage
  -header.php:
	header.php is default header opf website when user is not signed in.
  -header2.php:
	header2.php is the header when user signs into the website.
  -postUploadForm.php:
	this form handles the post upload and submission. it appears on the first page when user signs in
  -sidebar.php
	sidebar.php is the sidebar of front page of the website
  -sign-in-form.php:
	sign-in form is the form which is used by user to sign in.this page submits the data to index.php
  -sign-up-form.php:
	sign-up form is the form which is used by user to sign up.this page submits the data to index.php
  -signinsignup.php:
	this file shows sign in and sign up button when userr is not signed in
  -uploads.php
	this file is responsible for uploading of images

SCRIPTS folder:
this folder contains all the scripts responisble for running the js on the website.
  -commentSubmitStyle.js
	this js script is responsible for show/hide comment box 
  -modalForm.js
	this script makes a modal behind signup and sign in form
  -modalImage.js
	this script is responsible for making a modal behind image when clicked
  -sidebar.js
	this script is responsible for the sidebar
	
STYLES folder:
contains styles.css library responsible for all the styles on the website

UPLOADS Folder:
this folder serves as the server location for storing images.

VIEWS Folder: 
contains all the webpages of the website
  -about.php
	about.php shows the about section of website creaters
  -contactus.php
	responsible for handling any queries or suggestion regarding website
  -logout.php
	logs out the user from current session
  -signin.php
	signs user into the website and rediects the user to index page.contains all the queries regarding website signin
  -signup.php
	signs up the user and redirects the user back to index.contains all the queries regarding website signup

NOTE: use database file from database folder. Import Px_pile.sql from database folder into phpmyadmin to run this website
