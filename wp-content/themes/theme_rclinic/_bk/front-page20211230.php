<?php get_header(); ?>


			<section class="fv">
				<div class="fv_slide_area">
                  <div class="swiper-wrapper">

					<?php if( have_rows('top_fv_slide') ): ?>
					  <?php $i = 1; ?>
					<?php while( have_rows('top_fv_slide') ): the_row();?>
					  <div class="swiper-slide fv_slide<?php $suji = $i; $i++; echo printf("%02d ", $suji); ?> shadow"><?php $top_slide_url = get_sub_field('top_slide_url'); if( $top_slide_url ): ?><a href="<?php echo apply_filters('the_content', $top_slide_url); ?>"<?php if( get_sub_field('top_slide_radio') == "はい"): ?> target="_blank"<?php else: ?><?php endif; ?>><?php endif; ?><?php $top_slide_ph = get_sub_field('top_slide_ph'); if( $top_slide_ph ): ?><figure><img class="pc" src="<?php echo $top_slide_ph; ?>" alt=""></figure><?php endif; ?><?php $top_slide_ph_sp = get_sub_field('top_slide_ph_sp'); if( $top_slide_ph_sp ): ?><figure><img class="sp" src="<?php echo $top_slide_ph_sp; ?>" alt=""></figure><?php endif; ?><?php $top_slide_txt = get_sub_field('top_slide_txt'); if( $top_slide_txt ): ?><h2 class="pc" data-swiper-parallax="300" data-swiper-parallax-duration="800" data-swiper-parallax-opacity="0"><img src="<?php echo $top_slide_txt; ?>" alt=""></h2><?php endif; ?><?php $top_slide_txt_sp = get_sub_field('top_slide_txt_sp'); if( $top_slide_txt_sp ): ?><h2 class="sp" data-swiper-parallax="300" data-swiper-parallax-duration="800" data-swiper-parallax-opacity="0"><img src="<?php echo $top_slide_txt_sp; ?>" alt=""></h2><?php endif; ?><?php $top_slide_url = get_sub_field('top_slide_url'); if( $top_slide_url ): ?></a><?php endif; ?></div>
					<?php endwhile;endif; ?>
                  </div>
					<div class="pagination"></div>
				</div>
				<div class="fv_slide_bg_area">
                  <div class="swiper-wrapper">
					<?php if( have_rows('top_fv_slide') ): ?>
					<?php while( have_rows('top_fv_slide') ): the_row();?>
                      <div class="swiper-slide" <?php $top_slide_ph = get_sub_field('top_slide_ph'); if( $top_slide_ph ): ?>style="background-image:url(<?php echo $top_slide_ph; ?>);"<?php endif; ?>></div>
					<?php endwhile;endif; ?>
                  </div>
				</div>
			</section>


			<section class="pickup">
			<div class="inner">
			<ul>
			<li><a href="<?php echo esc_url(home_url('/')); ?>face/eye01/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/pickup01.jpg" alt="SNSで大人気の二重整形 R式クイックアイ"></a></li>
			<li><a href="<?php echo esc_url(home_url('/')); ?>face/nose/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/pickup02.jpg" alt="自然で美しい仕上がり　美鼻整形"></a></li>
			<li><a href="<?php echo esc_url(home_url('/')); ?>trouble/447/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/pickup07.jpg" alt="小鼻縮小"></a></li>
			<li><a href="<?php echo esc_url(home_url('/')); ?>trouble/606/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/pickup03.jpg" alt="バッカルファット除去"></a></li>
			<li><a href="<?php echo esc_url(home_url('/')); ?>trouble/856/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/pickup04.jpg" alt="目尻切開"></a></li>
			<li><a href="<?php echo esc_url(home_url('/')); ?>trouble/1040/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/pickup06.jpg" alt="Youtubeで話題！オルチャンデコに！濃縮脂肪注入"></a></li>
			</ul>

			</div>
			</section>
			<style>
			.pickup{
				padding: 20px 0 0;
			}
			.pickup ul{
				display: flex;
			justify-content: space-between;
			flex-wrap: wrap;
			width: 100%;
			margin: 0 auto;
			}
			.pickup li{
			 width: 48%;
				margin-bottom: 30px;
			}
			.pickup li img{
				width:100%;
			}
			@media screen and (max-width: 767px) {
				.pickup li{
					width:100%;
			margin-bottom: 15px;
			}
			.etc_area {
    background: #F8E0EB;
    padding: 50px 0;
    margin-bottom: 80px !important;
}
			}
			</style>

