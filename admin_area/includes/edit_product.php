<?php require_once 'includes/header.php'; ?>

<?php

if (isset($_GET['edit_product'])) {
	$product_id 			= $_GET['edit_product'];

	$view_product 		= $getFromU->view_Product_By_Product_ID($product_id);

	$product_title 		= $view_product->product_title;
	$cat_id 				= $view_product->cat_id;
	$product_price 		= $view_product->product_price;
	$product_psp_price = $view_product->product_psp_price;
	$product_desc 		= $view_product->product_desc;
	$product_keywords = $view_product->product_keywords;
	$the_product_img1 = $view_product->product_img1;
	$product_label 		= $view_product->product_label;
	$the_status 		  = $view_product->status;
	$customer_id = $view_product->customer_id;
	$view_p_category 	= $getFromU->view_All_By_cat_id($cat_id);

	$view_category 		= $getFromU->view_All_By_cat_ID($cat_id);
	$the_cat_title 		= $view_category->cat_title;
}

?>

<?php

if (isset($_POST['update_product'])) {
	$product_title 		= $_POST['product_title'];
	$cat_id 					= $_POST['cat'];
	$product_price 		= $_POST['product_price'];
	$product_psp_price = $_POST['product_psp_price'];
	$product_desc 		= $_POST['product_desc'];
	$product_keywords = $_POST['product_keywords'];
	$product_label    = $_POST['product_label'];
	$status    				= $_POST['status'];
	$customer_id 		= $_POST['customer_id'];
	$product_img1 		= $_FILES['product_img1']['name'];

	$temp_name1 			= $_FILES['product_img1']['tmp_name'];

	if (empty($product_img1)) {
		$product_img1 = $the_product_img1;
	}


	move_uploaded_file($temp_name1, "product_images/$product_img1");

	$update_product = $getFromU->update_product("artwork", $product_id, array("cat_id" => $cat_id, "add_date" => date("Y-m-d H:i:s"), "product_title" => $product_title, "product_img1" => $product_img1, "product_price" => $product_price, "product_psp_price" => $product_psp_price, "product_desc" => $product_desc, "product_keywords" => $product_keywords, "product_label" => $product_label, "status" => $status, "customer_id" => $customer_id));

	if ($update_product) {
		$_SESSION['product_update_msg'] = "Product has been Updated Sucessfully";
		header('Location: index.php?view_products');
	} else {
		echo '<script>alert("Product has not added")</script>';
	}
}
echo $customer_id;
?>

<nav aria-label="breadcrumb" class="my-4">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php?dashboard">Dashboard</a></li>
		<li class="breadcrumb-item active" aria-current="page">Update Products</li>
	</ol>
</nav>



