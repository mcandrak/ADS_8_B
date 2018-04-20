<?php
    session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  
  <title>Featured - Craftsman</title>
  
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
                <li><a href="signup.php"><i><img src="register.png"></i> Signup</a></li>
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
        <h2 class="center green-text"><strong>C R A F T S M A N </strong></h2>
        <!-- gambar rumah -->
        <center><img src="img/craftsman/2.jpg"></center>
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
          <h5 class="center light flow-text"> C r a f t s m a n</h5>
          <p align="center">Rumah ID 54202HU - Expandable Master Suite A Plus
            <br>Tempat Tidur : 3 ruang
            <br>Kamar Mandi : 2 ruang
            <br>Lantai : 2
            <br>+ Garasi Mobil
            <br>
            <br>Tentang Rumah - C r a f t s m a n 
          </p>
          <p align="justify">
              Ruang berkubah - "foyer", ruang tamu & ruang makan, dan dapur - dengan volume setiap ruang berukuran besar untuk kenyamanan setiap ruang kamar tidur.
              Memiliki banyak jendela dengan tujuan memaksimalkan pandangan dan mendapatkan cahaya alami. Atap ruang "foyer" akan membawa cahaya tambahan ke dalam ruang makan dan dapur.
              Lebar lorong dan pintu membuat arus aktifitas mudah. Ruang "foyer" memiliki desain fleksibel yang sempurna untuk ruang kerja atau kantor rumah.
              Dapur ini dirancang untuk efisiensi dan estetika. Bantu pulau besar dalam persiapan makanan, penyimpanan tambahan dan memungkinkan untuk tempat duduk yang baik. Ada baik lemari dapur dan lemari dapur yang luas.
              Rumah ini memiliki jendela di dua sisi. Kamar mandi ruang ini memiliki ukuran yang ekstra luas. Tata letak master bath opsional memberikan ruang lebih plus lebih besar walk-in closet.
              Lantai dua memiliki seluruh ruang besar yang sempurna untuk ruang berkumpul.
              Garasi memiliki lebar ruang yang dapat menampung 2 mobil dengan 10'-lebar pintu 8'-tinggi.
              Anda akan mendapatkan ruang bonus yang belum selesai di atas garasi untuk ruang yang ingin Anda desain sesuai keinginan Anda.
          </p>
        </div>
      </div>
      <div id="test2" class="col s12">
          <div class="container">
              <h3 class="green-text center">SKETCH</h3>
              <h5 class="center light flow-text"> C r a f t s m a n</h5><br><br>
              <div class="row">
                  <div class="col s6">
                      <center><img class="materialboxed col s12" data-caption="rumah sederhana" src="img/contemporary/3_0.gif"></center>
                  </div>
                  <div class="col s6">
                      <center><img class="materialboxed col s12" data-caption="rumah sederhana" src="img/craftsman/4.gif"></center>
                  </div>
              </div>
              <div class="row">
                  <div class="col s6">
                      <center><img class="materialboxed col s12" data-caption="rumah sederhana" src="img/craftsman/5.gif"></center>
                  </div>
                  <div class="col s6">
                      <center><img class="materialboxed col s12" data-caption="rumah sederhana" src="img/craftsman/6.gif"></center>
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
                  <img src="img/craftsman/18245be_Great_1479193321.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/craftsman/BE_9_frontdoor_1479215497.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/craftsman/BE_10_kitchen_1479215497.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/craftsman/be-011-openfloorplan_1479193318.jpg"> <!-- random image -->
                </li>
                <li>
                  <img src="img/craftsman/be-015-office_1479193319.jpg"> <!-- random image -->
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
          <h6 class="center lighten-1 flow-text">For Craftsman</h6>
          <div class="row" >
              <div class="col s8 push-s4">
                <h6>
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
                </h6>
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