
<?php
session_start();
ini_set('display_errors', 0);
if($_SESSION["salah"] >= 3){
echo "<script>alert('Anda Diblokir'); window.location = ('error.php')</script>";
    exit();
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tugas2</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/floating-labels.css">
        <script src="assets/sweetalert2/dist/sweetalert2.js"></script>
        <link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>
   </head>
    <body background="assets/image/uty.jpg">
        <div class="container" style="height: auto; width: 500px">
        <form id="frm01" name="frm01" method="POST" action="login.php" class="form-signin">
            <div class="text-center mb-4">
                <img class="mb-4" width="100" height="100" src="assets/image/image.png">
                <h1 style= "color: white" >Login</h1>
            <p style= "color: white">Silahkan Masuk</p>
          </div>
          <div class="form-group">
		<label style= "color: white">Username</label>
                <input class="form-control" name="username" id="username" type="user" placeholder="Username" autofocus="yes" autocomplete="no" required="">
	  </div>
	  <div class="form-group">
		<label style= "color: white">Password</label>
                <input class="form-control" name="Password" id="Password" type="password" placeholder="Password" required="">
	  </div>
            <div class="checkBox mb-4">
                <label style="color: white">
                  <input type="checkbox"> Remember me
              </label>
          </div>
          <a class="btn btn-lg btn-dark btn-block" type="submit" onclick="myfunction()" id="login" >Sign In</a>
           
        </form>
        </div>
    </body>
</html>

    
