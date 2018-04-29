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
                <li><a style="font-weight: bold;" href="logout.php">Logout</a></li>
                <li><a style="font-weight: bold;" href="#">Message</a></li>
           
        
      </ul>
      <ul id="nav-mobile" class="side-nav">
                <li>
                    <div class="userView">
                        <img class="background" src="img/vacation/fet.jpg">
                        <img class="circle" src="img/h.jpg">
                        <span class="white-text name" style="font-weight : bold">Welcome <?php echo $_SESSION['admin_nm'];?> </span>
                        <span class="white-text email" style="font-weight : bold">UserEmail@gmail.com</span>
                    </div>
                </li>
                <hr>
                <li><a class="green-text" href="logout.php"><i><img src="logout.png"></i>Logout</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i><img src="ic_menu_black_36dp.png"></i></a>
    </div>
    </nav>
  </div>
  <!-- banner -->
  <div id="" >
    <div class="container" >
      <div class="" >
        <br><br><br><br><br>
   <!-- table -->
    <table>
        <thead>
          <tr>
              <th>No</th>
              <th>Date</th>
              <th>Subjec</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php 
            $x = new func_sql;
            $res=$x -> con()-> query("SELECT * FROM `lansia_log` WHERE admin_nm='$admin_nm' and password='$pass'"); 
            ?>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>
        <!-- end table -->
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
