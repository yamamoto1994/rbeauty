<?php get_header(); ?>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script type='text/javascript' src='http://code.jquery.com/jquery-migrate-1.4.1.js'></script>
			<section class="case">
				<div class="ttl_area parent_ttl_area">
					<div class="inner">
						<h1 class="serif title">施術⼀覧</h1>
					</div>
				</div>
				
				
				<section class="case_area">
                          <div class="lo_search_area">
                              <?php echo do_shortcode( '[searchandfilter id="601"]' ); ?>
                          </div>	
						<div class="inner">
							<ul>
								<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                                  <li class="case_hv">
                                      <a class="inline_contents" href="#case_contents<?php echo get_the_ID(); ?>" rel="case_modal"><?php $case_radio = get_field('case_radio'); if ($case_radio == "画像"): ?><img src="<?php $case_ph = get_field('case_ph'); ?><?php echo $case_ph; ?>" alt=""><?php elseif ($case_radio == "動画"): ?>
                                          <video controls autoplay muted loop playsinline>
                                                <source src="<?php the_field('case_movie'); ?>" type="video/mp4">
                                              </video><?php endif; ?></a>
                                      <h3 class="ico_line_grade ico_line_t_grade"><?php the_title(); ?></h3>
                                  </li>
								
<div style="display: none;">
<section id="case_contents<?php echo get_the_ID(); ?>" class="modal_flex">
    <div class="ph">
	<?php $case_radio = get_field('case_radio'); if ($case_radio == "画像"): ?><img src="<?php $case_ph = get_field('case_ph'); ?><?php echo $case_ph; ?>" alt=""><?php elseif ($case_radio == "動画"): ?>
							  <video controls autoplay muted loop playsinline>
                                    <source src="<?php the_field('case_movie'); ?>" type="video/mp4">
                                  </video><?php endif; ?>
	</div>
	<div class="modal_case_contents_area">
		<div class="modal_case_contents_inner">
          <div class="modal_case_title_area">
              <div class="icon"><img src="<?php $case_ico = get_field('case_ico'); ?><?php echo $case_ico; ?>" alt=""></div> 
              <p class="clinic_name">R CLINIC</p>
			  <div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_instagram.svg" alt=""></div>
          </div>
          <h2 class="serif"><?php the_title(); ?></h2>
  <?php if( have_rows('case_block') ): ?>
          <?php while( have_rows('case_block') ): the_row();?>
          <div class="modal_case_contents">
              <?php $case_details_title = get_sub_field('case_details_title'); if( $case_details_title ): ?><h3><?php echo $case_details_title; ?></h3><?php endif; ?>
              <?php $case_details_txt = get_sub_field('case_details_txt'); if( $case_details_txt ): ?>
			  <div class="txt_area">
                  <?php echo $case_details_txt; ?>
              </div>
			 <?php endif; ?>
          </div>
          <?php endwhile; ?>
      <?php endif; ?>
			<div class="btn btn_gray btn_hv_black"><a href="<?php the_field('case_url'); ?>">この症例の施術を⾒る</a></div>
			<div class="btn btn_bg_black btn_hv_black btn_hv_white"><a href="<?php echo esc_url(home_url('/')); ?>reserve" target="_blank">予約する</a></div>
		</div>
	</div>
</section>
</div>

                              <?php endwhile; endif;?>
							</ul>
							
							<div class="pagenation"><?php include(TEMPLATEPATH . '/pagenavi.php'); ?></div>
						</div>			
				</section>			
			</section>


<?php get_footer(); ?>