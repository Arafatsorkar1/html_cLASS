
<?php include "includes/headar.php"?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">File Management</h2>
                    </div>
                    <div class="card-body">
                        <span class="text-success"><?php echo isset($result)? $result:''?></span>
                        <form action="action.php?page=file-upload" method="post" enctype="multipart/form-data">
                            <div class="row mt-3">
                                <label for="" class="col-md-4">Name:</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Email:</label>
                                <div class="col-md-8">
                                    <input type="email" name="mail" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Phone:</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Image:</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

<!--                            <div class="row mt-3">-->
<!--                                <label for="" class="col-md-4"> </label>-->
<!--                                <div class="col-md-8">-->
<!--                                    <textarea class="form-control" id="" cols="30" rows="10">--><?php //echo isset($result) ? $result:'' ?><!--</textarea>-->
<!--                                </div>-->
<!--                            </div>-->


                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit"  class="btn btn-success" value="Save Data">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>











<?php include "includes/footer.php"?>








