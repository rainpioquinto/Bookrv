<?php include './includes/head.php'; ?>

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
                    <a class="nav-link active" href="">Home<span class="sr-only">(current)</span></a>
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

  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <div class="container-fluid" id="cart-body">
  	<table id="cart" class="table table-hover table-condensed">
      				<thead>
  						<tr>
  							<th style="width:50%">Product</th>
  							<th style="width:10%">Price</th>
  							<th style="width:8%">Quantity</th>
  							<th style="width:22%" class="text-center">Subtotal</th>
  							<th style="width:10%"></th>
  						</tr>
  					</thead>
  					<tbody>
  						<tr>
  							<td data-th="Product">
  								<div class="row">
  									<div class="col-sm-2 hidden-xs"><img src="http://placehold.it/100x100" alt="..." class="img-responsive"/></div>
  									<div class="col-sm-10">
  										<h4 class="nomargin">Product 1</h4>
  										<p>Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet.</p>
  									</div>
  								</div>
  							</td>
  							<td data-th="Price">$1.99</td>
  							<td data-th="Quantity">
  								<input type="number" class="form-control text-center" value="1">
  							</td>
  							<td data-th="Subtotal" class="text-center">1.99</td>
  							<td class="actions" data-th="">
  								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
  								<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
  							</td>
  						</tr>
  					</tbody>
  					<tfoot>
  						<tr>
  							<td><a href="user-product" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
  							<td colspan="2" class="hidden-xs"></td>
  							<td class="hidden-xs text-center"><strong>Total $1.99</strong></td>
  							<td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
  						</tr>
  					</tfoot>
  				</table>
  </div>
