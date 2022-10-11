<?php
/*
Template Name: clinic-nagoya
*/
?>
<?php get_header(1); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>

<?php get_footer(1); ?>
