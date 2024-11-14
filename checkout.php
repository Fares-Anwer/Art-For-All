<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/sidebar_for_all.php'; ?>


<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">Checkout</li>
					</ol>
				</nav>
			</div>


			<div class="col-md-12 mb-5">
				<?php
				if (!isset($_SESSION['customer_email'])) {
					require_once 'customer/customer_login.php';
				} else {
					require_once 'payment_options.php';
				}


				?>
			</div> <!-- col-md-9 End -->



		</div> <!-- Row End -->





	</div> <!-- SINGLE PRODUCT ROW END -->

</div>
</div>




<?php require_once 'includes/footer.php'; ?>