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
        <h2 class="center green-text"><strong> V A C A T I O N </strong></h2>
        <!-- gambar rumah -->
        <center><img src="img/vacation/2.jpg"></center>
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
          <h5 class="center light flow-text"> V a c a t i o n </h5>
          <p>
		Rencana 26666GG - Populer Mountain Home Rencana
1662
HEATED S.F.
 2 +
TEMPAT TIDUR
 2 +
BATHS
 1
LANTAI
 2
GARASI MOBIL
Tentang Rencana ini
CLIENT FOTO: Lihat gambar versi modifikasi client-dibangun di North Carolina di album foto Google+ kami.
Jendela sudut, kaca runcing, kurung dan cedar sirap berpihak hanya beberapa rincian yang memberikan rencana rumah ini pesona gunung dan kasih karunia. Dengan pondok kuno yang merinci dan ruang terbuka yang cerah adalah gunung menawan rumah yang sempurna untuk liburan akhir pekan atau nesters kosong mundur.
The miring entri memberikan cukup ruang untuk keluar dari hujan. Sekali di dalam Anda akan menikmati langit-langit berkubah yang meluas melalui ruang tamu ke beranda.
Ruang tamu dipisahkan dari area foyer dengan tangga miring turun ke tingkat yang lebih rendah.
Daerah dapur dan makan terbuka untuk ruang tamu, dengan pulau dapur menghadap sisi tampilan rumah.
Sebuah ruang cuci terletak hanya dari dapur di mana selasar menghubungkan rumah ke carport terbuka.
Kamar tidur utama adalah nyaman dan nyaman dan termasuk mandi besar dan berjalan-dalam lemari bersama dengan akses pintu Prancis ke dek dan teras. Lantai utama juga menawarkan kamar tidur kedua dengan mandi dan berjalan-dalam lemari.
Tingkat yang lebih rendah dapat selesai dengan dua kamar tidur tambahan dan mandi, den / rec room dan home theater jika diinginkan.
Rencana ini dilengkapi dengan selasar melekat pada carport 2 mobil.
Rencana Terkait: Pindahkan perapian ruang tamu ke dinding belakang dan membangun secara terbalik dengan rencana rumah 26610GG (1.613 sq ft..).
Melampirkan garasi dengan rumah berencana 26693GG (lurus) dan 26694GG (siku).
Dapatkan sedikit lebih banyak ruang dengan rencana rumah 26695GG (1.754 sq. Ft.)

</p>
</div>
      </div>
	  
	<div id="test2" class="col s12">
        <div class="container">
          <h1 class="green-text center">SKETCH</h1>
          <h5 class="center light flow-text"> V a c a t i o n </h5>
          <center><img src="img/vacation/3.jpg"><center>
		  <center><img src="img/vacation/3_a.jpg"><center>
		  <center><img src="img/vacation/3_b.jpg"><center>
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