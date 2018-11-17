<?php

include './includes/connect-db.php';
include './includes/errors.php';


$sql = "SELECT * FROM feedbacks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  '
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
        <div class="col-sm-12">
            <div id="tb-testimonial" class="testimonial testimonial-primary-filled">
                <div class="testimonial-section">
                '.$row["message"].'
                      </div>
                <div class="testimonial-desc">
                    <img src="https://placeholdit.imgix.net/~text?txtsize=9&txt=100%C3%97100&w=100&h=100" alt="" />
                    <div class="testimonial-writer">
                      <div class="testimonial-writer-name">'.$row["email"].'</div>
                      <div class="testimonial-writer-designation">Customer</div>
                    </div>
                </div>
            </div>
          </div>
          </figure>
        </div>
        <div class="col-md-2"></div></div>';
    }

} else {
    echo "0 results";
}
