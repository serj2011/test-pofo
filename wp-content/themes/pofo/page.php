<?php get_header(); ?>
<script src="/wp-content/themes/pofo/contact.js"></script>
<!-- start hero section -->
<section class="wow fadeIn p-0 cover-background color-code" data-color="1" style="background-image: url('<?php the_field('picture_1'); ?>');">
    <div class="container full-screen position-relative">
        <div class="slider-typography text-left">
            <div class="slider-text-middle-main">
                <div class="slider-text-middle">
                    <div class="col-12 col-xl-7 col-md-10 mx-auto text-center">
                        <span class="after-before-separator text-extra-small alt-font text-white-2 letter-spacing-3 sm-letter-spacing-0 text-uppercase margin-20px-bottom sm-margin-5px-bottom d-inline-block"><?php the_field('fon_comment_1'); ?></span>
                        <h2 class="font-weight-600 text-white-2 alt-font margin-40px-bottom sm-margin-25px-bottom"><?php the_field('fon_comment_2'); ?></h2>
                        <a href="<?php the_field('button_link'); ?>" class="btn btn-transparent-white btn-rounded btn-medium text-link-white-2"><?php the_field('button_text'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end hero section -->
<!-- start section -->
<section class="wow fadeIn color-code lg-no-background-img" data-color="2" style="background: url('<?php the_field('back-image1'); ?>') left bottom no-repeat,url('<?php the_field('back-image2'); ?>') right top no-repeat">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-9 col-md-10 text-center">
                <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block"><?php the_field('title_about'); ?></div>
                <h3 class="text-white-2 alt-font width-95 md-width-100 margin-70px-bottom md-no-margin-bottom"><?php the_field('about_text'); ?></h3>
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
                <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block"><?php the_field('title_portfolio'); ?></div>
            </div>
        </div>
        <div class="row">
            <div class="filter-content overflow-hidden w-100 padding-100px-lr md-no-padding-lr sm-padding-15px-lr">
                <ul class="portfolio-grid work-3col hover-option8 gutter-medium">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    <?php
                    $group_port_1 = get_field('group_port_1');
                    if ($group_port_1) : ?>
                        <li class="grid-item web branding design wow fadeInUplast-paragraph-no-margin">
                            <a href="<?php echo $group_port_1['page_port_1']; ?>">
                                <figure>
                                    <div class="portfolio-img"><img src="<?php echo $group_port_1['img_port_1']; ?>" alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom"><?php echo $group_port_1['title_port_1']; ?></span>
                                                <p class="text-small no-letter-spacing text-medium-gray"><?php echo $group_port_1['desc_port_1']; ?></p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    <?php endif; ?>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <?php
                    $group_port_2 = get_field('group_port_2');
                    if ($group_port_2) : ?>
                        <li class="grid-item web branding design wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                            <a href="<?php echo $group_port_2['page_port_1']; ?>">
                                <figure>
                                    <div class="portfolio-img"><img src="<?php echo $group_port_2['img_port_1']; ?>" alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom"><?php echo $group_port_2['title_port_1']; ?></span>
                                                <p class="text-small no-letter-spacing text-medium-gray"><?php echo $group_port_2['desc_port_1']; ?></p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    <?php endif; ?>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <?php
                    $group_port_3 = get_field('group_port_3');
                    if ($group_port_3) : ?>
                        <li class="grid-item advertising branding photography wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                            <a href="<?php echo $group_port_3['page_port_1']; ?>">
                                <figure>
                                    <div class="portfolio-img"><img src="<?php echo $group_port_3['img_port_1']; ?>" alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom"><?php echo $group_port_3['title_port_1']; ?></span>
                                                <p class="text-small no-letter-spacing text-medium-gray"><?php echo $group_port_3['desc_port_1']; ?></p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    <?php endif; ?>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <?php
                    $group_port_4 = get_field('group_port_4');
                    if ($group_port_4) : ?>
                        <li class="grid-item web advertising design wow fadeInUp last-paragraph-no-margin">
                            <a href="<?php echo $group_port_4['page_port_1']; ?>">
                                <figure>
                                    <div class="portfolio-img"><img src="<?php echo $group_port_4['img_port_1']; ?>" alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom"><?php echo $group_port_4['title_port_1']; ?></span>
                                                <p class="text-small no-letter-spacing text-medium-gray"><?php echo $group_port_4['desc_port_1']; ?></p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    <?php endif; ?>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <?php
                    $group_port_5 = get_field('group_port_5');
                    if ($group_port_5) : ?>
                        <li class="grid-item web branding design wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                            <a href="<?php echo $group_port_5['page_port_1']; ?>">
                                <figure>
                                    <div class="portfolio-img"><img src="<?php echo $group_port_5['img_port_1']; ?>" alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom"><?php echo $group_port_5['title_port_1']; ?></span>
                                                <p class="text-small no-letter-spacing text-medium-gray"><?php echo $group_port_5['desc_port_1']; ?></p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    <?php endif; ?>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <?php
                    $group_port_6 = get_field('group_port_6');
                    if ($group_port_6) : ?>
                        <li class="grid-item web advertising branding design photography wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                            <a href="<?php echo $group_port_6['page_port_1']; ?>">
                                <figure>
                                    <div class="portfolio-img"><img src="<?php echo $group_port_6['img_port_1']; ?>" alt="" /></div>
                                    <figcaption>
                                        <div class="portfolio-hover-main">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom"><?php echo $group_port_6['title_port_1']; ?></span>
                                                <p class="text-small no-letter-spacing text-medium-gray"><?php echo $group_port_6['desc_port_1']; ?></p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                    <?php endif; ?>
                    <!-- end portfolio item -->
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end portfolio section -->
<!-- start counter section -->
<section class="wow fadeIn lg-no-background-img" style="background: url('<?php the_field('back-image3'); ?>') right center no-repeat">
    <div class="container">
        <div class="row">
            <!-- start counter item -->
            <div class="col-12 col-md-3 sm-margin-30px-bottom text-center wow zoomIn">
                <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="<?php the_field('count_1'); ?>"><?php the_field('count_1'); ?></h5>
                <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Happy Clients</span>
                <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
            </div>
            <!-- end counter item -->
            <!-- start counter item -->
            <div class="col-12 col-md-3 sm-margin-30px-bottom text-center wow zoomIn" data-wow-delay="0.2s">
                <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="<?php the_field('count_2'); ?>"><?php the_field('count_2'); ?></h5>
                <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Photo Capture</span>
                <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
            </div>
            <!-- end counter item -->
            <!-- start counter item -->
            <div class="col-12 col-md-3 sm-margin-30px-bottom text-center wow zoomIn" data-wow-delay="0.4s">
                <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="<?php the_field('count_3'); ?>"><?php the_field('count_3'); ?></h5>
                <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Work Completed</span>
                <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
            </div>
            <!-- end counter item -->
            <!-- start counter item -->
            <div class="col-12 col-md-3 text-center wow zoomIn" data-wow-delay="0.6s">
                <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="<?php the_field('count_4'); ?>"><?php the_field('count_4'); ?></h5>
                <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Telephonic Talk</span>
                <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
            </div>
            <!-- end counter item -->
        </div>
    </div>
</section>
<!-- end counter section -->
<!-- start blog section -->
<section class="wow fadeIn color-code pt-0 lg-no-background-img sm-padding-50px-tb" data-color="4" style="background: url('<?php the_field('back-image4'); ?>') left bottom no-repeat">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-md-10 text-center">
                <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block"><?php the_field('title_about_post'); ?></div>
            </div>
        </div>
        <div class="row">
            <!-- start blog post item -->
            <?php
            $group_post_1 = get_field('group_post_1');
            if ($group_post_1) : ?>
                <div class="col-12 col-md-4 sm-margin-15px-bottom wow fadeIn">
                    <div class="blog-post blog-post-style6 border border-white-light padding-fourteen-all lg-padding-ten-all sm-padding-30px-all h-100">
                        <div class="post-details">
                            <span class="text-extra-small text-white-2 text-uppercase d-block margin-four-bottom md-margin-two-bottom opacity7"><?php echo $group_post_1['data_post']; ?></span>
                            <span class="text-large alt-font margin-50px-bottom sm-margin-30px-bottom d-block"><a href="blog-post-layout-01.html" class="text-white-2"><?php echo $group_post_1['text_post']; ?></a></span>
                            <div class="author padding-10px-top position-relative">
                                <span class="text-white-2 text-uppercase text-extra-small">by <a href="blog-only-text.html" class="text-white-2"><?php echo $group_post_1['avtor_post']; ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- start blog post item -->
            <!-- end blog post item -->
            <?php
            $group_post_2 = get_field('group_post_2');
            if ($group_post_2) : ?>
                <div class="col-12 col-md-4 sm-margin-15px-bottom fadeIn" data-wow-delay="0.2s">
                    <!-- fresh news item -->
                    <div class="blog-post blog-post-style6 border border-white-light padding-fourteen-all lg-padding-ten-all sm-padding-30px-all h-100">
                        <div class="post-details">
                            <span class="text-extra-small text-white-2 text-uppercase d-block margin-four-bottom md-margin-two-bottom opacity7"><?php echo $group_post_2['data_post']; ?></span>
                            <span class="text-large alt-font margin-50px-bottom sm-margin-30px-bottom d-block"><a href="blog-post-layout-02.html" class="text-white-2"><?php echo $group_post_2['text_post']; ?></a></span>
                            <div class="author padding-10px-top position-relative">
                                <span class="text-white-2 text-uppercase text-extra-small">by <a href="blog-only-text.html" class="text-white-2"><?php echo $group_post_2['avtor_post']; ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <!-- start blog post item -->
            <!-- end blog post item -->
            <?php
            $group_post_3 = get_field('group_post_3');
            if ($group_post_3) : ?>
                <div class="col-12 col-md-4 fadeIn" data-wow-delay="0.4s">
                    <div class="blog-post blog-post-style6 border border-white-light padding-fourteen-all lg-padding-ten-all sm-padding-30px-all h-100">
                        <div class="post-details">
                            <span class="text-extra-small text-white-2 text-uppercase d-block margin-four-bottom md-margin-two-bottom opacity7"><?php echo $group_post_3['data_post']; ?></span>
                            <span class="text-large alt-font margin-50px-bottom sm-margin-30px-bottom d-block"><a href="blog-post-layout-03.html" class="text-white-2"><?php echo $group_post_3['text_post']; ?></a></span>
                            <div class="author padding-10px-top position-relative">
                                <span class="text-white-2 text-uppercase text-extra-small">by <a href="blog-only-text.html" class="text-white-2"><?php echo $group_post_3['avtor_post']; ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
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
                <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block"><?php the_field('clients'); ?></div>
            </div>
        </div>
        <div class="row text-center">
            <!-- start client logo item -->
            <?php
            $clients_link_1 = get_field('clients_link_1');
            if ($clients_link_1) : ?>
                <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown">
                    <a href="<?php echo $clients_link_1['link_1']; ?>" target="_blank"><img src="<?php echo $clients_link_1['logo_1']; ?>" alt=""></a>
                </div>
            <?php endif; ?>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <?php
            $clients_link_2 = get_field('clients_link_2');
            if ($clients_link_2) : ?>
                <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.2s">
                    <a href="<?php echo $clients_link_2['link_1']; ?>" target="_blank"><img src="<?php echo $clients_link_2['logo_1']; ?>" alt=""></a>
                </div>
            <?php endif; ?>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <?php
            $clients_link_3 = get_field('clients_link_3');
            if ($clients_link_3) : ?>
                <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.4s">
                    <a href="<?php echo $clients_link_3['link_1']; ?>" target="_blank"><img src="<?php echo $clients_link_3['logo_1']; ?>" alt=""></a>
                </div>
            <?php endif; ?>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <?php
            $clients_link_4 = get_field('clients_link_4');
            if ($clients_link_4) : ?>
                <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.6s">
                    <a href="<?php echo $clients_link_4['link_1']; ?>" target="_blank"><img src="<?php echo $clients_link_4['logo_1']; ?>" alt=""></a>
                </div>
            <?php endif; ?>
            <?php
            $clients_link_5 = get_field('clients_link_5');
            if ($clients_link_5) : ?>
                <div class="col-12 col-md-3 sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.8s">
                    <a href="<?php echo $clients_link_5['link_1']; ?>" target="_blank"><img src="<?php echo $clients_link_5['logo_1']; ?>" alt=""></a>
                </div>
            <?php endif; ?>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <?php
            $clients_link_6 = get_field('clients_link_6');
            if ($clients_link_6) : ?>
                <div class="col-12 col-md-3 sm-margin-15px-bottom wow fadeInDown" data-wow-delay="1s">
                    <a href="<?php echo $clients_link_6['link_1']; ?>" target="_blank"><img src="<?php echo $clients_link_6['logo_1']; ?>" alt=""></a>
                </div>
            <?php endif; ?>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <?php
            $clients_link_7 = get_field('clients_link_7');
            if ($clients_link_7) : ?>
                <div class="col-12 col-md-3 sm-margin-15px-bottom wow fadeInDown" data-wow-delay="1.2s">
                    <a href="<?php echo $clients_link_7['link_1']; ?>" target="_blank"><img src="<?php echo $clients_link_7['logo_1']; ?>" alt=""></a>
                </div>
            <?php endif; ?>
            <!-- end client logo item -->
            <!-- start client logo item -->
            <?php
            $clients_link_8 = get_field('clients_link_8');
            if ($clients_link_8) : ?>
                <div class="col-12 col-md-3 wow fadeInDown" data-wow-delay="1.4s">
                    <a href="<?php echo $clients_link_8['link_1']; ?>" target="_blank"><img src="<?php echo $clients_link_8['logo_1']; ?>" alt=""></a>
                </div>
            <?php endif; ?>
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

        <form id="contact" action="/wp-content/themes/pofo/mail.php" method="post">
            <div id="note"></div>
            <div class="row justify-content-center"" id=" fields">
                <div class="col-12 col-lg-8 input-border-white text-center">
                    <div id="success-contact-form" class="mx-0"></div>
                    <input type="text" name="name" id="author" placeholder="Name*" class="input-border-bottom border-white-light" required>
                    <input type="email" name="email" id="email" placeholder="E-mail*" class="input-border-bottom border-white-light" required>
                    <input type="text" name="sub" id="url" placeholder="Subject" class="input-border-bottom border-white-light" required>
                    <textarea name="message" cols="1" rows="10" id="comment" class="input-border-bottom border-white-light" placeholder="Your Message" required></textarea>
                    <button type="submit" id="submit" class="go btn btn-very-small btn-transparent-white sm-margin-15px-top">send message</button>
                </div>
            </div>
        </form>
        <!-- <form id="contact-form" action="javascript:void(0)" method="post">
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
        </form> -->
    </div>
</section>
<!-- end contact section -->

<?php get_footer(); ?>