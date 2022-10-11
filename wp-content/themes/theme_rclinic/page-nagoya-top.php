<?php
/*
Template Name: clinic-nagoya-top
*/
?>
<?php get_header(1); ?>

<div class="siema main-sld">
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/images/nagoya/main05.jpg" class="pc">
		<img src="<?php echo get_template_directory_uri(); ?>/images/nagoya/main05-sp.jpg" class="sp">
	</div>
</div>

<section class="pickup">
<div class="inner">
<ul>
<?php if(have_rows('nagoya_top_fv_shita')): ?>
<?php while(have_rows('nagoya_top_fv_shita')): the_row(); ?>
<li><?php $nagoya_top_fv_shita_link = get_sub_field('nagoya_top_fv_shita_link'); if( $nagoya_top_fv_shita_link ): ?>
<a href="<?php echo $nagoya_top_fv_shita_link; ?>" ><?php endif; ?>
<?php $nagoya_top_fv_shita_ph = get_sub_field('nagoya_top_fv_shita_ph'); if( $nagoya_top_fv_shita_ph ): ?>
<img src="<?php echo $nagoya_top_fv_shita_ph; ?>" alt=""><?php endif; ?><?php $nagoya_top_fv_shita_link = get_sub_field('nagoya_top_fv_shita_link'); if( $nagoya_top_fv_shita_link ): ?></a><?php endif; ?></li>
<?php endwhile; ?>
<?php endif; ?>
</ul>
</div>
</section>




<?php $top_banner_slide = get_field('top_banner_slide',5); if( $top_banner_slide ){ echo $top_banner_slide; }?>


			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
			<?php endwhile; endif; ?>

<?php get_footer(1); ?>
