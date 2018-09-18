<?php
/**
 * @package WordPress
 * @subpackage ID-Peru-Theme-Wordpress
 * @since HTML5 ID 2.0
 */
 get_header(); ?>

<div class="container">
	<div class="row clearfix">
		<div class="col-md-9">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<?php posted_on(); ?>
			<div class="entry">
				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => __('Pages: ','html5reset'), 'next_or_number' => 'number')); ?>
			</div>
			<?php edit_post_link(__('Edit this entry','html5reset'), '<p>', '</p>'); ?>
		</article>
		<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		</div>
		<div class="col-md-3">
		<?php get_sidebar(); ?>
		</div>	
	</div>
</div>

<?php get_footer(); ?>
