<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REJOWINANGUN SIAGA COVID-19</title>
	<link rel = "icon" href ="{{asset('images/logo.png')}}" type = "image/x-icon"> 

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
		type="text/css">
	<link href="{{asset('css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/core.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/colors.min.css')}}" rel="stylesheet" type="text/css">	
	<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/fontawesome-5.6.3/css/all.css')}}" rel="stylesheet" type="text/css"/>
	<!-- <link rel="stylesheet" href="lib/themes/rtl.css"> -->
	<!-- /global stylesheets -->
	@stack('after_style')

	<!-- Core JS files -->
	<script type="text/javascript" src="{{asset('js/libraries/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/libraries/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/loaders/pace.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('js/app.min.js')}}"></script>
	<!-- /theme JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('js/plugins/forms/validation/validate.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/inputs/touchspin.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/styling/switch.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/forms/styling/uniform.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/libraries/jquery_ui/interactions.min.js')}}"></script>

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('js/plugins/ui/moment/moment.min.js')}}"></script>
	<!-- <script src="{{asset('js/plugins/pickers/pickadate/translations/id_ID.js')}}"></script> -->
	<!-- /theme JS files -->

	<!-- Input upload picture -->
	<script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
	<!-- Theme JS files -->
	<script type="text/javascript" src="{{asset('js/plugins/media/fancybox.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/pages/gallery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins/ui/ripple.min.js')}}"></script>
	<!-- /theme JS files -->
	<script>
		$(document).ready(function () {
			$("#no_telephone").inputmask({
				// suffix : ',-',
				prefix: '08',
				alias: "numeric",
				autoGroup: true,
				rightAlign: false
			});
		});
	</script>
	@stack('after_script')

</head>

