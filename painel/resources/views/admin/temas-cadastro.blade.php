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
	<script src="/global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
	<script src="/global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
	<script src="/global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/uploader_bootstrap.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	@include('admin.inc.navbar')
	<!-- /main navbar -->

	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		@include('admin.inc.menu')
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light">
				<div class="page-header-content header-elements-md-inline">
					<div class="page-title d-flex">
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Temas</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="uploader_bootstrap.html" class="breadcrumb-item">Tema</a>
							<span class="breadcrumb-item active">Adicionar novo tema</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Bootstrap file input -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="panel-title">Adicionar novo tema</h5>
					</div>

					<div class="card-body">
						<p class="mb-3">Para cadastrar um novo tema, você deve adicionar um nome, um segmento, as imagens do tema e adicionar a URL base onde esta localizado os arquivos do tema.</p>

						<form action="#">
							<div class="form-group">
								<label>Nome do tema:</label>
								<input type="text" class="form-control" placeholder="">
							</div>

							<div class="form-group">
								<label>URL base:</label>
								<input type="text" class="form-control" placeholder="/tema/segmento/tintas/t_1">
							</div>

							<div class="form-group">
								<label>Segmento:</label>
								<select class="form-control">
									<option>Segmento o segmento</option>
									<option>Roupas e acessórios</option>
									<option>Artes</option>
									<option>Pintura</option>
									<option>Maquinário</option>
									<option>Automóveis</option>
								</select>
							</div>

							<div class="form-group">
								<label>Upload de imagens:</label>
								<input type="file" class="file-input" multiple="multiple" data-fouc>
							</div>

						</form>
					</div>
				</div>
				<!-- /bootstrap file input -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			@include('admin.inc.footer')
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
