<?php get_header(); ?>
<?php
$post = get_page_by_path('movie', 'OBJECT', $post_type);
$postID = $post->ID;?>
			<section class="blog movie">
				<div class="other_ttl_area bg_gray_white clinic_ttl_area">
					<div class="inner">
						<h2 class="serif title">配信動画</h2>
					</div>
				</div>
					<div class="inner col_inner">
						<section class="movie_list_area">
							<div class="movie_area">
							<?php if (have_posts()) : while(have_posts()) : the_post(); ?>	
							<div class="list">
								<div class="contents_area">
                                  <div class="ph"><a class="inline_contents cboxElement" href="#movie<?php echo get_the_ID(); ?>"><img src="http://img.youtube.com/vi/<?php $movie_id = get_field('movie_id'); if( $movie_id ): ?><?php echo $movie_id; ?><?php endif; ?>/hqdefault.jpg"></a></div>
                                  <div class="txt">
 									<p class="date"><?php the_time('Y.m.d'); ?></p>
                                     <h2><a class="inline_contents cboxElement" href="#movie<?php echo get_the_ID(); ?>"><?php the_title(); ?></a></h2>
									  <div class="cate_area"><?php
				$terms = get_the_terms($post->ID,'movie_cate');
				foreach( $terms as $term ) {
				echo '<span class="case">';
				echo $term->name;
				echo '</span>';
				}
				?></div>
</div>
								</div>
							</div>
<div style="display: none;">
<section id="movie<?php echo get_the_ID(); ?>" class="modal_flex modal_movie">
  <div class="ph">
      <iframe src="https://www.youtube.com/embed/<?php $movie_id = get_field('movie_id'); if( $movie_id ): ?><?php echo $movie_id; ?><?php endif; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
  </div>
</section>
</div>
							<?php endwhile; endif;?>
							</div>
							<div class="pagenation"><?php include(TEMPLATEPATH . '/pagenavi.php'); ?></div>
						</section>
					<?php include(TEMPLATEPATH . '/sidebar-movie.php'); ?>	
		
				</div>
			</section>

<?php get_footer(); ?>