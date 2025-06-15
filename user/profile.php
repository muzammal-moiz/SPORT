<?php
require_once("header.php");
require_once("sidebar.php");


$query="SELECT * from user ";
$user=db::getRecord($query);
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
							<form method="POST" action="action.php" enctype="multipart/form-data" >
								<div class="col-sm-12 ">
									<label for="formFile" class="form-label">Name</label>
									<input class="form-control" type="text" id="formFile" name="name" value="<?php echo $user['name']; ?>">
								</div>

								<div class="col-sm-12 mt-3">
									<label for="formFile" class="form-label">Email</label>
									<input class="form-control" type="text" id="formFile" name="email" value="<?php echo $user['email']; ?>">
								</div>

								<div class="col-sm-12 mt-3">
									<label for="formFile" class="form-label">Password</label>
									<input class="form-control" type="text" id="formFile" name="password" value="<?php echo $user['password']; ?>">
								</div>

								<div class="col-sm-12 mt-3">
									<label for="formFile" class="form-label">Date</label>
									<input class="form-control" type="date" id="formFile" name="date" value="<?php echo $user['date']; ?>">
								</div>

								<input type="hidden" name="id" value="<?php echo $user['id']; ?>">

								<div class="row mt-3">
									<div class="col-md-4 mx-auto">
										<button type="submit" name="update_user"  class="btn btn-success w-100">Update</button>
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