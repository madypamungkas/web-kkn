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
	<!-- /main content -->
	<div class="page-container">
		<!-- Page content -->
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