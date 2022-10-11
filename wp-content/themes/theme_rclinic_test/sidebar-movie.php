						<section class="side_area">
							<?php include(TEMPLATEPATH . '/search-movie.php'); ?>	
							<div class="side recommend">
								<h3>RECOMMEND</h3>
									<ul>

	<?php $arg = array('post_type' =>array('movie'),'meta_key' =>'views','orderby' => 'meta_value_num', 'order' => 'DESC','posts_per_page' => 4 ); 
		$the_query = new WP_Query( $arg );
		if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<li><a href="<?php echo get_permalink(); ?>">
										<p class="date"><?php the_time('Y.m.d'); ?></p>
										<div class="ph"><figure><img src="http://img.youtube.com/vi/<?php $movie_id = get_field('movie_id'); if( $movie_id ): ?><?php echo $movie_id; ?><?php endif; ?>/hqdefault.jpg"></figure></div>
										<h4><?php the_title(); ?></h4></a>
									</li>
<?php endwhile; endif; ?>
								</ul>
							</div>
							<div class="side category">
								<h3>CATEGORY</h3>
									<ul>
										<li><a href="<?php echo esc_url(home_url('/')); ?>movie/">全ての記事</a></li>
									<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'movie_cate','hide_empty' => 0)); ?></ul>
							</div>
							<div class="side category">
								<h3>ARCHIVES</h3>
								<ul>
								<?php
								$args = array(
									'post_type' => 'movie',
									'type' => 'monthly',
									'show_post_count' => 1,
								);
								wp_get_archives( $args );
								?>
								</ul>
							</div>
						</section>
