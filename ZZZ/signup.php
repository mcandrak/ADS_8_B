<?php 
	include "connect.php";
	$x = new func_sql;

	session_start();
	
	if (isset($_POST['register']) )
	{
		$admin_nm = $_POST['admin_nm'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$pass = md5($password);

    //count_data("admin", "%");
    // count_data("admin", "%");

		if ($sql = $x -> count_data("admin", "admin_nm = '$admin_nm'") ==0) {
			if ($sql = $x -> con()->query("INSERT INTO admin values ('1','$admin_nm', '$email', '$pass' , '$password')")) {
				echo "<script type='text/javascript'>alert('register $admin_nm sukses'); document.location ='login.php';</script>";
			}
			else
			{
				echo "<script type='text/javascript'>alert('register $admin_nm gagal'); document.location ='signup.php';</script>";
			}
		}
		else
		{
			echo "<script type='text/javascript'>alert('gunakan username yang lain'); document.location ='signup.php';</script>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <nav class="green" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo center"><img src="a.png"></a>
    </div>
  </nav>
  <br><br><br>
      <div class="container">
    	<div class="row">
    		<form action="" method="POST" class="col s6 push-s3">
      			<div class="row">
      				<div><center><h3 class="center green-text">MONITORING LANSIA</h3></center></div>
       	 			<div class="input-field col s12">
          				<input id="admin_nm" type="text" name="admin_nm" class="validate" required>
          				<label for="admin_nm " data-error="wrong" data-success="right">Username</label>
        			</div>
        			<div class="input-field col s12">
          				<input id="email" type="email" name="email" class="validate" required>
          				<label for="email" data-error="wrong" data-success="right">email</label>
        			</div>
        			<div class="input-field col s12">
          				<input id="password" type="password" name="password" class="validate" required>
          				<label for="password" data-error="wrong" data-success="right">Password</label>
        			</div>
              <center>
                <a class="waves-effect waves-light btn green darken-4"><input type="submit" name="register" value="signup" /></a>
                <center><p class="center black-text"> Already have account ? <a href="login.php">Log In</a></p></center>
              </center>
        			
        			
      			</div>
    		</form>
  		</div>
  	</div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    </body></html>