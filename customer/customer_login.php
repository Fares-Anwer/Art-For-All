<?php
$lengthError = '';
$numberError = '';
$caseError = '';
?>
<?php
if (isset($_POST['login'])) {
	$customer_email = $_POST['c_email'];
	$customer_pass = $_POST['c_pass'];

	$login = $getFromU->login($customer_email, $customer_pass);
	if ($login === false) {
		if (strlen($customer_pass) < 8) {
			$error = "Password must be at least 8 characters long.";
		} elseif (!preg_match('/\d/', $customer_pass)) {
			$error = "Password must contain at least one number.";
		} elseif (!preg_match('/[a-z]/', $customer_pass) || !preg_match('/[A-Z]/', $customer_pass)) {
			$error = "Password must contain both uppercase and lowercase letters.";
		}

		if (isset($error)) {
			echo '<div class="alert alert-danger text-center">' . $error . '</div>';
		} else {
			// أكمل التسجيل
			echo '<div class="alert alert-success text-center">Registration Successful!</div>';
		}
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
				<div id="passwordLengthError" class="text-danger" style="display:none; font-size: 0.875rem;">
					<span id="lengthErrorMessage"></span>
				</div>
				<div id="passwordNumberError" class="text-danger" style="display:none; font-size: 0.875rem;">
					<span id="numberErrorMessage"></span>
				</div>
				<div id="passwordCaseError" class="text-danger" style="display:none; font-size: 0.875rem;">
					<span id="caseErrorMessage"></span>
				</div>

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
							<input type="password" name="c_pass" class="form-control p-3" id="password" placeholder="Enter Your Password" required oninput="validatePassword()">
							<div class=" invalid-feedback">
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
					function validatePassword() {
						var password = document.getElementById('password').value;
						var lengthErrorMsg = document.getElementById('lengthErrorMessage');
						var numberErrorMsg = document.getElementById('numberErrorMessage');
						var caseErrorMsg = document.getElementById('caseErrorMessage');
						var loginButton = document.getElementById('loginButton');

						var hasMinLength = password.length >= 8;
						var hasNumber = /\d/.test(password);
						var hasUpperCase = /[A-Z]/.test(password);
						var hasLowerCase = /[a-z]/.test(password);

						if (!hasMinLength) {
							lengthErrorMsg.innerHTML = "Password must be at least 8 characters long.";
							document.getElementById('passwordLengthError').style.display = 'block';
						} else {
							document.getElementById('passwordLengthError').style.display = 'none';
						}

						if (!hasNumber) {
							numberErrorMsg.innerHTML = "Password must contain at least one number.";
							document.getElementById('passwordNumberError').style.display = 'block';
						} else {
							document.getElementById('passwordNumberError').style.display = 'none';
						}

						if (!(hasUpperCase && hasLowerCase)) {
							caseErrorMsg.innerHTML = "Password must contain both uppercase and lowercase letters.";
							document.getElementById('passwordCaseError').style.display = 'block';
						} else {
							document.getElementById('passwordCaseError').style.display = 'none';
						}

						if (hasMinLength && hasNumber && hasUpperCase && hasLowerCase) {
							loginButton.disabled = false;
						} else {
							loginButton.disabled = true;
						}
					}

					(function() {
						'use strict';
						window.addEventListener('load', function() {
							var forms = document.getElementsByClassName('needs-validation');
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