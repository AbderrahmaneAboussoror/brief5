
<body class="sub_page">
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
              </ul>

            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
</div>
    <div class="container">
        <div class="row my-4">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-body bg-light">
                        <a href="add" class="btn btn-sm btn-primary mr-2 mb-2"><i class="fas fa-plus"></i></a>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Image</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $prods = Instances::getAllProdInstance();
                            foreach ($prods as $prod) {
                            ?>
                                <tr>
                                <th scope="row"><?php echo ($prod['idP']); ?></th>
                                <td><?php echo ($prod['titre']); ?></td>
                                <td><?php echo ($prod['image']); ?></td>
                                <td><?php echo ($prod['prix']); ?></td>
                                <td class="d-flex flex-row">
                                    <form method="post" class="mr-1" action="update">
                                    <input type="hidden" name="id" value="<?php echo ($prod['idP']);?>">
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    </form>
                                    <form method="post" class="mr-1" action="delete">
                                    <input type="hidden" name="id" value="<?php echo ($prod['idP']);?>">
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
