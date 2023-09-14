<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="/global_assets/images/demo/users/face11.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold">{{ \Illuminate\Support\Facades\Session::get('user')->name  }}</div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;Goiânia, Go
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="index.html" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Lojista</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>Clientes</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="/shop/customers" class="nav-link active">Ver Clientes</a></li>
								<li class="nav-item"><a href="/shop/customers/bonus" class="nav-link active">Bonificação</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cart2"></i> <span>Produtos</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								{{--<li class="nav-item"><a href="/shop/product/atribute-list" class="nav-link active">Atributos</a></li>--}}
								{{--<li class="nav-item"><a href="/shop/product/departament-list" class="nav-link active">Departamentos</a></li>--}}
								{{--<li class="nav-item"><a href="/shop/product/category-list" class="nav-link active">Categorias</a></li>--}}
								{{--<li class="nav-item"><a href="/shop/product/arquive-list" class="nav-link active">Arquivos</a></li>--}}
								{{--<li class="nav-item"><a href="/shop/product/brand-list" class="nav-link active">Marcas</a></li>--}}
								<li class="nav-item"><a href="/shop/products/list" class="nav-link active">Produtos</a></li>
								<li class="nav-item"><a href="/shop/products/request" class="nav-link active">Solicitar Produtos</a></li>
							</ul>
						</li>

						<li class="nav-item">
							<a href="/shop/pedidos" class="nav-link"><i class="icon-stack2"></i> <span>Pedidos</span></a>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-newspaper"></i> <span>Marketing</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="#" class="nav-link">Campanhas</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Cupons de Desconto</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Desconto Progressivo</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Vale Presente</a></li>
							</ul>
						</li>

						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-statistics"></i> <span>Relatórios</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="#" class="nav-link">Exportar Relatórios</a></li>
								<li class="nav-item"><a href="/shop/reports/customers" class="nav-link">Clientes</a></li>
								<li class="nav-item"><a href="/shop/reports/products" class="nav-link">Produtos</a></li>
								<li class="nav-item"><a href="/shop/reports/sales" class="nav-link">Vendas</a></li>
							</ul>
						</li>

						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Financeiro</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item">
							<a href="/shop/finance/extract" class="nav-link"><i class="icon-list-unordered"></i> <span>Extrato</span></a>
						</li>
						<li class="nav-item">
							<a href="/shop/finance/rescue" class="nav-link"><i class="icon-upload"></i> <span>Resgates</span></a>
						</li>
						
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Configurações</div> <i class="icon-menu" title="Forms"></i></li>

						{{--<li class="nav-item nav-item-submenu">--}}
							{{--<a href="#" class="nav-link"><i class="icon-cog5"></i> <span>Configurações Gerais</span></a>--}}
							{{--<ul class="nav nav-group-sub" data-submenu-title="Themes">--}}
								{{--<li class="nav-item"><a href="#" class="nav-link">Loja</a></li>--}}
								{{--<li class="nav-item"><a href="#" class="nav-link">Locais de Lojas</a></li>--}}
								{{--<li class="nav-item"><a href="#" class="nav-link">Getway de Pagamento</a></li>--}}
								{{--<li class="nav-item"><a href="#" class="nav-link">Simulador Pagamento</a></li>--}}
							{{--</ul>--}}
						{{--</li>--}}
						{{--<li class="nav-item nav-item-submenu">--}}
							{{--<a href="#" class="nav-link"><i class="icon-user"></i> <span>Usuários</span></a>--}}
							{{--<ul class="nav nav-group-sub" data-submenu-title="Themes">--}}
								{{--<li class="nav-item"><a href="../usuario-cadastro.php" class="nav-link">Cadastrar novo</a></li>--}}
								{{--<li class="nav-item"><a href="../usuario-lista.php" class="nav-link">Ver Usuários</a></li>--}}
							{{--</ul>--}}
						{{--</li>--}}
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Temas</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li class="nav-item"><a href="/shop/theme/list" class="nav-link">Selecionar tema</a></li>
								{{--<li class="nav-item"><a href="#" class="nav-link">Banners</a></li>--}}
							</ul>
						</li>
						{{--<li class="nav-item nav-item-submenu">--}}
							{{--<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Institucional</span></a>--}}
							{{--<ul class="nav nav-group-sub" data-submenu-title="Themes">--}}
								{{--<li class="nav-item"><a href="#" class="nav-link">Criar página</a></li>--}}
								{{--<li class="nav-item"><a href="#" class="nav-link">Ver páginas</a></li>--}}
							{{--</ul>--}}
						{{--</li>--}}

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