<div class="card rounded">
	<div class="card-header bg-light h5"><i class="fas fa-edit"></i> Update Products</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
					<div class="form-row mb-3">
						<div class="col-md-9">
							<input type="hidden" name="product_id" value="<?php echo $product_id; ?>" required>
						</div>
					</div>
					<div class="form-row mb-3">
						<div class="col-3">
							<label for="product_title">Product Title</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="product_title" class="form-control" id="product_title" value="<?php echo $product_title; ?>" placeholder="Product Title" required>
							<div class="invalid-feedback">
								Please provide a Product Title.
							</div>
						</div>
					</div>

					<div class="form-row mb-3">
						<div class="col-3">
							<label for="product_cat">Product Manufacturer</label>
						</div>
						<div class="col-md-9">
							<select name="customer_id" id="manufacturer_id" class="form-control" required>
								<?php
								$customer = $getFromU->view_customer_by_id($customer_id);
								$customer_name = $customer->customer_name;
								// if ($manufacturer_title == $customer_id) {

								?>
								<option value="<?php echo htmlspecialchars($mcustomer_id);
												echo htmlspecialchars($customer_name); ?>"><?php echo htmlspecialchars($customer_name); ?></option>
							</select>
							<div class="invalid-feedback">
								Please select a Product Manufacturer.
							</div>
						</div>
					</div>


					<div class="form-row mb-3">
						<div class="col-md-3">
							<label for="cat">Categories</label>
						</div>
						<div class="col-md-9">
							<select name="cat" id="cat" class="form-control" required>
								<option value="<?php echo $cat_id; ?>"><?php echo $the_cat_title; ?></option>
								<?php
								$categories = $getFromU->viewAllFromTable("categories");
								foreach ($categories as $category) {
									$cat_id = $category->cat_id;
									$cat_title = $category->cat_title;
									if ($cat_title == $the_cat_title) {
										continue;
									}
								?>
									<option value="<?php echo $cat_id; ?>"><?php echo $cat_title; ?></option>
								<?php } ?>
							</select>
							<div class="invalid-feedback">
								Please select a Categories.
							</div>
						</div>
					</div>


					<div class="form-row mb-3">
						<div class="col-md-3">
							<label for="product_img1">Product Image 1</label>
						</div>
						<div class="col-md-9">
							<input type="file" name="product_img1" id="product_img1">
							<img src="product_images/<?php echo $the_product_img1; ?>" width="30" height="30">
							<div class="invalid-feedback">
								Please provide a Product Image 1.
							</div>
						</div>
					</div>
					<div class="form-row mb-3">
						<div class="col-md-3">
							<label for="product_price">Product Price</label>
						</div>
						<div class="col-md-9">
							<input type="number" name="product_price" class="form-control" id="product_price" value="<?php echo $product_price; ?>" placeholder="Enter Product Price" required>
							<div class="invalid-feedback">
								Please provide a Product Price.
							</div>
						</div>
					</div>

					<div class="form-row mb-3">
						<div class="col-md-3">
							<label for="product_psp_price">Product Sale Price</label>
						</div>
						<div class="col-md-9">
							<input type="number" name="product_psp_price" class="form-control" id="product_psp_price" value="<?php echo $product_psp_price; ?>" placeholder="Enter Product Sale Price" required>
							<div class="invalid-feedback">
								Please provide a Product Sale Price.
							</div>
						</div>
					</div>

					<div class="form-row mb-3">
						<div class="col-md-3 ">
							<label for="product_desc">Product Tabs</label>
						</div>
						<div class="col-md-9">
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Product Description</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Product Features</a>
								</li>

							</ul>
							<div class="tab-content" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<textarea name="product_desc" class="form-control summernote" rows="15" id="product_desc" placeholder="Enter Product Description" required><?php echo $product_desc; ?></textarea>
									<div class="invalid-feedback">
										Please provide Product Description.
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="form-row mb-3">
						<div class="col-3 ">
							<label for="product_keywords">Product Keyword</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="product_keywords" class="form-control" value="<?php echo $product_keywords; ?>" id="product_keywords" placeholder="Enter Product Keyword" required>
							<div class="invalid-feedback">
								Please provide Product Keyword.
							</div>
						</div>
					</div>

					<div class="form-row mb-3">
						<div class="col-3 ">
							<label for="product_label">Product Label</label>
						</div>
						<div class="col-md-9">
							<select name="product_label" id="product_label" class="form-control" required>
								<option value="<?php echo $product_label; ?>"><?php echo $product_label; ?></option>
								<option value="New">New</option>
								<option value="Sale">Sale</option>
								<option value="Gift">Gift</option>
							</select>
							<div class="invalid-feedback">
								Please Select Product Label.
							</div>
						</div>
					</div>

					<div class="form-row mb-3">
						<div class="col-md-3">
							<label for="status">Status</label>
						</div>
						<div class="col-md-9">
							<select name="status" id="status" class="form-control" required>
								<option value="<?php echo $the_status; ?>"><?php echo ucwords($the_status); ?></option>
								<?php
								$view_statuses = $getFromU->view_distinct_status();
								foreach ($view_statuses as $view_status) {
									$status = $view_status->status;
									if ($status == $the_status) {
										continue;
									}
								?>
									<option value="<?php echo $status; ?>"><?php echo ucwords($status); ?></option>
								<?php } ?>
							</select>
							<div class="invalid-feedback">
								Please select a Categories.
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-12 mt-4">
							<button class="btn btn-info form-control" name="update_product" type="submit"><i class="fas fa-edit"></i> Update Product</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<script>
			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function() {
				'use strict';
				window.addEventListener('load', function() {
					// Fetch all the forms we want to apply custom Bootstrap validation styles to
					var forms = document.getElementsByClassName('needs-validation');
					// Loop over them and prevent submission
					var validation = Array.prototype.filter.call(forms, function(form) {
						form.addEventListener('submit', function(event) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
							form.classList.add('was-validated');
						}, false);
					});
				}, false);
			})();
		</script>
	</div>
</div>





<?php require_once 'includes/footer.php'; ?>

<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>

<script>
	$(document).ready(function() {
		$('.summernote').summernote();
	});
</script>