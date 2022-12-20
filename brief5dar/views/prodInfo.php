<body class="sub_page">

<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="./public/images/Capture_d_écran_2022-10-18_132102-removebg-preview.png" alt="Ring logo">
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
                  <a class="nav-link" href="contact">Contact</a>
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

<?php
$product = Instances::getProdInstance();
?>

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="Gallery" style="color: #f5e80b"><i
                                            class='bx bx-left-arrow-alt'></i> back</a>
                            </div>
                            <div class="text-center p-4">
                                <img width="250" id="main-image"
                                     src="data:image/jpg;charset=utf8;base64,<?php /*echo base64_encode($product['img']);*/ ?>"
                                     alt="product image">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="mt-4 mb-3"><span class="text-uppercase text-muted brand">Product</span>
                                <h5 class="text-uppercase"><?= $product['titre'] ?></h5>
                            </div>
                            <p class="about">
                                <span class="text-uppercase text-muted brand">Description</span><br>
                                <?= $product['description'] ?></p>
                            <br>
                            <p class="about">
                                <span class="text-uppercase text-muted brand">Price</span><br>
                                <?= $product['prix'] ?> DH</p>
                            <div class="cart mt-4 align-items-center">
                                <button class="btn btn-warning text-uppercase mr-2 px-4">Add to cart</button>
                                <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

