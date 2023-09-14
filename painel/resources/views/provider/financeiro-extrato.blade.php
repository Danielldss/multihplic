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
	<script src="/global_assets/js/demo_pages/invoice_archive.js"></script>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Extrato Financeiro</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="invoice_archive.php" class="breadcrumb-item">Financeiro</a>
							<span class="breadcrumb-item active">Extrato</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Invoice archive -->
				<div class="card">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Extrato Financeiro</h6>
						
					</div>

					<table class="table table-lg invoice-archive">
						<thead>
							<tr>
								<th>#</th>
								<th>Periodo</th>
				                <th>Descrição</th>
				                <th>Status</th>
				                <th>Data</th>
				                <th>Data de Venc.</th>
				                <th>Valor</th>
				                <th class="text-center">Ações</th>
				            </tr>
						</thead>
						<tbody>
                            @foreach($finances as $finance)
							<tr>
								<td>#0025</td>
								<td>Abril 2019</td>
				                <td>
				                	<h6 class="mb-0">
				                		<a href="#">Pedido #215182</a>
				                		<span class="d-block font-size-sm text-muted">Pagamento: Boleto</span>
			                		</h6>
			                	</td>
				                <td>
				                	<select name="status" class="form-control form-control-select2" data-placeholder="Select status">
				                		<option value="hold" selected>Aguardando</option>
				                		<option value="paid">Pago</option>
				                		<option value="cancel">Cancelado</option>
				                	</select>
			                	</td>
				                <td>
				                	29/04/2019
			                	</td>
				                <td>
				                	<span class="badge badge-success">29/04/2019</span>
			                	</td>
				                <td>
				                	<h6 class="mb-0 font-weight-bold">R$17.890,00 
										</h6>
				                </td>
								<td class="text-center">
									<div class="list-icons list-icons-extended">
										<a href="#" class="list-icons-item" data-toggle="modal" data-target="#invoice"><i class="icon-file-eye"></i></a>
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item dropdown-toggle" data-toggle="dropdown"><i class="icon-file-text2"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-printer"></i> Imprimir</a>
												<a href="#" class="dropdown-item"><i class="icon-file-plus"></i> Editar</a>
												<a href="#" class="dropdown-item"><i class="icon-cross2"></i> Remover</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
                            @endforeach

			            </tbody>
					</table>
					
					<div class="card-body">
						<div class="d-md-flex flex-md-wrap">
							<div class="pt-3 mb-6 wmin-md-400 ml-auto">
								<h6 class="mb-3">Total</h6>
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr>
												<th>Subtotal:</th>
												<td class="text-right">R$ 0,00</td>
											</tr>
											<tr>
												<th>Taxa: <span class="font-weight-normal">(0%)</span></th>
												<td class="text-right">R$ 0,0</td>
											</tr>
											<tr>
												<th>Total:</th>
												<td class="text-right text-primary"><h5 class="font-weight-semibold">R$0,00</h5></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /invoice archive -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			@include('provider.inc.footer')
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
									<li><h5 class="my-2">Total Due:</h5></li>
									<li>Bank name:</li>
									<li>Country:</li>
									<li>City:</li>
									<li>Address:</li>
									<li>IBAN:</li>
									<li>SWIFT code:</li>
								</ul>

								<ul class="list list-unstyled text-right mb-0 ml-auto">
									<li><h5 class="font-weight-semibold my-2">$8,750</h5></li>
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
				                <td>$70</td>
				                <td>57</td>
				                <td><span class="font-weight-semibold">$3,990</span></td>
				            </tr>
				            <tr>
				                <td>
				                	<h6 class="mb-0">Support tickets list doesn't support commas</h6>
				                	<span class="text-muted">I'd have gone up to the boss and told him just what i think.</span>
			                	</td>
				                <td>$70</td>
				                <td>12</td>
				                <td><span class="font-weight-semibold">$840</span></td>
				            </tr>
				            <tr>
				                <td>
				                	<h6 class="mb-0">Fix website issues on mobile</h6>
				                	<span class="text-muted">I am so happy, my dear friend, so absorbed in the exquisite.</span>
			                	</td>
				                <td>$70</td>
				                <td>31</td>
				                <td><span class="font-weight-semibold">$2,170</span></td>
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
											<td class="text-right">$7,000</td>
										</tr>
										<tr>
											<th>Tax: <span class="font-weight-normal">(25%)</span></th>
											<td class="text-right">$1,750</td>
										</tr>
										<tr>
											<th>Total:</th>
											<td class="text-right text-primary"><h5 class="font-weight-semibold">$8,750</h5></td>
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
