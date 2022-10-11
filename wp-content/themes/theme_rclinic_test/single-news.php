<?php get_header(); ?>

			<section class="blog news">
				<div class="ttl_area parent_ttl_area">
					<div class="inner">
						<h1 class="serif title">NEWS</h1>
					</div>
				</div>
					<div class="inner col_inner">
						<section class="blog_area">
							<div class="details">
								<h1 class="serif"><?php the_title(); ?></h1>
								<div class="details_cate_area">
								<p class="date"><?php the_time('Y.m.d'); ?></p>
								</div>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<?php endwhile; endif; ?>
							</div>
							
							<div class="pagenation">
								<span class="prev"><?php if (get_previous_post()): ?><?php previous_post_link('%link', 'PREV'); ?><span class="btn_arrow_l"></span><?php endif; ?></span>　　<a class="page_list" href="<?php echo esc_url(home_url('/')); ?>news">LIST</a>　　<span class="next"><?php if (get_next_post()): ?><?php next_post_link('%link', 'NEXT'); ?><span class="btn_arrow_r"></span><?php endif; ?></span></div>
						
						</section>
						
					<?php include(TEMPLATEPATH . '/sidebar-news.php'); ?>	
		
				</div>
			</section>

<?php get_footer(); ?>