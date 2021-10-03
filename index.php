
<?php require "config.php"?>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?=getValue('site_title')?></title>
	<meta name="description" content="Samed Tanrıöver">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/all.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/slick.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<link rel="stylesheet" href="font.css" type="text/css" media="all">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>


<body class="dark">
<!-- mobile header -->
<header class="mobile-header-1">
	<div class="container">
		<!-- menu icon -->
		<div class="menu-icon d-inline-flex mr-4">
			<button>
				<span></span>
			</button>
		</div>
		<!-- logo image -->
</header>

<!-- desktop header -->
<header class="desktop-header-1 d-flex align-items-start flex-column">

	<!-- logo image -->
	<span class="copyright" style="font-size: 8px;"><?=getValue('top_article')?></span>
	<span class="copyright" style="font-size: 8px;"><?=getValue('about_title_1')?></span>


	<!-- main menu -->
	<nav>
		<ul class="vertical-menu scrollspy">
			<li class="active"><a href="#home"><i class="icon-home"></i>Anasayfa</a></li>
			<li><a href="#about"><i class="icon-user-following"></i>Hakkımda</a></li>
			<li><a href="#services"><i class="icon-briefcase"></i>İlgi Alanlarım</a></li>
			<li><a href="#experience"><i class="icon-graduation"></i>Eğitim Ve Deneyim</a></li>
			<li><a href="#contact"><i class="icon-bubbles"></i>İletisim</a></li>

		</ul>
	</nav>

	<!-- site footer -->
	<div class="footer">
		<!-- copyright text -->
		<span class="copyright" style="font-size:10px;"><?=getValue('copyright')?></span><br>
	

		
	</div>

</header>

<!-- main layout -->
<main class="content">

	<!-- section home -->
	<section id="home" class="home d-flex align-items-center">
		<div class="container">

			<!-- intro -->
			<div class="intro">
				<!-- avatar image -->

				<img src="<?=getValue('top_image')?>" alt="Bolby" class="mb-4">

				<!-- info -->
				<h1 class="mb-2 mt-0">Samed Tanrıöver</h1>
				<span class="text-rotating"><?=getValue('top_title')?></span><br>
				<span class="copyright" style="font-size: 12px;">Nie wszystko złoto, co sie świeci!</span><br>
				<span class="copyright" style="font-size: 12px;">(Parlayan her şey,altın değildir!)</span>

				<!-- social icons -->
				<ul class="social-icons light list-inline mb-0 mt-4">
					<li class="list-inline-item"><a href="https://www.instagram.com/samedtanriover/"><i class="fab fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="https://twitter.com/CynSmd"><i class="fab fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="https://github.com/ByCyanid"><i class="fab fa-github"></i></a></li>
					<li class="list-inline-item"><a href="https://www.linkedin.com/in/smdtnrvr/"><i class="fab fa-linkedin"></i></a></li>
					
				</ul>
				
<div class="mt-3">
	<a href="#" class="btn btn-default" style="font-size:15px">CV'mi indir</a>
