<?php
Instances::adminInstance();
?>


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


<div class="container">
        <div class="row my-4">
            <div class="col-md-6 mx-auto mt-5">
                <div class="card">
                    <div class="card-body bg-light">
                        <form method="post" action="">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form2Example1" class="form-control" name="email" required/>
                                <label class="form-label" for="form2Example1">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form2Example2" class="form-control" name="password" required/>
                                <label class="form-label" for="form2Example2">Password</label>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked style="accent-color: orange;"/>
                                    <label class="form-check-label" for="form2Example31"> Remember me </label>
                                </div>
                                </div>

                                <div class="col">
                                <!-- Simple link -->
                                <a href="#!" style="color: darkorange;">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-warning btn-block mb-4" name="submit">Sign in</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="#!" style="color: darkorange;">Register</a></p>
                                <p>or sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f" style="color: darkorange;"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google" style="color: darkorange;"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter" style="color: darkorange;"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github" style="color: darkorange;"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>