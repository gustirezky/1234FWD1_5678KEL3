<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@if (count($errors)>0)
	<div class="alert alert-danger">
	<ul>
	@foreach($errors->all()as $error)
	<li>{{$error}}</li>
	@endforeach
	</ul>
	</div>
	@endif
	<title>@yield('page_title','RENTAL MOBIL') </title>
	<link rel="stylesheet" type="text/css" href="{{asset('component/bootstrap/dist/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('component/font-awesome/css/font-awesome.min.css')}}">
	<style type="text/css">
			body {
					padding-top: 70px;
					padding-bottom: 70px;
			}
			.starter-template {
					padding: 40px 15px;
					text-align: center;
			}
			.form-horizontal{
					padding: 15px 10px;
			}
			footer{
					padding-top: 15px;
					text-align: right;
			}
	</style>
</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapse" data-toogle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{url('/login')}}">RENTAL JAYA</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Beranda Perusahaan <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('karyawan')}}">Karyawan</a></li>
							<li class="divider"></li>

							<li><a href="{{url('pelanggan')}}">Pelanggan</a></li>			
							<li class="divider"></li>

							<li><a href="{{url('supplier')}}">Supplier</a></li>			
							<li class="divider"></li>

						</ul>
					</li>
					
				
	<li class="dropdown active">
						<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mobil <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="dLabel">
							<li><a href="{{url('kategori')}}">Data Mobil</a></li>
							<li class="divider"></li>

							<li><a href="{{url('detail_transaksi')}}">Transaksi</a></li>			
							<li class="divider"></li>

							<li><a href="{{url('detail_transaksi')}}">Transaksi</a></li>			
							<li class="divider"></li>

						</ul>
					</li>
	
					
					<li><a href="{{url('proses')}}"> Proses <span></span></a>
							<li><a href="{{ url('logout')}}">Logout</a></li>
							<li><a href="{{ url('login')}}">Login</a></li>
					</li>
				</ul>
									</div><!--/.nav-collapse-->
								</div>
							</nav>
							<div class="clearfix"></div>
							<div class="container">
									@if (Session::has('informasi'))
											<div class="alert alert-info">
													<strong>Informasi :</strong>
				{{Session::get('informasi')}}
									</div>
							@endif

							@yield('container')
					</div>
					<nav class="navbar navbar-default navbar-fixed-bottom">
					<footer class="container">
									<!-- please dont delete this -->
									 <a href="https://www.instagram.com/gustirzky/"><span><i class="fa fa-instagram" style="color:#1da1f2"></i> </span></a>
									 <a href="https://twitter.com/gustirzky"><span><i class="fa fa-twitter" style="color:#1da1f2"></i> </span></a>
									 <a href="https://www.facebook.com/gusti.redfield"><span><i class="fa fa-facebook" style="color:#1da1f2"></i></span></a>
									 	
									 @GUESHOUSE
									                                                                                                       <!--/ please dont delete this -->
									                                                                                                       </footer>
									                                                                                        </nav>
									                                                                                        <script type="text/javascript" src="{{asset('component/jquery/dist/jquery.min.js') }}"></script>
									                                                                                        <script type="text/javascript" src="{{asset('component/bootstrap/dist/js/bootstrap.min.js') }}"></script>
									                                                                                        <script type="text/javascript">
									                                                                                        $(function () {
									                                                                                        		$('[data-toggle="tooltip"]').tooltip()
									                                                                                        	});
									                                                                                        </script>
									                                                                                   </body>



