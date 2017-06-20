<header class="container">
	<div class="header">
		<div class="row">
			<div class="col-xs-1"></div>
			<div class="logo col-xs-4"><h1><img src="/img/chulluncp.png" alt=""> CAFOBE - UNCP</h1></div>
			<div class="col-xs-6 text-right hidden-print">
				<ul class="breadcrumb">
				  <li class="hide"><a href="#">Configuración</a></li>
				  <li><a href="/pdf/manual.pdf">Manual de usuario</a></li>
				  <li><a href="/logout">Cerrar Sesión</a></li>
				</ul>
			</div>
		</div>
		<div class="row hidden-print">
			<div class="col-xs-1"></div>
			<div class="menu col-xs-10 text-right">
				<ul class="nav nav-pills">
					@yield('Menu')
				</ul>
			</div>
		</div>
	</div>
</header>