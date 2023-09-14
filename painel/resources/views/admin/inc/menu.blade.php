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
							<a href="index.php" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Administração</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-width"></i> <span>Fornecedores</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="fornecedores">
								<li class="nav-item"><a href="/admin/fornecedores/solicitacao" class="nav-link active">Solicitação de cadastro</a></li>
								<li class="nav-item"><a href="/admin/fornecedores/cadastro" class="nav-link active">Cadastrar novo</a></li>
								<li class="nav-item"><a href="/admin/fornecedores/lista" class="nav-link active">Ver Fornecedores</a></li>

							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-people"></i> <span>Lojistas</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="lojista">
								<li><a href="/admin/lojistas/representantes" class="nav-link">Lojistas Representantes</a></li>
								<li><a href="/admin/lojistas/individuais" class="nav-link">Lojistas Individuais</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="/admin/pedidos" class="nav-link"><i class="icon-stack2"></i> <span>Pedidos</span></a>
						</li>

						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Financeiro</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item">
							<a href="/admin/financeiro/extrato" class="nav-link"><i class="icon-list-unordered"></i> <span>Extrato</span></a>
						</li>
						<li class="nav-item">
							<a href="/admin/financeiro/resgate" class="nav-link"><i class="icon-upload"></i> <span>Resgates</span></a>
						</li>
						<li class="nav-item">
							<a href="/admin/financeiro/relatorios" class="nav-link"><i class="icon-stats-bars"></i> <span>Relatórios</span></a>
						</li>

						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Configurações</div> <i class="icon-menu" title="Forms"></i></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-user"></i> <span>Usuários</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li><a href="/admin/usuario/cadastro" class="nav-link active">Cadastrar novo</a></li>
								<li><a href="/admin/usuarios" class="nav-link active">Ver Usuários</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-versions"></i> <span>Temas</span></a>
							<ul class="nav nav-group-sub" data-submenu-title="Themes">
								<li><a href="/admin/tema/cadastro" class="nav-link active">Cadastrar novo</a></li>
								<li><a href="/admin/temas" class="nav-link active">Ver Temas</a></li>
							</ul>
						</li>

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->

		</div>
