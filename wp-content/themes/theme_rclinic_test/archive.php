<?php get_header(); ?>

			<section class="column">
				<div class="ttl_area">
					<h2>COLUMN<span>実績・記事</span></h2>
				</div>
					<div class="inner flex">
						<section class="column_area">
							
						<?php if(have_posts()): while(have_posts()):the_post(); ?>						
							<div class="list flex">
								<h3><?php the_title(); ?></h3>
								<div class="ph"><?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('thumbnail'); ?>
									<?php else : ?>
									<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
									<?php endif ; ?></div>
								<div class="txt">
									<p class="date"><?php the_time('Y.m.d'); ?><?php 
								$cat = get_the_category();
								$cat = $cat[0];
							?><span class="<?php echo $cat->category_nicename; ?>"><?php echo $cat->cat_name; ?></span></p>
									<p><a href="<?php the_permalink(); ?>"><?php echo mb_substr(strip_tags($post-> post_content),0,100) . '...'; ?></a></p>
								</div>
							</div>
							<?php endwhile; endif;?>
							
							<div class="pagenation"><?php include(TEMPLATEPATH . '/pagenavi.php'); ?></div>
						</section>
					<?php include(TEMPLATEPATH . '/sidebar-column.php'); ?>	
		
				</div>
			</section>

<?php get_footer(); ?>