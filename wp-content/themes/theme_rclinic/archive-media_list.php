<?php get_header(); ?>

			<section class="media">
				<div class="other_ttl_area bg_gray_white clinic_ttl_area">
					<div class="inner">
						<h2 class="serif title">メディア実績</h2>
					</div>
				</div>
              <section class="media_area  side_square side_square_r">
                <div class="inner inner800">
                  <h2 class="logo_title sec_title sec_title_c serif">掲載メディア⼀覧</h2>
					<ul class="col_2_area">
						
							<?php if (have_posts()) : while(have_posts()) : the_post(); ?>		
						<li><figure><?php $media_ph = get_field('media_ph'); if( $media_ph ): ?><img src="<?php echo $media_ph; ?>" alt="<?php the_title(); ?>"><?php endif; ?></figure><h3 class="serif fo20">「<?php the_title(); ?>」</h3>
							<?php $media_date = get_field('media_date'); if( $media_date ): ?><p><?php echo $media_date; ?></p><?php endif; ?></li>
							<?php endwhile; endif;?>
					</ul>
					<div class="pagenation"><?php include(TEMPLATEPATH . '/pagenavi.php'); ?></div>
                </div>
              </section>
					
			</section>

<?php get_footer(); ?>