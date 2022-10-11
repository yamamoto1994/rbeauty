<?php get_header(); ?>

			<section class="news blog">
				<div class="other_ttl_area bg_gray_white clinic_ttl_area">
					<div class="inner">
						<h2 class="serif title">MOVIE</h2>
					</div>
				</div>
					<div class="inner col_inner">

						<section class="blog_area">
							<div class="details movie_area">
								<div class="inner">
                                <div class="menu_movie_contents">
                                    <iframe src="https://www.youtube.com/embed/<?php $movie_id = get_field('movie_id'); if( $movie_id ): ?><?php echo $movie_id; ?><?php endif; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>		
								</div>
								<h1 class="serif"><?php the_title(); ?></h1>
								<div class="cate_area"><?php
				$terms = get_the_terms($post->ID,'movie_cate');
				foreach( $terms as $term ) {
				echo '<span class="case">';
				echo $term->name;
				echo '</span>';
				}
				?></div>
								<p class="date"><?php the_time('Y.m.d'); ?></p>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<?php endwhile; endif; ?>
							</div>
							
							<div class="pagenation">
								<span class="prev"><?php if (get_previous_post()): ?><?php previous_post_link('%link', 'PREV'); ?><span class="btn_arrow_l"></span><?php endif; ?></span>　　<a class="page_list" href="<?php echo esc_url(home_url('/')); ?>movie">LIST</a>　　<span class="next"><?php if (get_next_post()): ?><?php next_post_link('%link', 'NEXT'); ?><span class="btn_arrow_r"></span><?php endif; ?></span></div>
							
						</section>
						
						
					<?php include(TEMPLATEPATH . '/sidebar-movie.php'); ?>	
		
				</div>
			</section>

<?php get_footer(); ?>