<?php $top_banner_slide = get_field('top_banner_slide'); if( $top_banner_slide ){ echo $top_banner_slide; }?>

<?php include("tpl/top-campaign.php"); ?>

</section>
</section>



<section class="etc_area">
<div class="basic_list_title_area">
<h2 class="basic_list_title"><span class="en_serif en_title">Pick Up</span><span class="serif jp_title">ピックアップ</span></h2>
</div>
<div class="inner">
<div class="etc-waku">
<ul>
<li>
<a href="<?php echo esc_url(home_url('/')); ?>beautygirl01/" id="etc-bs"><figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/bnr-momo.jpg" alt=""></figure></a></li>
<li><a href="<?php echo esc_url(home_url('/')); ?>nose-chart/" id="etc-nc"><figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/bnr-nose-chart.jpg" alt=""></figure></a></li>
<li><a href="<?php echo esc_url(home_url('/')); ?>eye-chart/" id="etc-ec"><figure><img src="<?php echo get_template_directory_uri(); ?>/images/top/bnr-eye-chart.jpg" alt=""></figure></a></li>
</div>
</div>
</section>
<style>
.etc_area {
    background: #e0e8e7;
	}
.etc_area .inner {
    display: flex;
    margin: 0 auto;
    justify-content: space-between;
		width: 1050px;
}
.etc_area .inner figure{
box-shadow: 2px 4px 3px rgba(0, 0, 0, 0.2);
}
.etc_area ul{
display: flex;
justify-content: space-between;
margin: 0 auto;
width:100%;
}
.etc_area li{
width: 300px;
}
.etc_area li img{
width:100%;
}
.etc-waku {
width:100%;
}
@media screen and (max-width: 1090px) {
.etc_area .inner {
width: 80%;
}
	.etc-waku {
		overflow-x: scroll;
	}
.etc_area ul{
	width:130%;
	}
}
@media screen and (max-width: 767px) {
.etc_area .inner {
    width: 95%;
}
.etc_area li{
width: 360px;
}
}
</style>




        <?php if( have_rows('top_trouble') ): ?>
            <?php while( have_rows('top_trouble') ): the_row();?>
             <section class="trouble_area">
				<div class="title_area">
                    <h2 class="serif logo_title">お悩みの部位から探す</h2>
				</div>
				<section class="face trouble_contents_area">
					<div class="inner trouble_list_title_area">
                       <h3 class="trouble_list_title"><span class="en_serif en_title">FACE</span><span class="serif jp_title">お顔のお悩み</span></h3>
                        <p class="pc"><?php $top_trouble_face = get_sub_field('top_trouble_face'); if( $top_trouble_face ): ?><?php echo $top_trouble_face; ?><?php endif; ?></p>
					</div>
                    <div class="trouble_list_area bg_pink_yellow">
						<div class="inner">
                            <div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/trouble_face_ph.png" alt="" loading="lazy"></div>
                            <div class="trouble_list">
								<?php $top_trouble_face_menu = get_sub_field('top_trouble_face_menu'); if( $top_trouble_face_menu ): ?><?php echo $top_trouble_face_menu; ?><?php endif; ?>
                            </div>
						</div>
                    </div>
					<div class="ico ico01 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_pink.png" alt="" loading="lazy"></div>
					<div class="ico ico02 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_green.png" alt="" loading="lazy"></div>
					<div class="ico ico03 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_blue.png" alt="" loading="lazy"></div>
				</section>
				<section class="body trouble_contents_area">
					<div class="inner trouble_list_title_area">
                       <h3 class="trouble_list_title"><span class="en_serif en_title">BODY</span><span class="serif jp_title">お⾝体のお悩み</span></h3>
					  <p class="pc"><?php $top_trouble_body = get_sub_field('top_trouble_body'); if( $top_trouble_body ): ?><?php echo $top_trouble_body; ?><?php endif; ?></p>
					</div>
                    <div class="trouble_list_area bg_blue_purple">
						<div class="inner">
                            <div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/trouble_body_ph.png" alt="" loading="lazy"></div>
                            <div class="trouble_list">
								<?php $top_trouble_body_menu = get_sub_field('top_trouble_body_menu'); if( $top_trouble_body_menu ): ?><?php echo $top_trouble_body_menu; ?><?php endif; ?>
                            </div>
						</div>
                    </div>
					<div class="ico ico01 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_yellow.png" alt="" loading="lazy"></div>
					<div class="ico ico02 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_blue.png" alt="" loading="lazy"></div>
					<div class="ico ico03 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_purple.png" alt="" loading="lazy"></div>
				</section>
				<section class="skin trouble_contents_area">
					<div class="inner trouble_list_title_area">
                       <h3 class="trouble_list_title"><span class="en_serif en_title">SKIN</span><span class="serif jp_title">お肌のお悩み</span></h3>
					   <p class="pc"><?php $top_trouble_skin = get_sub_field('top_trouble_skin'); if( $top_trouble_skin ): ?><?php echo $top_trouble_skin; ?><?php endif; ?></p>
					</div>
                    <div class="trouble_list_area bg_orange_blue">
						<div class="inner">
                            <div class="ph"><img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/trouble_skin_ph.png" alt="" loading="lazy"><img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/trouble_skin_ph_sp.png" alt="" loading="lazy"></div>
                            <div class="trouble_list">
                               <?php $top_trouble_skin_menu = get_sub_field('top_trouble_skin_menu'); if( $top_trouble_skin_menu ): ?><?php echo $top_trouble_skin_menu; ?><?php endif; ?>
                            </div>
						</div>
                    </div>
					<div class="ico ico01 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_blue.png" alt="" loading="lazy"></div>
					<div class="ico ico02 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_green.png" alt="" loading="lazy"></div>
					<div class="ico ico03 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_pink.png" alt="" loading="lazy"></div>
				</section>
			</section>
