<?php
    session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
  <title>Featured - Acadian</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
</head>
<body>
  <div class="navbar-fixed">
  <!-- dropdown container -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#">About Us</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  <!-- end dropdown -->
    <nav class="green" role="navigation">
      <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><img src="img/a.png"></a>
      <ul class="right hide-on-med-and-down">
        
        <?php
            if(isset($_SESSION['username']))
            {?>
                <li><i class="material-icons right"><img src="img/ic_search_white.png"></i></li>
                <li>
                  <input class="search" type="search" required>
                </li>
                <li><a href="#" >Welcome <?php echo $_SESSION['username'];?> </a> </li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Menu<i class="material-icons right"><img src="img/ic_arrow_drop_down_black_24dp.png"></i></a></li>
                
            <?php
            }
            else
            {?>
                <li><a class="waves-effect waves-light btn green darken-4" href="login.php">LOGIN</a></li>
                <li><a class="waves-effect waves-light btn blue darken-3" href="signup.php">SIGNUP</a></li>
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
                
                <li><a href="#"><img src="ic_sentiment_very_satisfied_black_18dp.png"> About Us</a></li>
                <li><a href="logout.php"><img src="img/ic_sentiment_very_satisfied_black_18dp.png"> Logout</a></li>
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

  <!-- qwertyuio -->
  <!-- banner -->
  <div id="index-banner">
    <div class="section no-pad-bot" >
      <div class="container">
        <h2 class="center green-text"><strong> T R A D I T I O N A L </strong></h2>
        <!-- gambar rumah -->
        <center><img src="img/traditional/2.jpg"></center>
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
          <h1 class="green-text center">DESCRIPTION</h1>
          <h5 class="center light flow-text"> T r a d i t i o n a l </h5>
          <p>
		Rencana 73328HS - Menengah Craftsman Delight
2712
HEATED S.F.
 4 +
TEMPAT TIDUR
 4 +
BATHS
 2
LANTAI
 3
GARASI MOBIL
Tentang Rencana ini
Semua fitur terbaik telah dimasukkan ke dalam rencana rumah menengah Craftsman indah ini.
Mulailah dengan langit-langit nampan di foyer besar yang terbuka untuk ruang makan dan kemudian pindah ke studi tenang untuk ibu atau ayah.
Daerah informal yang besar di belakang memiliki tata letak terbuka yang indah sehingga anggota keluarga semua bisa bersama-sama sambil makan, memasak dan santai.
Pemilik rumah akan menghargai berjalan-dalam mantel lemari besar dari ruang lumpur, sempurna untuk keluarga besar.
Ruang utilitas cukup besar untuk ganda sebagai ruang hobi.
Menakjubkan master suite di lantai dua memiliki tempat duduk tepat oleh jendela tiga. Tiga kamar tidur lebih cocok dengan nyaman pada tingkat ini.
Menyelesaikan tingkat yang lebih rendah di waktu luang Anda dan mendapatkan ekstra kamar dan mandi ditambah daerah rec dan ruang keluarga dengan sudut perapian. Anda akan memiliki banyak penyimpanan di sini juga.
atap adalah desain truss dengan 08:12 lapangan utama.
PHOTO ALBUM: Lihat foto lainnya di Google+ dan Facebook album foto kami.
Atap lapangan utama adalah 08:12 dan Gables depan 11:12.
CATATAN: Hubungi kami jika membangun dalam radius 50 mil dari daerah Twin Cities di Minnesota, sebagai syarat dan ketentuan berlaku.

</p>
</div>
      </div>
	  <div id="test2" class="col s12">
        <div class="container">
          <h1 class="green-text center">SKETCH</h1>
          <h5 class="center light flow-text"> T r a d i t i o n a l </h5>
          <center><img src="img/traditional/3.gif"><center>
		  <center><img src="img/traditional/3_a.gif"><center>
		  <center><img src="img/traditional/3_b.gif"><center>
	  </div>
     </div>
	
      <div id="test4" class="col s12">
        <div class="row">
          <div class="container">
            <h1 class="green-text center">BUY FORM</h1>
            <h5 class="center light flow-text"> lengkapi data berikut untuk melakukan pembelian </h5>
            <div class="container">
              <div class="row">
                <form action="#" method="POST" class="col s6 push-s3">
                  <div class="row">
                    <div><center><h3></h3></center></div>
                      <div class="input-field col s6">
                        <input id="Firstname" type="text" name="Firstname" class="validate" required>
                        <label for="Firstname" data-error="wrong" data-success="right">F  ir s t - n a m e</label>
                      </div>
                      <div class="input-field col s6">
                        <input id="Lastname" type="text" name="Lastname" class="validate" required>
                        <label for="Lastname" data-error="wrong" data-success="right">L a s t - n a m e</label>
                      </div>
                      <div class="input-field col s12">
                        <br>
                        <label for="Gender">G e n d e r</label>
                        <p>
                          <input name="Gender" type="radio" id="Male" />
                          <label for="Male">Male</label>
                        </p>
                        <p>
                          <input name="Gender" type="radio" id="Female"  />
                          <label for="Female">Female</label>
                        </p>
                      </div>
                      <div class="input-field col s12">
                        <textarea id="textarea1" class="materialize-textarea"></textarea>
                        <label for="textarea1">A d d r e s s</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">T e l e p h o n e</label>
                      </div>
                      <div class="input-field col s12">
                        <label>B a n k</label>
                        <br>
                        <br>
                        <select class="browser-default">
                          <option value="" disabled selected>Choose your option</option>
                          <option value="1">BRI</option>
                          <option value="2">BCA</option>
                          <option value="3">BNI</option>
                          <option value="4">Mandiri</option>
                          <option value="5">BTN</option>
                        </select>
                      </div>
                      <button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <div id="test5" class="col s12">
        <div class="container">
          <h3 class="green-text center">BOUGHT</h3>
          <h5 class="center lighten-1 flow-text">informasi pembelian </h5>
        </div>
      </div>
    </div>
  </div>
  <!-- end tabs -->
  <br><br>
  <!-- footer -->
    <footer class="page-footer green darken-3">
          <div class="footer-copyright">
            <div class="container">
            Copyright © 2016 | Teknik Informatika UM. By Nella - Mahdiyya - Mei
            </div>
          </div>
    </footer>

  <!--  Scripts-->
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/init.js"></script>
  <script src="js/materialize.js"></script>
         
</body>
</html>