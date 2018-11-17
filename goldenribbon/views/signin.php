<?php include './includes/head.php';
      include './controller/submit-signin.php'; ?>

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

<div class="container-fluid" id="sigin-body">
<div class="row text-center">
  <div class="col-md-5 col-md-offset-3"></div>
    <div class="col-md-2 col-md-offset-3">

        <form action="signin" method="post">
            <form class="form-signin">
              <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
              <div class="checkbox mb-3">

              </div>
              <button name="login_user" class="btn btn-md btn-primary btn-block" type="submit">Sign in</button>
            </form>
          </form>

  </div>
  <div class="col-md-5 col-md-offset-3"></div>
  </div>
</div>

  </body>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>

  </html>
