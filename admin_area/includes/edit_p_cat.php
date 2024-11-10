<?php require_once 'includes/header.php'; ?>

<?php

if (isset($_GET['edit_p_cat'])) {
	$p_cat_id 			= $_GET['edit_p_cat'];

	$view_p_category 	= $getFromU->view_All_By_p_cat_ID($p_cat_id);
	$p_cat_title 	= $view_p_category->p_cat_title;
	$p_cat_top 	= $view_p_category->p_cat_top;
	$p_cat_image 	= $view_p_category->p_cat_image;
}

?>

<?php

if (isset($_POST['update_p_cat'])) {
	$p_cat_title 		= $_POST['p_cat_title'];
	$Category 			= $_POST['Category'];
	$p_cat_id 			= $_POST['p_cat_id'];

	$update_p_cat = $getFromU->update_p_cat("product_categories", $p_cat_id, array("p_cat_title" => $p_cat_title, "Category" => $Category));

	if ($update_p_cat) {
		$_SESSION['product_update_msg'] = "Subategory has been Updated Sucessfully";
		header('Location: index.php?view_p_cats');
	} else {
		echo '<script>alert("Product has not added")</script>';
	}
}

?>

<nav aria-label="breadcrumb" class="my-4">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="index.php?dashboard">Dashboard</a></li>
		<li class="breadcrumb-item active" aria-current="page">Update Subategory</li>
	</ol>
</nav>



<div class="card rounded">
	<div class="card-header bg-light h5"><i class="fas fa-edit"></i> Update Subategory</div>
	<div class="card-body">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<form method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
					<div class="form-row mb-3">
						<div class="col-md-9">
							<input type="hidden" name="p_cat_id" value="<?php echo $p_cat_id; ?>" required>
						</div>
					</div>
					<div class="form-row mb-3">
						<div class="col-3">
							<label for="p_cat_title">Subategory Title</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="p_cat_title" class="form-control" id="p_cat_title" value="<?php echo $p_cat_title; ?>" placeholder="Product Title" required>
							<div class="invalid-feedback">
								Please provide a Subategory Title.
							</div>
						</div>
					</div>

					<div class="form-row mb-3">
						<div class="col-3">
							<label for="p_cat_image">Subategory Image</label>
						</div>
						<div class="col-md-9">
							<input type="text" name="Category" value="<?php echo $Category; ?>" id="Category" required>
							<div class="invalid-feedback">
								Please provide a Subategory Image.
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 mt-4">
							<button class="btn btn-info form-control" name="update_p_cat" type="submit"><i class="fas fa-edit"></i> Update Subategory</button>
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