<?php endwhile;endif; ?>

			<section class="menu_area">
				<div class="title_area">
                    <h2 class="serif logo_title">施術メニュー</h2>
				</div>

				<section class="bg_gray_white surgery menu_contents_area">
					<div class="inner">
                        <div class="menu_list_title_area">
                           <h3 class="menu_list_title"><span class="serif jp_title">美容外科</span><span class="en_serif en_title">Cosmetic Surgery</span></h3>
                        </div>
                       <ul>
                        <?php
                          $categories = get_terms( 'menu_category', array(
                              'hide_empty' => 0,
                              'child_of' => 4,
                               )
                          );
                          foreach($categories as $value):
                          ?>
                          <li>
							  <a href="<?php echo esc_url(home_url('/')); ?>menu/menu_surgery#<?php echo $value->slug; ?>">
							   <div class="ph"><img src="<?php $cate_ph = get_field('cate_ph','category_'.$value->term_id); ?><?php echo $cate_ph; ?>" alt="" loading="lazy"></div>
                                <h3 class="ico_line_grade ico_line_l_grade serif"><?php echo $value->name;?></h3>
							  </a>
						   </li>
                          <?php endforeach; ?>
                        </ul>
                          <div class="btn btn_grade btn_w280 btn_round"><a href="<?php echo esc_url(home_url('/')); ?>menu/menu_surgery#menu_surgery">施術⼀覧を⾒る</a></div>
					</div>
				</section>
				<section class="dermatology menu_contents_area">
					<div class="inner">
                        <div class="menu_list_title_area">
                           <h3 class="menu_list_title"><span class="serif jp_title">美容⽪膚科</span><span class="en_serif en_title">Cosmetic Dermatology</span></h3>
                        </div>
                       <ul>
                        <?php
                          $categories = get_terms( 'menu_category', array(
                              'hide_empty' => 0,
                              'child_of' => 5,
                               )
                          );
                          foreach($categories as $value):
                          ?>
                          <li>
							  <a href="<?php echo esc_url(home_url('/')); ?>menu/menu_dermatology#<?php echo $value->slug; ?>">
							   <div class="ph"><img src="<?php $cate_ph = get_field('cate_ph','category_'.$value->term_id); ?><?php echo $cate_ph; ?>" alt="" loading="lazy"></div>
                                <h3 class="ico_line_grade ico_line_l_grade serif"><?php echo $value->name;?></h3>
							  </a>
						   </li>
                          <?php endforeach; ?>
                        </ul>
                          <div class="btn btn_grade btn_w280 btn_round"><a href="<?php echo esc_url(home_url('/')); ?>menu/menu_dermatology#menu_dermatology">施術⼀覧を⾒る</a></div>
					</div>
				</section>
				<section class="bg_gray_white other menu_contents_area">
					<div class="inner">
                        <div class="menu_list_title_area">
                           <h3 class="menu_list_title"><span class="serif jp_title">その他</span><span class="en_serif en_title">Other</span></h3>
                        </div>
                       <ul>
                        <?php
                          $categories = get_terms( 'menu_category', array(
                              'hide_empty' => 0,
                              'child_of' => 3,
                               )
                          );
                          foreach($categories as $value):
                          ?>
                          <li>
							  <a href="<?php echo esc_url(home_url('/')); ?>menu/menu_other#<?php echo $value->slug; ?>">
							   <div class="ph"><img src="<?php $cate_ph = get_field('cate_ph','category_'.$value->term_id); ?><?php echo $cate_ph; ?>" alt="" loading="lazy"></div>
                                <h3 class="ico_line_grade ico_line_l_grade serif"><?php echo $value->name;?></h3>
							  </a>
						   </li>
                          <?php endforeach; ?>
                        </ul>
                          <div class="btn btn_grade btn_w280 btn_round"><a href="<?php echo esc_url(home_url('/')); ?>menu/menu_other#menu_other">施術⼀覧を⾒る</a></div>
					</div>
				</section>
			</section>
		<section class="instagrammer_area">
				<p class="txt en_serif">Thank you for</p>
				<div class="slide_area instagrammer_slide_area">
                  <div class="swiper-wrapper loop">
                    <?php query_posts( array( 'post_type' =>array('case_instagrammer'),'posts_per_page' => -1 )); ?>
                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                      <div class="swiper-slide case_hv"><a class="inline_contents" href="#case_insta_contents<?php echo get_the_ID(); ?>" rel="case_insta_modal">
                          <?php $case_insta_radio = get_field('case_insta_radio'); if ($case_insta_radio == "画像"): ?><img src="<?php $case_insta_ph = get_field('case_insta_ph'); ?><?php echo $case_insta_ph; ?>" alt="" loading="lazy"><?php elseif ($case_insta_radio == "動画"): ?>
							  <video controls autoplay muted loop playsinline>
                                    <source src="<?php the_field('case_insta_movie'); ?>" type="video/mp4">
                                  </video><?php endif; ?>
						  </a>
						  <p><?php $case_insta_name = get_field('case_insta_name'); ?><?php echo $case_insta_name; ?></p>
                      </div>
                    <?php endwhile; endif;wp_reset_query();?>
                  </div>
				</div>
			</section>

