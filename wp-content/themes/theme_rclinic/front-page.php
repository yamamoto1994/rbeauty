<?php get_header(); ?>


			<section class="fv">
				<div class="fv_slide_area">
                  <div class="swiper-wrapper">

					<?php if( have_rows('top_fv_slide') ): ?>
					  <?php $i = 1; ?>
					<?php while( have_rows('top_fv_slide') ): the_row();?>
					  <div class="swiper-slide fv_slide<?php $suji = $i; $i++; echo printf("%02d ", $suji); ?> shadow"><?php $top_slide_url = get_sub_field('top_slide_url'); if( $top_slide_url ): ?><a href="<?php echo apply_filters('the_content', $top_slide_url); ?>"<?php if( get_sub_field('top_slide_radio') == "はい"): ?> target="_blank"<?php else: ?><?php endif; ?>><?php endif; ?><?php $top_slide_ph = get_sub_field('top_slide_ph'); if( $top_slide_ph ): ?><figure><img class="pc" src="<?php echo $top_slide_ph; ?>" alt="" loading="lazy"></figure><?php endif; ?><?php $top_slide_ph_sp = get_sub_field('top_slide_ph_sp'); if( $top_slide_ph_sp ): ?><figure><img class="sp" src="<?php echo $top_slide_ph_sp; ?>" alt="" loading="lazy"></figure><?php endif; ?><?php $top_slide_txt = get_sub_field('top_slide_txt'); if( $top_slide_txt ): ?><h2 class="pc" data-swiper-parallax="300" data-swiper-parallax-duration="800" data-swiper-parallax-opacity="0"><img src="<?php echo $top_slide_txt; ?>" alt="" loading="lazy"></h2><?php endif; ?><?php $top_slide_txt_sp = get_sub_field('top_slide_txt_sp'); if( $top_slide_txt_sp ): ?><h2 class="sp" data-swiper-parallax="300" data-swiper-parallax-duration="800" data-swiper-parallax-opacity="0"><img src="<?php echo $top_slide_txt_sp; ?>" alt="" loading="lazy"></h2><?php endif; ?><?php $top_slide_url = get_sub_field('top_slide_url'); if( $top_slide_url ): ?></a><?php endif; ?></div>
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

<?php if(have_rows('top_fv_shita_big')): ?>
<?php while(have_rows('top_fv_shita_big')): the_row(); ?>
<li class="banner_big">
	<?php $top_fv_shita_link = get_sub_field('top_fv_shita_link'); if( $top_fv_shita_link ): ?>
		<a href="<?php echo $top_fv_shita_link; ?>" class="big_banner_nagoya" >
	<?php endif; ?>
			<?php $top_fv_shita_ph = get_sub_field('top_fv_shita_ph'); if( $top_fv_shita_ph ): ?>
				<img src="<?php echo $top_fv_shita_ph; ?>" alt="" class="pc" loading="lazy">
			<?php endif; ?>
			<?php $top_fv_shita_ph_sp = get_sub_field('top_fv_shita_ph_sp'); if( $top_fv_shita_ph_sp ): ?>
				<img src="<?php echo $top_fv_shita_ph_sp; ?>" alt="" class="sp" loading="lazy">
			<?php endif; ?>
			<?php $top_fv_shita_link = get_sub_field('top_fv_shita_link'); if( $top_fv_shita_link ): ?>
		</a>
	<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
</li>

<?php if(have_rows('top_fv_shita')): ?>
<?php while(have_rows('top_fv_shita')): the_row(); ?>
<li>
	<?php $top_fv_shita_link = get_sub_field('top_fv_shita_link'); if( $top_fv_shita_link ): ?>
		<a href="<?php echo $top_fv_shita_link; ?>" >
	<?php endif; ?>
			<?php $top_fv_shita_ph = get_sub_field('top_fv_shita_ph'); if( $top_fv_shita_ph ): ?>
				<img src="<?php echo $top_fv_shita_ph; ?>" alt="">
			<?php endif; ?>
			<?php $top_fv_shita_link = get_sub_field('top_fv_shita_link'); if( $top_fv_shita_link ): ?>
		</a>
	<?php endif; ?>
</li>
<?php endwhile; ?>
<?php endif; ?>
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

.pickup .banner_big {
	width: 100%;
}

@media screen and (max-width: 767px) {
	.pickup li{
		width:100%;
		margin-bottom: 15px;
}
}
</style>

<?php $top_banner_slide = get_field('top_banner_slide'); if( $top_banner_slide ){ echo $top_banner_slide; }?>

<section class="banner_area">
<h2 class="serif logo_title">キャンペーン情報</h2>
<div class="banner_list_area">
<div class="swiper-wrapper">
	<?php if(have_rows('top_cp_slide')): ?>
		<?php $i = 1; ?>
	<?php while(have_rows('top_cp_slide')): the_row(); ?>
