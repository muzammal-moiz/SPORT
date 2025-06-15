<?php
    require_once("header.php");
    require_once("sidebar.php");
?>



<!-- main content start -->
<div class="main-content">
    <div class="dashboard-breadcrumb mb-25">
        <h2>Soccar Beting User Dashboard</h2>
        
    </div>
    <div class="row mb-25">
        <div class="col-lg-3 col-6 col-xs-12">
            <div class="dashboard-top-box rounded-bottom panel-bg">
                <div class="left">
                    <h3>$34,152</h3>
                    <p>Shipping fees are not</p>
                    <a href="#">View net earnings</a>
                </div>
                <div class="right">
                    <span class="text-primary">+16.24%</span>
                    <div class="part-icon rounded">
                        <span><i class="fa-light fa-dollar-sign"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 col-xs-12">
            <div class="dashboard-top-box rounded-bottom panel-bg">
                <div class="left">
                    <h3>36,894</h3>
                    <p>Orders</p>
                    <a href="#">Excluding orders in transit</a>
                </div>
                <div class="right">
                    <span class="text-primary">+16.24%</span>
                    <div class="part-icon rounded">
                        <span><i class="fa-light fa-bag-shopping"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 col-xs-12">
            <div class="dashboard-top-box rounded-bottom panel-bg">
                <div class="left">
                    <h3>$34,152</h3>
                    <p>Customers</p>
                    <a href="#">See details</a>
                </div>
                <div class="right">
                    <span class="text-primary">+16.24%</span>
                    <div class="part-icon rounded">
                        <span><i class="fa-light fa-user"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-6 col-xs-12">
            <div class="dashboard-top-box rounded-bottom panel-bg">
                <div class="left">
                    <h3>$724,152</h3>
                    <p>My Balance</p>
                    <a href="#">Withdraw</a>
                </div>
                <div class="right">
                    <span class="text-primary">+16.24%</span>
                    <div class="part-icon rounded">
                        <span><i class="fa-light fa-credit-card"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xxl-12">
            <div class="panel chart-panel-1">
                <div class="panel-header">
                    <h5>Sales Analytics</h5>
                    <div class="btn-box">
                        <button class="btn btn-sm btn-outline-primary">Week</button>
                        <button class="btn btn-sm btn-outline-primary">Month</button>
                        <button class="btn btn-sm btn-outline-primary">Year</button>
                    </div>
                </div>
                <div class="panel-body">
                    <div id="saleAnalytics" class="chart-dark"></div>
                </div>
            </div>
        </div>
        
    </div>

    <?php
        require_once("footer.php")
    ?>