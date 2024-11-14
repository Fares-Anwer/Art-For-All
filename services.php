<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar_for_all.php'; ?>

<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">Services</li>
					</ol>
				</nav>
			</div>

			<div class="col-md-12 mb-4">
				<div class="card-deck">
					<?php
					$get_services = $getFromU->viewAllFromTable('services');
					foreach ($get_services as $get_service) {
						$service_id = $get_service->service_id;
						$service_title = $get_service->service_title;
						$service_desc = $get_service->service_desc;
					?>


						<div class="card text-justify">
							<div class="card-body">
								<h4 class="card-title"><?php echo $service_title; ?></h4>
								<p class="card-text"><?php echo $service_desc; ?></p>
							</div>
							<div class="card-footer">
							</div>
						</div>
					<?php } ?>

				</div>



			</div> <!-- col-md-9 End -->


		</div> <!-- Row End -->





	</div> <!-- SINGLE PRODUCT ROW END -->

</div>
</div>




<?php require_once 'includes/footer.php'; ?>