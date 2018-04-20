<?php
    session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
  <title>WeHome</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
</head>
<body>
  <div class="navbar-fixed">
 
    <nav class="green" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><img src="img/a.png"></a>
      <ul class="right hide-on-med-and-down">
        
        <?php
            if(isset($_SESSION['username']))
            {?>
                <li><a href="#" >Welcome <?php echo $_SESSION['username'];?> </a> </li>
                <li><a class="waves-effect waves-light btn green darken-3" href="logout.php">Logout</a></li>

            <?php
            }
            else
            {?>
                <li><a class="waves-effect waves-light btn green darken-3" href="login.php">LOGIN</a></li>
                <li><a class="waves-effect waves-light btn green lighten-2" href="signup.php">SIGNUP</a></li>
            <?php
            }
            ?>
        
      </ul>
      <ul id="nav-mobile" class="side-nav">
         <?php
            if(isset($_SESSION['username']))
            {?>
                <li>
                    <div class="userView">
                        <img class="background" src="img/home-quotes-tumblr-tumblr-static-tumblr-mbl6etsske1riwlm0o1-1280.jpg">
                        <img class="circle" src="popo.jpg">
                        <span class="white-text name" style="font-weight : bold">Welcome <?php echo $_SESSION['username'];?> </span>
                        <span class="white-text email" style="font-weight : bold">UserEmail@gmail.com</span>
                    </div>
                </li>
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
                <li><a href="login.php"><img src="ic_sentiment_very_satisfied_black_18dp.png"> Login</a></li>
                <li><a href="signup.php"><img src="ic_sentiment_very_satisfied_black_18dp.png"> Signup</a></li>
            <?php
            }
            ?>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">
        <img src="img/ic_menu_black_36dp.png">
      </i></a>
    </div>
    </nav>
  </div>

  <!-- menu admin -->
  <div class="container col s12 m3"><br/><br/>
              <h5 class="center light flow-text">Menu</h5>
              <ul class="collapsible" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header waves-effect waves-green">Transaction</div>
                  <div class="collapsible-body">
                    <br>
                    <div class="container"><a class="waves-effect waves-light btn green darken-3" href="#!">History</a></div>
                    <br>
                    <div class="container"><a class="waves-effect waves-light btn green darken-3" href="#!">In Chart</a></div>
                    <br>
                    <div class="container"><a class="waves-effect waves-light btn green darken-3" href="#!">Sold Out</a></div>
                    <br>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header waves-effect waves-green">Update</div>
                  <div class="collapsible-body">
                    <br>
                    <div class="container"><a class="waves-effect waves-light btn green darken-3" href="#!">Add List</a></div>
                    <br>
                    <div class="container"><a class="waves-effect waves-light btn green darken-3" href="#!">Delete From List</a></div>
                    <br>
                  </div>
                </li>
                <li>
                  <div class="collapsible-header waves-effect waves-green">User</div>
                  <div class="collapsible-body">
                    <br>
                    <div class="container"><a class="waves-effect waves-light btn green darken-3" href="#!">Most Active</a></div>
                    <br>
                  </div>
                </li>
              </ul>
            </div>
  

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
                <h5 class="white-text">About</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Our Story</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Pricing</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Testimonials</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Terms</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Copyright</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <center>Copyright © 2016 | Teknik Informatika UM. By Nella - Mahdiyya - Mei</center>
            </div>
          </div>
    </footer>

  <!--  Scripts-->
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/init.js"></script>
  <script src="js/materialize.js"></script>
         
</body>
</html>