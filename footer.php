<?php
require_once("admin/database.php");

$query="SELECT * from logo ";
$logo=db::getRecord($query);
?>
<!-- Footer Area Start -->
<footer class="footer-section">
    <div class="container pt-120">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="newsletter">
                    <div class="section-header text-center">
                        <h3 class="title">Newsletter</h3>
                        <p>Subscribe to our newsletter and be the first to receive news</p>
                    </div>
                    <form action="admin/action.php" method="POST">
                        <div class="form-group d-flex align-items-center">
                            <input type="text" placeholder="Enter Your Email" name="email">
                            <button type="submit" name="add_newslatter"><img src="assets/images/icon/send-icon.png"
                                    alt="icon"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area pt-120">
            <div class="row">
                <div class="col-xl-12">
                    <div class="menu-item">
                        <a href="index.php" class="logo">
                            <img src="admin/uploads/<?php echo $logo['image']; ?>"
                                style="    width: 130px;border-radius: 100%;">
                        </a>
                        <ul class="footer-link">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="service.php">Service</a></li>
                            <li><a href="subscription.php">Subscription</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copyright">
                        <div class="copy-area">
                            <p> <?php echo $logo['contant']; ?>
                            </p>
                        </div>
                        <div class="social-link d-flex align-items-center">
                            <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                            <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/fontawesome.js"></script>
<script src="assets/js/plugin/slick.js"></script>
<script src="assets/js/plugin/jquery.nice-select.min.js"></script>
<script src="assets/js/plugin/counter.js"></script>
<script src="assets/js/plugin/waypoint.min.js"></script>
<script src="assets/js/plugin/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugin/wow.min.js"></script>
<script src="assets/js/plugin/plugin.js"></script>
<script src="assets/js/main.js"></script>
</body>

</html>