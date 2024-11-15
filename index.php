<?php require_once 'includes/header.php'; ?>

<style>
	#slider {
		margin: 0;
		padding: 0;
	}

	.carousel-item {
		position: relative;
		/* تمكين وضع الطبقة فوق الصورة */
	}

	.image-overlay {
		position: relative;
	}

	.image-overlay img {
		max-height: 700px;
		/* ارتفاع مناسب للشاشة */
		width: 100%;
		object-fit: cover;
	}

	.image-overlay::before {
		content: "";
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.4);
		/* طبقة سوداء شفافة */
	}

	.carousel-caption {
		position: absolute;
		bottom: 20px;
		left: 50%;
		transform: translateX(-50%);
		background: rgba(0, 0, 0, 0.6);
		padding: 25px;
		border-radius: 10px;
		max-width: 70%;
		text-align: center;
	}

	.carousel-caption h5 {
		font-size: 2.8rem;
		font-weight: bold;
	}

	.carousel-caption p {
		font-size: 1.5rem;
		line-height: 1.5;
	}
</style>
<?php require_once 'includes/sidebar_for_all.php'; ?>


<div class="container-fluid px-0" id="slider">
	<div class="row">
		<div class="col-md-12">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<ol class="carousel-indicators">
					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
					<li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
				</ol>
				<div class="carousel-inner">
					<?php
					$slides = $getFromU->selectSlide1();
					$is_first = true;
					foreach ($slides as $slide) {
						$slide_image = $slide->slide_image;
						$slide_name  = $slide->slide_name;
						$slide_title  = $slide->slide_title;
						$slide_text  = $slide->slide_text;
					?>
						<div class="carousel-item <?php echo $is_first ? 'active' : ''; ?>">
							<div class="image-overlay">
								<img class="d-block w-100 img-fluid" src="admin_area/slides_images/<?php echo $slide_image; ?>" alt="<?php echo $slide_name; ?>">
							</div>
							<div class="carousel-caption d-none d-md-block">
								<h5 class="display-4"><?php echo $slide_title; ?></h5>
								<p><?php echo $slide_text; ?></p>
							</div>
						</div>
					<?php
						$is_first = false;
					} ?>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</a>
			</div>
		</div>
	</div>
</div>


<div class="container mt-5 advantages"> <!-- advantages starts -->
	<div class="row">
		<?php
		$view_boxes = $getFromU->viewAllFromTable('boxes_section');
		foreach ($view_boxes as $view_box) {
			$box_title = $view_box->box_title;
			$box_desc = $view_box->box_desc;
		?>

			<div class="col-sm-12 col-md-4 mb-4">
				<div class="card shadow-lg border-light rounded-lg overflow-hidden">
					<div class="card-body text-center">
						<h5 class="card-title text-uppercase text-primary"><?php echo $box_title; ?></h5>
						<p class="card-text text-muted"><?php echo $box_desc; ?></p>
					</div>
				</div>
			</div>

		<?php } ?>
	</div>
</div> <!-- advantages ends -->

<div id="hot">
	<div class="container-fluid mt-4 px-0">
		<div class="row">
			<div class="col-12">
				<h2 class="p-4 bg-info text-white text-center text-uppercase rounded">Latest This Week</h2>
			</div>
		</div>
	</div>
</div>

<div class="container" id="content">
	<div class="row">
		<?php
		$getProducts = $getFromU->selectLatestProduct();
		foreach ($getProducts as $getProduct) {
			$product_id = $getProduct->product_id;
			$product_title = $getProduct->product_title;
			$product_price = $getProduct->product_price;
			$product_img1 = $getProduct->product_img1;
			$product_label = $getProduct->product_label;
			$product_psp_price = $getProduct->product_psp_price;
			$customer_id = $getProduct->customer_id;

			// Handling Sale and Gift Labels
			if ($product_label == "Sale" || $product_label == "Gift") {
				$product_price = "<del>$$product_price</del>";
				$product_psp_price = "<i class='fas fa-long-arrow-alt-right'></i> $$product_psp_price";
			} else {
				$product_price = "$$product_price";
				$product_psp_price = "";
			}

			$view_customer = $getFromU->view_customer_by_id($customer_id);
			@$the_customer_name = $view_customer->customer_name;
			if ($the_customer_name == NULL) {
				$the_customer_name = "Admin";
			}
		?>
			<div class="col-sm-6 col-md-4 col-lg-3 mb-4">
				<div class="card product-card shadow-sm rounded-lg position-relative">
					<a href="details.php?product_id=<?php echo $product_id; ?>">
						<img class="card-img-top img-fluid p-3 rounded" src="admin_area/product_images/<?php echo $product_img1; ?>" alt="Product Image">
					</a>
					<div class="card-body text-center">
						<p class="btn btn-sm btn-info mb-0">Mnf By: <?php echo $the_customer_name; ?></p>
						<hr>
						<h6 class="card-title text-truncate">
							<a href="details.php?product_id=<?php echo $product_id; ?>" class="text-dark"><?php echo $product_title; ?></a>
						</h6>
						<p class="card-text">
							<span class="d-block product-price"><?php echo $product_price; ?></span>
							<?php if ($product_psp_price): ?>
								<span class="d-block text-warning"><?php echo $product_psp_price; ?></span>
							<?php endif; ?>
						</p>
						<div class="row">
							<div class="col-md-6 mb-2">
								<a href="details.php?product_id=<?php echo $product_id; ?>" class="btn btn-outline-info btn-sm w-100">Details</a>
							</div>
							<div class="col-md-6 mb-2">
								<a href="details.php?product_id=<?php echo $product_id; ?>" class="btn btn-success btn-sm w-100">
									<i class="fas fa-shopping-cart"></i> Add
								</a>
							</div>
						</div>
					</div>

					<!-- Sale and Gift Labels -->
					<?php if (!empty($product_label)): ?>
						<a class="label <?php echo strtolower($product_label); ?>" style="position: absolute; top: 10px; right: 10px; z-index: 1;">
							<div class="thelabel"><?php echo $product_label; ?></div>
						</a>
					<?php endif ?>

				</div>
			</div>
		<?php } ?>
	</div>
</div>



</div>
</div>


<?php require_once 'includes/footer.php'; ?>