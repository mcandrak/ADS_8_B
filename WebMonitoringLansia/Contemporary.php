<?php
    session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  
  <title>Featured - Contemporary</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
</head>
<body>
  <div class="navbar-fixed">
  <!-- dropdown container -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a class="green-text center" href="#About">About Us</a></li>
      <li><a class="green-text center" href="logout.php">Logout</a></li>
    </ul>
  <!-- end dropdown -->
    <nav class="green" role="navigation">
      <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><img src="a.png"></a>
      <ul class="right hide-on-med-and-down">
        <?php
            if(isset($_SESSION['username']))
            {?>
                <li><i class="material-icons right"><img src="img/ic_search_white.png"></i></li>
                <li>
                  <input class="search" type="search" required>
                </li>
                <li><a style="font-weight: bold;" href="#" >Welcome <?php echo $_SESSION['username'];?> </a> </li>
                <li><a class="dropdown-button" style="font-weight: bold;" href="#!" data-activates="dropdown1">M E N U</a></li>
                
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
                        <img class="background" src="img/vacation/fet.jpg">
                        <img class="circle" src="img/h.jpg">
                        <span class="white-text name" style="font-weight : bold">Welcome <?php echo $_SESSION['username'];?> </span>
                        <span class="white-text email" style="font-weight : bold">UserEmail@gmail.com</span>
                    </div>
                </li>
                
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
                <li><a href="signup.php"><i><img src="login-icon.png"></i> Signup</a></li>
            <?php
            }
            ?>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">
        <img src="ic_menu_black_36dp.png">
      </i></a>
      </div>
    </nav>
  </div>

  <!-- qwertyuio -->
  <!-- banner -->
  <div id="index-banner">
    <div class="section no-pad-bot" >
      <div class="container">
        <h2 class="center green-text"><strong>C O N T E M P O R A R Y </strong></h2>
        <!-- gambar rumah -->
        <center><img src="img/contemporary/2.jpg"></center>
        <!-- end gambar rumah -->
      </div>
    </div>
  </div>
  <!-- end banner -->
  <br><br>
  <!-- tabs -->
  <div class="row" id="tab1" class="scrollspy">
    <div class="container">
      <div class="col s12" style="border-top: 4px solid green;">
        <ul class="tabs">
          <li class="tab col s4"><a href="#test1" class="orange-text">DESCRIPTION</a></li>
          <li class="tab col s4"><a href="#test2" class="orange-text">SKETCH</a></li>
          <li class="tab col s4"><a href="#test3" class="orange-text">INTERIOR</a></li>
          <li class="tab col s4"><a href="#test4" class="orange-text">BUY FORM</a></li>
          <li class="tab col s4"><a href="#test5" class="orange-text">BOUGHT</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12">
        <div class="container">
          <h3 class="green-text center">DESCRIPTION</h3>
          <h5 class="center light flow-text"> C o n t e m p o r a r y</h5>
          <p align="center">Rumah ID 54202HU - Light Modern House
            <br>Tempat Tidur : 4 ruang
            <br>Kamar Mandi : 2 ruang
            <br>Lantai : 2
            <br>+ Garasi Mobil
            <br>
            <br>Tentang Rumah - C o n t e m p o r a r y 
          </p>
          <p align="justify">
              Desain kontemporer rumah indah ini akan menyenangkan Anda selama bertahun-tahun yang akan datang.
              Pada saat memasuki rumah Anda akan masuk dalam sebuah ruang besar berkubah dengan semua fentilasi kaca yang akan membuat cahaya masuk dalam rumah Anda sampai ke teras belakang.
              Dengan pemandangan ruang makan dan dapur ke satu sisi, tata letak terbuka membuat seluruh keluarga terhubung.
              Tiga kamar tidur di lantai satu termasuk master suite yang indah.
              Lantai dua memiliki sebuah studio ditambah ekstra kamar tidur dan kamar mandi.
              Pitches atap di rumah ini datar.
          </p>
        </div>
      </div>
      <div id="test2" class="col s12">
          <div class="container">
              <h3 class="green-text center">SKETCH</h3>
              <h5 class="center light flow-text"> C o n t e m p o r a r y</h5><br><br>
              <div class="row">
                  <div class="col s6">
                      <center><img class="materialboxed col s12" data-caption="rumah sederhana" src="img/contemporary/3_0.gif"></center>
                  </div>
                  <div class="col s6">
                      <center><img class="materialboxed col s12" data-caption="rumah sederhana" src="img/contemporary/3_1.gif"></center>
                  </div>
              </div>
          </div>
      </div>
      <div id="test3" class="col s12">
        <br>
        <br>
        <br>
        <br>
          <div class="container">
            <div class="slider">
              <ul class="slides">
                <li>
                  <img src="img/contemporary/48-54202hu_1479214692.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/contemporary/55-54202hu_1479214693.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/contemporary/58-54202hu_1479214694.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/contemporary/60-54202hu_1479214692.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/contemporary/73-54202hu_1479214692.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/contemporary/1346_Int_15_1479214690.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/contemporary/54202hu_8_1464972835_1479214690.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/contemporary/54202hu_5_1464972815_1479214691.jpg"> <!-- random image -->
                </li>
              </ul>
            </div>
          </div>
      </div>
      <div id="test4" class="col s12">
        <div class="row">
          <div class="container">
            <h3 class="green-text center">BUY FORM</h3>
            <h5 fclass="center light flow-text"><center>Lengkapi data berikut untuk melakukan pembelian</center> </h5>
            <div class="container">
              <div class="row">
              <?php
                if(isset($_SESSION['username']))
                {
              ?>
                <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST" class="col s6 push-s3">
                  <div class="row">
                    <div><center><h3></h3></center></div>
                    <div class="input-field col s6">
                      <input id="Firstname" type="text" name="Firstname" class="validate" required>
                        <label for="Firstname" data-error="wrong" data-success="right">F  i r s t-n a m e</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="Lastname" type="text" name="Lastname" class="validate" required>
                        <label for="Lastname" data-error="wrong" data-success="right">L a s t-n a m e</label>
                    </div>
                    <div class="input-field col s12">
                        <br>
                        <label for="Gender">G e n d e r</label>
                        <br>
                        <p>
                          <input name="Gender" type="radio" id="Male" value="Male" />
                          <label for="Male">Male</label>
                        </p>
                        <p>
                          <input name="Gender" type="radio" id="Female" value="Female" />
                          <label for="Female">Female</label>
                        </p>
                    </div>
                    <p> &nbsp;</p>
                    <div class="input-field col s12">
                        <textarea name="Addres" id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">A d d r e s s</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="Telp" id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">T e l e p h o n e</label>
                    </div>
                    <br>
                    <div class="input-field col s12">
                        <label>B a n k</label>
                        <br>
                        <br>
                        <select name="Bank" class="browser-default">
                          <option value="" disabled selected>Choose your option</option>
                          <option value="BRI" >BRI</option>
                          <option value="BCA" >BCA</option>
                          <option value="BNI" >BNI</option>
                          <option value="Mandiri">Mandiri</option>
                          <option value="BTN" >BTN</option>
                        </select>
                    </div>
                    <p > &nbsp;</p>
                    <div>
                      <center><button class="btn waves-effect waves-light green" type="submit" name="submit">Submit</button></center>
                    </div>
                  </div>
                </form>
              <?php
                }
                else
                {
              ?>
                <h3 class="green-text center"> you must login first</h3>
              <?php 
                }
              ?>                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="test5" class="col s12">
        <div class="container">
          <h3 class="green-text center">BOUGHT</h3>
          <h4 class="center lighten-1 flow-text">Customer detail </h4>
          <h6 class="center lighten-1 flow-text">For Contemporary</h6>
          <div class="row" >
              <div class="col s8 push-s4">
                
                  <ul style="list-style : none;" class="flow-text">
                    <?php 
                      if (isset($_POST['submit'])) 
                      {
                    ?>
              
                    <li class="green-text">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST['Firstname'] ; echo '&nbsp;'; echo $_POST['Lastname'] ;?></li>
                    <br>
                    <li class="green-text">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST['Gender'] ;?></li>
                    <br>
                    <li class="green-text">Adress&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST['Addres'] ;?></li>
                    <br>
                    <li class="green-text">Telp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST['Telp'] ;?></li>
                    <br>
                    <li class="green-text">Bank&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_POST['Bank'] ;?></li>
                
                    <?php
                      }
                      else
                      {
                    ?>
                    <li class="green-text center"><h5> You Haven't Fill The Buy Form </h5></li>
                    <?php
                      }
                    ?>
                  </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end tabs -->
  <br><br>
  <!-- footer -->
  <footer class="page-footer green darken-3">
    <div id="About" class="container">
      <center><h5 class="white-text">About Us</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Our Story</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Pricing</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Testimonials</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Terms</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Privacy Policy</a></li>
        </ul></center>
      </div>
      <div class="footer-copyright">
          <div class="container">
            <center>Copyright &copy 2016 | Teknik Informatika UM. By Nella - Mahdiyya - Mei</center>
          </div>
      </div>
  </footer>

  <!--  Scripts-->
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/init.js"></script>
  <script src="js/materialize.js"></script>
  <script>
  $(document).ready(function(){
      $('.slider').slider({full_width: true});
    });
        </script>
            
</body>
</html>