<div style="display: none;">
<?php query_posts( array( 'post_type' =>array('case_instagrammer'),'posts_per_page' => -1 )); ?>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<section id="case_insta_contents<?php echo get_the_ID(); ?>" class="modal_flex">
    <div class="ph">
	<?php $case_radio = get_field('case_radio'); if ($case_radio == "画像"): ?><img src="<?php $case_ph = get_field('case_ph'); ?><?php echo $case_ph; ?>" alt="" loading="lazy"><?php elseif ($case_radio == "動画"): ?>
							  <video controls autoplay muted loop playsinline>
                                    <source src="<?php the_field('case_movie'); ?>" type="video/mp4">
                                  </video><?php endif; ?>
	</div>
	<div class="modal_case_contents_area">
		<div class="modal_case_contents_inner">
          <div class="modal_case_title_area">
              <div class="icon"><?php $case_ico = get_field('case_ico'); if( $case_ico ): ?><img src="<?php echo $case_ico; ?>" alt=""><?php else:?><img src="<?php echo get_template_directory_uri(); ?>/images/trouble/cate_fce_hutae.jpg" alt=""><?php endif; ?></div>
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
			<div class="btn btn_bg_black btn_hv_black btn_hv_white"><a href="https://clinics.medley.life/reservation/5f8d518fae8ded65041eca46" target="_blank">予約する</a></div>
		</div>
	</div>
</section>
<?php endwhile; endif;wp_reset_query();?>
</div>

