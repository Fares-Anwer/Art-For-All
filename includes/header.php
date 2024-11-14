<?php require_once 'core/init.php'; ?>

<?php
$ip_add = $getFromU->getRealUserIp();
$total = 0;
$records = $getFromU->select_products_by_ip($ip_add);
foreach ($records as $record) {
	$product_id = $record->p_id;
	$product_price = $record->product_price;
	$product_qty = $record->qty;
	$get_prices = $getFromU->viewProductByProductID($product_id);
	foreach ($get_prices as $get_price) {
		$sub_total = $product_price * $product_qty;
		$total += $sub_total;
	}
}
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

	<title>eCommerce Store</title>
</head>

<body>

	<!-- Top bar with navigation -->
	<div id="top" class="bg-dark text-light py-2"> <!-- Top Starts -->
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="col-md-6">
					<a href="customer/my_account.php" class="btn btn-info btn-sm">
						<?php
						if (!isset($_SESSION['customer_email'])) {
							echo "Welcome : <strong class='text-uppercase'>Guest</strong>";
						} else {
							$customer = $getFromU->view_customer_by_email($_SESSION['customer_email']);
							$customer_name = $customer->customer_name;
							echo "Welcome : <strong class='text-uppercase'>$customer_name</strong>";
						}
						?>
					</a>
				</div>

				<div class="col-md-6">
					<ul class="nav justify-content-end">
						<?php if (!isset($_SESSION['customer_email'])): ?>
							<li class="nav-item"><a class="nav-link text-light" href="customer_register.php">Register</a></li>
						<?php endif ?>

						<?php if (!isset($_SESSION['customer_email'])): ?>
							<li class="nav-item"><a class="nav-link text-light" href="checkout.php">My Account</a></li>
						<?php else: ?>
							<li class="nav-item"><a class="nav-link text-light" href="customer/my_account.php?my_orders">My Account</a></li>
						<?php endif ?>

						<li class="nav-item"><a class="nav-link text-light" href="cart.php">Go To Cart</a></li>
						<li class="nav-item"><a class="nav-link text-light" href="insert_products.php">Add Products</a></li>
						<li class="nav-item">
							<?php if (!isset($_SESSION['customer_email'])): ?>
								<a class="nav-link text-light" href="checkout.php">Login</a>
							<?php else: ?>
								<a class="nav-link text-light" href="logout.php">Logout</a>
							<?php endif ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- Top Ends -->

	<!-- Navbar Removed -->

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>