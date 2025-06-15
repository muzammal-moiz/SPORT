<?php
require_once("header.php");
require_once("sidebar.php");

$email=$_GET['email'];
$data="SELECT * FROM subscription_user WHERE email='$email'";
$recs=db::getRecords($data);
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
							<th><span class="resize-col">Amount</span></th>
							<th><span class="resize-col">Subscription</span></th>
							<th><span class="resize-col">Expire Date</span></th>
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
									<td><span class="resize-col">$ 100</span></td>
									<td><span class="resize-col">1 </span></td>
									<td><span class="resize-col"><?php  echo $rec['date'] ?></span></td>
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