<?php
require_once("header.php");
require_once("sidebar.php");

$query="SELECT * from user";
$recs=db::getRecords($query);
?>

<!-- main content start -->
<div class="main-content">
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="card" style="background:#7924c7;">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<h4 class="mb-0 text-light">User</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12">
		<div class="card" style="background: #fff;">
			<div class="card-body">
				<table class="table table-bordered table-dashed table-hover digi-dataTable dataTable-resize table-striped" id="componentDataTable3">
					<thead>
						<tr>
							<th><span class="resize-col">Name</span></th>
							<th><span class="resize-col">Email</span></th>
							<th><span class="resize-col">Password</span></th>
							<th><span class="resize-col">Joining Date</span></th>
							<th><span class="resize-col">Action</span></th>
							<th><span class="resize-col">Subscription</span></th>
						</tr>
					</thead>
					<tbody>
						<?php
						if($recs)
						{
							foreach($recs as $rec)
							{
								?>
								<tr>
									<td><span class="resize-col"><?php  echo $rec['name'] ?></span></td>
									<td><span class="resize-col"><?php  echo $rec['email'] ?></span></td>
									<td><span class="resize-col"><?php  echo $rec['password'] ?></span></td>
									<td><span class="resize-col"><?php  echo $rec['date'] ?></span></td>
									<td>
										<span class="resize-col">
											<a href="update_user.php?id=<?php  echo $rec['id']; ?>" class="btn w-100 btn-primary text-light" style="text-decoration: none;">Update</a>
										</span>
									</td>
									<td>
										<span class="resize-col">
											<a href="view_subscription.php?email=<?php  echo $rec['email']; ?>" class="btn w-100 btn-danger text-light" style="text-decoration: none;">View</a>
										</span>
									</td>
								</tr>
								<?php
							}
						}
						?>

					</tbody>
				</table>
			</div>
		</div>
	</div>

	<?php
	require_once("footer.php")
?>