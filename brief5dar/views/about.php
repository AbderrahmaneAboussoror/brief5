
<body class="sub_page" onload="hide()">
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
  </div>



  <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
      <img src="./public/images/design-2.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Jewellery Shop
              </h2>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrudLorem ipsum dolor sit amet, consectetur
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam, quis nostrud
            </p>
            <p id="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis vel nostrum a iusto accusantium itaque atque sint, reiciendis, debitis id ullam blanditiis incidunt optio tempore suscipit consectetur, vero facere corrupti ipsam odit dignissimos. Aliquam quibusdam enim veniam! Vitae est minus consequuntur error autem beatae, fugit dolor ipsa culpa voluptate quod.</p>
            <p id="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore perspiciatis quaerat vel officiis blanditiis nemo molestias quasi ad obcaecati aliquid? Deleniti dignissimos, perferendis maxime voluptatibus quae harum doloribus incidunt saepe, dolore veritatis modi. Magni, in repellendus. Quae repudiandae cum expedita. Tempore voluptatibus inventore impedit quia libero accusantium unde porro fugiat, eius dolore adipisci eaque sit facilis commodi expedita rem dolores amet, voluptatum ab dolorem? Quam nobis corporis laboriosam molestias exercitationem veritatis earum eius porro, commodi voluptatum quos dolor rem inventore consequatur perferendis non accusamus ratione dolorem nulla ut dolores optio? Incidunt odit, laboriosam doloribus fugiat necessitatibus accusamus unde enim distinctio.</p>
            <div>
              <p id="read" onclick="show()" style="cursor: pointer;">
                Read More
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="./public/images/about-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


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

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script>
    var para = document.querySelectorAll("#para");
    function hide(){
      for(var i = 0; i < para.length; i++){
        para[i].style.display = "none";
      }
    }
    function show(){
      for(var i = 0; i < para.length; i++){
        para[i].style.display = "block";
      }
      document.getElementById("read").style.display = "none";
    }
  </script>