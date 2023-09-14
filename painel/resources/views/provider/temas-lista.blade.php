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
	<script src="/global_assets/js/plugins/media/fancybox.min.js"></script>

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/gallery.js"></script>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Temas</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="gallery_titles.html" class="breadcrumb-item">Temas</a>
							<span class="breadcrumb-item active">Lista</span>
						</div>

						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<!-- Image grid -->
				<div class="mb-3">
					<h6 class="mb-0 font-weight-semibold">
						Grid de templates
					</h6>
				</div>

				<div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-success" role="alert">
                            Nenhum tema encontrado!
                        </div>
                    </div>
                    {{--<div class="col-sm-6 col-xl-3">--}}
						{{--<div class="card">--}}
							{{--<div class="card-img-actions mx-1 mt-1">--}}
								{{--<img class="card-img img-fluid" src="./global_assets/images/demo/flat/1.png" alt="">--}}
								{{--<div class="card-img-actions-overlay card-img">--}}
									{{--<a href="./global_assets/images/demo/flat/1.png" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">--}}
										{{--<i class="icon-plus3"></i>--}}
									{{--</a>--}}

									{{--<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">--}}
										{{--<i class="icon-link"></i>--}}
									{{--</a>--}}
								{{--</div>--}}
							{{--</div>--}}

							{{--<div class="card-body">--}}
								{{--<div class="d-flex align-items-start flex-nowrap">--}}
									{{--<div>--}}
										{{--<div class="font-weight-semibold mr-2">For ostrich much</div>--}}
										{{--<span class="font-size-sm text-muted">Size: 432kb</span>--}}
									{{--</div>--}}

									{{--<div class="list-icons list-icons-extended ml-auto">--}}
										{{--<a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>--}}
										{{--<a href="#" class="list-icons-item"><i class="icon-bin top-0"></i></a>--}}
									{{--</div>--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div>--}}

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
