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
    <script src="/global_assets/js/plugins/media/fancybox.min.js"></script>

    <script src="/assets/js/app.js"></script>
    <script src="/global_assets/js/demo_pages/uploader_bootstrap.js"></script>
	<!-- /theme JS files -->

    <!-- Theme JS files -->
    <script src="/global_assets/js/demo_pages/gallery.js"></script>

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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Produtos</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="/provider/product/list" class="btn btn-link btn-float text-default"><i class="icon-list text-primary"></i><span>Lista de produtos</span></a>
						</div>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="#" class="breadcrumb-item">Produtos</a>
							<span class="breadcrumb-item active">Imagens</span>
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
                    <div class="card-header">
                        <h5 class="panel-title">Imagens do produto</h5>
                        <span class="form-text text-muted text-left">Automatically convert a file input to a bootstrap file input widget by setting its class as</span>
                    </div>
                    <div class="card-body">
                        <form action="/provider/product/images/{{$id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="file" name="images[]" class="file-input" multiple="multiple" data-fouc>
                                    {{--<span class="form-text text-muted">Automatically convert a file input to a bootstrap file input widget by setting its class as <code>file-input</code>.</span>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /bootstrap file input -->

                <div class="row">
                    @foreach($images as $image)
                    <div class="col-sm-6 col-lg-3">
                        <div class="card">
                            <div class="card-img-actions m-1">
                                <img class="card-img img-fluid" src="{{$image->url}}" alt="">
                                <div class="card-img-actions-overlay card-img">
                                    <a href="{{$image->url}}" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox" rel="group">
                                        <i class="icon-plus3"></i>
                                    </a>
                                    <a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
                                        <i class="icon-trash"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

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
