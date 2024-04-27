<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Authentication - Moral Academy</title>
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
	<link href="css/styles.css" rel="stylesheet" />
	<link href="../css/output.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
</head>

<body class="bg-primary">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4 fs-3">Login</h3>
								</div>
								<div class="card-body">
									<div class="alert alert-danger d-none" id="error_msg" role="alert">
										A simple danger alert—check it out!
									</div>
									<form id="form">
										<div class="form-floating mb-3">
											<input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@moralcenter.or.th" required />
											<label for="inputEmail">Email address</label>
										</div>
										<div class="form-floating mb-3">
											<input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" required />
											<label for="inputPassword">Password</label>
										</div>

										<!-- <div class="form-check mb-3">
													<input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
													<label class="form-check-label" for="inputRememberPassword">Remember Password</label>
											</div> -->
										<div class="d-flex align-items-center justify-content-between mt-4 mb-0">
											<span></span>
											<!-- <a class="small" href="password.html">Forgot Password?</a> -->
											<button class="btn btn-primary" type="submit" id="submit">Login</button>
										</div>
									</form>
								</div>
								<!-- <div class="card-footer text-center py-3">
											<div class="small"><a href="register.html">Need an account? Sign up!</a></div>
									</div> -->
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<div id="layoutAuthentication_footer">
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid px-4">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; CMP IT 2024</div>
						<!-- <div>
									<a href="#">Privacy Policy</a>
									&middot;
									<a href="#">Terms &amp; Conditions</a>
							</div> -->
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="js/scripts.js"></script>
	<script>
		$.ajax({
			url: "actions.php",
			type: "GET",
		}).fail((jqXHR, status, res) => {
      window.location.href = "../500.html";
    });

		let request;

		$("#form").submit(function(e) {
			// Prevent default posting of form - put here to work in case of errors
			e.preventDefault();

			if (request) {
				request.abort();
			}

			// setup some local variables
			var $form = $(this);

			// Let's select and cache all the fields
			var $inputs = $form.find("input, select, button, textarea");

			// Serialize the data in the form
			var serializedData = $form.serialize();

			// Let's disable the inputs for the duration of the Ajax request.
			// Note: we disable elements AFTER the form data has been serialized.
			// Disabled form elements will not be serialized.
			$inputs.prop("disabled", true);
			$('#submit').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="visually-hidden">Loading...</span>')

			$.ajax({
				url: "actions.php?login",
				type: "post",
				data: serializedData
			}).fail((jqXHR, status, res) => {
				errorDisplay(jqXHR.responseJSON.msg, true);
			}).done((res, status, jqXHR) => {
				console.log(res);
				window.location.href = "index.php";
			}).always(() => {
				$('#submit').html('Login')
				$inputs.prop("disabled", false);
			});
		});

		function errorDisplay(msg, show) {
			error_msg.innerHTML = msg

			if (show) {
				error_msg.classList.remove("d-none");
				error_msg.classList.add("d-block");
			} else {
				error_msg.classList.remove("d-block");
				error_msg.classList.add("d-none");
			}
		}
	</script>
</body>

</html>