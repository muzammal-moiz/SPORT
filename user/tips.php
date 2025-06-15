<?php
require_once("header.php");
require_once("sidebar.php");

$query="SELECT * from tips";
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
							<h4 class="mb-0 text-light">Tips </h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12">
		<div class="card table-responsive" style="background: #fff;">
			<div class="card-body">
				<table class="table table-bordered table-dashed table-hover digi-dataTable dataTable-resize table-striped" id="componentDataTable3">
					<thead>
						<tr>
							<th><span class="resize-col">Date</span></th>
							<th style="text-align: left !important;"><span class="resize-col">Tips</span></th>
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
									<td><span class="resize-col"><?php  echo $rec['date'] ?></span></td>
									<td style="text-align: left !important;">
										<span class="resize-col">
											<?php
											$descriptionLines = explode("\n", $rec['dcp']);
											foreach ($descriptionLines as $line) {
												echo $line . '<br>';
											}
											?>
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