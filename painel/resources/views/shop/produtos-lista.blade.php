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
	<script src="/global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js"></script>
	<script src="/global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
	<script src="/global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
	<script src="/global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>

	<script src="/assets/js/app.js"></script>
	<script src="/global_assets/js/demo_pages/ecommerce_orders_history.js"></script>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Produtos</span></h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="index.php" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<a href="#" class="breadcrumb-item">Produtos</a>
							<span class="breadcrumb-item active">LIsta</span>
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

				<!-- Orders history (datatable) -->
				<div class="w-100 overflow-auto order-2 order-md-1">
					<div class="card-header bg-transparent header-elements-inline">
						<h6 class="card-title">Produtos</h6>
						
					</div>

					<table class="table table-orders-history text-nowrap">
						<thead>
							<tr>
								<th>Status</th>
								<th>Produto</th>
								<th>Código</th>
								<th>Alt. / Lar. / Comp.</th>
								<th>Atributo / Variações</th>
								<th>Estoque</th>
								<th>Valor</th>
								<th class="text-center"><i class="icon-arrow-down12"></i></th>
							</tr>
						</thead>
						<tbody>
                            @foreach($products as $product)
							<tr>
                                <td>Masculino</td>
								<td>
									<div class="media">
										<a href="#" class="mr-3">
											<img src="{{$product->images[0]->url}}" height="60" alt="">
										</a>

										<div class="media-body align-self-center">
											<a href="#" class="font-weight-semibold">{{$product->name}}</a>
											<div class="text-muted font-size-sm">
												<span class="badge badge-mark bg-green border-green mr-1"></span>
												Ativo
											</div>
										</div>
									</div>
								</td>
								<td><a href="#">{{$product->codigo}}</a></td>
								<td>{{$product->height / 100}}cm x {{$product->width / 100}}cm x {{$product->weight / 100}}cm</td>
								<td>
									<p>
									Tamnho <span class="badge badge-primary">Grande</span>
									<span class="badge badge-primary">Pequeno</span>
									</p>
									<p>
									Cor <span class="badge badge-secondary">Azul</span>
									<span class="badge badge-secondary">Amarelo</span>
									</p>
								</td>
								<td>{{$product->stock}}</td>
								<td>
									<h6 class="mb-0 font-weight-semibold">R$ {{\App\Product::valor($product->value)}}</h6>
								</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="list-icons-item dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-eye8"></i> Detalhes</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
                            @endforeach

						</tbody>
					</table>
				</div>
				<!-- /orders history (datatable) -->

				<!-- Sidebar content -->
				<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

					<!-- Categories -->
					<div class="card">
						<div class="card-header bg-transparent header-elements-inline">
							<span class="text-uppercase font-size-sm font-weight-semibold">Categorias</span>
							<div class="header-elements">
								<div class="list-icons">
									<a class="list-icons-item" data-action="collapse"></a>
								</div>
							</div>
						</div>

						<div class="card-body">
							<form action="#">
								<div class="form-group form-group-feedback form-group-feedback-right">
									<input type="search" class="form-control" placeholder="Search">
									<div class="form-control-feedback">
										<i class="icon-search4 font-size-base text-muted"></i>
									</div>
								</div>
							</form>
						</div>

						<div class="card-body border-0 p-0">
							<ul class="nav nav-sidebar mb-2">
								@foreach($departaments as $departament)
								<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
									<a href="#" class="nav-link">{{$departament->name}}</a>
									<ul class="nav nav-group-sub">
										@foreach($departament->category as $category)
										<li class="nav-item"><a href="#" class="nav-link">{{$category->name}}</a></li>
										@endforeach
									</ul>
								</li>
								@endforeach
							</ul>
						</div>
					</div>
					<!-- /categories -->

					<!-- Filters -->
					<div class="card ">
						<div class="card-header bg-transparent header-elements-inline">
							<span class="text-uppercase font-size-sm font-weight-semibold">Filtro de produto</span>
							<div class="header-elements">
								<div class="list-icons">
									<a class="list-icons-item" data-action="collapse"></a>
								</div>
							</div>
						</div>

						<div class="card-body">
							<form action="#">
								<div class="form-group">
									@foreach($brands as $brand)
									<div class="overflow-auto" style="max-height: 192px;">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" name="brand[]" class="form-input-styled" data-fouc>
												{{$brand->name}}
											</label>
										</div>
									</div>
									@endforeach
								</div>
								@foreach($atributes as $atribute)
									@if($atribute->type == 'size' || $atribute->type == 'unity')
									<div class="form-group mb-2">
										<div class="font-size-xs text-uppercase text-muted mb-3">{{$atribute->name}}</div>
										<div class="row row-labels">
                                            @foreach($atribute->variation as $vatiation)
											<div class="col-3">
												<a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">{{$vatiation->name}}</a>
											</div>
											@endforeach
										</div>
									</div>
									@elseif($atribute->type == 'color')
									<div class="form-group">
										<div class="font-size-xs text-uppercase text-muted mb-3">{{$atribute->name}}</div>

										<div class="row">
                                            @foreach($atribute->variation as $vatiation)
											<div class="col-4">
												<div class="mb-2">
													<a href="#" class="d-block p-2 rounded" ><div class="py-1"></div></a>
													<div class="font-size-sm text-center text-muted mt-1">{{$vatiation->name}}</div>
												</div>
											</div>
                                            @endforeach
										</div>
									</div>
									@endif
								@endforeach

							</form>
						</div>
					</div>
					<!-- /filters -->

				</div>
				<!-- /sidebar content -->
				</div>
			</div>
			<!-- /content area -->

			<!-- Footer -->
		@include('shop.inc.footer')
		<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
