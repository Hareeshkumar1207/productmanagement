@extends('layouts.app_admin')

@section('content')
<link rel="stylesheet" href="{{ asset('assets/vendor/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">

<!-- Theme Styles -->
<!-- <link rel="stylesheet" href="assets/css/theme.css" > -->
<link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
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
								All Product
								<a href="{{ route('product.create') }}" class="btn btn-primary btn sm float-right">Add Product</a>
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
											<th>Image</th>
											<th>Name</th>
											<th>Price</th>
											<th>Discount</th>
											<th>Description</th>
											<th>Created At</th>
											<th>Updated At</th>
											<th class="text-center">Actions</th>
										</tr>
									</thead>

									@foreach ($getAllProduct as $key => $value)
									<tbody>
										@if($value->trashed())
										<tr bgcolor="red">
											@else
										<tr>
											@endif
											<td class="font-weight-semi-bold">{{$value->id}}</td>
											<td class="font-weight-semi-bold">
												<div class="media align-items-center">
													<img class="u-avatar-xs rounded-circle mr-3" src="{{ Storage::disk('productImage')->url($value->product_image)}}" onerror="this.src='assets/img-temp/avatars/img1.jpg'" alt="assets/img-temp/avatars/img1.jpg">

												</div>
											</td>
											<td class="font-weight-semi-bold">{{$value->product_name}}</td>
											<td class="font-weight-semi-bold">{{$value->product_price}}</td>
											<td class="font-weight-semi-bold">{{$value->product_discount}}</td>
											<td class="font-weight-semi-bold">{{$value->product_description}}</td>
											<td class="font-weight-semi-bold">{{$value->created_at}}</td>
											<td class="font-weight-semi-bold">{{$value->updated_at}}</td>
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
																	<!-- <form action="{{ route('product.edit', $value->id) }}">
																		<button type="submit" class="btn btn-danger"/>Edit</button>
																	</form> -->
																	<a class="btn btn-danger" href="{{ route('product.edit', $value->id) }}">Edit</a>
																</li>
																<li>
																	<form action="{{ route('product.destroy', $value->id) }}" method='post'>
																		@method('DELETE')
																		@csrf
																		<button type="submit" class="btn btn-danger" />Delete</button>
																	</form>
																	<!-- <a class="d-block link-dark" href="">Delete</a> -->
																</li>
																<li>
																	@if($value->trashed())
																	<form action="{{ route('product.enable', $value->id) }}" method='post'>
																		@method('DELETE')
																		@csrf
																		<button type="submit" class="btn btn-danger" />Enable</button>
																	</form>
																	@else
																	<form action="{{ route('product.disable', $value->id) }}" method='post'>
																		@method('DELETE')
																		@csrf
																		<button type="submit" class="btn btn-danger" />Disable</button>
																	</form>
																	@endif
																	<!-- <a class="d-block link-dark" href="">Delete</a> -->
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
</div>

@endsection