<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- Head -->

<head>
	<title> Post </title>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<!-- Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">

	<!-- Theme Styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>
<!-- End Head -->

<!-- Body -->

<body>
	<!-- Header (Topbar) -->

	<!-- End Header (Topbar) -->

	<!-- Main -->
	<main class="u-main">
		<!-- Sidebar -->
		<!-- Content -->
		<div class="u-content">
			<!-- Content Body -->
			<div class="u-body">
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<div class="card h-100">
								<!-- Card Header -->
								<header class="card-header border-bottom">
									<h2 class="h4 card-header-title">Add Post</h2>
								</header>
								<!-- End Card Header -->
								<form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
									@csrf
									<!-- Card Body -->
									<div class="card-body pt-2">

										<!-- Text -->
										<div class="form-group">
											<label for="exampleInputText2_1">Name</label>
											<input id="exampleInputText2_1" name="product_name" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
										<!-- End Text -->
										<!-- Text -->
										<div class="form-group">
											<label for="exampleInputText2_1">Product Image</label>
											<input id="exampleInputText2_1" name="product_image" class="form-control form-pill" type="file" placeholder="Placeholder">
										</div>
										<div class="form-group">
											<label for="exampleInputText2_1">Product Price</label>
											<input id="exampleInputText2_1" name="product_price" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
										<!-- End Text -->
										<!-- Text -->
										<div class="form-group">
											<label for="exampleInputText2_1">Product Discount</label>
											<input id="exampleInputText2_1" name="product_discount" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
										<!-- End Text -->
										<!-- Text -->
										<div class="form-group">
											<label for="exampleInputText2_1">Product Description</label>
											<input id="exampleInputText2_1" name="product_description" class="form-control form-pill" type="text" placeholder="Placeholder">
										</div>
										<!-- End Text -->
									</div>
									<button type="submit" class="btn btn-info btn-dark">Save Changes</button>
									<!-- End Card Body -->
									<div class="card-footer text-center border-top">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Content Body -->
			<!-- Footer -->
			<!-- End Footer -->
		</div>
		<!-- End Content -->
	</main>
	<!-- End Main -->

	<!-- Global Vendor -->
	<script src="assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
	<script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
	<script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

	<!-- Initialization  -->
	<script src="assets/js/sidebar-nav.js"></script>
	<script src="assets/js/main.js"></script>
</body>
<!-- End Body -->

</html>