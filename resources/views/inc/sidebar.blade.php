<!DOCTYPE html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>@yield('title')</title>

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

	<script>
		var dropdownToggle = document.querySelector('#shortcutDropdown');

		// Initialize the dropdown using Bootstrap's JavaScript
		var dropdown = new bootstrap.Dropdown(dropdownToggle);

		jQuery(document).ready(function($) {
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		})
		$(document).ready(function() {
			$('.dropdown-menu').on('show.bs.dropdown', function() {
				$('.dashboard').insertAfter($('.dropdown-toggle'));
			});
		});
	</script>

	<style>
		body {
			overflow-x: hidden;
		}

		#sidebar-wrapper {
			min-height: 100vh;
			margin-left: -15rem;
			-webkit-transition: margin .25s ease-out;
			-moz-transition: margin .25s ease-out;
			-o-transition: margin .25s ease-out;
			transition: margin .25s ease-out;
		}

		#sidebar-wrapper .sidebar-heading {
			padding: 0.875rem 1.25rem;
			font-size: 1.2rem;
		}

		#sidebar-wrapper .list-group {
			width: 15rem;
		}

		#page-content-wrapper {
			min-width: 100vw;
		}

		.dropdown-menu {
			position: absolute;
			z-index: 1000;
			width: 100%;
		}


		#wrapper.toggled #sidebar-wrapper {
			margin-left: 0;
		}

		@media (min-width: 768px) {
			#sidebar-wrapper {
				margin-left: 0;
			}

			#page-content-wrapper {
				min-width: 0;
				width: 100%;
			}

			#wrapper.toggled #sidebar-wrapper {
				margin-left: -15rem;
			}
		}
	</style>
</head>

<body>
	<div class="d-flex" id="wrapper">

		<!-- Sidebar -->
		<div class="bg-light border-right" id="sidebar-wrapper">
			<div class="sidebar-heading">Admin</div>
			<div class="list-group list-group-flush">
				<div class="dropdown">
					<a href="{{route('admin.index')}}" class="list-group-item list-group-item-action bg-light dashboard">Dashboard</a>
					<a class="list-group-item list-group-item-action bg-light dropdown-toggle" href="#" role="button" id="shortcutDropdown" data-bs-toggle="dropdown" aria-expanded="false">
						Master Data
					</a>
					<ul class="dropdown-menu" aria-labelledby="shortcutDropdown">
						<li><a class="dropdown-item" href="{{route('kategoriberitacrud.index')}}">Kategori</a></li>
						<li><a class="dropdown-item" href="{{route('kategoriiklancrud.index')}}">Kategori Iklan</a></li>
						<li><a class="dropdown-item" href="{{route('lamancrud.index')}}">Laman</a></li>
						<li><a class="dropdown-item" href="{{route('bprcrud.index')}}"></a></li>
						<!-- <li><a class="dropdown-item" href="{{route('bprcrud.index')}}">Bpr</a></li> -->
						<!-- <li><a class="dropdown-item" href="{{route('bankumumcrud.index')}}">Bank Umum</a></li>
						<li><a class="dropdown-item" href="{{route('lkmcrud.index')}}">Lkm</a></li>
						<li><a class="dropdown-item" href="{{route('koperasicrud.index')}}">Koperasi</a></li>
						<li><a class="dropdown-item" href="{{route('investasicrud.index')}}">Investasi</a></li>
						<li><a class="dropdown-item" href="{{route('bisniscrud.index')}}">Bisnis</a></li>
						<li><a class="dropdown-item" href="{{route('industricrud.index')}}">Industri</a></li>
						<li><a class="dropdown-item" href="{{route('umkmcrud.index')}}">Umkm</a></li> -->
					</ul>
					<a class="list-group-item list-group-item-action bg-light dropdown-toggle" href="#" role="button" id="shortcutDropdown" data-bs-toggle="dropdown" aria-expanded="false">
						Manage Berita
					</a>
					<ul class="dropdown-menu" aria-labelledby="shortcutDropdown">
						<li><a class="dropdown-item" href="{{route('beritasorotancrud.index')}}">Berita</a></li>
						<li><a class="dropdown-item" href="{{route('lamaniklancrud.index')}}">Iklan</a></li>

					</ul>
					<!-- <a href="{{route('iklancrud.index')}}" class="list-group-item list-group-item-action bg-light dashboard">Iklan</a> -->
				</div>
			</div>
		</div>

		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			@yield('container')

		</div>
		<!-- /#page-content-wrapper -->

	</div>
	<!-- /#wrapper -->
</body>

</html>