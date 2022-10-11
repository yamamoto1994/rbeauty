<?php get_header(); ?>
			<section class="photo_selection">
				<div class="other_ttl_area bg_dark">
					<div class="inner">
						<h1 class="serif title">⼆重整形 フォトセレクション</h1>
					</div>
				</div>
				
				
				<section class="photo_selection_area case_area">
						<div class="inner">
							<div class="monitor_banner">
                                  <a href="<?php echo esc_url(home_url('/')); ?>monitor/">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/trouble/diet/monitor_apply_bnr.jpg" alt="モニター募集">
                                  </a>
                            </div>
							<ul>
								<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                                  <li>
									  
								<?php if( get_field('photoselect_title')): ?><h3 class="bg_black co_white fo18"><?php the_field('photoselect_title'); ?></h3><?php endif; ?>
                                  <?php if( get_field('photoselect_ph')): ?><figure><img src="<?php the_field('photoselect_ph'); ?>" alt=""></figure><?php endif; ?>
								 <div class="photo_selection_doctor_area">
									 <?php if( get_field('photoselect_doctor_ph')): ?><div class="icon"><img src="<?php the_field('photoselect_doctor_ph'); ?>"></div><?php endif; ?>
									 <div class="txt">
                                         <?php if( get_field('photoselect_doctor_name')): ?><p class="name serif"><?php the_field('photoselect_doctor_name'); ?><span>医師</span></p><?php endif; ?>
                                         <?php if( get_field('photoselect_doctor_txt')): ?><p class="katagaki"><?php the_field('photoselect_doctor_txt'); ?></p><?php endif; ?>
									</div>
								  </div>
								<?php if( get_field('photoselect_url')): ?><div class="btn btn_gray btn_hv_black"><a href="<?php the_field('photoselect_url'); ?>">施術情報を⾒る</a></div><?php endif; ?>
                                  </li>
								

                              <?php endwhile; endif;?>
							</ul>
							
							<div class="pagenation"><?php include(TEMPLATEPATH . '/pagenavi.php'); ?></div>
						</div>			
				</section>			
			</section>


<?php get_footer(); ?>