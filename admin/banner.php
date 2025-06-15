<?php
require_once("header.php");
require_once("sidebar.php");


$query="SELECT * from banner ";
$banner=db::getRecord($query);
?>
<!-- main content start -->
<div class="main-content">

    <div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>Update Banner Fields</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel mb-25">
                    <div class="panel-body">
                        <div class="row g-3">
                            <form method="POST" action="action.php" enctype="multipart/form-data">
                                <div class="col-sm-12 ">
                                    <label for="formFile" class="form-label">Heading</label>
                                    <input class="form-control" type="text" id="formFile" name="heading"
                                        value="<?php echo $banner['heading']; ?>">
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <label for="formFile" class="form-label">Title</label>
                                    <input class="form-control" type="text" id="formFile" name="title"
                                        value="<?php echo $banner['title']; ?>">
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <label for="formFile" class="form-label">Upload Your Image</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <label for="basicInput" class="form-label">Description</label>
                                    <textarea class="form-control" style="height: 300px !important"
                                        name="dcp"><?php echo $banner['dcp']; ?></textarea>
                                </div>

                                <input type="hidden" name="id" value="<?php echo $banner['id']; ?>">

                                <div class="row mt-3">
                                    <div class="col-md-4 mx-auto">
                                        <button type="submit" name="update_banner"
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