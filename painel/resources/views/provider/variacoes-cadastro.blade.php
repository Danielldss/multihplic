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

    <script src="/assets/js/meiomask.js" type="text/javascript"></script>
    <script src="/assets/js/app.js"></script>
    <script src="/global_assets/js/demo_pages/datatables_advanced.js"></script>
    <!-- /theme JS files -->

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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Variaçoes</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="/provider/product/variation-list/{{$product_id}}" class="btn btn-link btn-float text-default"><i class="icon-list text-primary"></i><span>Ver Todos</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="/provider/painel" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Dashboard</a>
							<a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Produtos</a>
							<span class="breadcrumb-item active">Nova Variação</span>
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
						<h5 class="card-title">Cadastro de variação</h5>
					</div>

					<div class="card-body">
						<form action="/provider/product/variation-add/{{$product_id}}" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
							<div class="row">

                                    <div class="col-md-6">
                                        <fieldset>
                                            <div class="form-group">
                                                <label>Nome:</label>
                                                <input type="text" name="name" class="form-control" placeholder="Digite um nome para variação. Ex: GG">
                                            </div>
                                            <div class="form-group">
                                                <label>Atributo:</label>
                                                <select class="form-control" name="atribute_id" required>
                                                    <option value="">Selecione uma atributo</option>
                                                    @foreach($atributes as $atribute)
                                                        <option value="{{$atribute->id}}">{{$atribute->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Quantidade em estoque:</label>
                                                <input type="number" name="stock" class="form-control" placeholder="1">
                                            </div>
                                            <div class="form-group">
                                                <label>Valor:</label>
                                                <input type="text" data-mask="decimal" name="value" class="form-control" placeholder="1">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <div class="form-group">
                                                <label>Peso (g)</label>
                                                <input type="text" data-mask="decimal" name="weight" class="form-control" placeholder="Digite o peso em gramas">
                                            </div>
                                            <div class="form-group">
                                                <label>Altura (cm)</label>
                                                <input type="text" data-mask="decimal" name="height" class="form-control" placeholder="Digite a altura em centimetros">
                                            </div>
                                            <div class="form-group">
                                                <label>Largura (cm)</label>
                                                <input type="text" data-mask="decimal" name="width" class="form-control" placeholder="Digite a largura em centimetros">
                                            </div>
                                            <div class="form-group">
                                                <label>Comprimento (cm)</label>
                                                <input type="text" data-mask="decimal" name="length" class="form-control" placeholder="Digite o comprimento em centimetros">
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


            <!-- Footer -->
            @include('provider.inc.footer')
        <!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
