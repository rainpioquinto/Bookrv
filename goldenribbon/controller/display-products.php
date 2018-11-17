<?php

include './includes/connect-db.php';
include './includes/errors.php';
include './controller/delete-product.php';

$_SESSION['product_ids']=array();
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      array_push($_SESSION['product_ids'],$row["productname"]);
        echo  '
        <div class="col-md-4 py-2">
          <figure class="card card-product card-body h-100">
            <div class="img-wrap"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></div>
            <figcaption class="info-wrap">
                <h4 class="title">' . $row["productname"] . '</h4>
                <p class="desc">' . $row["productdescription"] . '</p>
                <div class="rating-wrap">
                  <div class="label-rating">132 reviews</div>
                  <div class="label-rating">154 orders </div>
                </div> <!-- rating-wrap.// -->
            </figcaption>
            <div class="bottom-wrap">

              <div class="price-wrap h5">
                <span class="price-new"> ₱' . $row["productprice"] . '

              </div> <!-- price-wrap.// -->

              <a href="#myModal" data-toggle="modal" id="product-btn" class="btn btn-md btn-danger float-left"><i class="fa fa-trash"></i> | Delete Product</a>
              <a href="signin" data-toggle="confirmation" id="product-btn" class="btn btn-md btn-primary float-left"><i class="fa fa-edit"></i> | Edit Product</a>

            </div> <!-- bottom-wrap.// -->
          </figure>
        </div> <!-- col // -->

        <div id="myModal" class="modal fade" style="display: none;">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">

				</div>
				<h4 class="modal-title"><i class="fa fa-trash"></i> Are you sure?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer">
      <form method="post" action="">
				<button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
				<button name="confirm-delete-btn" type="submit" class="btn btn-danger">Delete</button>
        </form>
			</div>
		</div>
	</div>
</div>


        ';
    }

} else {
    echo "0 results";
}
?>
