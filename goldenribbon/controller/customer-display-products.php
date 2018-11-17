<?php

include './includes/connect-db.php';
include './includes/errors.php';


$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  '
        <div class="col-md-4 py-2">
        	<figure class="card card-product card-body h-100">
        		<div class="img-wrap"><img src="img/cakes/cake (1).jpg"></div>
        		<figcaption class="info-wrap">
        				<h4 class="title">' . $row["productname"] . '</h4>
        				<p class="desc">' . $row["productdescription"] . '</p>
        				<div class="rating-wrap">
        					<div class="label-rating">132 reviews</div>
        					<div class="label-rating">154 orders </div>
        				</div> <!-- rating-wrap.// -->
        		</figcaption>
        		<div class="bottom-wrap">
        				<a href="signin" class="btn btn-sm btn-primary float-right"><i class="fa fa-shopping-cart"></i> | Add to cart</a>
        			<div class="price-wrap h5">
        				<span class="price-new"> ₱' . $row["productprice"] . '</span>
        			</div> <!-- price-wrap.// -->
        		</div> <!-- bottom-wrap.// -->
        	</figure>
        </div> <!-- col // -->
        ';
    }

} else {
    echo "0 results";
}
?>
