<?php
require_once("header.php");

$query="SELECT * from banner ";
$banner=db::getRecord($query);

$query="SELECT * from about ";
$abouts=db::getRecords($query);

$query="SELECT * from services ";
$servicess=db::getRecords($query);

$query="SELECT * from testimonials ";
$testimonialss=db::getRecords($query);

$query="SELECT * from subscription ";
$subscriptions=db::getRecords($query);
?>
<!-- banner-section start -->
<section class="banner-section">
    <div class="overlay">
        <div class="shape-area">
            <img src="assets/images/banner-obj-1.png" class="obj-1" alt="image">
            <img src="assets/images/banner-obj-2.png" class="obj-2" alt="image">
            <img src="assets/images/banner-obj-3.png" class="obj-3" alt="image">
        </div>
        <div class="banner-content d-flex align-items-center">
            <div class="container">
                <div class="light-area">
                    <img src="assets/images/light-effect.png" class="light-1" alt="image">
                    <img src="assets/images/light-effect.png" class="light-2" alt="image">
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-10">
                        <div class="main-content">
                            <div class="top-area section-text text-center justify-content-center">
                                <h4 class="sub-title"><?php echo $banner['title']; ?></h4>
                                <h1 class="title"><?php echo $banner['heading']; ?></h1>
                                <div class="row">
                                    <div class="col-md-9 mx-auto">
                                        <p><?php echo $banner['dcp']; ?></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="img-area">
            <img src="admin/uploads/<?php echo $banner['image']; ?>" alt="image">
        </div>
    </div>
</section>
<!-- banner-section end -->

<!-- How it works In start -->

<section class="how-it-works">
    <div class="overlay pt-120 pb-120">
        <div class="container wow fadeInUp">
            <?php
            if($abouts)
            {
                $i=1;
                foreach($abouts as $about)
                {
                    if($i%2!=0)
                    {
                        ?>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="img-area">
                        <img src="admin/uploads/<?php echo $about['image']; ?>" alt="image">
                        <h3><?php echo $about['id']; ?></h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <h3 class="title"><?php echo $about['heading']; ?></h3>
                    <p><?php echo $about['dcp']; ?></p>
                </div>
            </div>
            <?php   
                    }
                    else
                    {
                        ?>
            <div class="row mid-area pt-120 pb-120 align-items-center justify-content-between">
                <div class="col-lg-5 order-lg-0 order-1">
                    <h3 class="title"><?php echo $about['heading']; ?></h3>
                    <p><?php echo $about['dcp']; ?></p>
                </div>
                <div class="col-lg-5">
                    <div class="img-area">
                        <img src="admin/uploads/<?php echo $about['image']; ?>" alt="image">
                        <h3><?php echo $about['id']; ?></h3>
                    </div>
                </div>
            </div>
            <?php
                    }
                    $i++;
                }
            }
            ?>
        </div>
    </div>
</section>
<!-- How it works In end -->

<!-- Support Help Center In start -->
<section class="support-help-center mt-5">
    <div class="overlay pb-120">
        <div class="container">
            <div class="col-lg-8 mx-auto">
                <div class="section-header text-center">
                    <h2 class="title pt-5 mt-5">Our service</h2>
                    <p>Make multiple combinations to find the Best Tipsters and get inspired from their
                        predictions. Winning Bets in Three Simple Steps. bitips gives you more winning tips, a
                        greater financial return and a constant stream of thrilling victories in only three
                        short steps.</p>
                </div>
            </div>
            <div class="row pt-120 cus-mar">
                <?php
            if($servicess)
            {
                foreach($servicess as $services)
                {
                  ?>
                <div class="col-lg-4 col-md-6 mt-3">
                    <div class="single-item h-100">
                        <div class="img-area">
                            <img src="admin/uploads/<?php echo $services['image']; ?>" alt="icon">
                        </div>
                        <a href="">
                            <h5><?php echo $services['heading']; ?></h5>
                        </a>
                        <p><?php echo $services['dcp']; ?></p>
                    </div>
                </div>
                <?php
            }
        }
        ?>
            </div>
        </div>
    </div>
</section>
<!-- Support Help Center In end -->


<!-- Testimonials In start -->
<section class="testimonials">
    <div class="overlay pt-120">
        <div class="container">
            <div class="row wow fadeInUp d-flex justify-content-center">
                <div class="col-lg-12">
                    <div class="section-header text-center">
                        <h2 class="title">Testimonials</h2>
                        <p>See what my customers have to say.Find out what our clients are saying below</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonials-carousel">
                    <?php
                    if($testimonialss)
                    {
                        foreach($testimonialss as $testimonials)
                        {
                          ?>
                    <div class="single">
                        <div class="single-slide">
                            <p class="xlr"><?php echo $testimonials['dcp']; ?></p>
                            <div class="profile-area d-flex align-items-center">
                                <div class="img-area">
                                    <img src="admin/uploads/<?php echo $testimonials['image']; ?>" alt="image">
                                </div>
                                <div class="text-area">
                                    <h6><?php echo $testimonials['name']; ?></h6>
                                    <p class="mdr"><?php echo $testimonials['designation']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</section></br>
<!-- Testimonials In end -->


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
                            <a href="sign_up.php?id=<?php  echo $subscription['id']; ?>"
                                class="cmn-btn buy w-100"><?php echo $subscription['button_name']; ?></a>
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