


<?php include "includs/header.php"?>





<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="assets/img/<?php echo $productDetails['img']?>" alt="" class="img-fluid">
            </div>




            <div class="col-md-7">
                <h3><?php echo $productDetails['title']?></h3>
                <p><?php echo $productDetails['price']?></p>
                <p><?php echo $productDetails['size']?></p>
                <p><?php echo $productDetails['Short Description']?></p>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p><?php echo $productDetails['long Description']?></p>
            </div>
        </div>
    </div>
</section>




<?php include "includs/footer.php"?>
