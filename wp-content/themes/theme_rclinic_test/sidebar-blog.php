						<section class="side_area">
							<?php include(TEMPLATEPATH . '/search-blog.php'); ?>	
							<div class="side recommend">
								<h3>おすすめ記事</h3>
									<ul>

	<?php $arg = array('post_type' =>array('blog'),'meta_key' =>'views','orderby' => 'meta_value_num', 'order' => 'DESC','posts_per_page' => 4 ); 
		$the_query = new WP_Query( $arg );
		if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<li><a href="<?php echo get_permalink(); ?>">
										<p class="date"><?php the_time('Y.m.d'); ?></p>
										<div class="ph"><figure><?php if (has_post_thumbnail()) : ?>
											<?php the_post_thumbnail('thumbnail'); ?>
											<?php else : ?>
											<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
											<?php endif ; ?></figure></div>
										<h4><?php the_title(); ?></h4></a>
									</li>
<?php endwhile; endif; ?>
								</ul>
							</div>
							<div class="side category">
								<h3>CATEGORY</h3>
									<ul>
										<li><a href="<?php echo esc_url(home_url('/')); ?>blog/">全ての記事</a></li>
									<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'blog_cate','hide_empty' => 0)); ?></ul>
							</div>
							<div class="side category">
								<h3>ARCHIVES</h3>
								<ul>
								<?php
								$args = array(
									'post_type' => 'blog',
									'type' => 'monthly',
									'show_post_count' => 1,
								);
								wp_get_archives( $args );
								?>
								</ul>
							</div>
						</section>
