<?php include_once('parts/header.php'); ?>
<!-- Background section  -->
<div class="card text-bg-dark border border-0 rounded-0 ">
    <img src="image/home2.jpg" class="w-100 object-fit-cover" height="300px" alt="about">
    <div class="card-img-overlay image-background-set pt-5 ps-4">
        <h2 class="pt-5 ps-5  mt-4"><b>Get in touch with our team of professionals</b></h2>
    </div>
</div>
<!-- End Background section  -->

<!-- Body section  -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-12 text-sm-center mt-5">
                <h3 class="h3 mt-4">
                    <b> Contact Us</b>
                </h3>
                <p class="contact-pera">Umbrella Waterproofing <br>
                    PO Box 1245 <br>
                    Mukilteo, WA 98275</p>
                <a href="" class="text-decoration-none text-black"><b>(425) 786-6764</b></a>
            </div>
            <div class="col-lg-7 mt-4">
                <div class="form-d mt-4 p-4 shadow-lg rounded mb-5">

                    <div class="caption H2 mt-4">
                        <a href="" class="text-decoration-none pb-2 fs-6">
                            <h6>CONTACT US</h6>
                        </a>
                    </div>
                    <h4 class="h2 mb-4"> <b>Get a quote for an <br>appointment</b></h4>
                    <div class="quote-request w-form">
                        <form name="wf-form-Quote-Request" data-name="Quote Request" class="">
                            <input type="text" class="form-control mb-3 py-2 bg-body-secondary" placeholder="Name" required="">
                            <input type="email" class="form-control mb-3 py-2 bg-body-secondary" placeholder="Email Address" required="">
                            <input type="submit" value="Request a Quote" data-wait="Please wait..." class="btn btn-primary py-2 px-5 w-100 fw-medium">
                            <label for="" class="py-2 "><b>Name *</b></label>
                            <input type="email" class="form-control py-2 bg-body-secondary" id="Quote-Email" required="">
                            <label for="" class="py-2 "><b>Property Address *</b></label>
                            <input type="email" class="form-control py-2 bg-body-secondary" id="Quote-Email" required="">
                            <label for="" class="py-2 "><b>Email Address *</b></label>
                            <input type="email" class="form-control py-2 bg-body-secondary" id="Quote-Email" required="">
                            <label for="" class="py-2 "><b>Property City, State, Zip *</b></label>
                            <input type="email" class="form-control py-2 bg-body-secondary" id="Quote-Email" required="">
                            <label for="" class="py-2 "><b>Phone *</b></label>
                            <input type="email" class="form-control py-2 bg-body-secondary" id="Quote-Email" required="">
                            <label for="" class="py-2 "><b>Do you prefer email or phone? *</b></label>
                            <input type="email" class="form-control py-2 bg-body-secondary" id="Quote-Email" required="">
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
                                    class="w-100 py-2 fw-medium mt-3 btn btn-primary">
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