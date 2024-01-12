<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bakery</title>

    <!-- cdn icon link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- custom css file  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!-- header section start here  -->
    <header class="header">
      <div class="logoContent">
        <a href="#" class="logo"><img src="logo.roti.png" alt="" /></a>
        <h1 class="logoName">HamBakery</h1>
      </div>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#product">product</a>
        <a href="#blogs">About</a>
        <a href="#contact">contact</a>
        <a href="index.php">Log Out</a>
      </nav>

      <div class="icon">
        <i class="fas fa-search" id="search"></i>
        <i class="fas fa-bars" id="menu-bar"></i>
      </div>

      <div class="search">
        <input type="search" placeholder="search..." />
      </div>
    </header>
    <!-- header section end here  -->

    <!-- home section start here  -->
    <section class="home" id="home">
      <div class="homeContent">
        <h2>Selamat Datang di toko roti kami</h2>
        <p>
          Toko roti kami menyediakan banyak varian rasa yang menarik untuk
          dinikmati baik dinikmati sendiri maupun bersama keluarga
        </p>
        <div class="home-btn">
          <a href="#product"><button>Roti kami</button></a>
        </div>
      </div>
    </section>

    <!-- home section end here  -->

    <!-- product section start here  -->
    <section class="product" id="product">
      <div class="heading">
        <h2>Varian Roti Kami</h2>
      </div>
      <div class="grid-container">
        <div class="grid-item">
          <img src="bakpia.png" alt="Image 1">
          <h3>Bakpia Coklat</h3>
          <p>Rp 50.000</p>
          <button class="buy-now-button"><a href="form_pembelian.php">Beli Sekarang</a></button>
        </div>
        <div class="grid-item">
          <img src="rotigrg.png" alt="Image 2">
          <h3>Roti Isi Coklat</h3>
          <p>Rp 40.000</p>
          <button class="buy-now-button"><a href="form_pembelian.php">Beli Sekarang</a></button>
        </div>
        <div class="grid-item">
          <img src="rtibso.jpg" alt="Image 3">
          <h3>Roti Isi Bakso</h3>
          <p>Rp 45.000</p>
          <button class="buy-now-button"><a href="form_pembelian.php">Beli Sekarang</a></button>
        </div>
        <div class="grid-item">
          <img src="rtitwr.png" alt="Image 3">
          <h3>Roti tawar Asoy</h3>
          <p>Rp 20.000</p>
          <button class="buy-now-button"><a href="form_pembelian.php">Beli Sekarang</a></button>
        </div>
        <div class="grid-item">
          <img src="kk.png" alt="Image 3">
          <h3>Brownis Kukus</h3>
          <p>Rp 60.000</p>
          <button class="buy-now-button"><a href="form_pembelian.php">Beli Sekarang</a></button>
        </div>
        <div class="grid-item">
          <img src="bolen1.png" alt="Image 3">
          <h3>Bolen Pisang</h3>
          <p>Rp 48.000</p>
          <button class="buy-now-button"><a href="form_pembelian.php">Beli Sekarang</a></button>
        </div>
        <div class="grid-item">
          <img src="brg.png" alt="Image 3">
          <h3>Roti Burger</h3>
          <p>Rp 10.000</p>
          <button class="buy-now-button"><a href="form_pembelian.php">Beli Sekarang</a></button>
        </div>
      </div>
      
    <!-- product section end here  -->

    <!-- blogs section start here  -->
    <section class="blogs" id="blogs">
      <div class="swiper blogs-row">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <div class="img">
              <img src="" alt="" />
            </div>
            <div class="content">
              <h3>Tentang  Roti Kami</h3>
              <h4>Roti kami adalah roti yang didirikan karna jaman sekarang banyak orang yang menyukai roti dengan berbagai varian roti yang menarik, dimana usaha kita rintis baru-baru ini kaena usaha roti sangat menghasilkan banyak cuan  </h4>
            </div>

    <!-- blogs section ends here  -->
    
    <!-- footer section start here  -->

    <footer class="footer" id="contact">
      <div class="box-container">
        <div class="mainBox">
          <div class="content">
            <h1 class="logoName">HamBakery</h1>
          </div>

          <p>
            Terima kasih telah membeli roti kami semoga anda suka dan ingin membeli lagi
          </p>
        </div>
        <div class="box">
          <h3>Quick link</h3>
          <a href="#home"> <i class="fas fa-arrow-right"></i>Home</a>
          <a href="#product"> <i class="fas fa-arrow-right"></i>product</a>
          <a href="#blogs"> <i class="fas fa-arrow-right"></i>about</a>
          <a href="#contact"> <i class="fas fa-arrow-right"></i>contact</a>
        </div>
        <div class="box">
          <h3>Kontak kami</h3>
          <a href="https://api.whatsapp.com/send?phone=6285225364969&text=Saya%20Ingin%20bertanya"><i class="fas fa-phone"></i>+62 85225364969</a>
          <a href="#">
            <i class="fas fa-envelope"></i>herdiyawanirkham19@gmail.com</a
          >
        </div>
      </div>
      <div class="share">
        <a href="https://api.whatsapp.com/send?phone=6285225364969&text=Saya%20ingin%20bertanya" class="fab fa-whatsapp"></a>
        <a href="#" class="fab fa-instagram"></a>
      </div>
      <div class="credit">
        created by <span>Irkham Herdiyawan </span> |all rights reserved !
      </div>
    </footer>

    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file  -->
    <script src="js/main.js"></script>
  </body>
</html>
