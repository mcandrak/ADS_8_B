<?php
    session_start();

    if(isset($_SESSION['admin_nm']))

{ 
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
  <title>MONITORING LANSIA</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
</head>
<body>
  <div class="navbar-fixed">
  <!-- dropdown container -->
    <ul id="dropdown1" class="dropdown-content">
  <li><a class="green-text center" href="#Sold">Sold</a></li>
  <li><a class="green-text center" href="#Style">Style</a></li>
  <li><a class="green-text center" href="#Collection">Collection</a></li>
  <li><a class="green-text center" href="#Recently">Recently Sold</a></li>
  <li><a class="green-text center" href="#Most">Most Popular</a></li>
  <li><a class="green-text center" href="#About">About Us</a></li>
  <li><a class="green-text center" href="logout.php">Logout</a></li>
    </ul>
  <!-- end dropdown -->
    <nav class="green" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><img src="a.png"></a>
      <ul class="right hide-on-med-and-down">
        
                <li><i class="material-icons right"><img src="img/ic_search_white.png"></i></li>
                <li>
                  <input class="search" type="search" required>
                </li>
                <li><a style="font-weight: bold;" href="#" >Welcome <?php echo $_SESSION['admin_nm'];?> </a> </li>
                <li><a class="dropdown-button" style="font-weight: bold;" href="#!" data-activates="dropdown1">M E N U</a></li>
           
        
      </ul>
      <ul id="nav-mobile" class="side-nav">
         <?php
            if(isset($_SESSION['admin_nm']))
            {?>
                <li>
                    <div class="userView">
                        <img class="background" src="img/vacation/fet.jpg">
                        <img class="circle" src="img/h.jpg">
                        <span class="white-text name" style="font-weight : bold">Welcome <?php echo $_SESSION['admin_nm'];?> </span>
                        <span class="white-text email" style="font-weight : bold">UserEmail@gmail.com</span>
                    </div>
                </li>
                <li><a class="green-text darken-3" href="#Sold"><i><img src="sell.png"></i> Buy Now</a></li>
                <li><a class="green-text" href="#Style"><i><img src="in.png"></i> Style</a></li>
                <hr>
                <li><a class="green-text" href="#Collection"><i><img src="koleksi.gif"></i> Collection</a></li>
                <li><a class="green-text" href="#Recently"><i><img src="icon-rating.png"></i> Recently Sold</a></li>
                <hr>
                <li><a class="green-text" href="#Most"><i><img src="favorit.png"></i> Most Popular</a></li>
                <li><a class="green-text" href="#About"><i><img src="about.png"></i> About Us</a></li>
                <hr>
                <li><a class="green-text" href="logout.php"><i><img src="logout.png"></i>Logout</a></li>
            <?php
            }
            else
            {?>
                <li>
                    <div class="userView">
                        <img class="background" src="img/background3.jpg">
                        <img class="circle" src="img/background2.jpg">
                        <br>
                        <br>
                    </div>
                </li>
                <li><a href="login.php"><i><img src="login-icon.png"></i> Login</a></li>
                <hr>
                <li><a href="signup.php"><i><img src="register.png"></i> Signup</a></li>
            <?php
            }
            ?>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i><img src="ic_menu_black_36dp.png"></i></a>
    </div>
    </nav>
  </div>
  <!-- banner -->
  <div id="" >
    <div class="container" >
      <div class="" >
   <!-- slideshow -->
		<div class="slider fullscreen">
		<ul class="slides">
      <li>
        <img src="img/slider/1.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h1>Welcome!</h1>
          <h3 class="light grey-text text-lighten-3">Here's our web for your Dream Home.</h3>
        </div>
      </li>
      <li>
        <img src="img/slider/2.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h1>Choose!</h1>
          <h3 class="light grey-text text-lighten-3">There are many feature for you</h3>
        </div>
      </li>
      <li>
        <img src="img/slider/3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h1>See our collection!</h1>
          <h3 class="light grey-text text-lighten-3">There are many modern properties for your sweet home</h3>
        </div>
      </li>
	    <li>
        <img src="img/slider/5.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h1>You ...</h1>
          <h3 class="light grey-text text-lighten-3">Don't forget to see Popular Home Style </h3>
        </div>
      </li>
	    <li>
        <img src="img/slider/4.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h1>Okay!</h1>
          <h3 class="light grey-text text-lighten-3">Let's enjoy and find your Dream Home ...</h3>
        </div>
      </li>
    </ul>
  </div>
        <!-- end slideshow -->
        <br><br>
      </div>
    </div>
    </div>
  <!-- end banner -->
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <!-- section 1 -->
    <div class="container">
    <div class="section no-pad-bot">
      <div class="container" >
      <h3 class="center green-text"> O u r - H o m e</h3>
      <p class="grey-text text-darken-3" align="justify" >Di Sini kami membantu Anda menemukan rumah impian Anda, serta menyediakan Fitur yang semakin mempermudah Anda dalam menentukan Rumah impian Anda. Halaman kami akan sangat mempermudah Anda karena setalah registrasi di sini Anda dapat menyimpan dan membandingkan rumah-rumah yang menurut anda menarik . Kami menawarkan lebih dari seribu desain rumah yang bisa Anda pilih seperti Rumah minimalis, craftman, bungalow dan masih banyak lagi. Ayo mulai temukan kriteria rumah impianmu</p>
    </div> 
    </div>
  </div>
  <br>
    <div  id="Sold" class="container green" style="width : 100%; border-radius : 10px;">
      <br><br>
    </div>
  <!-- section 2 -->

  
  <!-- end section 2 -->

  <!-- section 3 -->
    
  <!-- end section 3 -->

  <!-- section 4 -->
   
  <!-- end section 4 -->

  <!-- section 5 -->
   
  <!-- end section 5 -->
  
   <!-- section 6 -->
    
  <!-- end section 6 -->
  
  <!-- section 7 -->
  <!-- end section 7 -->

  <!-- section 8 -->
    
  <!-- end section 8 -->

  <!-- footer -->
    <footer class="page-footer green darken-3">
          <div class="container">
            <div class="row">
              <div class="col l4 offset-6 s6">
                <h5 class="white-text">Home</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#Featured">Featured</a></li>
                  <li><a class="grey-text text-lighten-3" href="#Style">Style</a></li>
                  <li><a class="grey-text text-lighten-3" href="#Collection">Collection</a></li>
                  <li><a class="grey-text text-lighten-3" href="#Recently">Recently Sold</a></li>
                  <li><a class="grey-text text-lighten-3" href="#Most">Most Popular</a></li>
                </ul>
              </div>
              <div class="col l4 offset-6 s6">
                <h5 class="white-text">Help</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Malang - Universitas Negeri Malang</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">(+62)85-1234566778899</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">FAQ</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Contact Us</a></li>
                </ul>
              </div>
              <div class="col l4 offset-6 s6">
                <h5 class="white-text">About Us</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Our Story</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Pricing</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Testimonials</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Terms</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <center>Copyright &copy 2016 | Teknik Informatika - TE - UM. By Nella - Mahdiyya - Mei</center>
            </div>
          </div>
    </footer>

  <!--  Scripts-->
  <script src="js/carousel.js"></script>
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/init.js"></script>
  <script src="js/materialize.js"></script>
  <script>
  $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.carousel').carousel();
    });
  </script>
         
</body>
</html>

<?php
 }
    else      
    { 
        echo "<script type='text/javascript'> document.location ='login.php';</script>";
    }
?>
