<?php
require_once("header.php");
?>

<!-- banner-section start -->
<section class="banner-section inner-banner contact">
    <div class="overlay">
        <div class="shape-area">
            <img src="assets/images/banner-obj-1.png" class="obj-1" alt="image">
            <img src="assets/images/banner-obj-2.png" class="obj-2" alt="image">
            <img src="assets/images/banner-obj-3.png" class="obj-3" alt="image">
        </div>
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-7 col-md-10">
                        <div class="main-content">
                            <h1>Contact Us</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex align-items-center">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->

<!-- Contact Section In start -->
<section class="contact-section">
    <div class="overlay pb-120">
        <div class="container bg-area">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="title">Get in Touch</h2>
                        <p>We’d love to hear from you! Please fill in this form and we will get back to you as soon as possible.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="form-content">
                        <form action="admin/action.php" method="POST">
                            <div class="row">
                                <div class="col-6">
                                    <div class="single-input">
                                        <label for="fname">First Name</label>
                                        <input type="text" id="fname" name="f_name" placeholder="Enter Your First Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-input">
                                        <label for="lname">Last Name</label>
                                        <input type="text" id="lname" name="l_name" placeholder="Enter Your Last Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-input">
                                        <label for="email">Your email address</label>
                                        <input type="text" id="email" name="email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-input">
                                        <label for="buying">Phone Number</label>
                                        <input type="text" name="phone" placeholder="Enter your Phone Number">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-input">
                                        <label for="message">Message</label>
                                        <textarea id="message" name="message" placeholder="Write your message here" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="btn-area text-center">
                                    <button class="cmn-btn" type="submit" name="add_contact">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section In end -->
<?php
require_once("footer.php");
?>