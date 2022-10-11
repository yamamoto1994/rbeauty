<?php get_header(); ?>

			<section class="blog news">
				<div class="ttl_area parent_ttl_area">
					<div class="inner">
						<h1 class="serif title">NEWS</h1>
					</div>
				</div>
					<div class="inner col_inner">
						<section class="blog_area">
							
							<?php if (have_posts()) : while(have_posts()) : the_post(); ?>					
							<div class="list">
								<p class="date"><?php the_time('Y-m-d'); ?></p>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="contents_area">
                                  <div class="txt">
                                      <p><a href="<?php the_permalink(); ?>"><?php echo mb_substr(strip_tags($post-> post_content),0,90) . '...'; ?></a></p>
                                  </div>
								</div>
							</div>
							<?php endwhile; endif;?>
							
							<div class="pagenation"><?php include(TEMPLATEPATH . '/pagenavi.php'); ?></div>
						</section>
					<?php include(TEMPLATEPATH . '/sidebar-news.php'); ?>	
		
				</div>
			</section>

<?php get_footer(); ?>