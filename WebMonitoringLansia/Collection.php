<?php
    session_start();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	
  <title>Collection</title>
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="css/slideshow.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
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
                
                <li><a href="#"><i><img src="about.png"></i> About Us</a></li>
                <hr>
                <li><a href="logout.php"><i><img src="logout.png"></i> Logout</a></li>
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
        <h2 class="center green-text"><strong> COLLECTION </strong></h2>
        <!-- gambar rumah -->
        <p align="center">Collection merupakan halaman koleksi properties kami mulai dari properties untuk Kamar Mandi, Dapur, Kamar Tidur, dan Ruang Tamu.
						  Anda dapat memilih koleksi kami untuk ruangan Anda apabila Anda ingin mengganti desain ruangan dari paket Rumah yang telah kami sediakan. </p>
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
          <li class="tab col s4"><a href="#test1" class="orange-text">RUANG TAMU</a></li>
		  <li class="tab col s4"><a href="#test2" class="orange-text">KAMAR TIDUR</a></li>
		  <li class="tab col s4"><a href="#test3" class="orange-text">DAPUR</a></li>
          <li class="tab col s4"><a href="#test4" class="orange-text">KAMAR MANDI</a></li>
        </ul>
      </div>
      <div id="test1" class="col s12">
        <div class="container">
          <h3 class="green-text center">RUANG TAMU</h3>
           <div class="row">
        <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
      <div class="card-image ">
			       <div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/tamu/1.jpg">
              <span class="card-title">B3650MN</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Ruang tamu dengan desain berwarna biru dengan paduan sofa yang minimanlis disertai warna bantal yang selaras dengan sofa. 
			  Desain ini akan membuat suasana nyaman.</p>
            </div>
          </div>
        </div>
		</div>
     
        <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/tamu/2.jpg">
              <span class="card-title">35B4071</span>
            </div></div>
            <div class="card-content">
              <p align="justify">Untuk ruang tamu dengan tipe 35B4071 memiliki desain sederhana namun terlihat mewah dengan sofa minimalis berwarna hijau
			  dipadu dengan warna tembok yang klasik.</p>
            </div>
          </div>
		  </div>
        </div>
		
		<div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card  animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/tamu/3.jpg">
              <span class="card-title">22N7656</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Ruang tamu ini cocok bagi Anda yang memiliki balita, dengan desain properti angka yang dipadukan dengan tembok yang didesain seakan tidak diwarnai.
			  Tata letak barang pada ruang tamu ini membuat suasana menyenangkan</p>
            </div>
          </div>
		  </div>
        </div>
		
	    <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card  animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/tamu/4.jpg">
              <span class="card-title">GH43N35</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Untuk Anda pencinta seni, kami menyediakan sebuah desain untuk ruang tamu dengan memanfaatkan gambar-gambar lucu
			  sebagai penghidup suasana ruang tamu Anda, disertai tembok yang didesain bermotif.</p>
            </div>
          </div>
		  </div>
        </div>
		
		<div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card  animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/tamu/5.jpg">
              <span class="card-title">24SG671</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Ruang tamu ini didesain untuk Anda yang menginginkan suasana tenang namun menyenangkan. 
			  Warna dinding polos dan sofa yang minimalis, disertai properti dinding yang membuat suasa lebih hidup.</p>
            </div>
          </div>
		  </div>
        </div>
		
		<div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/tamu/6.jpg">
              <span class="card-title">JSD1247</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Untuk Anda yang hobby dengan sesuatu yang klasik, kami menyediakan ruang tamu dengan desain yang tenang dan nyaman.
			  Dengan pemilihan motif dinding dan sofa, menambah daya indah ruang tamu Anda.</p>
            </div>
          </div>
		  </div>
        </div>
		
      </div>
	  
	  </div>
	  </div>
	  
            
	  <div id="test2" class="col s12">
		<div class="container">
		<h3 class="green-text center">KAMAR TIDUR</h3>
          <div class="row">
        <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/bedroom/4.jpg">
              <span class="card-title">KL2467</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Kamar tidur ini didesain dengan konsep sederhana namun terlihat mewah, dengan pemilihan
			  warna bed dan tembok yang selaras.</p>
            </div>
          </div>
        </div>
		</div>
     
        <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/bedroom/3.jpg">
              <span class="card-title">JK2495</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Untuk Anda yang ingin kamar tidur rapi dan elegan kami menyediakan sebuah desain
			  ruang yang luas dengan warna kamar yang selaras.</p>
            </div>
          </div>
		  </div>
        </div>
		
		<div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/bedroom/2.jpg">
              <span class="card-title">PP3549</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Kamar ini didesain untuk Anda yang menginginkan kamar tidur begaya mewah, dengan bentuk
			  jendela yang klasik menambah suasana kamar anda semakin mewah.</p>
            </div>
          </div>
		  </div>
        </div>
		
	    <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/bedroom/1.jpg">
              <span class="card-title">MNQ546</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Kamar ini didesain dengan konsep simple, dimana dalam kamar ini tersedia warna tempat tidur
			  yang berwarna biru yang membuat suasana tenang dan nyaman dipadu dengan motif dinding yang selaras.</p>
            </div>
          </div>
		  </div>
        </div>
		
      </div>
	</div>
	</div>
	 
      <div id="test3" class="col s12">
	  <div class="container">
		<h3 class="green-text center">DAPUR</h3>
          <div class="row">
        <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/dapur/1.jpg">
              <span class="card-title">7867NM</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Dapur dengan tipe ini didesain untuk Anda yang suka menyimpan banyak barang pada dapur.
			  Tata letak almari diperhatikan disini, agar dapur tetap terlihat rapi dan indah.</p>
            </div>
          </div>
        </div>
		</div>
     
        <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/dapur/2.jpg">
              <span class="card-title">23KL3R</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Dapur dengan tipe ini didesain terbuka dan menyatu dengan ruang makan.Pemilihan warna
			  dan furniture yang klasik akan membuat dapur Anda terlihat mewah.</p>
            </div>
          </div>
		  </div>
        </div>
		
		<div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/dapur/3.jpg">
              <span class="card-title">DS24Y0</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Untuk Anda yang tidak suka dengan tata letak barang yang banyak pada dapur,
			  Anda dapat memilih desain ini karena desain ini sangat simple dan minimalis dengan pemilhan warna dinding biru polos dan almari coklat muda.</p>
            </div>
          </div>
		  </div>
        </div>
		
	    <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/dapur/4.jpg">
              <span class="card-title">PS4509</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Desain dapur ini dapat Anda pilih untuk rumah minimalis dengan tata letak barang dapur yang dioptimalkan,
			  sehingga membuat dapur terlihat rapi disertai warna hijau agar menambah suasana dapur menjadi segar.</p>
            </div>
          </div>
		  </div>
        </div>
		
		<div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/dapur/5.jpg">
              <span class="card-title">A243JG</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Untuk Anda yang suka dengan desain unik, Anda dapat memilih desain dapur yang satu ini. Dapur ini didesain
			  agar terlihat lebih menarik. Dengan pemilihan warna dinding putih agar menambah kecerahan suasa pada dapur serta pemilihan furniture
			  yang lucu dan unik untuk menambah kesan indah pada dapur Anda.</p>
            </div>
          </div>
		  </div>
        </div>
		
		</div>
      </div>
      </div>
      <div id="test4" class="col s12">
        <div class="container">
		<h3 class="green-text center">KAMAR MANDI</h3>
          <div class="row">
        <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/mandi/1.jpg">
              <span class="card-title">HB2325</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Kamar mandi ini didesain sebagai kamar mandi privasi dimana Anda akan merasa tenang dan nyaman sendiri berada di kamar mandi.
			  Dengan model bath yang simple serta corak lantai yang selaras dengan warna dinding kamar mandi.</p>
            </div>
          </div>
        </div>
		</div>
     
        <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/mandi/2.jpg">
              <span class="card-title">M3TR52</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Kamar ini didesain dengan warna serba hijau yang berfungsi agar suasana kamar mandi menjadi lebih segar.
			  Dengan pemilihan bath yang lucu berbentuk bulat disertai tembok berwarna putih bercorak kotak-kotak.</p>
            </div>
          </div>
		  </div>
        </div>
		
		<div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/mandi/3.jpg">
              <span class="card-title">P4DAF3</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Untuk Anda yang memiliki rumah minimalis, Anda dapat memiliki kamar mandi yang menyatu dengan kamar tidur.
			  Dengan desain yang simple namun mewah, disertai pemilihan bath yang minimalis. Anda dapat melihat kamar tidur Anda dari kamar mandi ini.</p>
            </div>
          </div>
		  </div>
        </div>
		
	    <div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/mandi/4.jpg">
              <span class="card-title">A35TY1</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Untuk Anda yang suka berdiam diri lebih lama dikamar mandi, kami menyediakan desain kamar mandi
			  yang membuat Anda merasa nyaman berendam lama di kamar mandi dengan furniture yang unik menambah kesan mewah dalam kamar mandi Anda.</p>
            </div>
          </div>
		  </div>
        </div>
		
		<div class="col s12 m6">
		<div class="card sticky-action hoverable">
          <div class="card animated bounceIn">
            <div class="card-image">
			<div class="card-image waves-effect waves-block waves-light">
              <img src="img/collection/mandi/5.jpg">
              <span class="card-title">K234E</span>
            </div>
			</div>
            <div class="card-content">
              <p align="justify">Kamar mandi ini memiliki desain simple dan mewah. Tata letak kamar mandi ini diatur seoptimal mungkin
			  agar terlihat lebih rapi. Dengan warna dinding yang cerah, disertai warna bath dan furniture yang lain yang selaras membuat kamar mandi Anda tampak mewah meskipun berukuran minimalis.</p>
            </div>
          </div>
		  </div>
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
            </div>
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