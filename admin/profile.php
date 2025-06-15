<?php
require_once("header.php");
require_once("sidebar.php");


$query="SELECT * from admin ";
$admin=db::getRecord($query);
?>

<!-- main content start -->
<div class="main-content">

    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Update Profile Fields</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel mb-25">
                    <div class="panel-body">
                        <div class="row g-3">
                            <form method="POST" action="action.php" enctype="multipart/form-data">
                                <div class="col-sm-12 ">
                                    <label for="formFile" class="form-label">Name</label>
                                    <input class="form-control" type="text" id="formFile" name="name"
                                        value="<?php echo $admin['name']; ?>">
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <label for="formFile" class="form-label">Email</label>
                                    <input class="form-control" type="text" id="formFile" name="email"
                                        value="<?php echo $admin['email']; ?>">
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <label for="formFile" class="form-label">Password</label>
                                    <input class="form-control" type="text" id="formFile" name="password"
                                        value="<?php echo $admin['password']; ?>">
                                </div>

                                <input type="hidden" name="id" value="<?php echo $admin['id']; ?>">

                                <div class="row mt-3">
                                    <div class="col-md-4 mx-auto">
                                        <button type="submit" name="update_admin"
                                            class="btn btn-success w-100">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <?php
	require_once("footer.php")
?>