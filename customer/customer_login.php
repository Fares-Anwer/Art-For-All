<?php
if (isset($_POST['login'])) {
	$customer_email = $_POST['c_email'];
	$customer_pass = $_POST['c_pass'];

	$login = $getFromU->login($customer_email, $customer_pass);
	if ($login === false) {
		$error = "Email or Password is Wrong";
	} else {
		$_SESSION['login_success_msg'] = "You have Successfully Login";
	}
}
?>

<div class="container mt-5">
	<div class="card shadow-lg border-0 rounded-3">
		<div class="card-body p-5">
			<div class="col-md-12">
				<h3 class="card-title text-center text-info font-weight-bold" style="font-size: 2rem;">Login</h3>
				<p class="card-text text-muted text-center" style="font-size: 1.1rem;">Already our Member? Please Login</p>

				<?php if (isset($error)): ?>
					<div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
						<?php echo $error; ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif ?>

				<form method="post" class="needs-validation" novalidate>
					<div class="form-row">
						<div class="col-12 mb-4">
							<label for="email" class="font-weight-bold text-dark">Email</label>
							<input type="email" name="c_email" class="form-control p-3" id="email" placeholder="Enter Your Email" required>
							<div class="invalid-feedback">
								Please provide a valid Email Address.
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col-12 mb-4">
							<label for="password" class="font-weight-bold text-dark">Password</label>
							<input type="password" name="c_pass" class="form-control p-3" id="password" placeholder="Enter Your Password" required>
							<div class="invalid-feedback">
								Please provide a Password.
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 offset-lg-3 mb-3">
							<button class="btn btn-info form-control py-2 font-weight-bold" name="login" type="submit">
								<i class="fas fa-sign-in-alt"></i> Login
							</button>
						</div>
						<div class="col-md-4 offset-md-4 mb-3">
							<a href="forgot_password.php" class="btn btn-sm btn-danger form-control">Forgot Password?</a>
						</div>
					</div>
				</form>

				<div class="text-center mt-3">
					<a href="customer_register.php" class="font-weight-bold text-primary">New user? Register Here</a>
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
	</div>
</div>