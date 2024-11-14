<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar_for_all.php'; ?>
<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">About Us</li>
					</ol>
				</nav>
			</div>
			<?php
			$get_about = $getFromU->viewFromTable('about_us');
			$about_id = $get_about->about_id;
			$about_heading = $get_about->about_heading;
			$about_short_desc = $get_about->about_short_desc;
			$about_desc = $get_about->about_desc;
			?>


			<div class="col-md-12 mb-4">
				<div class="card">
					<div class="card-header text-center">
						<h5 class="mt-4"><?php echo $about_heading; ?></h5>
					</div>
					<div class="card-body text-justify">
						<div class="col-md-12">
							<p class="lead font-italic"><?php echo $about_short_desc; ?></p>
							<p><?php echo $about_desc; ?></p>
						</div>
					</div>
				</div> <!-- Card End -->



			</div> <!-- col-md-9 End -->


		</div> <!-- Row End -->





	</div> <!-- SINGLE PRODUCT ROW END -->

</div>
</div>




<?php require_once 'includes/footer.php'; ?>