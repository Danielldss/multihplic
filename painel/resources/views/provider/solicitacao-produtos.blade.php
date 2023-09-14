<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Multihplic - Suas vendas, seus ganhos</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="/global_assets/js/main/jquery.min.js"></script>
	<script src="/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="/global_assets/js/plugins/media/fancybox.min.js"></script>
	<script src="/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/ecommerce_product_list.js"></script>
	<!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
@include('provider.inc.navbar')
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

	<!-- Main sidebar -->
@include('provider.inc.menu')
<!-- /main sidebar -->

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Solicitação de produtos</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="#" class="breadcrumb-item">Produtos</a>
							<span class="breadcrumb-item active">Solicitação</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Inner container -->
				<div class="d-flex align-items-start flex-column flex-md-row">

					<!-- Left content -->
					<div class="w-100 overflow-auto order-2 order-md-1">

						@if(count($products) == 0)
							<p class="text-center">Nenhum solicitação de produto encontrada!</p>
						@else

						<!-- List -->
						@foreach($products as $product)

						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="{{$product->image}}" data-popup="lightbox">
										<img src="{{$product->image}}" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">{{$product->name}}</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Acessórios Masculinos</a></li>
									</ul>

									<p class="mb-3">{!! $product->short_description !!}...</p>


									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">Solicitante: </li>
										<li class="list-inline-item"><a href="#">{{$product->socialName}}</a></li>
										<li class="list-inline-item"><a href="#">{{$product->url}}</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<h3 class="mb-0 font-weight-semibold">Quantidade: {{$product->amount}}</h3>
									<button type="button" class="btn bg-success-400 mt-3"><i class="icon-cart-add mr-2"></i> Aceitar Pedido</button>
									<button type="button" class="btn bg-danger-400 mt-3"><i class="icon-cart-add mr-2"></i> Reprovar Pedido</button>
								</div>
							</div>
						</div>
						@endforeach

						<!-- Pagination -->
						<div class="d-flex justify-content-center pt-3 mb-3">
							<ul class="pagination">
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								{{--<li class="page-item"><a href="#" class="page-link">2</a></li>--}}
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
							</ul>
						</div>

						@endif

					</div>
					<!-- /left content -->

					<!-- Right sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Categories -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Filtro por lojista</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control" placeholder="Search">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>

								<div class="card-body border-0 p-0">
									<ul class="nav nav-sidebar mb-2">
										<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
											
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link">Hoodies</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Jackets</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Pants</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Shirts</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Sweaters</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Tank tops</a></li>
												<li class="nav-item"><a href="#" class="nav-link">Underwear</a></li>
											</ul>
										</li>
										
									</ul>
								</div>
							</div>
							<!-- /categories -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /right sidebar component -->

				</div>
				<!-- /inner container -->

			</div>
			<!-- /content area -->

			@include('provider.inc.footer')

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
