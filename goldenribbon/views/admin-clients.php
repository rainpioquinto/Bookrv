<?php include './includes/head.php';
      include './includes/sign-checker.php';
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

            <li class="nav-item">
                <a class="nav-link " href="admin-product">Products</a>
            </li>

            <li class="nav-item m-auto">
                <a class="nav-link active" href="admin-clients">Clients</a>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container" id="client-body">
	<div class="row">


        <div class="col-md-12">
        <h4>Clients</h4>
        <div class="table-responsive">


              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                   <th>First Name</th>
                    <th>Last Name</th>
                     <th>Address</th>
                     <th>Email</th>
                     <th>Contact</th>
                      <th>Edit</th>

                       <th>Delete</th>
                   </thead>
    <tbody>
 <tr>
    <td><input type="checkbox" class="checkthis" /></td>
    <td>Mohsin</td>
    <td>Irshad</td>
    <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
    <td>isometric.mohsin@gmail.com</td>
    <td>+923335586757</td>
      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="fa fa-pencil"></span></button></p></td>
      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash"></i></button></p></td></tr>

    </tbody>

</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>

            </div>

        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">

        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>


        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><i class="fa fa-edit"></i> Update</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>



    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">

       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
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
                          <li><a href="Facebook"><i class="fa fa-lg fa-facebook"></i> Facebook </a></li>
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
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.js"></script>

      </html>
