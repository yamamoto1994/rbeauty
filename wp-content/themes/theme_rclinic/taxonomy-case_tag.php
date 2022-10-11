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
							<ul class="case-navi">
								<li>
								<a href="<?php echo esc_url(home_url('/')); ?>case_tag/eye/">
								 <div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/case/navi-eye.jpg" alt=""></div>
								<h3 class="ico_line_grade ico_line_l_grade serif">二重整形・目元</h3>
								</a>
							 </li>
							 <li>
								<a href="<?php echo esc_url(home_url('/')); ?>case_tag/nose/">
								 <div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/case/navi-nose.jpg" alt=""></div>
								 <h3 class="ico_line_grade ico_line_l_grade serif">鼻筋・小鼻</h3>
								</a>
							 </li>
							 <li>
								<a href="<?php echo esc_url(home_url('/')); ?>case_tag/kogao/">
								 <div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/case/navi-kogao.jpg" alt=""></div>
								 <h3 class="ico_line_grade ico_line_l_grade serif">小顔</h3>
								</a>
							 </li>
						 </ul>
						 <style>
.case_area .case-navi li a{
	width: 315px;
	display: flex;
align-items: center;
background: #fff;
border: 4px solid #f0f1f3;
height: auto;
}
.case-navi li .ph {
    width: 120px;
    height: 120px;
    overflow: hidden;
    order: 2;
}
.case-navi li h3 {
    position: relative;
    width: calc(100% - 150px);
    margin: 0 15px;
    font-size: 1.8rem;
    order: 1;
}
.case-navi li .ph img {
    height: 100%;
    object-fit: cover;
}
@media screen and (max-width: 767px) {
	.case_area .case-navi li a {
	    width: 100%;
			flex-wrap: wrap;
		}
		.case-navi li .ph {
    width: 100%;
	}
	.case_area ul li h3 {
    order: 2;
		width: 100%;
}
}
						 </style>
						 <h2 class="t-title"><?php $terms = wp_get_object_terms($post->ID,'case_tag'); foreach($terms as $term){echo $term->name . '';} ?>の症例⼀覧</h2>
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
