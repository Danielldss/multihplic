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
	<script src="/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/datatables_advanced.js"></script>
	<script src="/global_assets/js/demo_pages/form_multiselect.js"></script>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Categorias</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="/provider/product/category-list" class="btn btn-link btn-float text-default"><i class="icon-list text-primary"></i><span>Ver Todos</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Produtos</a>
							<span class="breadcrumb-item active">Nova Categoria</span>
						</div>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">


				<!-- 2 columns form -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Cadastro de categoria</h5>
					</div>

					<div class="card-body">
						<form action="/provider/product/subcategory-add" method="post">
							<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
							<div class="row">
								<div class="col-md-12">
									<fieldset>

										<div class="form-group">
											<label>Nome:</label>
											<input type="text" name="name" class="form-control" placeholder="">
										</div>

										<div class="card">
											<div class="card-header header-elements-inline">
												<h6 class="card-title">Departamentos</h6>
											</div>
											<div class="card-body">
												<div class="form-group">
													<select class="form-control multiselect-full-featured" name="departament_id" data-fouc>
														@foreach($read as $item)
															<option value="{{$item->id}}">{{$item->name}}</option>
														@endforeach
													</select>
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-header header-elements-inline">
												<h6 class="card-title">Categorias</h6>
											</div>
											<div class="card-body">
												<div class="form-group">
													<select class="form-control multiselect-full-featured" name="category_id" data-fouc>
														@foreach($read as $item)
															<optgroup label="{{$item->name}}" style="padding-left: 15px">
																@foreach($item->category as $category)
																	<option value="{{$category->id}}">{{$category->name}}</option>
																@endforeach
															</optgroup>
														@endforeach
													</select>
												</div>
											</div>
										</div>

										<div class="form-group">
											<label>Status:</label>
											<select class="form-control" name="status" required>
												<option value="active">Ativo</option>
												<option value="inactive">Inativo</option>
											</select>
										</div>

									</fieldset>
								</div>

							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Cadastrar <i class="icon-paperplane ml-2"></i></button>
							</div>
						</form>
					</div>
				</div>
				<!-- /2 columns form -->

			</div>
			<!-- /content area -->


			@include('provider.inc.footer')

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