</div>

				<!-- buttons -->
			</div>

			<!-- scroll down mouse wheel -->
			<div class="scroll-down">
				<a href="#about" class="mouse-wrapper">
					<span>Aşağı Kaydır</span>
					<span class="mouse">
						<span class="wheel"></span>
					</span>
				</a>
			</div>

			<!-- parallax layers -->
			<div class="parallax" data-relative-input="true">

				<svg width="27" height="29" data-depth="0.3" class="layer p1" xmlns="http://www.w3.org/2000/svg"><path d="M21.15625.60099c4.37954 3.67487 6.46544 9.40612 5.47254 15.03526-.9929 5.62915-4.91339 10.30141-10.2846 12.25672-5.37122 1.9553-11.3776.89631-15.75715-2.77856l2.05692-2.45134c3.50315 2.93948 8.3087 3.78663 12.60572 2.22284 4.297-1.5638 7.43381-5.30209 8.22768-9.80537.79387-4.50328-.8749-9.08872-4.37803-12.02821L21.15625.60099z" fill="#FFD15C" fill-rule="evenodd"></path></svg>

				<svg width="26" height="26" data-depth="0.2" class="layer p2" xmlns="http://www.w3.org/2000/svg"><path d="M13 3.3541L2.42705 24.5h21.1459L13 3.3541z" stroke="#FF4C60" stroke-width="3" fill="none" fill-rule="evenodd"></path></svg>

				<svg width="30" height="25" data-depth="0.3" class="layer p3" xmlns="http://www.w3.org/2000/svg"><path d="M.1436 8.9282C3.00213 3.97706 8.2841.92763 14.00013.92796c5.71605.00032 10.9981 3.04992 13.85641 8 2.8583 4.95007 2.8584 11.0491-.00014 16.00024l-2.77128-1.6c2.28651-3.96036 2.28631-8.84002.00011-12.8002-2.2862-3.96017-6.5124-6.40017-11.08513-6.4-4.57271.00018-8.79872 2.43984-11.08524 6.4002l-2.77128-1.6z" fill="#44D7B6" fill-rule="evenodd"></path></svg>

				<svg width="15" height="23" data-depth="0.6" class="layer p4" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#FFD15C" fill-rule="evenodd"></rect></svg>

				<svg width="15" height="23" data-depth="0.2" class="layer p5" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(30 9.86603 10.13397)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd"></rect></svg>

				<svg width="49" height="17" data-depth="0.5" class="layer p6" xmlns="http://www.w3.org/2000/svg"><g fill="#FF4C60" fill-rule="evenodd"><path d="M.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C23.1175 5.50106 25.5 10.78292 25.5 16.5H23c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0C4.90625 7.70116 3 11.92697 3 16.5H.5z"></path><path d="M23.5 16.5c0-5.71709 2.3825-10.99895 6.25-13.8567 3.8675-2.85774 8.6325-2.85774 12.5 0C46.1175 5.50106 48.5 10.78292 48.5 16.5H46c0-4.57303-1.90625-8.79884-5-11.08535-3.09375-2.28652-6.90625-2.28652-10 0-3.09375 2.28651-5 6.51232-5 11.08535h-2.5z"></path></g></svg>

				<svg width="26" height="26" data-depth="0.4" class="layer p7" xmlns="http://www.w3.org/2000/svg"><path d="M13 22.6459L2.42705 1.5h21.1459L13 22.6459z" stroke="#FFD15C" stroke-width="3" fill="none" fill-rule="evenodd"></path></svg>

				<svg width="19" height="21" data-depth="0.3" class="layer p8" xmlns="http://www.w3.org/2000/svg"><rect transform="rotate(-40 6.25252 10.12626)" x="7" width="3" height="25" rx="1.5" fill="#6C6CE5" fill-rule="evenodd"></rect></svg>

				<svg width="30" height="25" data-depth="0.3" data-depth-y="-1.30" class="layer p9" xmlns="http://www.w3.org/2000/svg"><path d="M29.8564 16.0718c-2.85854 4.95114-8.1405 8.00057-13.85654 8.00024-5.71605-.00032-10.9981-3.04992-13.85641-8-2.8583-4.95007-2.8584-11.0491.00014-16.00024l2.77128 1.6c-2.28651 3.96036-2.28631 8.84002-.00011 12.8002 2.2862 3.96017 6.5124 6.40017 11.08513 6.4 4.57271-.00018 8.79872-2.43984 11.08524-6.4002l2.77128 1.6z" fill="#6C6CE5" fill-rule="evenodd"></path></svg>

				<svg width="47" height="29" data-depth="0.2" class="layer p10" xmlns="http://www.w3.org/2000/svg"><g fill="#44D7B6" fill-rule="evenodd"><path d="M46.78878 17.19094c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36265-9.0893-.26708-11.74616-4.27524-2.65686-4.00817-3.08917-9.78636-1.13381-15.15866l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12693 2.12514 3.20674 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40949 8.48988-8.70673l2.34923.85505z"></path><path d="M25.17585 9.32448c-1.95535 5.3723-6.00068 9.52077-10.61234 10.8834-4.61167 1.36264-9.0893-.26708-11.74616-4.27525C.16049 11.92447-.27182 6.14628 1.68354.77398l2.34923.85505c-1.56407 4.29724-1.2181 8.92018.90705 12.12692 2.12514 3.20675 5.70772 4.5107 9.39692 3.4202 3.68921-1.0905 6.92581-4.40948 8.48988-8.70672l2.34923.85505z"></path></g></svg>

				<svg width="33" height="20" data-depth="0.5" class="layer p11" xmlns="http://www.w3.org/2000/svg"><path d="M32.36774.34317c.99276 5.63023-1.09332 11.3614-5.47227 15.03536-4.37895 3.67396-10.3855 4.73307-15.75693 2.77837C5.76711 16.2022 1.84665 11.53014.8539 5.8999l3.15139-.55567c.7941 4.50356 3.93083 8.24147 8.22772 9.8056 4.29688 1.56413 9.10275.71673 12.60554-2.2227C28.34133 9.98771 30.01045 5.4024 29.21635.89884l3.15139-.55567z" fill="#FFD15C" fill-rule="evenodd"></path></svg>

			</div>
		</div>

	</section>

	<!-- section about -->
	<section id="about">

		<div class="container">

			<!-- section title -->
			<h2 class="section-title wow fadeInUp">Hakkımda</h2>

			<div class="spacer" data-height="60"></div>

			<div class="row">

				<div class="col-md-3">
					<div class="text-center text-md-left">
						<!-- avatar image -->
						<img src="<?=getValue('about_image')?>" alt="Cyanid">
					</div>
					<div class="spacer d-md-none d-lg-none" data-height="30"></div>
				</div>

				<div class="col-md-9 triangle-left-md triangle-top-sm">
					<div class="rounded bg-dark shadow-light padding-30">
						<div class="row">
							<div class="col-md-6">
								<!-- about text -->
								<p><?=getValue('about_article_2')?></p>
							
								<div class="spacer d-md-none d-lg-none" data-height="30"></div>
							</div>
							<div class="col-md-6">
								<!-- skill item -->
								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">C#</h4>
										<span class="float-right">90%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="90" data-color="#FFD15C">
										</div>
									</div>
									<div class="spacer" data-height="20"></div>
								</div>

								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">Python</h4>
										<span class="float-right">80%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80" data-color="#66DE93">
										</div>
									</div>
									<div class="spacer" data-height="20"></div>
								</div>


								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">HTML</h4>
										<span class="float-right">100%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" data-color="#1CC5DC">
										</div>
									</div>
									<div class="spacer" data-height="20"></div>
								</div>


								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">PHP</h4>
										<span class="float-right">75%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="75" data-color="#E48900">
										</div>
									</div>
									<div class="spacer" data-height="20"></div>
								</div>


								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">C</h4>
										<span class="float-right">65%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="65" data-color="#F55C47">
										</div>
									</div>
									<div class="spacer" data-height="20"></div>
								</div>


								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">CSS</h4>
										<span class="float-right">60%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="60" data-color="#FF4C60">
										</div>
									</div>
									<div class="spacer" data-height="20"></div>
								</div>

								<!-- skill item -->
								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">Linux</h4>
										<span class="float-right">100%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="100" data-color="#6C6CE5">
										</div>
									</div>
									<div class="spacer" data-height="20"></div>
								</div>

								<!-- skill item -->
								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">Javascript</h4>
										<span class="float-right">72%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="72" data-color="#FFD15C">
										</div>
									</div>
								</div>
								<br>

								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">Server Yönetimi</h4>
										<span class="float-right">85%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="85" data-color="#66DE93">
										</div>
									</div>
								</div>
								<br>
								<div class="skill-item">
									<div class="skill-info clearfix">
										<h4 class="float-left mb-3 mt-0">MySQL</h4>
										<span class="float-right">88%</span>
									</div>
									<div class="progress">
										<div class="progress-bar data-background" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="88" data-color="#1CC5DC">
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- row end -->

			<div class="spacer" data-height="70"></div>

			<div class="row">

				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item">
						<span class="icon icon-fire"></span>
						<div class="details">
							<h3 class="mb-0 mt-0 number"><em class="count">43</em></h3>
							<p class="mb-0">Tamamladığım Projeler</p>
						</div>
					</div>
					<div class="spacer d-md-none d-lg-none" data-height="30"></div>
				</div>

				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item">
						<span class="icon icon-cup"></span>
						<div class="details">
							<h3 class="mb-0 mt-0 number"><em class="count">5670</em></h3>
							<p class="mb-0">Bir Fincan Kahve</p>
						</div>
					</div>
					<div class="spacer d-md-none d-lg-none" data-height="30"></div>
				</div>

				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item">
						<span class="icon icon-people"></span>
						<div class="details">
							<h3 class="mb-0 mt-0 number"><em class="count">94</em></h3>
							<p class="mb-0">Memnuniyet Oranı</p>
						</div>
					</div>
					<div class="spacer d-md-none d-lg-none" data-height="30"></div>
				</div>

				<div class="col-md-3 col-sm-6">
					<!-- fact item -->
					<div class="fact-item">
						<span class="icon icon-badge"></span>
						<div class="details">
							<h3 class="mb-0 mt-0 number"><em class="count">18</em></h3>
							<p class="mb-0">Toplam Sertifikalarım</p>
						</div>
					</div>
				</div>

			</div>

		</div>

	</section>

	<!-- section services -->
	<section id="services">

		<div class="container">

			<!-- section title -->
			<h2 class="section-title wow fadeInUp">İlgi Alanlarım</h2>

			<div class="spacer" data-height="50"></div>

			<div class="row">

				<div class="col-md-4">
					<!-- service box -->
					<div class="service-box rounded data-background padding-30 text-center text-light shadow-blue" data-color="#6C6CE5">
						<h3 class="mb-3 mt-0"><?=getValue('about_title_3')?></h3>
					</div>
					
					<br>
				</div>


				<div class="col-md-4">
					<!-- service box -->
					<div class="service-box rounded data-background padding-30 text-center shadow-yellow" data-color="#F9D74C">

						<h3 class="mb-3 mt-0"><?=getValue('about_article_3')?></h3>
					</div>
					<div class="spacer d-md-none d-lg-none" data-height="30"></div>
				</div>

				<div class="col-md-4">
					<!-- service box -->
					<div class="service-box rounded data-background padding-30 text-center text-light shadow-pink" data-color="#F97B8B">

						<h3 class="mb-3 mt-0"><?=getValue('about_title_4')?></h3>

					</div>
					<div class="spacer d-md-none d-lg-none" data-height="30"></div>
				</div>


				<div class="col-md-4">
				    
					<!-- service box -->
					<div class="service-box rounded data-background padding-30 text-center text-light shadow-blue" data-color="#66DE93">

						<h3 class="mb-3 mt-0"><?=getValue('about_article_4')?></h3>
					</div>
					<div class="spacer d-md-none d-lg-none" data-height="30"></div>
				</div>




				<div class="col-md-4">
				    
					<!-- service box -->
					<div class="service-box rounded data-background padding-30 text-center text-light shadow-blue" data-color="#185ADB">

						<h3 class="mb-3 mt-0"><?=getValue('footer_title')?></h3>
					</div>
					<div class="spacer d-md-none d-lg-none" data-height="30"></div>
				</div>

			</div><br>
		<span class="copyright" style="font-size: 10px;">(Zamanım hep bilgisayar başında geçtiğinden çoğu hobimde bu alanın çevresinde tekerrür etmekte aslında)</span>


		</div>

	</section>

	<!-- section experience -->
	<section id="experience">

		<div class="container">

			<!-- section title -->
			<h2 class="section-title wow fadeInUp">Eğitim & Deneyim</h2>

			<div class="spacer" data-height="60"></div>

			<div class="row">

				<div class="col-md-6">

					<!-- timeline wrapper -->
					<div class="timeline edu bg-dark rounded shadow-light padding-30 overflow-hidden">

						<!-- timeline item -->
						<div class="timeline-container wow fadeInUp">
							<div class="content">
								<span class="time">2019 - 2023</span>
								<h3 class="title">Ahi Evran Üniversitesi</h3>
								<p>Kırşehir-Türkiye</p>
							</div>
						</div>


						<!-- timeline item -->
						<div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
							<div class="content">
								<span class="time">2014 - 2018</span>
								<h3 class="title">Seyyide Daloğlu Anadolu Lisesi</h3>
								<p>Kayseri-Türkiye</p>
							</div>
						</div>

						<!-- main line -->
						<span class="line"></span>

					</div>

				</div>

				<div class="col-md-6">

					<!-- responsive spacer -->
					<div class="spacer d-md-none d-lg-none" data-height="30"></div>

					<!-- timeline wrapper -->
					<div class="timeline exp bg-dark rounded shadow-light padding-30 overflow-hidden">

						<!-- timeline item -->
						<div class="timeline-container wow fadeInUp">
							<div class="content">
								<span class="time">Ocak 2020 - Devam</span>
								<h3 class="title">ForeachDevs - C# Developer</h3>
								<p>Yazılım alanında kurulan bu şirket Game developer,Desktop App,Mobile App,Full Stack Web Design gibi birçok alanda uzman ekibi ile müşterilerine hizmet vermektedir.(Home Office)</p>
							</div>
						</div>

						<!-- timeline item -->
						<div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
							<div class="content">
								<span class="time">Ocak 2019 - Aralık 2020</span>
								<h3 class="title">Aldeta Bilişim - Server Administrator</h3>
								<p>Website Tasarlama ve geliştirme alanında uzman kadrosuyla kurulmuş bir şirkettir her türlü web site tasarım ,entegrasyon gibi konularda iş yapmaktadır.Ayrıca siber güvenlik alanında da uzman kadrosu bulunmaktadır.(Home Office)</p>
							</div>
						</div>

						<!-- timeline item -->
						<div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
							<div class="content">
								<span class="time">Ocak 2018 - Aralık 2019</span>
								<h3 class="title">Ötüken Web - Freelance Web Developer</h3>
								<p>Hosting satış,kurulum ve yönetim alanlarında uzman ekibiyle kurulan bu şirket sorunsuz bir şekilde müşterilerine hizmet sağlamıştır.Şirketimizin Hosting'in yanı sıra Linux,Ubuntu,Parrot gibi işletim sistemli sunucuları kurmak ve yönetmek gibi işlerde de uzmandır.(Home Office)</p>
							</div>
						</div>

						<div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
							<div class="content">
								<span class="time">Ocak 2017 - Aralık 2018</span>
								<h3 class="title">Teknorol - Altyapı Müdürü</h3>
								<p>Hosting satış,kurulum ve yönetim alanlarında uzman ekibiyle kurulan bu şirket sorunsuz bir şekilde müşterilerine hizmet sağlamıştır.Şirketimizin Hosting'in yanı sıra Linux,Ubuntu,Parrot gibi işletim sistemli sunucuları kurmak ve yönetmek gibi işlerde de uzmandır.(Home Office)</p>
							</div>
						</div>

						<!-- main line -->
						<span class="line"></span>

					</div>

				</div>

			</div>

		</div>

	</section>




	<!-- section testimonials -->

	<!-- section contact -->
	<section id="contact">

		<div class="container">
			
			<!-- section title -->
			<h2 class="section-title wow fadeInUp">İletişim</h2>

			<div class="spacer" data-height="60"></div>
			
			<div class="row">
				
				<div class="col-md-4">
					<!-- contact info -->
					<div class="contact-info">
						<h3 class="wow fadeInUp"><?=getValue('contact_title_1')?></h3>
						<p class="wow fadeInUp"><?=getValue('contact_title_2')?></p><br>
						<p class="wow fadeInUp"><?=getValue('contact_mail')?></p>
					</div>
				</div>

				<div class="col-md-8">
					<!-- Contact Form -->
					<form id="contact-form" class="contact-form mt-6" method="post">
						
						<div class="messages"></div>
						
						<div class="row">
							<div class="column col-md-6">
								<!-- Name input -->
								<div class="form-group">
									<input type="text" class="form-control" name="InputName" id="InputName" placeholder="Adınız" required="required" data-error="İsim Gerekli.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							
							

							<div class="column col-md-6">
								<!-- Email input -->
								<div class="form-group">
									<input type="text" class="form-control" id="InputSubject" name="InputSurname" placeholder="Soyadınız" required="required" data-error="Konu Gerekli.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
					
							<div class="column col-md-12">
								<!-- Email input -->
								<div class="form-group">
									<input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="E-mail Adresiniz" required="required" data-error="E-Mail Gerekli.">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="column col-md-12">
								<!-- Message textarea -->
								<div class="form-group">
									<textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" placeholder="Mesajınız" required="required" data-error="Mesaj Gerekli."></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>

						<button type="submit" name="submit" id="submit" value="Submit" class="btn btn-default">Mesaj Gönder</button><!-- Send Button -->

					</form>
					<!-- Contact Form end -->
				</div>

			</div>

		</div>

	</section>




					<!-- Contact Form end -->


	<div class="spacer" data-height="96"></div>

</main>

<?php

    if (isset($_POST["submit"])){
        $firstName = clean("InputName","post");
        $surname = clean("InputSurname","post");
        $email = clean("InputEmail","post");
        $message = clean("InputMessage","post");
        $date = date("d.m.Y");

        $app = $db->prepare("INSERT INTO contacts SET first_name = :first,last_name = :last,email = :email,message = :message,date = :date");
        $on  = $app->execute([
            "first"  => $firstName,
            "last"   => $surname,
            "email"  => $email,
            "message"=> $message,
            "date"   => $date
        ]);

        if ($on){
            echo "<script>alert('İletişim Formu Gönderildi');</script>";
        }else{
            echo "<script>alert('İletişim Formu Gönderilirken Bir Hata Oluştu');</script>";
        }
    }
?>

<!-- Go to top button -->
<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

<!-- SCRIPTS -->
<script src="js/jquery-1.12.3.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/infinite-scroll.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/validator.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/morphext.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
