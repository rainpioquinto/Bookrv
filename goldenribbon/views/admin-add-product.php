<?php include './includes/head.php';
      include './includes/sign-checker.php';
      include './controller/admin-submit-product.php';
?>


<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="header">
    <div class="container">
          <a id="title" class="navbar-brand" href="admin-home">Golden Ribbon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">

          <ul class="navbar-nav m-auto">

            <li class="nav-item m-auto">
                <a class="nav-link active" href="admin-product">Products</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin-clients">Clients</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin-feedback">Feedbacks</a>
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
                   <i class="fa fa-sign-in"></i> Sign Out
                   <span class="badge badge-light"></span>
               </a>

            </form>

        </div>
    </div>
  </nav>

  <form action="admin-add-product" method="post">
    <div class="container-fluid" id="signup-body">

            <div class="row">

              <div class="form-group col-lg-1"></div>
            <div class="form-group col-lg-10">

    				<div class="form-group col-lg-12">
              <h3 class="dark-grey">Product Information</h3>
    					<label>Product Name</label>
    					<input type="" placeholder="Product Name" name="productname" class="form-control" id="" value="" required>
    				</div>

            <div class="form-group col-lg-12">
    					<label>Product Description</label>
    					<input type="" placeholder="Product Description" name="productdescription" class="form-control" id="" value="" required>
    				</div>


    				<div class="form-group col-lg-12">
    					<label>Product Price</label>
    					<input type="number" placeholder="Product Price" name="productprice" class="form-control" id="" value="" required>
    				</div>


              <div class="row">


          <div class="form-group col-lg-6">

            <div class="form-group col-lg-12">
              <label>Product Image</label>
              <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            </div>

          <div class="form-group col-lg-6">

            <div class="form-group col-lg-12">
    					<label>Product Quantity</label>
    					<input type="number" placeholder="Product Quantity" name="productqty" class="form-control" id="" value="" required>
    				</div>
          </div>
          </div>

            <div class="form-group col-lg-2"></div>
            <?php

            if ($errorsemailctr == 1){
              echo '<p class="error"> <i class="fa fa-warning"></i> ' .  $errorsemail . '</p>'; }

                            if ($successmsgctr == 1){
                              echo '<p class="success"> <i class="fa fa-check"></i> ' .  $successmsg . '</p>'; }
                              ?>
          <button type="submit" class="btn btn-primary float-right" name="add-product-btn"><i class="fa fa-plus"></i> | Add Product</button>
              </div>

        </div>
        </div>
  </div>

    </div>
  </form>


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
</html>
