
<?php include "includes/headar.php"?>








<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Odd Even</h2>
                    </div>
                    <div class="card-body">
                        <form action="action.php?page=odd-even-result" method="post">
                            <div class="row mt-3">
                                <label for="" class="col-md-4">First Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_number" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Last Number</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_number" class="form-control">
                                </div>
                            </div>


                            <div class="row mt-3">
                                <label for="" class="col-md-4">Choice</label>
                                <div class="col-md-8">
                                    <label for=""><input type="radio" name="choice" checked value="odd"> Odd</label>
                                    <label for=""><input type="radio" name="choice" value="Even"> Even</label>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label for="" class="col-md-4">Result </label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="" cols="30" rows="10"><?php echo isset($result) ? $result:'' ?></textarea>
                                </div>
                            </div>


                            <div class="row mt-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit"  class="btn btn-success" value="Result">
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>















<?php include "includes/footer.php"?>

