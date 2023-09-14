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
	<script src="/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <!-- Theme JS files -->
    <script src="/global_assets/js/plugins/extensions/jquery_ui/core.min.js"></script>
    <script src="/global_assets/js/plugins/extensions/jquery_ui/effects.min.js"></script>
    <script src="/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
    <script src="/global_assets/js/plugins/extensions/cookie.js"></script>
    <script src="/global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="/global_assets/js/plugins/trees/fancytree_all.min.js"></script>
    <script src="/global_assets/js/plugins/trees/fancytree_childcounter.js"></script>
    <script src="/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/form_layouts.js"></script>
	<!-- /theme JS files -->
	<script src="/assets/js/tinymce.min.js"></script>
	<script src="/assets/js/meiomask.js" type="text/javascript"></script>
	<script src="/assets/js/tinyMCE.js" type="text/javascript"></script>
    <script src="/global_assets/js/demo_pages/form_multiselect.js"></script>

	<script>
        $(function () {
            $('input[data-mask]').each(function() {
                var input = $(this);
                input.setMask(input.data('mask'));
            });
        })
	</script>

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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Novo Registro</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="/provider/product/list" class="btn btn-link btn-float text-default"><i class="icon-list text-primary"></i><span>Ver todos</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="/" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Cadastro de produto</span>
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
						<h5 class="card-title">Cadastro de produto</h5>
					</div>

					<div class="card-body">

						@if(isset($return->status))
							@if($return->status == 'success')
							<div class="alert alert-success" role="alert">
								{{$return->msg}}
							</div>
							@else
							<div class="alert alert-danger" role="alert">
								{{$return->msg}}
							</div>
							@endif
						@endif

						<form action="/provider/product/add" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
							<div class="row">
								<div class="col-md-6">
									<fieldset>
										<legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> Dados do produto</legend>
										<div class="form-group">
											<label>Produto:</label>
											<input type="text" name="name" class="form-control" placeholder="" required>
										</div>
										<div class="form-group">
											<label>Código:</label>
											<input type="text" name="codigo" class="form-control" placeholder="">
										</div>
										<div class="form-group">
											<label>Valor:</label>
											<input type="text" name="value" data-mask="decimal" class="form-control" placeholder="" required>
										</div>
										<div class="form-group">
											<label>Valor Promocional:</label>
											<input type="text" data-mask="decimal" name="promotion_value" class="form-control" placeholder="" value="0">
										</div>
										<div class="form-group">
											<label>Disconto (%):</label>
											<input type="text" data-mask="decimal" name="discount" class="form-control" placeholder="" value="0">
										</div>
										<div class="form-group">
											<label>Descrição curta:</label>
											<textarea type="text" name="short_description" class="form-control"></textarea>
										</div>
									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
					                	<legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Atributos e estoque</legend>
										<div class="form-group">
											<label>Frete Grátis:</label>
											<select name="free_shipping" class="form-control">
												<option value="">Selecione</option>
												<option value="sim">Sim</option>
												<option value="nao">Não</option>
											</select>
										</div>

										<div class="form-group">
											<label>Quantidade:</label>
											<input type="number" name="stock" placeholder="Quantidade em estoque" class="form-control" required>
										</div>
										<div class="form-group">
											<label>Peso (g)</label>
											<input type="text" name="weight" data-mask="decimal" placeholder="Peso em gramas" class="form-control" value="0">
										</div>
										<div class="form-group">
											<label>Altura (cm)</label>
											<input type="text" name="height" data-mask="decimal" placeholder="Altura em centimetros" class="form-control" value="0">
										</div>
										<div class="form-group">
											<label>Largura (cm)</label>
											<input type="text" name="width" data-mask="decimal" placeholder="Largura em centimetros" class="form-control" value="0">
										</div>

										<div class="form-group">
											<label>Comprimento (cm)</label>
											<input type="text" name="length" data-mask="decimal" placeholder="Comprimento em centimetros" class="form-control" value="0">
										</div>
									</fieldset>
								</div>
                                <div class="col-md-12">
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
                                </div>
								<div class="col-md-12">
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
								</div>

								<div class="col-md-12">
									<div class="card">
										<div class="card-header header-elements-inline">
											<h6 class="card-title">Sub Categorias</h6>
										</div>
										<div class="card-body">
											<div class="form-group">
												<select class="form-control multiselect-full-featured" name="subcategory_id" data-fouc>
													@foreach($read as $item)
														<optgroup label="Departamento: {{$item->name}}" style="padding-left: 15px">
															@foreach($item->category as $category)
																<optgroup label="Categoria: {{$category->name}}" style="padding-left: 15px">
																@foreach($category->subcategory as $subcategory)
																<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
																@endforeach
															@endforeach
														</optgroup>
													@endforeach
												</select>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<fieldset>
										<div class="form-group">
											<label>Descrição completa do produto:</label>
											<textarea id="full-featured" name="long_description"></textarea>
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
