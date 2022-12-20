
<body>
<div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
              <a class="navbar-brand" href="index.html">
                <img src="./public/images/Capture_d_écran_2022-10-18_132102-removebg-preview.png" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about"> About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Gallery"> Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact"> Contact</a>
                    </li>
                    <li class="nav-item log">
                  <a class="nav-link" href="login">Login</a>
                </li>
                  </ul>
    
                </div>
              </div>
            </nav>
          </div>
        </header>
        <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
        <div class="design-box">
          <img src="./public/images/design-1.png" alt="">
        </div>
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h2>
                        <span> Special Prices</span>
                        <hr>
                      </h2>
                      <h1>
                        Necklaces
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                        aptent taciti sociosqu ad litora torquent per conubia nostra
                      </p>
                      <div>
                        <a href="">Buy Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="./public/images/511178NHGAA00_1-removebg-preview.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h2>
                        <span> Trending</span>
                        <hr>
                      </h2>
                      <h1>
                        Golden Ring
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                        aptent taciti sociosqu ad litora torquent per conubia nostra
                      </p>
                      <div>
                        <a href="">Shop Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="./public/images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail_box">
                      <h2>
                        <span> Best Selling This Week</span>
                        <hr>
                      </h2>
                      <h1>
                        Marriage Ring
                      </h1>
                      <p>
                        Lorem ipsum dolor sit amet consec tetur adipiscing elit elit at felislacinia
                        aptent taciti sociosqu ad litora torquent per conubia nostra
                      </p>
                      <div>
                        <a href="">Shop Now</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="img-box">
                      <img src="./public/images/mr.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
      </section>
      <!-- end slider section -->



<section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Jewellery Price
        </h2>
      </div>
      <div class="price_container">
      <?php
      $prods = Instances::getAllProdInstance();
      foreach ($prods as $prod) {
      ?>
        <div class="box">
          <div class="name">
            <h6>
              <?php echo ($prod['titre']); ?>
            </h6>
          </div>
          <div class="img-box">
            <img src="../public/assets/images/p-1.png" alt="Jewelry">
          </div>
          <div class="detail-box">
            <h5>
              $<span><?php echo ($prod['prix']); ?></span>
            </h5>
            <form action="prodInfo" method="post">
              <input type="hidden" name="id" value="<?php echo ($prod['idP']); ?>">
              <button class="btn btn-lg btn-outline-warning">View Details</button>
            </form>
          </div>
        </div>
        <?php }?>
      </div>
      <!-- <div class="d-flex justify-content-center">
        <a href="#" class="price_btn">
          See More
        </a>
      </div> -->
    </div>
  </section>

      <!-- ring section -->

  <section class="ring_section layout_padding">
    <div class="design-box">
      <img src="images/design-1.png" alt="">
    </div>
    <div class="container">
      <div class="ring_container layout_padding2">
        <div class="row">
          <div class="col-md-5">
            <div class="detail-box">
              <h4>
                special
              </h4>
              <h2>
                Wedding Ring
              </h2>
              <a href="">
                Buy Now
              </a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="img-box">
              <img src="./public/images/ring-img.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end ring section -->

      <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <a href="">
                <img src="./public/images/Capture_d_écran_2022-10-18_132102-removebg-preview.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="./public/images/location.png" alt="">
                <span>
                  Address
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="./public/images/phone.png" alt="">
                <span>
                  +01 1234567890
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="./public/images/mail.png" alt="">
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="info_form">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Newsletter
            </h5>
          </div>
          <form action="">
            <div class="email_box">
              <label for="email2">Enter Your Email</label>
              <input type="text" id="email2">
            </div>
            <div>
              <button>
                <a href="Contact.html" class="subscription">subscribe</a>
              </button>
            </div>
          </form>
        </div>
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Follow Us
            </h5>
          </div>
          <div class="social_box">
            <a href="">
              <img src="./public/images/fb.png" alt="">
            </a>
            <a href="">
              <img src="./public/images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="./public/images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="./public/images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->