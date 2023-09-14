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
	<script src="/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/invoice_grid.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	@include('shop.inc.navbar')
	<!-- /main navbar -->


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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Pedidos</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="" class="breadcrumb-item">Pedidos</a>
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
					<div class="w-100 order-2 order-md-1">

						<!-- Filter toolbar -->
						<div class="navbar navbar-expand-lg navbar-light navbar-component rounded">
							<div class="text-center d-lg-none w-100">
								<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-filter">
									<i class="icon-unfold mr-2"></i>
									Filtros
								</button>
							</div>

							<div class="navbar-collapse collapse" id="navbar-filter">
								<span class="navbar-text mr-3">
									Filtro:
								</span>

								<ul class="navbar-nav flex-wrap">
									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-time-asc mr-2"></i>
											Por Data
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Ver Todos</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">Hoje</a>
											<a href="#" class="dropdown-item">Ontem</a>
											<a href="#" class="dropdown-item">Uma semana</a>
											<a href="#" class="dropdown-item">Um mês</a>
											<a href="#" class="dropdown-item">Um ano</a>
										</div>
									</li>

									<li class="nav-item dropdown">
										<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
											<i class="icon-sort-amount-desc mr-2"></i>
											Por Status
										</a>

										<div class="dropdown-menu">
											<a href="#" class="dropdown-item">Todos</a>
											<div class="dropdown-divider"></div>
											<a href="#" class="dropdown-item">Aberto</a>
											<a href="#" class="dropdown-item">Aguardando</a>
											<a href="#" class="dropdown-item">Pago</a>
											<a href="#" class="dropdown-item">Cancelado</a>
											<a href="#" class="dropdown-item">Pago / Entregue</a>
										</div>
									</li>
								</ul>

								<span class="navbar-text mr-3 ml-lg-auto">
									Ordenar:
								</span>

								<ul class="navbar-nav flex-wrap">
									<li class="nav-item">
										<a href="#" class="navbar-nav-link active">
											<i class="icon-sort-alpha-asc"></i>
											<span class="d-lg-none ml-2">Acrescente</span>
										</a>
									</li>

									<li class="nav-item">
										<a href="#" class="navbar-nav-link">
											<i class="icon-sort-alpha-desc"></i>
											<span class="d-lg-none ml-2">Decrescente</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- /filter toolbar -->


						<!-- Invoice grid -->
						<div class="row">
                            @foreach($requests as $request)
							<div class="col-lg-6">
								<div class="card border-left-3 border-left-danger rounded-left-0">

                                    <div class="card-body">
										<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
											<div>
												<h6 class="font-weight-semibold">Leonardo Fellini</h6>
												<ul class="list list-unstyled mb-0">
													<li>Pedido #: <a href="#">0028</a></li>
													<li>Emitido em: <span class="font-weight-semibold"><?php echo date('d/m/Y'); ?></span></li>
												</ul>
											</div>

											<div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
												<h6 class="font-weight-semibold">R$8.750,00</h6>
												<ul class="list list-unstyled mb-0">
													<li>Pagamento: <span class="font-weight-semibold">Cartão de crédito</span></li>
													<li class="dropdown">
														Status: &nbsp;
														<a href="#" class="badge bg-danger-400 align-top dropdown-toggle" data-toggle="dropdown">Cancelado</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a href="#" class="dropdown-item active"><i class="icon-alert"></i> Aberto</a>
															<a href="#" class="dropdown-item"><i class="icon-alarm"></i> Aguardando</a>
															<a href="#" class="dropdown-item"><i class="icon-checkmark3"></i> pago</a>															
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Cancelado</a>
															<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Pago / Entregue</a>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>

									<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
										<span>
											<span class="badge badge-mark border-danger mr-2"></span>
											Vencimento:
											<span class="font-weight-semibold"><?php echo date('d/m/Y'); ?></span>
										</span>

										<ul class="list-inline list-inline-condensed mb-0 mt-2 mt-sm-0">
											<li class="list-inline-item">
												<a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a>
											</li>
											<li class="list-inline-item dropdown">
												<a href="#" title="Ver pedido" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>

												<div class="dropdown-menu dropdown-menu-right">
													<a href="#" class="dropdown-item"><i class="icon-printer"></i> Imprimir</a>
													<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Editar Pedido</a>
													<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remover pedido</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
                            @endforeach

                            @if(count($requests) == 0)
                                    <div class="col-lg-12">
                                        <div class="alert alert-success" role="alert">
                                            Nenhum pedido encontrado!
                                        </div>
                                    </div>
                            @endif

						</div>
						
						<!-- /invoice grid -->

						<!-- Pagination -->
						<div class="d-flex justify-content-center mt-3 mb-3">
							<ul class="pagination">
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
								<li class="page-item active"><a href="#" class="page-link">1</a></li>
								<li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
							</ul>
						</div>
						<!-- /pagination -->

					</div>
					<!-- /left content -->


					<!-- Right sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Navigation -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="card-title font-weight-semibold">Navigation</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body p-0">
									<div class="nav nav-sidebar mb-2">
										
										<li class="nav-item-header">
											<div class="text-uppercase font-size-xs line-height-xs">Pedidos</div>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-files-empty"></i>
												Todos
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-file-plus"></i>
												Pedidos pendentes
												<span class="badge badge-pill bg-blue ml-auto">0</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="#" class="nav-link">
												<i class="icon-file-check"></i>
												pedidos pagos
												<span class="badge badge-pill bg-success ml-auto">0</span>
											</a>
										</li>
										
									</div>
								</div>
							</div>
							<!-- /navigation -->


							<!-- Filter -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Filtro de valores</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="/admin/pedidos" method="post">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
										<div class="form-group">
											<div class="font-weight-semibold mb-3">Intervalo de quantidade:</div>
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													R$0 - R$999
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled"  data-fouc>
													R$1,000 - R$1,999
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													R$2,000 - R$4,999
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled"  data-fouc>
													R$5,000 - R$9,999
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled"  data-fouc>
													R$10,000 +
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-weight-semibold mb-3">Pagamento:</div>
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Transferência Online
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Boleto
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled"  data-fouc>
													Cartão de crédito
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled"  data-fouc>
													Depósito bancário
												</label>
											</div>
										</div>

										<div class="form-group">
											<div class="font-weight-semibold mb-3">Status de pedido:</div>
											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Aguardando
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled"  data-fouc>
													Pago
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Atrasado
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Extornado
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled"  data-fouc>
													Cancelado
												</label>
											</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-fouc>
													Entregue
												</label>
											</div>
										</div>

										<div class="row">
											<div class="col">
												<button type="reset" class="btn btn-light btn-block btn-sm">Limpar</button>
											</div>
											<div class="col">
												<button type="submit" class="btn btn-info btn-block btn-sm">Filtrar</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<!-- /filter -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /right sidebar component -->

				</div>
				<!-- /inner container -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			@include('shop.inc.footer')
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


    <!-- Modal with invoice -->
	<div id="invoice" class="modal fade">
		<div class="modal-dialog modal-full">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Invoice #49029</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<div class="card-body">
					<div class="row">
						<div class="col-sm-6">
							<div class="mb-4">
								<img src="./global_assets/images/logo_demo.png" class="mb-3 mt-2" alt="" style="width: 120px;">
	 							<ul class="list list-unstyled mb-0">
									<li>2269 Elba Lane</li>
									<li>Paris, France</li>
									<li>888-555-2311</li>
								</ul>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="mb-4">
								<div class="text-sm-right">
									<h4 class="text-primary mb-2 mt-md-2">Invoice #49029</h4>
									<ul class="list list-unstyled mb-0">
										<li>Date: <span class="font-weight-semibold">January 12, 2015</span></li>
										<li>Due date: <span class="font-weight-semibold">May 12, 2015</span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="d-md-flex flex-md-wrap">
						<div class="mb-4 mb-md-2">
							<span class="text-muted">Invoice To:</span>
 							<ul class="list list-unstyled mb-0">
								<li><h5 class="my-2">Rebecca Manes</h5></li>
								<li><span class="font-weight-semibold">Normand axis LTD</span></li>
								<li>3 Goodman Street</li>
								<li>London E1 8BF</li>
								<li>United Kingdom</li>
								<li>888-555-2311</li>
								<li><a href="#">rebecca@normandaxis.ltd</a></li>
							</ul>
						</div>

						<div class="mb-2 ml-auto">
							<span class="text-muted">Payment Details:</span>
							<div class="d-flex flex-wrap wmin-md-400">
								<ul class="list list-unstyled mb-0">
									<li><h5 class="my-2">Total Vencimento:</h5></li>
									<li>Bank name:</li>
									<li>Country:</li>
									<li>City:</li>
									<li>Address:</li>
									<li>IBAN:</li>
									<li>SWIFT code:</li>
								</ul>

								<ul class="list list-unstyled text-right mb-0 ml-auto">
									<li><h5 class="font-weight-semibold my-2">R$8,750</h5></li>
									<li><span class="font-weight-semibold">Profit Bank Europe</span></li>
									<li>United Kingdom</li>
									<li>London E1 8BF</li>
									<li>3 Goodman Street</li>
									<li><span class="font-weight-semibold">KFH37784028476740</span></li>
									<li><span class="font-weight-semibold">BPT4E</span></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive">
				    <table class="table table-lg">
				        <thead>
				            <tr>
				                <th>Description</th>
				                <th>Rate</th>
				                <th>Hours</th>
				                <th>Total</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>
				                	<h6 class="mb-0">Create UI design model</h6>
				                	<span class="text-muted">One morning, when Gregor Samsa woke from troubled.</span>
			                	</td>
				                <td>R$70</td>
				                <td>57</td>
				                <td><span class="font-weight-semibold">R$3,990</span></td>
				            </tr>
				            <tr>
				                <td>
				                	<h6 class="mb-0">Support tickets list doesn't support commas</h6>
				                	<span class="text-muted">I'd have gone up to the boss and told him just what i think.</span>
			                	</td>
				                <td>R$70</td>
				                <td>12</td>
				                <td><span class="font-weight-semibold">R$840</span></td>
				            </tr>
				            <tr>
				                <td>
				                	<h6 class="mb-0">Fix website issues on mobile</h6>
				                	<span class="text-muted">I am so happy, my dear friend, so absorbed in the exquisite.</span>
			                	</td>
				                <td>R$70</td>
				                <td>31</td>
				                <td><span class="font-weight-semibold">R$2,170</span></td>
				            </tr>
				        </tbody>
				    </table>
				</div>

				<div class="card-body">
					<div class="d-md-flex flex-md-wrap">
						<div class="pt-2 mb-3">
							<h6 class="mb-3">Authorized person</h6>
							<div class="mb-3">
								<img src="./global_assets/images/signature.png" width="150" alt="">
							</div>

							<ul class="list-unstyled text-muted">
								<li>Eugene Kopyov</li>
								<li>2269 Elba Lane</li>
								<li>Paris, France</li>
								<li>888-555-2311</li>
							</ul>
						</div>

						<div class="pt-2 mb-3 wmin-md-400 ml-auto">
							<h6 class="mb-3">Total due</h6>
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr>
											<th>Subtotal:</th>
											<td class="text-right">R$7,000</td>
										</tr>
										<tr>
											<th>Tax: <span class="font-weight-normal">(25%)</span></th>
											<td class="text-right">R$1,750</td>
										</tr>
										<tr>
											<th>Total:</th>
											<td class="text-right text-primary"><h5 class="font-weight-semibold">R$8,750</h5></td>
										</tr>
									</tbody>
								</table>
							</div>

							<div class="text-right mt-3">
								<button type="button" class="btn btn-primary btn-labeled btn-labeled-left"><b><i class="icon-paperplane"></i></b> Send invoice</button>
							</div>
						</div>
					</div>
				</div>

				<div class="card-footer">
					<span class="text-muted">Thank you for using Limitless. This invoice can be paid via PayPal, Bank transfer, Skrill or Payoneer. Payment is due within 30 days from the date of delivery. Late payment is possible, but with with a fee of 10% per month. Company registered in England and Wales #6893003, registered office: 3 Goodman Street, London E1 8BF, United Kingdom. Phone number: 888-555-2311</span>
				</div>

				<div class="modal-footer bg-transparent">
					<button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- /modal with invoice -->

</body>
</html>
