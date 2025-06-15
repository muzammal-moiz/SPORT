<?php
require_once("header.php");
require_once("sidebar.php");

$query="SELECT * from newsletter";
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
							<h4 class="mb-0 text-light">Newsletter </h4>
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
							<th><span class="resize-col">ID</span></th>
							<th><span class="resize-col">Email Address</span></th>
							<th><span class="resize-col">Action</span></th>
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
									<td><span class="resize-col"><?php  echo $rec['id'] ?></span></td>
									<td><span class="resize-col"><?php  echo $rec['email'] ?></span></td>
									<td><span class="resize-col">
										<a href="action.php?del_newsletter=<?php  echo $rec['id']; ?>" class="btn  btn-danger text-light" style="text-decoration: none;">Trash</a>
									</span></td>
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