<!--<section class="case_area">
              <div class="inner">
                  <div class="case_list_title_area">
                     <h2 class="case_list_title"><span class="en_serif en_title">Case</span><span class="serif jp_title">症例写真のご紹介</span></h2>
                  </div>
                   <ul>
                    <?php query_posts( array( 'post_type' =>array('case_top'),'posts_per_page' => 12 )); ?>
                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                      <li class="case_hv">
                          <a class="inline_contents" href="#case_contents<?php echo get_the_ID(); ?>" rel="case_modal"><?php $case_radio = get_field('case_radio'); if ($case_radio == "画像"): ?><img src="<?php $case_ph = get_field('case_ph'); ?><?php echo $case_ph; ?>" alt=""><?php elseif ($case_radio == "動画"): ?>
							  <video controls autoplay muted loop playsinline>
                                    <source src="<?php the_field('case_movie'); ?>" type="video/mp4">
                                  </video><?php endif; ?></a>
						  <h3 class="ico_line_grade ico_line_t_grade"><?php the_title(); ?></h3>
                      </li>
                    <?php endwhile; endif;wp_reset_query();?>
                   </ul>
				  <div class="btn btn_grade btn_w280 btn_round"><a href="<?php echo esc_url(home_url('/')); ?>case">施術⼀覧を⾒る</a></div>
				  <div class="banner"><a href="<?php echo esc_url(home_url('/')); ?>monitor"><img src="<?php echo get_template_directory_uri(); ?>/images/trouble/diet/monitor_apply_bnr.jpg" alt="格安で人気施術を受けられるチャンス！症例モニター募集"></a></div>
				</div>
                <div class="ico ico01 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_blue.png" alt=""></div>
                <div class="ico ico02 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_purple.png" alt=""></div>
                <div class="ico ico03 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_green.png" alt=""></div>
                <div class="ico ico04 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_yellow.png" alt=""></div>
                <div class="ico ico05 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_blue.png" alt=""></div>
                <div class="ico ico06 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_purple.png" alt=""></div>
			</section>



<div style="display: none;">
<?php query_posts( array( 'post_type' =>array('case_top'),'posts_per_page' => -1 )); ?>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
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
			<div class="btn btn_bg_black btn_hv_black btn_hv_white"><a href="https://clinics.medley.life/reservation/5f8d518fae8ded65041eca46" target="_blank">予約する</a></div>
		</div>
	</div>
</section>
<?php endwhile; endif;wp_reset_query();?>
</div>-->



<?php $top_clinic = get_field('top_clinic'); if( $top_clinic ){ echo $top_clinic; }?>
<?php $top_doctor = get_field('top_doctor'); if( $top_doctor ){ echo $top_doctor; }?>
<?php $top_sns = get_field('top_sns'); if( $top_sns ){ echo $top_sns; }?>


<section class="movie_area">
<div class="basic_list_title_area">
<h2 class="basic_list_title"><span class="en_serif en_title">Movie</span><span class="serif jp_title">動画一覧</span></h2>
</div>
                    <div id="movie">
											<div class="swiper-wrapper">
<?php query_posts( array( 'post_type' =>array('movie'),'posts_per_page' => 6 )); ?>
									 <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
												 <div class="swiper-slide"><div class="movie"><lite-youtube class="lazyload" videoid="<?php $movie_id = get_field('movie_id'); if( $movie_id ): ?><?php echo $movie_id; ?><?php endif; ?>" playlabel="Play"></lite-youtube></div></div>
<?php endwhile; endif;wp_reset_query();?>
											 </div>
                    </div>
                <div class="swiper_prev"></div>
                <div class="swiper_next"></div>
				<div class="btn btn_grade btn_w280 btn_round"><a href="<?php echo esc_url(home_url('/')); ?>movie">⼀覧を⾒る</a></div>
		</section>
		<style>lite-youtube {
		position: absolute;
		top: 0;
		right: 0;
		width: 100% !important;
		height: 100% !important;
		z-index: 9;
		}</style>

		<section class="news_area">
				<div class="inner">
					<div class="news_title_area">
		              <h2 class="co_white en_serif">NEWS</h2>
						<div class="btn btn_gray btn_hv_black btn_w150 pc"><a href="<?php echo esc_url(home_url('/')); ?>news">⼀覧を⾒る</a></div>
					</div>
					<div class="txt_area">
								<dl>
							<?php query_posts( array( 'post_type' =>array('news'),'posts_per_page' => 4 )); ?>
		                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
									<dt class="fo14"><?php the_time('Y.m.d'); ?></dt>
									<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
							<?php endwhile; endif;wp_reset_query();?>
						</dl>
						<div class="btn btn_gray btn_hv_black btn_w150 sp"><a href="<?php echo esc_url(home_url('/')); ?>news">⼀覧を⾒る</a></div>
							</div>
				</div>
		</section>

<?php get_footer(); ?>
