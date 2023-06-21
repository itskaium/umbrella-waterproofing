<?php include_once('parts/header.php'); ?>
<!-- Background section  -->
<div class="card text-bg-dark border border-0 rounded-0 ">
    <img src="image/home2.jpg" class="w-100 object-fit-cover" height="300px" alt="about">
    <div class="card-img-overlay image-background-set pt-5 ps-4">
        <h2 class="pt-5 ps-5  mt-4"><p class="text-bold text-white">Get in touch with our team of professionals</p></h2>
    </div>
</div>
<!-- End Background section  -->

<!-- Body section  -->
<section>
    <div class="container">
        <div class="row px-lg-3 contact-manage-p">
            <div class="col-lg-2 col-md-12 text-sm-center mt-5">
                <h3 class="h3 mt-4">
                    <p class="text-bold"> Contact Us</p>
                </h3>
                <p class="contact-pera">Umbrella Waterproofing <br>
                    PO Box 1245 <br>
                    Mukilteo, WA 98275</p>
                <a href="tel:4258766764" class="text-decoration-none text-primary"><b>(425) 786-6764</b></a>
            </div>
            <div class="col-lg-7 mt-4">
                <div class="form-d mt-4 p-4 pt-2 pb-4 shadow-lg rounded mb-5">

                    <div class="caption H2 mt-2">
                        <p class="text-decoration-none pb-2 fs-6">
                            <h6 class="text-primary">CONTACT US</h6>
                        </p>
                    </div>
                    <h4 class="h2 mb-4 text-bold">Get a quote for an <br>appointment</h4>
                    <div class="quote-request w-form">
                        <form name="wf-form-Quote-Request" data-name="Quote Request" class="">
                            <label for="" class="py-2">Name <span class="text-danger">*</span></label>
                            <input type="email" class="form-control py-3 bg-body-secondary" id="Quote-Email" required="">
                            <label for="" class="py-2">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control py-3 bg-body-secondary" id="Quote-Email" required="">
                            <label for="" class="py-2">Phone <span class="text-danger">*</span></b></label>
                            <input type="email" class="form-control py-3 bg-body-secondary" id="Quote-Email" required="">
                            <label for="" class="py-2">Property Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control py-3 bg-body-secondary" id="Quote-Email" required="">
                            <label for="" class="py-2">Property City, State, Zip <span class="text-danger">*</span></label>
                            <input type="email" class="form-control py-3 bg-body-secondary" id="Quote-Email" required="">
                            <label for="" class="py-2">Do you prefer email or phone? <span class="text-danger">*</span></label>
                            <input type="email" class="form-control py-3 bg-body-secondary" id="Quote-Email" required="">
                            <div class="row">
                                <div class="col-md-5 col-sm-12">
                                    <label for="" class="py-2 d-block"><b>Type of Dwelling</b></label>
                                    <input type="checkbox" class="me-2" name="" id=""><label for=""><b>Single Family Home</b></label> <br>
                                    <input type="checkbox" class="me-2" name="" id=""><label for=""><b>Multi-Family Complex</b></label><br>
                                    <input type="checkbox" class="me-2" name="" id=""><label for=""><b>Duplex</b>
                                    </label>
                                </div>
                                <div class="col-md-7 col-sm-12">
                                    <label for="" class="py-2 d-block"><b>Check All that apply</b></label>
                                    <input type="checkbox" class="me-2" name="" id=""><label class="" for=""><b>Is there an HOA?</b></label><br>
                                    <input type="checkbox" class="me-1" name="" id=""><label for=""><b>Owned by a property manager?</b></label><br>
                                    <input type="checkbox" class="me-2" name="" id=""><label for=""><b>you like phone consultation?</b></label>
                                </div>
                            </div>
                            <label for="" class="my-2"><b>Message</b></label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                    id="floatingTextarea"></textarea>
                                <input type="submit" value="Send" data-wait="Please wait..."
                                    class="w-100 py-3 fw-medium mt-3 btn btn-primary">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <?php include('parts/sidebar.php') ?>
        </div>
    </div>
</section>
<!-- End Body section  -->
<!-- Footer section -->
<?php include_once('parts/footer.php'); ?>