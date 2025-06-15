<?php
require_once("header.php");

$query="SELECT * from about ";
$abouts=db::getRecords($query);

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
                            <h1>About Us</h1>
                            <div class="breadcrumb-area">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb d-flex align-items-center">
                                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
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
<?php
if($abouts)
{
    $i=1;
    foreach($abouts as $about)
    {
        if($i%2!=0)
        {
            ?> 
            <!-- About Us In start -->
            <section class="about-us mt-5 pt-5">
                <div class="overlay pt-120 pb-120">
                    <div class="container wow fadeInUp">
                        <div class="row justify-content-between">
                            <div class="col-lg-5 text-center">
                                <img src="admin/uploads/<?php echo $about['image']; ?>" alt="image">
                            </div>
                            <div class="col-lg-6 mt-5 pt-5">
                                <div class="section-area">
                                    <h2 class="title"><?php echo $about['heading']; ?></h2>
                                    <p><?php echo $about['dcp']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About Us In end -->
            <?php   
        }
        else
        {
            ?> 
            <!-- What We Do In start -->
            <section class="what-we-do ">
                <div class="overlay pt-120 pb-120">
                    <div class="container wow fadeInUp">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <div class="section-area">
                                    <h2 class="title"><?php echo $about['heading']; ?></h2>
                                    <p><?php echo $about['dcp']; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-5 text-center">
                                <img src="admin/uploads/<?php echo $about['image']; ?>" alt="image">
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <?php
        }
        $i++;
    }
}

?> 

<?php
require_once("footer.php");
?>