<body>
	<!-- Page header -->
	<div class="page-header page-header-inverse bg-indigo">
		<!-- Second navbar -->
		<div class="navbar navbar-inverse navbar-transparent navbar-hidden" id="navbar-second" style="background-color:#1a2c43">
			<ul class="nav navbar-nav visible-xs-block ">
				<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
			<div class="navbar-collapse collapse" id="navbar-second-toggle">
				<ul class="nav navbar-nav navbar-nav-material">
					<li><a href="{{url('/')}}">Dashboard</a></li>
					<li><a href="{{url('skrining-mandiri')}}">Skrining Mandiri</a></li>
					<!-- <li><a data-toggle="modal" data-target="#modal_theme_primary">Pendataan Dampak Covid-19</a></li> -->
					<li><a data-toggle="modal" data-target="#modal_theme_primary">Lapor Pemudik</a></li>
					<li><a href="{{url('/info-grafik')}}">Infografis</a></li>
				</ul>
			</div>
		</div>
		<!-- /second navbar -->
	</div>
	<!-- Content area -->
	<div class= "container-top bg-slate">
		<div class="page-container bg-slate content-style" style="">
			<!-- Page content -->
			<div class="page-content">
				<!-- Main content -->
				<div class="content-text-wrapper" >
					<!-- Content area -->
					<div class=" text-center">
						<div class="col-md-12 logo-container">
							<div class="logo-style">
								<a class="navbar-brand" href="{{url('/')}}">
								<img class="logo" src="{{asset('images/ugm-putih.png')}}" alt="logo">
								</a>
								<a class="navbar-brand" href="{{url('/')}}">
								<img class="logo" src="{{asset('images/dpkm.png')}}" alt="logo">
								</a>
								<a class="navbar-brand" href="{{url('/')}}">
									<img class="logo" src="{{asset('images/logo.png')}}" alt="logo">
								</a>
							</div>
						</div>
						<div class="col-md-12 title-container">
							<div class="title-style">
								<h1 class="title-web-container">REJOWINANGUN SIAGA COVID-19</h1>
								<h3>Jangan panik! Mari bersama lawan COVID-19.</h3>
							</div>
						</div>
						<div class="col-md-12 button-small" style="margin-top:20px">
							<div class="col-md-4 box">
								<a href="{{url('skrining-mandiri')}}" type="button" class="btn btn-lg btn-block btn-flat bg-slate-400 border-default">Skrining Mandiri <i class="icon-circle-right2 position-right"></i></a>
							</div>
							<div class="col-md-4">
								<button type="button" class="btn btn-lg btn-block btn-flat bg-slate-400 border-default"  data-toggle="modal" data-target="#modal_theme_primary">Lapor Pemudik <i class="icon-circle-right2 position-right"></i></i></button>
							</div>
							<div class="col-md-4">
								<a href="{{url('info-grafik')}}" type="button"  class="btn btn-lg btn-block btn-flat bg-slate-400 border-default">Infografis Covid-19 <i class="icon-circle-right2 position-right"></i></a>
							</div>
						</div>
						<div class="container">
							<div class="col-md-12 row">
								<div class="col-md-6">
									<div class="box-styling-content">
										<div class="row mb-4 mt-5" style="margin: 10px auto">
											<div class="col-md-12">
												<div class="icon mb-3">
													<div class="text-center mx-auto icon-80 bg-white rounded-circle">
														<a href="{{url('skrining-mandiri')}}"><i class="text-color1_dark fa-2x fas fa-book-open" style="color: #2d4e77;margin-top:20px"></i></a>
													</div>
													<div class="clear">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="media-body pt-2" style="margin: 10px auto; text-align: center; ">
													<h5 class="elementtitle stack_font1 font-content-small"><a href="{{url('skrining-mandiri')}}" style="color: #2d4e77">Skrining Mandiri</a></h5>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6" style="margin-top:10px">
									<div class="box-styling-content">
										<div class="row mb-4 mt-5" style="margin: 10px auto">
											<div class="col-md-12">
												<div class="icon mb-3">
													<div class="text-center mx-auto icon-80 bg-white rounded-circle">
														<a href="{{url('skrining-mandiri')}}"><i class="text-color1_dark fa-2x fas fa-book-open" style="color: #2d4e77;margin-top:20px"></i></a>
													</div>
													<div class="clear">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="media-body pt-2" style="margin: 10px auto; text-align: center; ">
													<h5 class="elementtitle stack_font1 font-content-small"><a href="{{url('skrining-mandiri')}}" style="color: #2d4e77">Skrining Mandiri</a></h5>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6" style="margin-top:10px">
									<div class="box-styling-content">
										<div class="row mb-4 mt-5" style="margin: 10px auto">
											<div class="col-md-12">
												<div class="icon mb-3">
													<div class="text-center mx-auto icon-80 bg-white rounded-circle">
														<a href="{{url('skrining-mandiri')}}"><i class="text-color1_dark fa-2x fas fa-book-open" style="color: #2d4e77;margin-top:20px"></i></a>
													</div>
													<div class="clear">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="media-body pt-2" style="margin: 10px auto; text-align: center; ">
													<h5 class="elementtitle stack_font1 font-content-small"><a href="{{url('skrining-mandiri')}}" style="color: #2d4e77">Skrining Mandiri</a></h5>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /content area -->
				</div>
				<!-- /main content -->
			</div>
			<!-- /page content -->
		</div>
	</div>
	<!-- /main content -->
	<div class="page-container video-content">
		<!-- Page content -->
		<div class="page-content style-image" >
			<!-- Main content -->
				<div class="image-container">
					<img class="image-container-pelayanan" src="{{asset('images/alur-pelayanan.png')}}">
				</div>
			<!-- /main content -->
		</div>
		<div class="page-content ">
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Content area -->
				<div class="content">
					<!-- Image grid -->
					<h1 class="text-center" style="font-family:sans-serif;font-size:27px">Galeri Foto dan Video</h1>
					<input type="hidden" name="hidden_page_gambar" id="hidden_page_gambar" value="1" />
					<div class="row" id="container-gambar">
						@include('warga.list-gambar')
					</div>
					<hr>
					<input type="hidden" name="hidden_page_video" id="hidden_page_video" value="1" />
					<div class="row" id="container-video">
						@include('warga.list-video')
					</div>
				</div>
				<!-- /content area -->
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
	</div>
	<!-- /page container -->

	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second"><i class="icon-circle-up2"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second">
			<div class="navbar-text">
				&copy; 2020 | KKN-PPM UGM REJOWINANGUN
			</div>
		</div>
	</div>

	<!-- Login modal -->
	<div id="modal_theme_primary" class="modal fade">
		<div class="modal-dialog  ">
			<div class="login-container">
				<div class="page-container">
					<!-- Page content -->
					<div class="page-content">
						<!-- Main content -->
						<div class="content-wrapper">
							<!-- Content area -->
							<div class="content">
								<!-- Simple login form -->
								<form class="form-horizontal form-validate-jquery" method="POST"
									action="{{ route('warga.login') }}">
									@csrf
									<div class="panel panel-body login-form">
										<div class="" style="margin:0px">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="text-center">
											<!-- <img src="{{asset('images/covid.jfif')}}" alt="logo" style="width:50%"> -->
											<img src="{{asset('images/logo.png')}}" alt="logo" style="width:50%">
											<h5 class="content-group">KALIREJO SIAGA COVID-19 <small
													class="display-block">Masukkan nomor handphone anda.</small></h5>
										</div>
										<div class="form-group has-feedback has-feedback-left">
											<input type="text" maxlength="13" minlength="10" id="no_telephone"
												placeholder="Nomor Handphone" class="form-control" name="no_telepon"
												value="{{ old('no_telepon') }}" required autofocus>
											<div class="form-control-feedback">
												<i class="icon-user text-muted"></i>
											</div>
											@if ($errors->has('no_telepon'))
											<label style="padding-top:7px;color:#F44336;">
												<strong><i class="fa fa-times-circle"></i>
													{{ $errors->first('no_telepon') }}</strong>
											</label>
											@endif
										</div>
										<div class="form-group">
											<button type="submit" class="btn bg-primary-800 btn-block">Masuk <i
													class="icon-circle-right2 position-right"></i></button>
										</div>
										<div class="text-center">
											<h5 class="content-group"><b style="color:#073c64">KKN-PPM UGM 2020</b></h5>
											<h5 class="content-group"></h5>
										</div>
									</div>
								</form>
								<!-- /simple login form -->
							</div>
							<!-- /content area -->
						</div>
						<!-- /main content -->
					</div>
					<!-- /page content -->
				</div>
			</div>
		</div>
	</div>
	<!-- /login modal -->
	{{-- @include('sweetalert::alert') --}}
</body>
<script>
    $(document).ready(function(){
		function fetch_data_gambar(page, query)
		{
			$.ajax({
			url:"/cari/list-gambar?page="+page+"&query="+query,
			method:'GET',
			success:function(data)
				{
					$('#container-gambar').html('');
					$('#container-gambar').html(data);
				}
			});
		}

		$(document).on('click', '#gambar .pagination a', function(event){
			event.preventDefault();
			var page = $(this).attr('href').split('page=')[1];
			$('#hidden_page_gambar').val(page);

			var query = '';

			$('li').removeClass('active');
			$(this).parent().addClass('active');
			fetch_data_gambar(page, query);
		});

		function fetch_data_video(page, query)
		{
			$.ajax({
			url:"/cari/list-video?page="+page+"&query="+query,
			method:'GET',
			success:function(data)
				{
					$('#container-video').html('');
					$('#container-video').html(data);
				}
			});
		}

		$(document).on('click', '#video .pagination a', function(event){
			event.preventDefault();
			var page = $(this).attr('href').split('page=')[1];
			$('#hidden_page_video').val(page);

			var query = '';

			$('li').removeClass('active');
			$(this).parent().addClass('active');
			fetch_data_video(page, query);
		});

    });
</script>
</html>
