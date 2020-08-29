<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pofo
 */

?>


<div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center text-md-left">
	<div class="blog-image"><?php the_post_thumbnail(array(1200, 752)) ?></div>
	<div class="blog-text border-all d-inline-block width-100">
		<div class="content padding-50px-all sm-padding-20px-all">
			<div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on <?php echo get_the_date(); ?>
				</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray "><?php the_category(',', ''); ?></a></span></div>
			<a href="<?php the_permalink(); ?>" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			<p class="m-0"><?php the_content('') ?></p>
		</div>
	</div>
</div>