<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pofo
 */

get_header();
?>
<section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('http://placehold.it/1920x1100');">
	<div class="opacity-medium bg-extra-dark-gray"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
				<!-- start page title -->
				<h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Blog right sidebar</h1>
				<span class="text-white-2 opacity6 alt-font">Lorem Ipsum is simply dummy text printing</span>
				<!-- end page title -->
			</div>
		</div>
	</div>
</section>
<!-- end page title section -->
<!-- start post content section -->
<section>
	<div class="container">
		<div class="row">
			<main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">
				<?php
				if (have_posts()) :

					if (is_home() && !is_front_page()) :
				?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
				<?php
					endif;

					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
						get_template_part('template-parts/content', get_post_type());

					endwhile;

							the_posts_pagination();   
							// the_posts_navigation  
							
				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>
			</main>
		</div>
	</div>
</section>
<?php
get_footer();
