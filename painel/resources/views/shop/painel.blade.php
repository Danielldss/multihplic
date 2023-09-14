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
	<script src="/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script src="/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="/global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="/global_assets/js/plugins/pickers/daterangepicker.js"></script>

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/dashboard.js"></script>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-bars-alt text-primary"></i><span>Relatórios</span></a>
							<a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i> <span>Pedidos</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dashboard</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="breadcrumb justify-content-center">
							<a href="#" class="breadcrumb-elements-item">
								<i class="icon-comment-discussion mr-2"></i>
								Suporte
							</a>
							<!--
							<div class="breadcrumb-elements-item dropdown p-0">
								<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear mr-2"></i>
									Settings
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
									<a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
									<a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
									<div class="dropdown-divider"></div>
									<a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
								</div>
							</div>
							-->
						</div>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">
				<!-- Quick stats boxes -->
				<div class="row">
					<div class="col-lg-4">

						<!-- Members online -->
						<div class="card bg-teal-400">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">3,450</h3>
									<span class="badge bg-teal-800 badge-pill align-self-center ml-auto">+53,6%</span>
								</div>
								
								<div>
									Clientes
									<div class="font-size-sm opacity-75">489 novos</div>
								</div>
							</div>

							<div class="container-fluid">
								<div id="members-online"></div>
							</div>
						</div>
						<!-- /members online -->

					</div>

					<div class="col-lg-4">

						<!-- Current server load -->
						<div class="card bg-pink-400">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">490</h3>
									<span class="badge bg-pink-800 badge-pill align-self-center ml-auto">+73,6%</span>
								</div>
								<div>
									Pedidos
									<div class="font-size-sm opacity-75">34 novos</div>
								</div>
							</div>

							<div class="container-fluid">
									<div id="new-invoices"></div>
								</div>
						</div>
						<!-- /current server load -->

					</div>

					<div class="col-lg-4">

						<!-- Today's revenue -->
						<div class="card bg-blue-400">
							<div class="card-body">
								<div class="d-flex">
									<h3 class="font-weight-semibold mb-0">R$18,390</h3>
									<div class="list-icons ml-auto">
										<a class="list-icons-item" data-action="reload"></a>
									</div>
								</div>
								
								<div>
									Receita de hoje
									<div class="font-size-sm opacity-75">R$37,578</div>
								</div>
							</div>

							<div id="today-revenue"></div>
						</div>
						<!-- /today's revenue -->

					</div>
				</div>
				<!-- /quick stats boxes -->

				<!-- Dashboard content -->
				<div class="row">
					<div class="col-xl-8">

						<!-- Marketing campaigns -->
						<div class="card">
							<div class="card-header header-elements-sm-inline">
								<h6 class="card-title">Estatísticas de Pedidos</h6>
								<div class="header-elements">
									<span class="badge bg-success badge-pill">28 novos pedidos</span>
									<div class="list-icons ml-3">
				                		<div class="list-icons-item dropdown">
				                			<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu">
												<a href="#" class="dropdown-item"><i class="icon-list-unordered"></i> Lista de pedidos</a>
												<a href="#" class="dropdown-item"><i class="icon-pie5"></i> Estatisticas</a>
											</div>
				                		</div>
				                	</div>
			                	</div>
							</div>

							<div class="card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap">
								<div class="d-flex align-items-center mb-3 mb-sm-0">
									<div id="campaigns-donut"></div>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">R$ 38,90 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+16.2%)</span></h5>
										<span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">18 de março</span>
									</div>
								</div>

								<div class="d-flex align-items-center mb-3 mb-sm-0">
									<div id="campaign-status-pie"></div>
									<div class="ml-3">
										<h5 class="font-weight-semibold mb-0">R$ 2,45 <span class="text-danger font-size-sm font-weight-normal"><i class="icon-arrow-down12"></i> (-4.9%)</span></h5>
										<span class="badge badge-mark border-danger mr-1"></span> <span class="text-muted">18 de abril</span>
									</div>
								</div>

								<div>
									<a href="#" class="btn bg-indigo-300"><i class="icon-statistics mr-2"></i> Ver relaório</a>
								</div>
							</div>

							<div class="table-responsive">
								<table class="table text-nowrap">
									<thead>
										<tr>
											<th>Cliente</th>
											<th>Site</th>
											<th>Total</th>
											<th>Status</th>
											<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div>
														<a href="#" class="text-default font-weight-semibold">Tiatrás Rocha</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-blue mr-1"></span>
															18 de abril 2019
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Mintlime</span></td>
											<td><h6 class="font-weight-semibold mb-0">R$54,89</h6></td>
											<td><span class="badge bg-blue">Aguardando Pagamento</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Ver detalhes</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Editar pedido</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div>
														<a href="#" class="text-default font-weight-semibold">Tiatrás Rocha</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-blue mr-1"></span>
															18 de abril 2019
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Mintlime</span></td>
											<td><h6 class="font-weight-semibold mb-0">R$54,89</h6></td>
											<td><span class="badge bg-green">Patrás</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Ver detalhes</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Editar pedido</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div>
														<a href="#" class="text-default font-weight-semibold">Tiatrás Rocha</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-blue mr-1"></span>
															18 de abril 2019
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Mintlime</span></td>
											<td><h6 class="font-weight-semibold mb-0">R$54,89</h6></td>
											<td><span class="badge bg-danger">Cancelado</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Ver detalhes</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Editar pedido</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div>
														<a href="#" class="text-default font-weight-semibold">Tiatrás Rocha</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-blue mr-1"></span>
															18 de abril 2019
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Mintlime</span></td>
											<td><h6 class="font-weight-semibold mb-0">R$54,89</h6></td>
											<td><span class="badge bg-blue">Aguardando Pagamento</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Ver detalhes</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Editar pedido</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div>
														<a href="#" class="text-default font-weight-semibold">Tiatrás Rocha</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-blue mr-1"></span>
															18 de abril 2019
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Mintlime</span></td>
											<td><h6 class="font-weight-semibold mb-0">R$54,89</h6></td>
											<td><span class="badge bg-green">Patrás</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Ver detalhes</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Editar pedido</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<tr>
											<td>
												<div class="d-flex align-items-center">
													<div>
														<a href="#" class="text-default font-weight-semibold">Tiatrás Rocha</a>
														<div class="text-muted font-size-sm">
															<span class="badge badge-mark border-blue mr-1"></span>
															18 de abril 2019
														</div>
													</div>
												</div>
											</td>
											<td><span class="text-muted">Mintlime</span></td>
											<td><h6 class="font-weight-semibold mb-0">R$54,89</h6></td>
											<td><span class="badge bg-danger">Cancelado</span></td>
											<td class="text-center">
												<div class="list-icons">
													<div class="list-icons-item dropdown">
														<a href="#" class="list-icons-item dropdown-toggle caret-0" data-toggle="dropdown"><i class="icon-menu7"></i></a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item"><i class="icon-file-stats"></i> Ver detalhes</a>
															<a href="#" class="dropdown-item"><i class="icon-file-text2"></i> Editar pedido</a>
														</div>
													</div>
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /marketing campaigns -->
						<!-- My messages -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Mensagens</h6>
								<div class="header-elements">
									<span><i class="icon-history text-warning mr-2"></i> Jul 7, 10:30</span>
									<span class="badge bg-success align-self-start ml-3">Online</span>
								</div>
							</div>
							<!-- Tabs content -->
							<div class="tab-content card-body">
								<div class="tab-pane active fade show" id="messages-tue">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3 position-relative">
												<img src="/global_assets/images/demo/users/face10.jpg" class="rounded-circle" width="36" height="36" alt="">
												<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">8</span>
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">James Alexander</a>
													<span class="font-size-sm text-muted">14:58</span>
												</div>

												The constitutionally inventoried precariously...
											</div>
										</li>

										<li class="media">
											<div class="mr-3 position-relative">
												<img src="/global_assets/images/demo/users/face3.jpg" class="rounded-circle" width="36" height="36" alt="">
												<span class="badge bg-danger-400 badge-pill badge-float border-2 border-white">6</span>
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Margo Baker</a>
													<span class="font-size-sm text-muted">12:16</span>
												</div>

												Pinched a well more moral chose goodness...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face24.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Jeremy Victorino</a>
													<span class="font-size-sm text-muted">09:48</span>
												</div>

												Pert thickly mischievous clung frowned well...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face4.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Beatrix Diaz</a>
													<span class="font-size-sm text-muted">05:54</span>
												</div>

												Nightingale taped hello bucolic fussily cardinal...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face25.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">												
												<div class="d-flex justify-content-between">
													<a href="#">Richard Vango</a>
													<span class="font-size-sm text-muted">01:43</span>
												</div>

												Amidst roadrunner distantly pompously where...
											</div>
										</li>
									</ul>
								</div>

								<div class="tab-pane fade" id="messages-mon">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face2.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Isak Temes</a>
													<span class="font-size-sm text-muted">Tue, 19:58</span>
												</div>

												Reasonable palpably rankly expressly grimy...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face7.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Vittorio Cosgrove</a>
													<span class="font-size-sm text-muted">Tue, 16:35</span>
												</div>

												Arguably therefore more unexplainable fumed...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face18.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Hilary Talaugon</a>
													<span class="font-size-sm text-muted">Tue, 12:16</span>
												</div>

												Nicely unlike porpoise a kookaburra past more...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face14.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Bobbie Seber</a>
													<span class="font-size-sm text-muted">Tue, 09:20</span>
												</div>

												Before visual vigilantly fortuitous tortoise...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face8.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Walther Laws</a>
													<span class="font-size-sm text-muted">Tue, 03:29</span>
												</div>

												Far affecting more leered unerringly dishonest...
											</div>
										</li>
									</ul>
								</div>

								<div class="tab-pane fade" id="messages-fri">
									<ul class="media-list">
										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face15.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Owen Stretch</a>
													<span class="font-size-sm text-muted">Mon, 18:12</span>
												</div>

												Tardy rattlesnake seal raptly earthworm...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face12.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Jenilee Mcnair</a>
													<span class="font-size-sm text-muted">Mon, 14:03</span>
												</div>

												Since hello dear pushed amid darn trite...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face22.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Alaster Jain</a>
													<span class="font-size-sm text-muted">Mon, 13:59</span>
												</div>

												Dachshund cardinal dear next jeepers well...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face24.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Sigfrid Thisted</a>
													<span class="font-size-sm text-muted">Mon, 09:26</span>
												</div>

												Lighted wolf yikes less lemur crud grunted...
											</div>
										</li>

										<li class="media">
											<div class="mr-3">
												<img src="/global_assets/images/demo/users/face17.jpg" class="rounded-circle" width="36" height="36" alt="">
											</div>

											<div class="media-body">
												<div class="d-flex justify-content-between">
													<a href="#">Sherilyn Mckee</a>
													<span class="font-size-sm text-muted">Mon, 06:38</span>
												</div>

												Less unicorn a however careless husky...
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /tabs content -->

						</div>
						<!-- /my messages -->


					</div>

					<div class="col-xl-4">

						<!-- Progress counters -->
						<div class="row">
							<div class="col-sm-6">

								<!-- Available horas -->
								<div class="card text-center">
									<div class="card-body">

					                	<!-- Progress counter -->
										<div class="svg-center position-relative" id="hours-available-progress"></div>
										<!-- /progress counter -->


										<!-- Bars -->
										<div id="hours-available-bars"></div>
										<!-- /bars -->

									</div>
								</div>
								<!-- /available hours -->

							</div>

							<div class="col-sm-6">

								<!-- Productivity goal -->
								<div class="card text-center">
									<div class="card-body">

										<!-- Progress counter -->
										<div class="svg-center position-relative" id="goal-progress"></div>
										<!-- /progress counter -->

										<!-- Bars -->
										<div id="goal-bars"></div>
										<!-- /bars -->

									</div>
								</div>
								<!-- /productivity goal -->

							</div>
						</div>
						<!-- /progress counters -->

						<!-- Daily financials -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h6 class="card-title">Finanças diárias</h6>
								<div class="header-elements">
									<span class="badge bg-danger-400 badge-pill">+86</span>
								</div>
							</div>

							<div class="card-body">
								<div class="chart mb-3" id="bullets"></div>

								<ul class="media-list">
									

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-checkmark3"></i></a>
										</div>
										
										<div class="media-body">
											Recebimento de pedido <a href="#">#32589</a>
											<div class="text-muted">18 de abril de 2019</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-alignment-unalign"></i></a>
										</div>
										
										<div class="media-body">
											Ordem de retirada de crédito <a href="">@lojadotiago</a>
											<div class="text-muted">36 minutos atrás</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon"><i class="icon-spinner11"></i></a>
										</div>

										<div class="media-body">
											Pagamento de ordem de retirada de crédito <a href="">@lojadotiago</a>
											<div class="text-muted">4 minutos atrás</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>
									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-checkmark3"></i></a>
										</div>
										
										<div class="media-body">
											Recebimento de pedido <a href="#">#32589</a>
											<div class="text-muted">18 de abril de 2019</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-alignment-unalign"></i></a>
										</div>
										
										<div class="media-body">
											Ordem de retirada de crédito <a href="">@lojadotiago</a>
											<div class="text-muted">36 minutos atrás</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									<li class="media">
										<div class="mr-3">
											<a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon"><i class="icon-spinner11"></i></a>
										</div>

										<div class="media-body">
											Pagamento de ordem de retirada de crédito <a href="">@lojadotiago</a>
											<div class="text-muted">4 minutos atrás</div>
										</div>

										<div class="ml-3 align-self-center">
											<a href="#" class="list-icons-item"><i class="icon-more"></i></a>
										</div>
									</li>

									
								</ul>
							</div>
						</div>
						<!-- /daily financials -->

					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->


            @include('shop.inc.footer')

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
