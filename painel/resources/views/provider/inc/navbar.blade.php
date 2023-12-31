<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="index.html" class="d-inline-block">
				<img src="/global_assets/images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<span class="badge bg-success ml-md-3 mr-md-auto">Online</span>

			<ul class="navbar-nav">
				
				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link dropdown-toggle caret-0" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="d-md-none ml-2">Notificações</span>
						<span class="badge badge-pill bg-warning-400 ml-auto ml-md-0">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
						<div class="dropdown-content-header">
							<span class="font-weight-semibold">Notificações</span>
							<a href="#" class="text-default"><i class="icon-compose"></i></a>
						</div>

						<div class="dropdown-content-body dropdown-scrollable">
							<ul class="media-list">
								<li class="media">
									<div class="mr-3 position-relative">
										<img src="/global_assets/images/demo/users/face10.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Novo Pedido</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>
										<span class="text-muted">Tiatrás Rocha fez um novo pedido</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="/global_assets/images/demo/users/face10.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Novo Pedido</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>
										<span class="text-muted">Tiatrás Rocha fez um novo pedido</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="/global_assets/images/demo/users/face10.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Novo Pedido</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>
										<span class="text-muted">Tiatrás Rocha fez um novo pedido</span>
									</div>
								</li>

								<li class="media">
									<div class="mr-3 position-relative">
										<img src="/global_assets/images/demo/users/face10.jpg" width="36" height="36" class="rounded-circle" alt="">
									</div>
									<div class="media-body">
										<div class="media-title">
											<a href="#">
												<span class="font-weight-semibold">Novo Pedido</span>
												<span class="text-muted float-right font-size-sm">04:58</span>
											</a>
										</div>
										<span class="text-muted">Tiatrás Rocha fez um novo pedido</span>
									</div>
								</li>

							</ul>
						</div>

						<div class="dropdown-content-footer justify-content-center p-0">
							<a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Veja mais"><i class="icon-menu7 d-block top-0"></i></a>
						</div>
					</div>
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="/global_assets/images/demo/users/face11.jpg" class="rounded-circle mr-2" height="34" alt="">
						<span>{{ \Illuminate\Support\Facades\Session::get('user')->name  }}</span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="/provider/perfil" class="dropdown-item"><i class="icon-user-plus"></i>Meu Perfil</a>
						<div class="dropdown-divider"></div>
						{{--<a href="/admin/perfil" class="dropdown-item"><i class="icon-cog5"></i> Configurações de conta</a>--}}
						<a href="/logout" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
