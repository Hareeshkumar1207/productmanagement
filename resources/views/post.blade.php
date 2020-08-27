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
	<!-- <link rel="stylesheet" href="assets/vendor/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css"> -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">

	<!-- Theme Styles -->
	<!-- <link rel="stylesheet" href="assets/css/theme.css" > -->
	<link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">

</head>
<!-- End Head -->

<!-- Body -->

<body>
	<!-- Header (Topbar) -->
	<header class="u-header">
		<!-- Header Left Section -->
		<div class="u-header-left">
			<!-- Header Logo -->
			<a class="u-header-logo" href="index.html">
				<img class="u-header-logo__icon" src="assets/svg/logo-mini.svg" alt="Awesome Icon">
				<img class="u-header-logo__text" src="assets/svg/logo-text-light.svg" alt="Awesome">
			</a>
			<!-- End Header Logo -->
		</div>
		<!-- End Header Left Section -->

		<!-- Header Middle Section -->
		<div class="u-header-middle">
			<!-- Sidebar Invoker -->
			<div class="u-header-section">
				<a class="js-sidebar-invoker u-header-invoker u-sidebar-invoker" href="#" data-is-close-all-except-this="true" data-target="#sidebar">
					<span class="ti-align-left u-header-invoker__icon u-sidebar-invoker__icon--open"></span>
					<span class="ti-align-justify u-header-invoker__icon u-sidebar-invoker__icon--close"></span>
				</a>
			</div>
			<!-- End Sidebar Invoker -->
		</div>
		<!-- End Header Middle Section -->
	</header>
	<!-- End Header (Topbar) -->

	<!-- Main -->
	<main class="u-main">
		<!-- Sidebar -->
		<aside id="sidebar" class="u-sidebar">
			<div class="u-sidebar-inner">
				<!-- Sidebar Header -->
				<header class="u-sidebar-header">
					<!-- Sidebar Logo -->
					<a class="u-sidebar-logo" href="index.html">
						<img class="u-sidebar-logo__icon" src="assets/svg/logo-mini.svg" alt="Awesome Icon">
						<img class="u-sidebar-logo__text" src="assets/svg/logo-text-light.svg" alt="Awesome">
					</a>
					<!-- End Sidebar Logo -->
				</header>
				<!-- End Sidebar Header -->

				<!-- Sidebar Nav -->
				<nav class="u-sidebar-nav">
					<!-- Sidebar Nav Menu -->
					<ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
						<!-- Dashboard -->
						<li class="u-sidebar-nav-menu__item">
							<a class="u-sidebar-nav-menu__link" href="{{route('post.index')}}">
								<span class="u-sidebar-nav-menu__item-icon">P</span>
								<span class="u-sidebar-nav-menu__item-title">Post</span>
							</a>
						</li>
						<li class="u-sidebar-nav-menu__item">
							<a class="u-sidebar-nav-menu__link" href="{{route('category.index')}}">
								<span class="u-sidebar-nav-menu__item-icon">C</span>
								<span class="u-sidebar-nav-menu__item-title">Category</span>
							</a>
						</li>
						<li class="u-sidebar-nav-menu__item">
							<a class="u-sidebar-nav-menu__link" href="account-sign-in.html">
								<span class="u-sidebar-nav-menu__item-icon">S</span>
								<span class="u-sidebar-nav-menu__item-title">Sign out</span>
							</a>
						</li>
						<!-- End Dashboard -->
					</ul>
					<!-- End Sidebar Nav Menu -->
				</nav>
				<!-- End Sidebar Nav -->
			</div>
		</aside>
		<!-- End Sidebar -->

		<!-- Content -->
		<div class="u-content">
			<!-- Content Body -->
			<div class="u-body">
				<div class="container">
					<div class="row">
						<div class="col-sm">
							<div class="card">
								<!-- Card Header -->
								<header class="card-header">
									<h2 class="h4 card-header-title">
										All Post
										<a href="{{ route('post.create') }}" class="btn btn-primary btn sm float-right">Add Post</a>
									</h2>
								</header>
								<!-- End Card Header -->

								<!-- Crad Body -->
								<div class="card-body pt-0">
									<!-- Table with Image -->
									<div class="table-responsive">
										<table class="table table-hover mb-0">
											<thead>
												<tr>
													<th>#</th>
													<th>Name</th>
													<th>Company</th>
													<th>Role</th>
													<th>Salary</th>
													<th>Category</th>
													<th style="width: 135px;">Tag</th>
													<th class="text-center">Actions</th>
												</tr>
											</thead>

											@foreach ($getAllPost as $key => $value)
											<tbody>
												<tr>
													<td class="font-weight-semi-bold">{{$value->id}}</td>
													<td class="font-weight-semi-bold">
														<div class="media align-items-center">
															<img class="u-avatar-xs rounded-circle mr-3" src="assets/img-temp/avatars/img1.jpg" alt="Image description">
															<span class="media-body">{{$value->name}}</span>
														</div>
													</td>
													<td class="font-weight-semi-bold">{{$value->company}}</td>
													<td class="font-weight-semi-bold">{{$value->role}}</td>
													<td class="font-weight-semi-bold">$ {{$value->salary}}</td>
													<td class="font-weight-semi-bold">{{$value->category->name}}</td>
													<td>
														<span class="badge badge-sm badge-pill badge-primary-soft">{{$value->tag}}</span>
													</td>
													<td class="text-center">
														<!-- Actions -->
														<div class="dropdown">
															<!-- Actions Invoker -->
															<a id="tableWithImage1MenuInvoker" class="u-icon-sm link-muted" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" data-offset="8">
																<span class="ti-more"></span>
															</a>
															<!-- End Actions Invoker -->

															<!-- Actions Menu -->
															<div class="dropdown-menu dropdown-menu-right" style="width: 150px; position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(45px, -5px, 0px);" x-placement="top-end">
																<div class="card border-0 p-3">
																	<ul class="list-unstyled mb-0">
																		<li class="mb-3">
																			<!-- <form action="{{ route('post.edit', $value->id) }}">
																				<button type="submit" class="btn btn-danger" />Edit</button>
																			</form> -->
																			<a class="btn btn-danger" href="{{ route('post.edit', $value->id) }}">Edit</a>
																		</li>
																		<li>
																			<form action="{{ route('post.destroy', $value->id) }}" method='post'>
																				@method('DELETE')
																				@csrf
																				<button type="submit" class="btn btn-danger" />Delete</button>
																			</form>
																			<!-- <a class="d-block link-dark" href="{{ route('post.destroy', $value->id) }}">Delete</a> -->
																		</li>
																	</ul>
																</div>
															</div>
															<!-- End Actions Menu -->
														</div>
														<!-- End Actions -->
													</td>
												</tr>
											</tbody>
											@endforeach
										</table>
									</div>
									<!-- End Table with Image -->
								</div>
								<!-- Crad Body -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Content Body -->
			<!-- Footer -->
			<footer class="u-footer d-md-flex align-items-md-center text-center text-md-left text-muted">
				<!-- Footer Menu -->
				<!-- Copyright -->
				<span class="text-muted ml-auto">&copy; 2020 <a class="text-muted" href="#" target="_blank">Post</a>. All Rights Reserved.</span>
				<!-- End Copyright -->
			</footer>
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