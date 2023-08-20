<?php include "includs/header.php"?>

<section class="py-5">
    <div class="container">
        <div class="row">


        <?php foreach ($products as $product) { ?>

            <div class="col-md-4 mt-3">
                <div class="card">
                    <img src="assets/img/<?php echo $product['image'];?>" alt="" class="card-img-top"/>
                    <div class="card-body">
                        <h3><?php echo $product['name'];?></h3>
                        <p><?php echo $product['price'];?></p>
                        <p><?php echo $product['size'];?></p>
                        <a href="" class="btn btn-success w-100">view</a>
                    </div>
                </div>
            </div>


            <?php } ?>


        </div>
    </div>
</section>


<?php include "includs/footer.php"?>