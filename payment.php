<?php require("./header.php"); ?>

    <div class="container-fluid px-5 mybg-dark">
        <div class="mb-4 text-white">
            <h2>Confirm order and pay</h2> <span>please make the payment, after that you can enjoyyour product in few days</span>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="card p-3">
                    <h6 class="text-uppercase">Payment details</h6>
                    <div class="inputbox mt-3">
                        <input type="text" name="name" class="form-control" required="required" autocomplete="off"> <span>Name on card</span> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="inputbox mt-3 me-3"> 
                                <input type="text" name="name" class="form-control" required="required" autocomplete="off"> <i class="fa fa-credit-card"></i> <span>Card Number</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex flex-row">
                                <div class="inputbox mt-3 me-3">
                                    <input type="text" name="name" class="form-control" required="required" autocomplete="off"> <span>Expiry</span> 
                                </div>
                                <div class="inputbox mt-3 me-3">
                                    <input type="text" name="name" class="form-control" required="required" autocomplete="off"> <span>CVV</span> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 mb-4">
                        <h6 class="text-uppercase">Billing Address</h6>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 me-3">
                                    <input type="text" name="name" class="form-control" required="required" autocomplete="off"> <span>Street Address</span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3 me-3">
                                    <input type="text" name="name" class="form-control" required="required" autocomplete="off"> <span>City</span> 
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="inputbox mt-3 me-3">
                                    <input type="text" name="name" class="form-control" required="required" autocomplete="off"> <span>State/Province</span> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="inputbox mt-3 me-3">
                                    <input type="text" name="name" class="form-control" required="required" autocomplete="off"> <span>Zip code</span> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mb-4 d-flex justify-content-center "> <button class="btn buy_btn px-3 fs-4 fw-blod">Pay Now</button> </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card mybg-thircolor p-3 text-white mb-3"> <span>You have to pay</span>
                    <div class="d-flex flex-row align-items-end mb-3">
                        <h1 class="mb-0 yellow">$549</h1> <span>.99</span>
                    </div> <span>Enjoy all the your product after you complete the payment</span>
                    <div class="mybg-dark hightlight"> <span>100% Guaranteed support and update for the next 3 years.</span> </div>
                </div>
            </div>
        </div>
    </div>

<?php require("./footer.php"); ?>
