<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Multihplic - Suas vendas, seus ganhos</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="./global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="./global_assets/js/main/jquery.min.js"></script>
	<script src="./global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="./global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="./global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script src="./global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="./global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>
	<script src="./global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
	<script src="./global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
	<script src="./global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="./global_assets/js/demo_pages/ecommerce_orders_history.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<?php include('navbar.php'); ?>
	<!-- /main navbar -->

	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<?php include('menu-sidebar.php'); ?>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Produtos</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-add text-primary"></i><span>Adicionar Novo</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-import text-primary"></i> <span>Importar</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="#" class="breadcrumb-item">Produtos</a>
							<span class="breadcrumb-item active">LIsta</span>
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

				<!-- Orders history (datatable) -->
				<div class="w-100 overflow-auto order-2 order-md-1">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Produtos</h6>
						
					</div>

					<table class="table table-orders-history text-nowrap">
						<thead>
							<tr>
								<th>Status</th>
								<th>Produto</th>
								<th>Código</th>
								<th>Medidas</th>
								<th>Grupo / Atributo</th>
								<th>Estoque</th>
								<th>Valor</th>
								<th class="text-center"><i class="icon-arrow-down12"></i></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Acessórios Masculinos</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="./global_assets/images/demo/products/1.jpeg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Fathom Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-green border-green mr-1"></span>
												Ativo
											</div>
										</div>
									</div>
								</td>
								<td><a href="#">1237749</a></td>
								<td>34cm x 29cm</td>
								<td>
									<p>
									Tamnho <span class="badge badge-primary">Grande</span>
									<span class="badge badge-primary">Pequeno</span>
									</p>
									<p>
									Cor <span class="badge badge-secondary">Azul</span>
									<span class="badge badge-secondary">Amarelo</span>
									</p>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">R$ 79.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Editar</a>
												<a href="#" class="dropdown-item"><i class="icon-eye8"></i> Detalhes</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-close2"></i> Remover</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Acessórios Masculinos</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="./global_assets/images/demo/products/1.jpeg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Fathom Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-green border-green mr-1"></span>
												Ativo
											</div>
										</div>
									</div>
								</td>
								<td><a href="#">1237749</a></td>
								<td>34cm x 29cm</td>
								<td>
									<p>
									Tamnho <span class="badge badge-primary">Grande</span>
									<span class="badge badge-primary">Pequeno</span>
									</p>
									<p>
									Cor <span class="badge badge-secondary">Azul</span>
									<span class="badge badge-secondary">Amarelo</span>
									</p>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">R$ 79.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Editar</a>
												<a href="#" class="dropdown-item"><i class="icon-eye8"></i> Detalhes</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-close2"></i> Remover</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Acessórios Masculinos</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="./global_assets/images/demo/products/1.jpeg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Fathom Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-green border-green mr-1"></span>
												Ativo
											</div>
										</div>
									</div>
								</td>
								<td><a href="#">1237749</a></td>
								<td>34cm x 29cm</td>
								<td>
									<p>
									Tamnho <span class="badge badge-primary">Grande</span>
									<span class="badge badge-primary">Pequeno</span>
									</p>
									<p>
									Cor <span class="badge badge-secondary">Azul</span>
									<span class="badge badge-secondary">Amarelo</span>
									</p>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">R$ 79.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Editar</a>
												<a href="#" class="dropdown-item"><i class="icon-eye8"></i> Detalhes</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-close2"></i> Remover</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Acessórios Masculinos</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="./global_assets/images/demo/products/1.jpeg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Fathom Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-green border-green mr-1"></span>
												Ativo
											</div>
										</div>
									</div>
								</td>
								<td><a href="#">1237749</a></td>
								<td>34cm x 29cm</td>
								<td>
									<p>
									Tamnho <span class="badge badge-primary">Grande</span>
									<span class="badge badge-primary">Pequeno</span>
									</p>
									<p>
									Cor <span class="badge badge-secondary">Azul</span>
									<span class="badge badge-secondary">Amarelo</span>
									</p>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">R$ 79.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Editar</a>
												<a href="#" class="dropdown-item"><i class="icon-eye8"></i> Detalhes</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-close2"></i> Remover</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Acessórios Masculinos</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="./global_assets/images/demo/products/1.jpeg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Fathom Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-green border-green mr-1"></span>
												Ativo
											</div>
										</div>
									</div>
								</td>
								<td><a href="#">1237749</a></td>
								<td>34cm x 29cm</td>
								<td>
									<p>
									Tamnho <span class="badge badge-primary">Grande</span>
									<span class="badge badge-primary">Pequeno</span>
									</p>
									<p>
									Cor <span class="badge badge-secondary">Azul</span>
									<span class="badge badge-secondary">Amarelo</span>
									</p>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">R$ 79.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Editar</a>
												<a href="#" class="dropdown-item"><i class="icon-eye8"></i> Detalhes</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-close2"></i> Remover</a>
											</div>
										</div>
									</div>
								</td>
							</tr>

							<tr>
								<td>Calçados</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="./global_assets/images/demo/products/1.jpeg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Fathom Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-green border-green mr-1"></span>
												Ativo
											</div>
										</div>
									</div>
								</td>
								<td><a href="#">1237749</a></td>
								<td>34cm x 29cm</td>
								<td>
									<p>
									Tamnho <span class="badge badge-primary">Grande</span>
									<span class="badge badge-primary">Pequeno</span>
									</p>
									<p>
									Cor <span class="badge badge-secondary">Azul</span>
									<span class="badge badge-secondary">Amarelo</span>
									</p>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">R$ 79.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Editar</a>
												<a href="#" class="dropdown-item"><i class="icon-eye8"></i> Detalhes</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-close2"></i> Remover</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Calçados</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="./global_assets/images/demo/products/1.jpeg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Fathom Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-green border-green mr-1"></span>
												Ativo
											</div>
										</div>
									</div>
								</td>
								<td><a href="#">1237749</a></td>
								<td>34cm x 29cm</td>
								<td>
									<p>
									Tamnho <span class="badge badge-primary">Grande</span>
									<span class="badge badge-primary">Pequeno</span>
									</p>
									<p>
									Cor <span class="badge badge-secondary">Azul</span>
									<span class="badge badge-secondary">Amarelo</span>
									</p>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">R$ 79.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Editar</a>
												<a href="#" class="dropdown-item"><i class="icon-eye8"></i> Detalhes</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-close2"></i> Remover</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Calçados</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="./global_assets/images/demo/products/1.jpeg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Fathom Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-green border-green mr-1"></span>
												Ativo
											</div>
										</div>
									</div>
								</td>
								<td><a href="#">1237749</a></td>
								<td>34cm x 29cm</td>
								<td>
									<p>
									Tamnho <span class="badge badge-primary">Grande</span>
									<span class="badge badge-primary">Pequeno</span>
									</p>
									<p>
									Cor <span class="badge badge-secondary">Azul</span>
									<span class="badge badge-secondary">Amarelo</span>
									</p>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">R$ 79.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Editar</a>
												<a href="#" class="dropdown-item"><i class="icon-eye8"></i> Detalhes</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-close2"></i> Remover</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>Calçados</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="./global_assets/images/demo/products/1.jpeg" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">Fathom Backpack</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-green border-green mr-1"></span>
												Ativo
											</div>
										</div>
									</div>
								</td>
								<td><a href="#">1237749</a></td>
								<td>34cm x 29cm</td>
								<td>
									<p>
									Tamnho <span class="badge badge-primary">Grande</span>
									<span class="badge badge-primary">Pequeno</span>
									</p>
									<p>
									Cor <span class="badge badge-secondary">Azul</span>
									<span class="badge badge-secondary">Amarelo</span>
									</p>
								</td>
								<td>1</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">R$ 79.00</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-pencil5"></i> Editar</a>
												<a href="#" class="dropdown-item"><i class="icon-eye8"></i> Detalhes</a>
												<div class="dropdown-divider"></div>
												<a href="#" class="dropdown-item"><i class="icon-close2"></i> Remover</a>
											</div>
										</div>
									</div>
								</td>
							</tr>


						</tbody>
					</table>
				</div>
				<!-- /orders history (datatable) -->

				<!-- Sidebar content -->
				<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

					<!-- Categories -->
					<div class="card">
						<div class="card-header bg-transparent header-elements-inline">
							<span class="text-uppercase font-size-sm font-weight-semibold">Categorias</span>
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
									<a href="#" class="nav-link">Street wear</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link">Hoodies</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Jackets</a></li>
										<li class="nav-item"><a href="#" class="nav-link active">Pants</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Shirts</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Sweaters</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Tank tops</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Underwear</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Snow wear</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link">Fleece jackets</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Gloves</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Ski jackets</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Ski pants</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Snowboard jackets</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Snowboard pants</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Technical underwear</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Shoes</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link">Laces</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Sandals</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Skate shoes</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Slip ons</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Sneakers</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Winter shoes</a></li>
									</ul>
								</li>
								<li class="nav-item nav-item-submenu">
									<a href="#" class="nav-link">Accessories</a>
									<ul class="nav nav-group-sub">
										<li class="nav-item"><a href="#" class="nav-link">Beanies</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Belts</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Caps</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Sunglasses</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Headphones</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Video cameras</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Wallets</a></li>
										<li class="nav-item"><a href="#" class="nav-link">Watches</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<!-- /categories -->

					<!-- Filters -->
					<div class="card ">
						<div class="card-header bg-transparent header-elements-inline">
							<span class="text-uppercase font-size-sm font-weight-semibold">Filtro de produto</span>
							<div class="header-elements">
								<div class="list-icons">
									<a class="list-icons-item" data-action="collapse"></a>
								</div>
							</div>
						</div>

						<div class="card-body">
							<form action="#">
								<div class="form-group">
									<div class="form-group form-group-feedback form-group-feedback-left">
										<input type="search" class="form-control" placeholder="Search brand">
										<div class="form-control-feedback">
											<i class="icon-search4 font-size-base text-muted"></i>
										</div>
									</div>

									<div class="overflow-auto" style="max-height: 192px;">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												686
											</label>	
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												A.Lab
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Adidas
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												ALIS
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Analog
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Burton
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Atomic
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Armada
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												O'Neill
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Baja
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Baker
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Blue Parks
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Billabong
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Bonfire
											</label>
										</div>

										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-input-styled" data-fouc>
												Brixton
											</label>
										</div>
									</div>
								</div>


								<div class="form-group mb-2">
									<div class="font-size-xs text-uppercase text-muted mb-3">Tamanho</div>

									<div class="row row-labels">
										<div class="col-3">
											<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXS</a>
										</div>
										<div class="col-3">
											<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XS</a>
										</div>
										<div class="col-3">
											<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">S</a>
										</div>
										<div class="col-3">
											<a href="#" class="badge badge-flat border-warning text-warning-800 d-flex justify-content-center p-2 mb-2">M</a>
										</div>
										<div class="col-3">
											<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">L</a>
										</div>
										<div class="col-3">
											<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XL</a>
										</div>
										<div class="col-3">
											<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXL</a>
										</div>
										<div class="col-3">
											<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXXL</a>
										</div>
									</div>
								</div>


								<div class="form-group">
									<div class="font-size-xs text-uppercase text-muted mb-3">Cor</div>

									<div class="row">
										<div class="col-4">
											<div class="mb-2">
												<a href="#" class="d-block p-2 bg-primary rounded"><div class="py-1"></div></a>
												<div class="font-size-sm text-center text-muted mt-1">Blue</div>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-2">
												<a href="#" class="d-block p-2 bg-warning rounded"><div class="py-1"></div></a>
												<div class="font-size-sm text-center text-muted mt-1">Orange</div>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-2">
												<a href="#" class="d-block p-2 bg-teal rounded"><div class="py-1"></div></a>
												<div class="font-size-sm text-center text-muted mt-1">Teal</div>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-2">
												<a href="#" class="d-block p-2 bg-pink rounded color-selector-active">
													<div class="py-1"></div>
													<i class="icon-checkmark3"></i>
												</a>
												<div class="font-size-sm text-center text-muted mt-1">Pink</div>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-2">
												<a href="#" class="d-block p-2 bg-grey-800 rounded"><div class="py-1"></div></a>
												<div class="font-size-sm text-center text-muted mt-1">Black</div>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-2">
												<a href="#" class="d-block p-2 bg-purple rounded"><div class="py-1"></div></a>
												<div class="font-size-sm text-center text-muted mt-1">Purple</div>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-2">
												<a href="#" class="d-block p-2 bg-success rounded"><div class="py-1"></div></a>
												<div class="font-size-sm text-center text-muted mt-1">Green</div>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-2">
												<a href="#" class="d-block p-2 bg-danger rounded"><div class="py-1"></div></a>
												<div class="font-size-sm text-center text-muted mt-1">Red</div>
											</div>
										</div>

										<div class="col-4">
											<div class="mb-2">
												<a href="#" class="d-block p-2 bg-info rounded"><div class="py-1"></div></a>
												<div class="font-size-sm text-center text-muted mt-1">Cyan</div>
											</div>
										</div>
									</div>
								</div>


								<button type="submit" class="btn bg-blue btn-block">Filtrar</button>
							</form>
						</div>
					</div>
					<!-- /filters -->

				</div>
				<!-- /sidebar content -->
				</div>
			</div>
			<!-- /content area -->


			<!-- Footer -->
			<?php include('footer.php'); ?>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
