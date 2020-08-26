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
        <!-- start hero section -->
        <section class="wow fadeIn p-0 cover-background color-code" data-color="1"  style="background-image: url('http://placehold.it/1920x1161');">
            <div class="container full-screen position-relative">
                <div class="slider-typography text-left">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                            <div class="col-12 col-xl-7 col-md-10 mx-auto text-center">
                                <span class="after-before-separator text-extra-small alt-font text-white-2 letter-spacing-3 sm-letter-spacing-0 text-uppercase margin-20px-bottom sm-margin-5px-bottom d-inline-block">we work hard, we play hard</span>
                                <h2 class="font-weight-600 text-white-2 alt-font margin-40px-bottom sm-margin-25px-bottom">We combine design, thinking and technical</h2>
                                <a href="portfolio-full-width-grid-transform.html" class="btn btn-transparent-white btn-rounded btn-medium text-link-white-2">Featured Works</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->
        <!-- start section -->
        <section class="wow fadeIn color-code lg-no-background-img" data-color="2" style="background: url('<?php bloginfo('template_directory') ?>/images/back-image1.png') left bottom no-repeat,url('images/back-image2.png') right top no-repeat">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-9 col-md-10 text-center">
                        <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">about branding agency</div>
                        <h3 class="text-white-2 alt-font width-95 md-width-100 margin-70px-bottom md-no-margin-bottom">Pofo is a branding agency based in London. I design thoughtful digital experiences & beautiful brand aesthetics.</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start portfolio section -->
        <section class="wow fadeIn color-code p-0 sm-padding-50px-tb" data-color="3"> 
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-10 text-center">
                        <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">Selected Works</div> 
                    </div>
                </div> 
                <div class="row">
                    <div class="filter-content overflow-hidden w-100 padding-100px-lr md-no-padding-lr sm-padding-15px-lr">
                        <ul class="portfolio-grid work-3col hover-option8 gutter-medium">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUplast-paragraph-no-margin">
                                <a href="single-project-page-01.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle"> 
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Tailoring Interior</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Branding and Brochure</p>
                                                </div>
                                            </div> 
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                                <a href="single-project-page-02.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle"> 
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Love Fashion</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Branding and Brochure</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item advertising branding photography wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <a href="single-project-page-06.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle"> 
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Pixflow Studio</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising design wow fadeInUp last-paragraph-no-margin">
                                <a href="single-project-page-03.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle"> 
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Designblast Inc</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Web and Photography</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                                <a href="single-project-page-04.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle"> 
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Harddot Stone</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising branding design photography wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <a href="single-project-page-05.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle"> 
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Educamp School</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item --> 
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->
        <!-- start counter section -->
        <section class="wow fadeIn lg-no-background-img" style="background: url('<?php bloginfo('template_directory') ?>/images/back-image3.png') right center no-repeat">
            <div class="container">
                <div class="row">
                    <!-- start counter item -->
                    <div class="col-12 col-md-3 sm-margin-30px-bottom text-center wow zoomIn">
                        <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="650">350</h5>
                        <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Happy Clients</span>
                        <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-12 col-md-3 sm-margin-30px-bottom text-center wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="987">1500</h5>
                        <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Photo Capture</span>
                        <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-12 col-md-3 sm-margin-30px-bottom text-center wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="350">875</h5>
                        <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Work Completed</span>
                        <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-12 col-md-3 text-center wow zoomIn" data-wow-delay="0.6s">
                        <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="850">984</h5>
                        <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Telephonic Talk</span>
                        <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                </div>
            </div>            
        </section>
        <!-- end counter section -->
        <!-- start blog section -->
        <section class="wow fadeIn color-code pt-0 lg-no-background-img sm-padding-50px-tb" data-color="4" style="background: url('<?php bloginfo('template_directory') ?>/images/back-image4.png') left bottom no-repeat">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-10 text-center">
                        <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">Recent Blogs</div> 
                    </div>
                </div> 
                <div class="row">
                    <!-- start blog post item -->
                    <div class="col-12 col-md-4 sm-margin-15px-bottom wow fadeIn">
                        <div class="blog-post blog-post-style6 border border-white-light padding-fourteen-all lg-padding-ten-all sm-padding-30px-all h-100">
                            <div class="post-details">
                                <span class="text-extra-small text-white-2 text-uppercase d-block margin-four-bottom md-margin-two-bottom opacity7">25 March 2017</span>
                                <span class="text-large alt-font margin-50px-bottom sm-margin-30px-bottom d-block"><a href="blog-post-layout-01.html" class="text-white-2">The only important thing about design is how it relates to people.</a></span>
                                <div class="author padding-10px-top position-relative">
                                    <span class="text-white-2 text-uppercase text-extra-small">by <a href="blog-only-text.html" class="text-white-2">Jay Benjamin</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start blog post item -->
                    <!-- end blog post item -->
                    <div class="col-12 col-md-4 sm-margin-15px-bottom fadeIn" data-wow-delay="0.2s">
                        <!-- fresh news item -->
                        <div class="blog-post blog-post-style6 border border-white-light padding-fourteen-all lg-padding-ten-all sm-padding-30px-all h-100">
                            <div class="post-details">
                                <span class="text-extra-small text-white-2 text-uppercase d-block margin-four-bottom md-margin-two-bottom opacity7">20 March 2017</span>
                                <span class="text-large alt-font margin-50px-bottom sm-margin-30px-bottom d-block"><a href="blog-post-layout-02.html" class="text-white-2">Do good work for good people. Good design is a language, not a style.</a></span>
                                <div class="author padding-10px-top position-relative">
                                    <span class="text-white-2 text-uppercase text-extra-small">by <a href="blog-only-text.html" class="text-white-2">Herman Miller</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start blog post item -->
                    <!-- end blog post item -->
                    <div class="col-12 col-md-4 fadeIn" data-wow-delay="0.4s">
                        <div class="blog-post blog-post-style6 border border-white-light padding-fourteen-all lg-padding-ten-all sm-padding-30px-all h-100">
                            <div class="post-details">
                                <span class="text-extra-small text-white-2 text-uppercase d-block margin-four-bottom md-margin-two-bottom opacity7">15 March 2017</span>
                                <span class="text-large alt-font margin-50px-bottom sm-margin-30px-bottom d-block"><a href="blog-post-layout-03.html" class="text-white-2">Leopard is an animal design, and my designs come from nature.</a></span>
                                <div class="author padding-10px-top position-relative">
                                    <span class="text-white-2 text-uppercase text-extra-small">by <a href="blog-only-text.html" class="text-white-2">Hugh Macleod</a></span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- start blog post item -->
                </div>
            </div>
        </section>
        <!-- end blog section -->
        <!-- start clients logo section  -->
        <section class="color-code py-0 sm-padding-50px-tb" data-color="5">
            <div class="container"> 
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-10 text-center">
                        <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">Our Clients</div> 
                    </div>
                </div> 
                <div class="row text-center">
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown">
                        <a href="https://envato.com" target="_blank"><img src="<?php bloginfo('template_directory') ?>/images/logo-9.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.2s">
                        <a href="https://woocommerce.com" target="_blank"><img src="<?php bloginfo('template_directory') ?>/images/logo-10.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.4s">
                        <a href="https://magento.com" target="_blank"><img src="<?php bloginfo('template_directory') ?>/images/logo-11.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.6s">
                        <a href="https://lesscss.org" target="_blank"><img src="<?php bloginfo('template_directory') ?>/images/logo-12.png" alt=""></a>
                    </div>
                    <div class="col-12 col-md-3 sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.8s">
                        <a href="https://www.pingdom.com" target="_blank"><img src="<?php bloginfo('template_directory') ?>/images/logo-13.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 sm-margin-15px-bottom wow fadeInDown" data-wow-delay="1s">
                        <a href="www.wordpress.com" target="_blank"><img src="<?php bloginfo('template_directory') ?>/images/logo-14.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 sm-margin-15px-bottom wow fadeInDown" data-wow-delay="1.2s">
                        <a href="https://jquery.com/" target="_blank"><img src="<?php bloginfo('template_directory') ?>/images/logo-15.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 wow fadeInDown" data-wow-delay="1.4s">
                        <a href="https://google.com/" target="_blank"><img src="<?php bloginfo('template_directory') ?>/images/logo-16.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                </div>
            </div>
        </section>
        <!-- end client logo section -->
        <!-- start contact section -->
        <section class="wow fadeIn color-code lg-no-background-img" data-color="6" style="background: url('<?php bloginfo('template_directory') ?>/images/back-image5.png') left 51% no-repeat,url('<?php bloginfo('template_directory') ?>/images/back-image6.png') right top no-repeat">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-10 text-center wow fadeIn">
                        <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">Fill out the form and we'll be in touch soon!</div> 
                    </div>
                </div>
                <form id="contact-form" action="javascript:void(0)" method="post">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 input-border-white text-center">
                            <div id="success-contact-form" class="mx-0"></div>
                            <input type="text" name="name" id="name" placeholder="Name*" class="input-border-bottom border-white-light">
                            <input type="text" name="email" id="email" placeholder="E-mail*" class="input-border-bottom border-white-light">
                            <input type="text" name="subject" id="subject" placeholder="Subject" class="input-border-bottom border-white-light">
                            <textarea name="comment" id="comment" placeholder="Your Message" class="input-border-bottom border-white-light"></textarea>
                            <button id="contact-us-button" type="submit" class="btn btn-very-small btn-transparent-white sm-margin-15px-top">send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- end contact section -->
        <!-- start footer --> 
        <footer class="footer-center-logo padding-five-tb sm-padding-30px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <!-- start copyright -->
                    <div class="col-lg-4 col-md-5 text-small text-center alt-font sm-margin-15px-bottom text-white-2">
                        &COPY; 2019 POFO is Powered by <a href="http://www.themezaa.com" class="text-white-2" target="_blank" title="ThemeZaa">ThemeZaa</a>.
                    </div>
                    <!-- end copyright -->
                    <!-- start logo -->
                    <div class="col-lg-4 col-md-2 text-center sm-margin-10px-bottom">
                        <a href="index.html"><img class="footer-logo" src="<?php bloginfo('template_directory') ?>/images/logo-white.png" data-rjs="<?php bloginfo('template_directory') ?>/images/logo-white@2x.png" alt="Pofo"></a>
                    </div>
                    <!-- end logo -->
                    <!-- start social media -->
                    <div class="col-lg-4 col-md-5 text-center text-white-2">
                        <span class="alt-font text-small margin-20px-right">On social networks</span>
                        <div class="social-icon-style-8 d-inline-block vertical-align-middle">
                            <ul class="small-icon mb-0">
                                <li><a class="facebook text-white-2" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                                <li><a class="twitter text-white-2" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="google text-white-2" href="https://plus.google.com" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a class="instagram text-white-2" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram mr-0" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end social media -->
                </div>
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="<?php bloginfo('template_directory') ?>/javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/skrollr.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/smooth-scroll.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/bootsnav.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/classie.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.fitvids.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/skill.bars.jquery.js"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery.easypiechart.min.js"></script>
        <!-- instagram -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/instafeed.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/retina.min.js"></script>
        <!-- revolution -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
    </body>
</html>