<div class="swiper-slide cp_slide<?php $suji = $i; $i++; echo printf("%02d ", $suji); ?> ">
	<?php $top_cp_link = get_sub_field('top_cp_link'); if( $top_cp_link ): ?>
	<a href="<?php echo $top_cp_link; ?>" ><?php endif; ?>
	<?php $top_cp_ph = get_sub_field('top_cp_ph'); if( $top_cp_ph ): ?>
	<img src="<?php echo $top_cp_ph; ?>" alt="" loading="lazy"><?php endif; ?><?php $top_cp_link = get_sub_field('top_cp_link'); if( $top_cp_link ): ?></a><?php endif; ?></div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>
</section>



</section>
</section>

				<section class="instagrammer_area">
					<p class="txt en_serif">Thank you for</p>
					<div class="slide_area instagrammer_slide_area">
	                  <!-- <div class="swiper-wrapper loop">
	                    <?php //query_posts( array( 'post_type' =>array('case_instagrammer'),'posts_per_page' => -1 )); ?>
	                    <?php //if (have_posts()) : while(have_posts()) : the_post(); ?>
	                      <div class="swiper-slide case_hv"><a class="inline_contents" href="#case_insta_contents<?php //echo get_the_ID(); ?>" rel="case_insta_modal">
	                          <?php //$case_insta_radio = get_field('case_insta_radio'); if ($case_insta_radio == "画像"): ?><img src="<?php //$case_insta_ph = get_field('case_insta_ph'); ?><?php //echo $case_insta_ph; ?>" alt="" loading="lazy"><?php //elseif ($case_insta_radio == "動画"): ?>
								  <video controls autoplay muted loop playsinline>
	                                    <source src="<?php //the_field('case_insta_movie'); ?>" type="video/mp4">
	                                  </video><?php //endif; ?>
							  </a>
							  <p><?php //$case_insta_name = get_field('case_insta_name'); ?><?php //echo $case_insta_name; ?></p>
	                      </div>
	                    <?php //endwhile; endif;wp_reset_query();?>
	                  </div> -->

					<!-- 20220426差し替え -->
						<img src="<?php echo get_template_directory_uri(); ?>/images/top/instagrmer_collection2.png" class="model_lib" loading="lazy" width="1792px" height="296.5px">
						<div class="btn btn_grade btn_w340 btn_insta">
							<a href="<?php echo esc_url(home_url('/')); ?>case_instagrammer" rel="noopener">モデルライブラリー</a>
						</div>
					</div>
				</section>


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
      <p class="sp"><?php $top_trouble_face = get_sub_field('top_trouble_face'); if( $top_trouble_face ): ?><?php echo $top_trouble_face; ?><?php endif; ?></p>
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
      <p class="sp"><?php $top_trouble_body = get_sub_field('top_trouble_body'); if( $top_trouble_body ): ?><?php echo $top_trouble_body; ?><?php endif; ?></p>
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
      <p class="sp"><?php $top_trouble_skin = get_sub_field('top_trouble_skin'); if( $top_trouble_skin ): ?><?php echo $top_trouble_skin; ?><?php endif; ?></p>
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

<?php //include("tpl/top-menu.php"); ?>



				<style>
					.model_lib{
						height: auto;
    					max-width: 100%;
					}
					@media screen and (max-width: 767px) {
						.model_lib {
							max-width: none;
							width: 1700px;
							margin-bottom: 15px;
							animation-name: left_insta;
							animation-duration: 90s;
							animation-iteration-count: infinite;
							animation-timing-function: linear;
						}
						.btn_insta {
							width: 80%;
						}
						@keyframes left_insta {
							0%{
								transform: translateX(-10px)
							}
							100%{
								transform: translateX(-1350px)
							}
						}
					}
				</style>


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
				              <div class="icon"><?php $case_ico = get_field('case_ico'); if( $case_ico ): ?><img src="<?php echo $case_ico; ?>" alt="" loading="lazy"><?php else:?><img src="<?php echo get_template_directory_uri(); ?>/images/trouble/cate_fce_hutae.jpg" alt="" loading="lazy"><?php endif; ?></div>
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



		<!-- <section class="movie_area">
			<div class="basic_list_title_area">
                     <h2 class="basic_list_title"><span class="en_serif en_title">Movie</span><span class="serif jp_title">動画一覧</span></h2>
                  </div>
                    <div id="movie">
                       <div class="swiper-wrapper">
 <?php //query_posts( array( 'post_type' =>array('movie'),'posts_per_page' => 6 )); ?>
                    <?php //if (have_posts()) : while(have_posts()) : the_post(); ?>
                          <div class="swiper-slide"><div class="movie"><lite-youtube videoid="<?php //$movie_id = get_field('movie_id'); if( $movie_id ): ?><?php //echo $movie_id; ?><?php //endif; ?>" playlabel="Play" style="background-image: url('https://i.ytimg.com/vi/<?php //$movie_id = get_field('movie_id'); if( $movie_id ): ?><?php //echo $movie_id; ?><?php //endif; ?>/maxresdefault.jpg');"></lite-youtube></div></div>
<?php //endwhile; endif;wp_reset_query();?>
                        </div>
                    </div>
                <div class="swiper_prev"></div>
                <div class="swiper_next"></div>
				<div class="btn btn_grade btn_w280 btn_round"><a href="<?php //echo esc_url(home_url('/')); ?>movie">⼀覧を⾒る</a></div>
		</section> -->


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
