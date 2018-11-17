
<?php
include './controller/submit-signup.php';
include './includes/head.php';

?>


<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="header">
    <div class="container">
        <a id="title" class="navbar-brand" href="home">Golden Ribbon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="home">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a id="login-btn" class="btn btn-primary btn-sm ml-3" href="signin">
                   <i class="fa fa-sign-in"></i> Login
                   <span class="badge badge-light"></span>
               </a>
               <a id="login-btn" class="btn btn-primary btn-sm" href="signup">
                  <i class="fa fa-user"></i> Register
                  <span class="badge badge-light"></span>
              </a>
            </form>

        </div>
    </div>
  </nav>

<form action="signup" method="post">
  <div class="container-fluid" id="signup-body">

          <div class="row">

          <div class="form-group col-lg-6">

  				<div class="form-group col-lg-12">
            <h3 class="dark-grey">Registration</h3>
  					<label>First Name</label>
  					<input type="" name="firstname" class="form-control" id="" value="" required>
  				</div>

          <div class="form-group col-lg-12">
  					<label>Last Name</label>
  					<input type="" name="lastname" class="form-control" id="" value="" required>
  				</div>


  				<div class="form-group col-lg-12">
  					<label>Password</label>
  					<input type="password" name="password_1" class="form-control" id="" value="" required>
  				</div>

  				<div class="form-group col-lg-12">
  					<label>Repeat Password</label>
  					<input type="password" name="password_2" class="form-control" id="" value="" required>
  				</div>

  				<div class="form-group col-lg-12">
  					<label>Email Address</label>
  					<input type="email" name="email" class="form-control" id="" value="" required>
  				</div>

  			</div>

        <div class="form-group col-lg-6">
          <div class="col-md-12">
  				<h3 class="dark-grey">Terms and Conditions</h3>
  				<p>
  					By clicking on "Register" you agree to The Company's' Terms and Conditions
  				</p>
  				<p>
  					While rare, prices are subject to change based on exchange rate fluctuations -
  					should such a fluctuation happen, we may request an additional payment. You have the option to request a full refund or to pay the new price. (Paragraph 13.5.8)
  				</p>
  				<p>
  					Should there be an error in the description or pricing of a product, we will provide you with a full refund (Paragraph 13.5.6)
  				</p>
  				<p>
  					Acceptance of an order by us is dependent on our suppliers ability to provide the product. (Paragraph 13.5.6)
  				</p>

  				<button type="submit" class="btn btn-primary" name="reg_user">Register</button>
  			</div>

        <?php

        if ($errorsemailctr == 1){
          echo '<p class="error"> <i class="fa fa-warning"></i> ' .  $errorsemail . '</p>'; }
          ?>


</form>

      </div>
      </div>
</div>
  	</section>
  </div>


    <!-- Footer -->
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5>About</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">

                    <p class="mb-0">
                        Golden Ribbon Cakes &copy 2018
                    </p>
                      <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p class="mb-0">
                        Lets you order your cakes online through a very user-friendly system.
                    </p>

                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                    <h5>Follow us at:</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                      <li><a href="facebook"><i class="fa fa-lg fa-facebook"></i> Facebook </a></li>
                      <li><a href="twitter"><i class="fa fa-lg fa-twitter"></i> Twitter </a></li>
                      <li><a href="instagram"><i class="fa fa-lg fa-instagram"></i> Instagram </a></li>
                    </ul>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h5>Contact</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-home mr-2"></i> Golden Ribbon </li>
                        <li><i class="fa fa-envelope mr-2"></i> golden.ribbon@gmail.com</li>
                        <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
                        <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
                    </ul>
                </div>
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5>Feedback</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">

                    <p class="mb-0">
                        We want to hear from you!
                    </p>
                      <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                      <ul class="list-unstyled">
                    <li><a href="contact"><i class="fa fa-comment"></i> Give us a feedback! </a></li>
                    </ul>
                </div>
                <div class="col-12 copyright mt-3">
                    <p class="float-left">
                        <a href="#">Back to top</a>
                    </p>
                      </div>


            </div>
        </div>
    </footer>




  </body>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>

  </html>
