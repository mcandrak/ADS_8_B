<?php 
	include "connect.php";
	$x = new func_sql;

	session_start();
	
	if (isset($_POST['admin_nm']) and isset($_POST['password']))
	{
		$admin_nm = $_POST['admin_nm'];
		$password = $_POST['password'];
    $pass = md5($password);

		$res=$x -> con()-> query("SELECT * FROM `admin` WHERE admin_nm='$admin_nm' and password='$pass'"); 
		
		if($res ->fetch(PDO::FETCH_ASSOC) !=0)
		{
			$_SESSION['admin_nm'] = $admin_nm;
      if ($_SESSION['admin_nm'] == 'admin') 
      {
          echo "<script type='text/javascript'> document.location ='admin.php';</script>";
      }
      elseif ($_SESSION['admin_nm'] == 'perawat') 
      {
          echo "<script type='text/javascript'> document.location ='perawat.php';</script>";
      }
      else
      {
          echo "<script type='text/javascript'> document.location ='index.php';</script>";
      }
		}
		else
		{
			echo "<script type='text/javascript'>alert('LOGIN GAGAL'); document.location ='login.php';</script>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
  <nav class="green" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo center"><img src="a.png"></a>
    </div>
  </nav>
  <br>
  <br>
  <br>
      <div class="container">
    	<div class="row">
    		<form action="" method="POST" class="col s6 push-s3">
      			<div class="row">
      				<div><center><h2 class="center green-text"><strong>MONITORING LANSIA</strong></h2></center></div>
       	 			<div class="input-field col s12">
          				<input id="admin_nm" type="text" name="admin_nm" lenght="12" class="validate" required>
          				<label for="admin_nm" data-error="wrong" data-success="right">username</label>
        			</div>
        			<div class="input-field col s12">
          				<input id="password" type="password" name="password" class="validate" required>
          				<label for="password" data-error="wrong" data-success="right">Password</label>
        			</div>
              <center>
                <a class="waves-effect waves-light btn green darken-4"><input type="submit" name="submit" value="Login" /></a>              
              </center>
        			
      			</div>
    		</form>
  		</div>
  	</div>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    </body></html>