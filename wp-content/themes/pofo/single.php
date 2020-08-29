<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package pofo
 */

get_header();
?>


<!-- end page title section -->

<!-- start post content section -->

<section>
	<div class="container">
		<div class="row">
			<main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center">
							<div class="blog-image"><?php the_post_thumbnail(array(1200, 752)) ?></div>
							<div class="blog-text border-all d-inline-block width-100">
								<div class="content padding-50px-all sm-padding-20px-all">
									<div class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block text-center" title="<?php the_title_attribute(); ?>"><?php the_title(); ?>
									</div>
									<p class="m-0"><?php the_content() ?></p>
								</div>
								<div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on <?php echo get_the_date(); ?>
										<a class="text-medium-gray "><?php the_category(',', ''); ?></a></span>
								</div>
							</div>
						</div>
					<?php endwhile;  ?>
				<?php else : ?>
				<?php endif; ?>
		</div>
		</main>
	</div>
	</div>
</section>
<!-- end blog content section -->
<?php
get_footer();
