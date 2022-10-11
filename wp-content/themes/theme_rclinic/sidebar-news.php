						<section class="side_area">
							<?php include(TEMPLATEPATH . '/search-news.php'); ?>	
							<div class="side recommend">
								<h3 class="en_serif">Whatʼs New</h3>
									<ul>
	<?php $arg = array('post_type' =>array('news'), 'order' => 'DESC','posts_per_page' => 5 ); 
		$the_query = new WP_Query( $arg );
		if ( $the_query->have_posts() ) :
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									<li><a href="<?php echo get_permalink(); ?>">
										<p class="date"><?php the_time('Y.m.d'); ?></p>
										<h4><?php the_title(); ?></h4></a>
									</li>
<?php endwhile; endif; ?>

								</ul>
							</div>
							<div class="side category">
								<h3 class="en_serif">Archive</h3>
								<ul>
								<?php
								$args = array(
									'post_type' => 'news',
									'type' => 'monthly',
									'show_post_count' => 1,
								);
								wp_get_archives( $args );
								?>
								</ul>
							</div>
						</section>
