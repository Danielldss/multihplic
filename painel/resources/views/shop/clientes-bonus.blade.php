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
	<script src="/global_assets/js/plugins/visualization/echarts/echarts.min.js"></script>
	<script src="/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="/global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>
	<script src="/global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
	<script src="/global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
	<script src="/global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
	<script src="/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/ecommerce_customers.js"></script>
	<!-- /theme JS files -->

</head>

<body>
@include('shop.inc.navbar')

<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
@include('shop.inc.menu')
<!-- /main sidebar -->

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Clientes</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="/shop/clients" class="breadcrumb-item">Clientes</a>
							<span class="breadcrumb-item active">Lista</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Customers -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h6 class="card-title">Clientes</h6>
						
					</div>


					<table class="table table-striped text-nowrap table-customers">
						<thead>
							<tr>
								<th>Cliente</th>
								<th>Cadastro</th>
								<th>E-mail</th>
								<th>Histórico de bonus</th>
								<th>Ações</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="6">
									<div class="col-lg-12">
										<div class="alert alert-success" role="alert">
											Nenhum cliente encontrado!
										</div>
									</div>
								</td>
							</tr>
							{{--<tr>--}}
								{{--<td>--}}
									{{--<div class="media">--}}
										{{--<div class="mr-3">--}}
											{{--<a href="user_pages_profile_tabbed.html">--}}
												{{--<img src="/global_assets/images/demo/users/face1.jpg" width="40" height="40" class="rounded-circle" alt="">--}}
											{{--</a>--}}
										{{--</div>--}}

										{{--<div class="media-body align-self-center">--}}
											{{--<a href="user_pages_profile_tabbed.html" class="font-weight-semibold">James Alexander</a>--}}
											{{--<div class="text-muted font-size-sm">--}}
												{{--Latest order: 2016.12.30--}}
											{{--</div>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</td>--}}
								{{--<td>July 12, 2016</td>--}}
								{{--<td><a href="#">james@interface.club</a></td>--}}
								{{--<td>--}}
									{{--<ul class="list-unstyled mb-0">--}}
										{{--<li>--}}
											{{--<i class="icon-infinite font-size-base text-warning mr-2"></i>--}}
											{{--Pending:--}}
											{{--<a href="#">25 orders</a>--}}
										{{--</li>--}}

										{{--<li>--}}
											{{--<i class="icon-checkmark3 font-size-base text-success mr-2"></i>--}}
											{{--Processed:--}}
											{{--<a href="#">34 orders</a>--}}
										{{--</li>--}}
									{{--</ul>--}}
								{{--</td>--}}
								{{--<td class="text-right">--}}
									{{--<div class="list-icons">--}}
										{{--<div class="list-icons-item dropdown">--}}
											{{--<a href="#" class="list-icons-item" data-toggle="dropdown">--}}
												{{--<i class="icon-menu7"></i>--}}
											{{--</a>--}}

											{{--<div class="dropdown-menu dropdown-menu-right">--}}
												{{--<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Invoices</a>--}}
												{{--<a href="#" class="dropdown-item"><i class="icon-cube2"></i> Shipping details</a>--}}
												{{--<a href="#" class="dropdown-item"><i class="icon-credit-card"></i> Billing details</a>--}}
												{{--<div class="dropdown-divider"></div>--}}
												{{--<a href="#" class="dropdown-item"><i class="icon-warning2"></i> Report problem</a>--}}
											{{--</div>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</td>--}}
								{{--<td class="pl-0"></td>--}}
							{{--</tr>--}}

						</tbody>
					</table>
				</div>
				<!-- /customers -->

			</div>
			<!-- /content area -->


            @include('shop.inc.footer')

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
