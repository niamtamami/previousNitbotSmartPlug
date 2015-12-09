<?php
include ("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>nitbot-iot</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="nitbotIoT, an opensource Internet of Things Research by nitbot.com team | Bismillah, terimakasih untuk segala dukungannya, nitbotIoT akan kami opensource kan seluruh kode program, schematic hardware dll. Dengan tujuan agar dapat dikembangkan bersama demi kemajuan Indonesia, dan semoga Allah memberikan barokah dan pahala dengan ini. Untuk website pengembangannya di http://iot.nitbot.com/, seluruh source codenya bisa dikembangkan bersama sama di https://github.com/nitbot/iot.nitbot.com , harapan besar untuk bersama sama bisa mengembangkan alat ini. Sekarang semua masih progress di opensource kan, jadi mohon bersabar jika ada beberapa bagian belum kami upload.
	smart device for every home, salam NitBotIoT">
	<meta name="author" content="nitbot.com and nitbot-iot team">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap-timeline.css" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/favicon.png">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>

	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12 column">
				<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> 
						<a class="navbar-brand" href="http://iot.nitbot.com/">nitbot-iot</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li >
								<a href="<?php echo $myweb; ?>">Web</a>
							</li>
							<li>
								<a href="<?php echo $myblog; ?>">Blog</a>
							</li>
							<li>
								<a href="#deskripsi">Deskripsi</a>
							</li>
							<li>
								<a href="#timeline">Timeline Pengembangan</a>
							</li>
							<li>
								<a href="#developer">for nitbot-iot Developer</a>
							</li>
							<li>
								<a href="<?php echo $mygithub; ?>">Github</a>
							</li>
							<li>
								<a href="<?php echo $myrepo; ?>">Repository</a>
							</li>
							<li>
								<a href="<?php echo $myabout; ?>">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<br>
			<br>
			<div class="page-header">
				<h1>
					nitbot-iot <small> "an opensource smarthome platform" </small>
				</h1>
			</div>
			<div class="row">
				<div class="col-md-3" align="center"><img src="myimg/iot-mini.jpg" class="thumbnail" alt="My picture" width=200></div>
				<div class="col-md-9" align="justify">
					<div class="carousel slide" id="carousel-331883" data-ride="carousel">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-331883">
							</li>
							<li data-slide-to="1" data-target="#carousel-331883">
							</li>
							<li data-slide-to="2" data-target="#carousel-331883">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img alt="" src="http://nitbot.com/image/cache/catalog/banner/iot-1140x380.png">
								<div class="carousel-caption">
									<h4>
										<?php echo $myResearchTitle1; ?>
									</h4>
									<p>
										<?php echo $myResearchDescrip1; ?>
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="myimg/2.jpg">
								<div class="carousel-caption">
									<h4>
										<?php echo $myResearchTitle2; ?>
									</h4>
									<p>
										<?php echo $myResearchDescrip2; ?>
									</p>
								</div>
							</div>
							<div class="item">
								<img alt="" src="myimg/3.jpg">
								<div class="carousel-caption">
									<h4>
										<?php echo $myResearchTitle3; ?>
									</h4>
									<p>
										<?php echo $myResearchDescrip3; ?>
									</p>
								</div>
							</div>
						</div> <a class="left carousel-control" href="#carousel-331883" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-331883" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div>
			<blockquote>
				<div>
					<p>
						nitbotIoT, an opensource smarthome platform. Untuk melihat dokumentasi berupa foto, video, dan download Aplikasi Kontrol, silahkan melihat-lihat page ini. Button dibawah ini adalah link aplikasi kontrol via internet berbasis bootstrap dan javascript
					</p> <small>nitbot-iot <cite>by nitbot.com developer team</cite></small>
				</div>
				<div align="right">    
					<a class="btn btn-danger btn-large" href="http://iot.nitbot.com/app/">Menuju Aplikasi Kontrol</a>
				</div>
			</blockquote>
			<div class="row">
				<div class="col-md-8" align="justify">
					<div id="deskripsi">
						<br>
						<br>
						<h2>
							nitbot-iot
						</h2>
						<p>
							Bismillah, terimakasih untuk segala dukungannya, perangkat ini akan kami "opensource" kan seluruh kode program, schematic hardware dll. Dengan tujuan agar dapat dikembangkan bersama demi kemajuan Indonesia, dan semoga Allah memberikan barokah dan pahala dengan ini. Ide ini muncul karena timbul sebuah pertanyaan dari saya, "mengapa yang mampu menggunakan sistem IoT ini hanya orang-orang yang "geek" (senang nguprek, mahasiswa dst), apakah orang orang yang lain yang ingin menikmati teknologi ini harus ribet melakukan desain rangkaian, programming dst. Harapan saya kedepannya panel ini akan saya kembangkan untuk pengembangan perangkat "OpenSource" cerdas IoT untuk sistem smart home sehingga semua orang dapat menikmati teknologi ini. Untuk website pengembangannya di <a href="https://iot.nitbot.com"> https://iot.nitbot.com</a>, seluruh source codenya bisa dikembangkan bersama sama di <a href="https://github.com/nitbot/iot.nitbot.com"> https://github.com/nitbot/iot.nitbot.com</a> , harapan besar untuk bersama sama bisa mengembangkan alat ini. Sekarang semua masih progress di "opensource" kan, jadi mohon bersabar jika ada beberapa bagian belum kami upload. . 
						</p>
						<small>smart device for every home, salam nitbot-iot <cite>by nitbot.com developer team</cite></small>
					</div>
					<div align="center">
						<br>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/MtuaUU83bQ4" frameborder="0" allowfullscreen></iframe>
					</div>
					<div>
						<h3>Spesifikasi Teknis</h3>
					</div>
					<div>
						<ul>
							<li>Hardware Programming : menggunakan kombinasi arduino, python.</li>
							<li>Koneksi Internet : menggunakan http get dengan server geeknesia.com.</li>
							<li>User Interface : menggunakan bootstrap - javascript (aplikasi dapat di lihat di <a href="http://iot.nitbot.com/app"> http://iot.nitbot.com/app</a> atau bisa juga bila ingin melihat dokumentasi video dll bisa membuka url http://iot.nitbot.com/)</li>
						</ul>
					</div>
					<p></p>
					<div>
						<h3>Beberapa Keuntungan pada Aplikasi ini</h3>
					</div>
					<div>
						<ul>
							<li>Device yang akan di kontrol tinggal ditancapkan pada panel utama dengan range pengontrollan tidak terbatas, yang penting terdapat koneksi internet.</li>
							<li>User Interface lebih fleksibel untuk dapat digunakan di multi OS, misal android, windows phone, blackberry, Windows, MacOS, Linux</li>
						</ul>
					</div>
					<p></p>
					<div align="center">
						<div id="timeline" class="page-header">
							<br>
							<br>
							<h1>
								TimeLine <small> "Pengembangan nitbot-iot" </small>
							</h1>
						</div>
						<ul class="timeline">
							<li>
								<div class="timeline-badge info"><i class="glyphicon glyphicon-time"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">2016 On Progress... </h4>
										<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2016</small></p>
									</div>
									<div class="timeline-body">
										<p>
											Pengembangan tahap 2 - Stop kontak akan menjadi perangkat yang dikendalikan secara wireless oleh komputer miniPC sebagai server tiap rumah, sehingga tidak perlu merubah jalur kelistrikan.

										</p>
									</div>
								</div>
							</li>
							<li class="timeline-inverted">
								<div class="timeline-badge info"><i class="glyphicon glyphicon-time"></i></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Desember 2015</h4>
										<p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 2015</small></p>
									</div>
									<div class="timeline-body">
										<p>
											Pengembangan tahap 1 - Pengembangan awal dimulai dengan membuat panel smartHome yang terdiri dari 6 stop kontak dan sensor suhu kelembapan.
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<br>
					<br>
					<h2 id="developer">Prosedur pengembangan nitbotIoT secara bersama-sama</h2>
					<p>Kami menyediakan grup telegram, yang dilengkapi dengan bot GitHub (terhubung dengan GITHUB) sehingga kami bisa mengetahui sejauh mana aplikasi di kembangkan. Cukup mudah, tinggal di monitor lewat handphone android. Download TELEGRAM MESSENGER (FREE) di sini&nbsp;<a href="https://play.google.com/store/apps/details?id=org.telegram.messenger&amp;hl=en">https://play.google.com/store/apps/details?id=org.telegram.messenger&amp;hl=en</a>&nbsp;, kemudian ADD NOMER SAYA +6285733316323. Berikut ini adalah contoh grupnya<br />
						<br />
						<img alt="" src="http://nitbot.com/image/catalog/banner/telegramBot.png" style="height:569px; width:320px" /></p>

						<p><strong>Kemudian ini adalah contoh repository di github,</strong></p>

						<p><img alt="" src="http://nitbot.com/image/catalog/banner/github.jpg" style="height:431px; width:766px" /></p>

						<p>&nbsp;</p>
					</div>
					<div class="col-md-4">
						<div>
							<h2>
								Tweet
							</h2>
							<p>
								<a class="twitter-timeline" href="https://twitter.com/niamtamami" data-widget-id="649853752279588865">Tweets by @niamtamami</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</p>
							<p>
								<a class="btn" href="http://twitter.com/niamtamami/">View details »</a>
							</p>
						</div>
						<div>
							<h2>
								Where nitbot-iot Research Center?
							</h2>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d496.39199120318517!2d112.79537859592257!3d-7.280645534490516!2m3!1f0!2f41.614221873215726!3f0!3m2!1i1024!2i768!4f20!3m3!1m2!1s0x0000000000000000%3A0xbe22c55d60ef09c7!2sPoliteknik+Elektronika+Negeri+Surabaya!5e1!3m2!1sen!2sid!4v1449636503694" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">
									Quote of The Day
								</h3>
							</div>
							<div class="panel-body">
								<p>
									"Today we are already relying on the Internet of Things. It's changing the way we do business, and the impact we have on our environment. The Internet of Things is revolutionizing everything." Qoute by iot.co.id
								</p>
								<br>
							</div>
							<div class="panel-footer">

							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">
									Documentation
								</h3>
							</div>
							<div class="panel-body">
								<h2>blognitbot.com</h2>
								<h2>nitbot.com</h2>
								<br>
							</div>
							<div class="panel-footer">

							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">
									Address
								</h3>
							</div>
							<div class="panel-body">
								<address> 
									<strong>Ni'am Tamami</strong>
									<br><a href="niam@pens.ac.id">niam@pens.ac.id</a> <a href="niamtamami@gmail.com"> | niamtamami@gmail.com</a> 
									<br><a href="http://www.nitbot.com/">nitbot.com</a>
									<br> Lab. AI Robotika D-104
									<br> Kampus PENS
									<br>Jl Raya ITS, Sukolilo, Surabaya 60111, Jawa Timur
								</address>
							</div>
							<div class="panel-footer">

							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<a id="modal-535218" href="#modal-container-535218" role="button" class="btn" data-toggle="modal">Hii</a>

					<div class="modal fade" id="modal-container-535218" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">

									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										×
									</button>
									<h4 class="modal-title" id="myModalLabel">
										Hii nitbot-iot lovers
									</h4>
								</div>
								<div class="modal-body">
									underConstruction by niamtamami@gmail.com
								</div>
								<div class="modal-footer">

									<button type="button" class="btn btn-default" data-dismiss="modal">
										Close
									</button> 
									<button type="button" class="btn btn-primary">
										Save changes
									</button>
								</div>
							</div>

						</div>

					</div>

				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
					<ul class="nav nav-pills">
						<li class="active">
							<a href="#"> <span class="badge pull-right">??</span> Pengunjung</a>
						</li>
						<li>
							<a href="#"> <span class="badge pull-right">??</span> More</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
	</html>
