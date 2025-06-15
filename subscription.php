<?php
require_once ("header.php");

$query="SELECT * from subscription ";
$subscriptions=db::getRecords($query);
?>
<!-- banner-section start -->
<section class="banner-section inner-banner tipster-profile find-tipster">
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
                            <h1>Our Subscription</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex align-items-center">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Subscription</li>
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
<section class="match-betting-content">
    <div class="overlay">
       <div class="container">
        <div class="row wow fadeInUp d-flex justify-content-center">
            <div class="col-lg-12 mt-5 pt-5">
                <div class="section-header text-center" style="margin-bottom: 0px; margin-top: 100px;">
                    <h2 class="title">Our Subscription</h2>
                    <p>See what my customers have to say.Find out what our clients are saying below</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="all-items mt-60">
                <?php
                if($subscriptions)
                {
                    foreach($subscriptions as $subscription)
                    {
                      ?>
                      <div class="single-item">
                        <div>
                            <h4 class="web">
                                <?php echo $subscription['heading']; ?>
                            </h4>
                        </div>
                        <div class="price">
                            <h1>
                                <?php echo $subscription['price']; ?>
                            </h1>
                        </div>
                        <div class="heading">
                            <p>
                                <?php echo $subscription['dcp']; ?>
                            </p>
                        </div>
                        <div class="buynow">
                            <a href="sign_up.php?id=<?php  echo $subscription['id']; ?>" class="cmn-btn buy w-100"><?php echo $subscription['button_name']; ?></a>
                      </div>
                  </div>
                  <?php
              }
          }
          ?>
      </div>
  </div>
</section>
<?php
require_once("footer.php");
?>