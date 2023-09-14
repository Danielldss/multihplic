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

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/form_layouts.js"></script>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Novo Registro</h4>
						<a href="/admin/fornecedores/cadastro" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="/admin/fornecedores/lista" class="btn btn-link btn-float text-default"><i class="icon-list text-primary"></i><span>Ver todos</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="/admin/painel" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Dados do fornecedor</span>
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
						<h5 class="card-title">Dados do fornecedor</h5>
					</div>

					<div class="card-body">

						<form action="#">
							<div class="row">
								<div class="col-md-6">
									<fieldset>

										<div class="form-group">
											<label>Razao Social:</label>
											<input type="text" name="socialName" value="{{$provider['socialName']}}" class="form-control" placeholder="" disabled>
										</div>
										<div class="form-group">
											<label>Nome Fantasia:</label>
											<input type="text" name="fantasyName" value="{{$provider['fantasyName']}}" class="form-control" placeholder="" disabled>
										</div>
										<div class="form-group">
											<label>Cnpj:</label>
											<input type="text" name="cpfCnpj" value="{{$provider['cpfCnpj']}}" class="form-control" placeholder="" disabled>
										</div>
										<div class="form-group">
											<label>E-mail:</label>
											<input type="text" name="emailCompany" value="{{$provider['emailCompany']}}" class="form-control" placeholder="" disabled>
										</div>
										<div class="form-group">
											<label>Telefone:</label>
											<input type="text" name="telephone" value="{{$provider['telephone']}}" class="form-control" placeholder="" disabled>
										</div>
										<div class="form-group">
											<label>Cep:</label>
											<input type="text" name="cep" value="{{$provider['cep']}}" class="form-control" placeholder="" disabled>
										</div>
                                        <div class="form-group">
                                            <label>Logradouro:</label>
                                            <input type="text" name="address" value="{{$provider['address']}}" class="form-control" placeholder="" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Número:</label>
                                            <input type="text" name="number" value="{{$provider['number']}}" class="form-control" placeholder="" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Complemento:</label>
                                            <input type="text" name="complement" value="{{$provider['complement']}}" class="form-control" placeholder="" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Bairro:</label>
                                            <input type="text" name="sector" value="{{$provider['sector']}}" class="form-control" placeholder="" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Cidade:</label>
                                            <input type="text" name="city" value="{{$provider['city']}}" class="form-control" placeholder="" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Estado:</label>
                                            <input type="text" name="state" value="{{$provider['state']}}" class="form-control" placeholder="" disabled>
                                        </div>

										<div class="form-group">
											<label>Observações:</label>
											<textarea rows="5" cols="5" name="observations" class="form-control" placeholder="" disabled>{{$provider['observations']}}</textarea>
										</div>
									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
					                	<legend class="font-weight-semibold"><i class="icon-truck mr-2"></i> Representante</legend>

										<div class="form-group">
											<label>Nome:</label>
											<input type="text" name="name" placeholder="" value="{{ $provider['user']->user->name }}" disabled class="form-control">
										</div>

										<div class="form-group">
											<label>Email:</label>
											<input type="text" name="email" placeholder="" value="{{ $provider['user']->user->email }}" disabled class="form-control">
										</div>

									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<a href="javascript:history.back();" class="btn btn-primary">Voltar <i class="icon-paperplane ml-2"></i></a>
							</div>
						</form>
					</div>
				</div>
				<!-- /2 columns form -->

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
					<div class="text-center d-lg-none w-100">
						<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
							<i class="icon-unfold mr-2"></i>
							Footer
						</button>
					</div>
	
					<div class="navbar-collapse collapse" id="navbar-footer">
						<span class="navbar-text">
							&copy; 2019 <a href="#">Multihplic - Suas vendas, seus ganhos</a>
						</span>
	
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item"><a href="#" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Suporte</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

    <script>
        $(function() {
            $('input[name=cep]').blur(function(){

                $.ajax({
                    url :  "https://viacep.com.br/ws/" + $(this).val() + "/json/",
                    type : 'GET'
                }).done(function(result){
                    $('input[name=address]').val(result.logradouro);
                    $('input[name=sector]').val(result.bairro);
                    $('input[name=city]').val(result.localidade);
                    $('input[name=state]').val(result.uf);
                });

            });


        })
    </script>
</body>
</html>
