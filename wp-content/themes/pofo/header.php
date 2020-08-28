<!doctype html>
<html class="no-js" lang="en">

<head>
	<!-- title -->
	<title>POFO – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
	<meta name="author" content="ThemeZaa">
	<!-- description -->
	<meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
	<!-- keywords -->
	<meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
	<!-- favicon -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory') ?>/images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory') ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory') ?>/images/apple-touch-icon-114x114.png">
	<!-- animation -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/animate.css" />
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css" />
	<!-- et line icon -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/et-line-icons.css" />
	<!-- font-awesome icon -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css" />
	<!-- themify icon -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/themify-icons.css">
	<!-- swiper carousel -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/swiper.min.css">
	<!-- justified gallery  -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/justified-gallery.min.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/magnific-popup.css" />
	<!-- revolution slider -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/revolution/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/revolution/css/navigation.css">
	<!-- bootsnav -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootsnav.css">
	<!-- style -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css" />
	<!-- responsive css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/responsive.css" />
	<!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
</head>

<body class="bg-background-fade">
	<!-- start header -->
	<header>
		<!-- start navigation -->
		<nav class="navbar navbar-default bootsnav navbar-top-scroll background-transparent nav-box-width white-link padding-four-lr menu-logo-center navbar-expand-lg">
			<div class="container nav-header-container">
				<!-- start logo -->
				<div class="center-logo">
					<a href="index.html" title="Pofo" class="logo"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" data-rjs="<?php bloginfo('template_directory') ?>/images/logo@2x.png" class="logo-dark" alt="Pofo"><img src="<?php bloginfo('template_directory') ?>/images/logo-full-white.png" data-rjs="<?php bloginfo('template_directory') ?>/images/logo-full-white@2x.png" alt="Pofo" class="logo-light default"></a>
				</div>
				<!-- end logo -->
				<div class="col col-lg-12 accordion-menu">
					<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
						<span class="sr-only">toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-collapse collapse justify-content-between" id="navbar-collapse-toggle-1">
						<?php
						$args = array(
							'theme_location'  => '', // область темы
							'menu'            => 'Menu 1', // какое меню нужно вставить (по порядку: id, ярлык, имя)
							'container'       => 'ul', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
							'container_class' => 'nav navbar-nav alt-font text-normal width-40 md-width-100 sm-text-left justify-content-end', // css-класс блока
							'container_id'    => '', // id блока
							'menu_class'      => 'nav navbar-nav alt-font text-normal width-40 md-width-100 sm-text-left justify-content-end', // css-класс меню
							'menu_id'         => '', // id меню
							'echo'            => true, // вывести или записать в переменную
							'fallback_cb'     => 'wp_page_menu', // какую функцию использовать если меню не существует, укажите false, чтобы не использовать ничего
							'before'          => '', // текст или html-код, который нужно вставить перед каждым <a>
							'after'           => '', // после </a>
							'link_before'     => '', // текст перед анкором ссылки
							'link_after'      => '', // после анкора и перед </a>
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // HTML-шаблон
							'depth'           => 0, // количество уровней вложенности
						);
						wp_nav_menu($args); ?>


						<?php
						$args = array(
							'theme_location'  => '', // область темы
							'menu'            => 'menu 2', // какое меню нужно вставить (по порядку: id, ярлык, имя)
							'container'       => 'ul', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
							'container_class' => 'nav navbar-nav navbar-right no-margin alt-font text-normal width-40 md-width-100 justify-content-start', // css-класс блока
							'container_id'    => '', // id блока
							'menu_class'      => 'nav navbar-nav navbar-right no-margin alt-font text-normal width-40 md-width-100 justify-content-start', // css-класс меню
							'menu_id'         => '', // id меню
							'echo'            => true, // вывести или записать в переменную
							'fallback_cb'     => 'wp_page_menu', // какую функцию использовать если меню не существует, укажите false, чтобы не использовать ничего
							'before'          => '', // текст или html-код, который нужно вставить перед каждым <a>
							'after'           => '', // после </a>
							'link_before'     => '', // текст перед анкором ссылки
							'link_after'      => '', // после анкора и перед </a>
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // HTML-шаблон
							'depth'           => 0, // количество уровней вложенности
						);
						wp_nav_menu($args); ?>

					</div>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
	</header>
	<!-- end header -->
