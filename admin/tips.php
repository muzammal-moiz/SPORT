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
			<div class="card" style="background: #7924c7;">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<h4 class="mb-0 text-light">Tips</h4>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<a href="add_tips.php" class="btn btn-primary w-100">Add Tips</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row mb-25">
		<?php
		if($recs)
		{
			foreach($recs as $rec)
			{
				?>
				<div class="col-lg-4 col-6 col-xs-12">
					<div class="card main_card">
						<div class="card-body">
							<h5 class="mb-3">Date: <?php  echo $rec['date'] ?></h5>
							<p><?php  echo $rec['dcp'] ?></p>
							

							<div class="row">
								<div class="col-md-6">
									<a href="update_tips.php?id=<?php  echo $rec['id']; ?>" class="btn btn-primary w-100 text-dark">Edit</a>
								</div>
								<div class="col-md-6">
									<a href="action.php?del_tips=<?php  echo $rec['id']; ?>" class="btn btn-outline-danger w-100 text-dark">Trash</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
			}
		}
		?>
	</div>

	<?php
	require_once("footer.php")
?>