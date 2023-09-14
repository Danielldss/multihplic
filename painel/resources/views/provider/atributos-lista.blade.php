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
	<script src="/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="/global_assets/js/plugins/forms/selects/select2.min.js"></script>

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/datatables_advanced.js"></script>
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
					<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Atributos de produtos</span></h4>
					<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
				</div>
				<div class="header-elements d-none">
					<div class="d-flex justify-content-center">
						<a href="/provider/product/atribute-add" class="btn btn-link btn-float text-default"><i class="icon-googleplus5 text-primary"></i><span>Adicionar Novo</span></a>
					</div>
				</div>
			</div>

			<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
				<div class="d-flex">
					<div class="breadcrumb">
						<a href="/provider" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
						<span class="breadcrumb-item active">Lista de Atributos</span>
					</div>

					<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
				</div>

			</div>
		</div>
		<!-- /page header -->


		<!-- Content area -->
		<div class="content">

			<!-- Page length options -->
			<div class="card">
				<div class="card-header header-elements-inline">
					<h5 class="card-title">Atributos registrados</h5>
				</div>

				<table class="table datatable-show-all">
					<thead>
					<tr>
						<th>Nome</th>
						<th>Tipo</th>
						<th class="text-center"></th>
					</tr>
					</thead>
					<tbody>
					@foreach($atributes as $atribute)
						<tr>
							<td>{{$atribute->name}}</td>
							<td>{{$atribute->type}}</td>

							<td class="text-center">
								<div class="list-icons">
									<div class="dropdown">
										<a href="#" class="list-icons-item" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>
										<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item"><i class="icon-user-check"></i> Editar</a>
											<a href="/provider/product/atribute-delete/{{$atribute->id}}" class="dropdown-item"><i class="icon-close2"></i> Remover</a>
										</div>
									</div>
								</div>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
			<!-- /page length options -->


		</div>
		<!-- /content area -->


		<!-- Footer -->
	@include('provider.inc.footer')
	<!-- /footer -->

	</div>
	<!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
