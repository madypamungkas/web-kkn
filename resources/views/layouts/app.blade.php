<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REJOWINANGUN SIAGA COVID-19 | KKN-PPM UGM 2020</title>
	<link rel = "icon" href ="{{asset('images/logo.png')}}" type = "image/x-icon"> 

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/colors.min.css')}}" rel="stylesheet" type="text/css">

	<link href="{{ asset('DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  	<link href="{{ asset('DataTables/Select-1.2.6/css/select.bootstrap4.min.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" rel="stylesheet" />

	<link href="{{asset('css/icons/fontawesome/styles.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	@stack('after_style')

	<!-- Core JS files -->
	<script type="text/javascript" src="{{asset('js/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/libraries/bootstrap.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>
	<!-- /theme JS files -->

	<script src="{{ asset('DataTables/jquery.dataTables.min.js') }}" ></script>
  <script src="{{ asset('DataTables/dataTables.bootstrap4.min.js') }}" ></script>
	<!-- /theme JS files -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{asset('js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('js/plugins/forms/validation/validate.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/inputs/touchspin.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/styling/switch.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/libraries/jquery_ui/interactions.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('js/pages/form_validation.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/validation/localization/messages_id.js')}}"> </script>
	<script type="text/javascript" src="{{asset('js/pages/form_select2.js')}}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- Input upload picture -->
	<script type="text/javascript" src="{{asset('js/plugins/uploaders/fileinput.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/pages/uploader_bootstrap.js')}}"></script>
	<!-- /Input upload picture -->

	<script type="text/javascript" src="{{asset('js/pages/datatables_data_sources.js')}}"></script>

	@stack('after_script')

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse" style="background-color:#1a2c43">
		<div class="navbar-header" style="padding-left:25px">
			<!-- <a href="#"><img src="{{asset('img/web_transparent_fit_ruko_logo_v2_white.png')}}" alt="" style="height:47px"></a> -->
			<h5 style="height:20px">REJO SIAGA COVID-19 | KKN-PPM UGM 2020</h5>
			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs "><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<span>{{Auth::user()->name}}</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="{{route('user.show',Auth::id())}}"><i class="icon-user-plus"></i> Akun</a></li>
						<li><a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
								<i class="icon-switch2"></i>
								Keluar
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<div class="media-body">
									<span class="media-heading text-semibold">{{Auth::user()->name}}</span>
									<div class="text-size-mini text-muted">
										@php
										$role = Auth::user()->getRoleNames()->toArray();
										$role = implode(', ',$role);
										@endphp
										<i class="icon-eye8 text-size-small"></i> &nbsp;{{$role}}
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a title="Pengaturan Akun" href="{{route('user.show',Auth::id())}}"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					@include('layouts.sidebar')
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

			@yield('content')

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	{{-- @include('sweetalert::alert') --}}
</body>
</html>
