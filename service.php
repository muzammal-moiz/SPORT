<?php
require_once ("header.php");

$query="SELECT * from services ";
$servicess=db::getRecords($query);
?>


<!-- banner-section start -->
<section class="banner-section inner-banner about">
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
							<h1>Our Service</h1>
							<div class="breadcrumb-area">
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb d-flex align-items-center">
										<li class="breadcrumb-item"><a href="index.php">Home</a></li>
										<li class="breadcrumb-item active" aria-current="page">Service</li>
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


<!-- Support Help Center In start -->
<section class="support-help-center mt-5" >
    <div class="overlay pb-120">
        <div class="container">
            <div class="col-lg-8 mx-auto" >
               <div class="section-header text-center">
                <h2 class="title pt-5 mt-5">Our services</h2>
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
                        <a href=""><h5><?php echo $services['heading']; ?></h5></a>
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


<?php
require_once("footer.php");
?>