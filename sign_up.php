<?php
require_once("header.php");
if (isset($_GET['id'])) {
    $sub_id = $_GET['id'];

    // Rest of your code
} 
?>
<style>
    input{
        height: 70px !IMPORTANT;
    }
</style>
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
                            <h1>Sign Up</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex align-items-center">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
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
                <div class="col-lg-12">
                    <div class="form-content">
                        <form action="admin/action.php" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="single-input">
                                        <label for="fname">Enter Your Full Name</label>
                                        <input type="text" id="fname" name="name" placeholder="Enter Your First Name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-input">
                                        <label for="email">Enter Your Email</label>
                                        <input type="email" id="email" name="email" placeholder="Enter your Email">
                                    </div>
                                </div>
                                <input type="hidden" name="sub_id" value="<?php echo $sub_id ?>">

                                <div class="col-6">
                                    <div class="single-input">
                                        <label for="email">Date</label>
                                        <input type="date" id="email" name="date" placeholder="Enter your Email">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="single-input">
                                        <label for="email">Enter Your Pasword</label>
                                        <input type="text" id="email" name="password" placeholder="Enter your Email">
                                    </div>
                                </div>
                                
                                <div class="btn-area text-center">
                                    <button class="cmn-btn" type="submit" name="sign_up">Sign Up</button>
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