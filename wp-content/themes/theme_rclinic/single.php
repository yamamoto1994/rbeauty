<?php get_header(); ?>
			<section class="menu">

				<?php $fv_ph = get_field('menu_fv_radio'); if ($fv_ph == '通常画像') :?>
				<div class="ph_ttl_area" style="background: url(<?php $menu_fv_ph = get_field('menu_fv_ph'); if( $menu_fv_ph ): ?><?php echo $menu_fv_ph; ?><?php endif; ?>) no-repeat right top / contain;">
					<div class="inner">
						<h1 class="title"><?php the_title(); ?></h1>
						<?php $menu_cach = get_field('menu_cach'); if( $menu_cach ): ?><p class="serif"><?php echo $menu_cach; ?></p><?php endif; ?>
					</div>
				</div>
				<?php elseif ($fv_ph == '特殊メインビジュアル') :?>
				<div class="ttl_area tokusyu">
					<div class="inner">
						<h1 class="title"><picture>
	          <?php if(is_single(array('978','3591','1040','593','5419','5608','5677','5834','5842','5850','5866'))): ?><source media="(max-width: 680px)" srcset="<?php echo get_template_directory_uri().'/images/menu/menu_fv_'.$post->post_name.'_sp.jpg'?>" alt="<?php the_title(); ?>"><?php else: ?><?php endif; ?>
	          <?php $menu_fv_ph_tokusyu = get_field('menu_fv_ph_tokusyu'); if( $menu_fv_ph_tokusyu ): ?><img src="<?php echo $menu_fv_ph_tokusyu; ?>" alt="<?php the_title(); ?>"><?php endif; ?></picture></h1>
					</div>
				</div>
				<?php else:?>
				<div class="ttl_area other_ttl_area bg_gray_white">
					<div class="inner">
						<h1 class="title"><?php the_title(); ?></h1>
						<?php $menu_cach = get_field('menu_cach'); if( $menu_cach ): ?><p class="serif"><?php echo $menu_cach; ?></p><?php endif; ?>
					</div>
				</div>
				<?php endif; ?>

	<div class="lo_nav_fixed_area js_accordion">
		<p class="sp nav_title btn btn_black btn_bottom js_accordion_openbar"><a>⽬ 次</a></p>
		<div class="lo_nav_fixed js_accordion_content">
<?php if( have_rows('menu_list_sec') ): ?>
	<?php while( have_rows('menu_list_sec') ): the_row();?>
<?php
    $cat = get_sub_field('menu_section_radio');
    if ($cat == '概要セクション') :?>
				<?php if( have_rows('menu_about_area') ): ?><?php while( have_rows('menu_about_area') ): the_row();?>
                  <?php $menu_gaiyo_no = get_sub_field('menu_gaiyo_no'); if( $menu_gaiyo_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_gaiyo_no; ?>"><?php $menu_gaiyo_name = get_sub_field('menu_gaiyo_name'); if( $menu_gaiyo_name ): ?><?php echo $menu_gaiyo_name; ?><?php else: ?>概要<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == '症例セクション') :?>
				<?php if( have_rows('menu_syorei_area') ): ?><?php while( have_rows('menu_syorei_area') ): the_row();?>
                  <?php $menu_syorei_no = get_sub_field('menu_syorei_no'); if( $menu_syorei_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_syorei_no; ?>"><?php $menu_syorei_name = get_sub_field('menu_syorei_name'); if( $menu_syorei_name ): ?><?php echo $menu_syorei_name; ?><?php else: ?>症例<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == '特徴・術式・メカニズムセクション') :?>
				<?php if( have_rows('menu_tokutyo_area') ): ?><?php while( have_rows('menu_tokutyo_area') ): the_row();?>
                  <?php $menu_tokutyo_no = get_sub_field('menu_tokutyo_no'); if( $menu_tokutyo_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_tokutyo_no; ?>"><?php $menu_tokutyo_name = get_sub_field('menu_tokutyo_name'); if( $menu_tokutyo_name ): ?><?php echo $menu_tokutyo_name; ?><?php else: ?>特徴<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == '動画セクション') :?>
				<?php if( have_rows('menu_movie') ): ?><?php while( have_rows('menu_movie') ): the_row();?>
                  <?php $menu_movie_no = get_sub_field('menu_movie_no'); if( $menu_movie_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_movie_no; ?>"><?php $menu_movie_name = get_sub_field('menu_movie_name'); if( $menu_movie_name ): ?><?php echo $menu_movie_name; ?><?php else: ?>動画<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == 'リストセクション') :?>
				<?php if( have_rows('menu_list_area') ): ?><?php while( have_rows('menu_list_area') ): the_row();?>
                  <?php $menu_list_no = get_sub_field('menu_list_no'); if( $menu_list_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_list_no; ?>"><?php $menu_list_name = get_sub_field('menu_list_name'); if( $menu_list_name ): ?><?php echo $menu_list_name; ?><?php else: ?>リスト<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == '詳細情報セクション') :?>
				<?php if( have_rows('menu_details_area') ): ?><?php while( have_rows('menu_details_area') ): the_row();?>
                  <?php $menu_details_no = get_sub_field('menu_details_no'); if( $menu_details_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_details_no; ?>"><?php $menu_details_name = get_sub_field('menu_details_name'); if( $menu_details_name ): ?><?php echo $menu_details_name; ?><?php else: ?>説明/ダウンタイム/リスク<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == 'Q&Aセクション') :?>
				<?php if( have_rows('menu_qa_area') ): ?><?php while( have_rows('menu_qa_area') ): the_row();?>
                  <?php $menu_qa_no = get_sub_field('menu_qa_no'); if( $menu_qa_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_qa_no; ?>"><?php $menu_qa_name = get_sub_field('menu_qa_name'); if( $menu_qa_name ): ?><?php echo $menu_qa_name; ?><?php else: ?>Q&A<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == 'ポイントセクション') :?>
				<?php if( have_rows('menu_point_area') ): ?><?php while( have_rows('menu_point_area') ): the_row();?>
                  <?php $menu_point_no = get_sub_field('menu_point_no'); if( $menu_point_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_point_no; ?>"><?php $menu_point_name = get_sub_field('menu_point_name'); if( $menu_point_name ): ?><?php echo $menu_point_name; ?><?php else: ?>ポイント<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == 'オプションセクション') :?>
				<?php if( have_rows('menu_option_area') ): ?><?php while( have_rows('menu_option_area') ): the_row();?>
                  <?php $menu_option_no = get_sub_field('menu_option_no'); if( $menu_option_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_option_no; ?>"><?php $menu_option_name = get_sub_field('menu_option_name'); if( $menu_option_name ): ?><?php echo $menu_option_name; ?><?php else: ?>オプション<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == '関連施術セクション') :?>
				<?php if( have_rows('menu_kanren_area') ): ?><?php while( have_rows('menu_kanren_area') ): the_row();?>
                  <?php $menu_kanren_no = get_sub_field('menu_kanren_no'); if( $menu_kanren_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_kanren_no; ?>"><?php $menu_kanren_name = get_sub_field('menu_kanren_name'); if( $menu_kanren_name ): ?><?php echo $menu_kanren_name; ?><?php else: ?>関連施術<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == '施術の流れセクション') :?>
				<?php if( have_rows('menu_flow_area') ): ?><?php while( have_rows('menu_flow_area') ): the_row();?>
                  <?php $menu_flow_no = get_sub_field('menu_flow_no'); if( $menu_flow_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_flow_no; ?>"><?php $menu_flow_name = get_sub_field('menu_flow_name'); if( $menu_flow_name ): ?><?php echo $menu_flow_name; ?><?php else: ?>施術の流れ<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>


<?php elseif ($cat == '料金セクション') :?>
				<?php if( have_rows('menu_price_area') ): ?><?php while( have_rows('menu_price_area') ): the_row();?>
                  <?php $menu_price_no = get_sub_field('menu_price_no'); if( $menu_price_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_price_no; ?>"><?php $menu_price_name = get_sub_field('menu_price_name'); if( $menu_price_name ): ?><?php echo $menu_price_name; ?><?php else: ?>料金<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == 'ドクターセクション') :?>
				<?php if( have_rows('menu_doctor') ): ?><?php while( have_rows('menu_doctor') ): the_row();?>
                  <?php $menu_doctor_no = get_sub_field('menu_doctor_no'); if( $menu_doctor_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_doctor_no; ?>"><?php $menu_doctor_name = get_sub_field('menu_doctor_name'); if( $menu_doctor_name ): ?><?php echo $menu_doctor_name; ?><?php else: ?>ドクター<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == 'フリー セクション（ID設定あり）') :?>
				<?php if( have_rows('menu_free02_area') ): ?><?php while( have_rows('menu_free02_area') ): the_row();?>
                  <?php $menu_free02_no = get_sub_field('menu_free02_no'); if( $menu_free02_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_free02_no; ?>"><?php $menu_free02_name = get_sub_field('menu_free02_name'); if( $menu_free02_name ): ?><?php echo $menu_free02_name; ?><?php else: ?>フリーセクション<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>

<?php elseif ($cat == 'こんな⽅におすすめセクション') :?>
				<?php if( have_rows('menu_osusume_area') ): ?><?php while( have_rows('menu_osusume_area') ): the_row();?>
                  <?php $menu_osusume_no = get_sub_field('menu_osusume_no'); if( $menu_osusume_no ): ?><div class="btn btn_black btn_bottom"><a href="#<?php echo $menu_osusume_no; ?>"><?php $menu_osusume_name = get_sub_field('menu_osusume_name'); if( $menu_osusume_name ): ?><?php echo $menu_osusume_name; ?><?php else: ?>おすすめ<?php endif; ?></a></div><?php endif; ?>
				<?php endwhile; endif; ?>


<?php endif; ?>

<?php endwhile; endif; ?>

	</div>
	</div>


<?php $cat = get_the_category();
	$cat = $cat[0];
    $cat_slug = $cat->slug;
    $parent = get_category($cat->category_parent);
	$parent_catname = $parent->slug;?>

<?php if( have_rows('menu_list_sec') ): ?>
	<?php while( have_rows('menu_list_sec') ): the_row();?>

			<?php
				$cat = get_sub_field('menu_section_radio');
				if ($cat == 'フリーセクション') :?>

				<?php $menu_free = get_sub_field('menu_free'); if( $menu_free ): ?>
					<section class="menu_free_area ">
						<?php echo $menu_free; ?>
					</section>
				<?php endif; ?>

<?php elseif ($cat == 'フリー セクション（ID設定あり）') :?>
				<?php if( have_rows('menu_free02_area') ): ?>
					<?php while( have_rows('menu_free02_area') ): the_row();?>
				<div id="<?php $menu_free02_no = get_sub_field('menu_free02_no'); if( $menu_free02_no ): ?><?php echo $menu_free02_no; ?><?php endif; ?>">
					<?php the_sub_field('menu_free02');?>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>

<?php elseif ($cat == '概要セクション') :?>
				<?php if( have_rows('menu_about_area') ): ?>
					<?php while( have_rows('menu_about_area') ): the_row();?>
					<section class="menu_about_area" id="<?php $menu_gaiyo_no = get_sub_field('menu_gaiyo_no'); if( $menu_gaiyo_no ): ?><?php echo $menu_gaiyo_no; ?><?php endif; ?>">
						<?php if( have_rows('menu_about') ): ?>
						<?php while( have_rows('menu_about') ): the_row();?>
						<div class="inner">

                            <div class="col__area col_2_area">
                                <?php $menu_about_txt = get_sub_field('menu_about_txt'); if( $menu_about_txt ): ?>
								<div class="txt">
								<h3 class="sub_title serif shadow_b deco deco04 deco0401"><?php $menu_about_title = get_sub_field('menu_about_title'); if( $menu_about_title ): ?><?php echo $menu_about_title; ?><?php endif; ?></h3>
								<?php echo $menu_about_txt; ?>
								</div>
								<?php endif; ?>
                                <?php $menu_about_ph = get_sub_field('menu_about_ph'); if( $menu_about_ph ): ?>
                                <div class="ph_contents"><img src="<?php echo $menu_about_ph; ?>" alt=""><?php $menu_about_caption = get_sub_field('menu_about_caption'); if( $menu_about_caption ): ?><p class="caption"><?php echo $menu_about_caption; ?></p><?php endif; ?></div>
                                <?php endif; ?>
                            </div>
                            <?php $menu_about_ph_b = get_sub_field('menu_about_ph_b'); if( $menu_about_ph_b ): ?>
                            <div class="ph_contents"><img src="<?php echo $menu_about_ph_b; ?>" alt=""><?php $menu_about_caption_b = get_sub_field('menu_about_caption_b'); if( $menu_about_caption_b ): ?><p class="caption"><?php echo $menu_about_caption_b; ?></p><?php endif; ?></div>
                            <?php endif; ?>
						</div>
						<?php endwhile; ?>
						<?php endif; ?>
					</section>
					<?php endwhile; ?>
				<?php endif; ?>



<?php elseif ($cat == '症例セクション') :?>
				<?php if( have_rows('menu_syorei_area') ): ?>
					<?php while( have_rows('menu_syorei_area') ): the_row();?>
				<section class="case_area menu_syorei_area ico" id="<?php $menu_syorei_no = get_sub_field('menu_syorei_no'); if( $menu_syorei_no ): ?><?php echo $menu_syorei_no; ?><?php endif; ?>">
					<div class="inner">
					<h2 class="sub_title">症例写真</h2>

					<?php $posts = get_sub_field('menu_syorei_list');
                            if( $posts ):?>
                                <ul>
                                <?php foreach( $posts as $val ): ?>
									<li class="case_hv">
                                        <a class="inline_contents" href="#case_contents<?php echo $val->ID; ?>" rel="case_modal"><?php $case_radio = get_field('case_radio', $val->ID); if ($case_radio == "画像"): ?><img src="<?php $case_ph = get_field('case_ph' , $val->ID); ?><?php echo $case_ph; ?>" alt=""><?php elseif ($case_radio == "動画"): ?>
      <video controls autoplay muted loop playsinline>
        <source src="<?php the_field('case_movie', $val->ID); ?>" type="video/mp4">
      </video><?php endif; ?></a><h3 class="ico_line_grade ico_line_t_grade"><?php echo get_the_title( $val->ID ); ?></h3>
									</li>
                                <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
						<?php $menu_syorei_url = get_sub_field('menu_syorei_url'); if( $menu_syorei_url ): ?><div class="btn btn_grade btn_w340"><a href="<?php echo $menu_syorei_url; ?>">更に症例を⾒る</a></div><?php endif; ?>
					</div>
				</section>


<div style="display: none;">
<?php $posts = get_sub_field('menu_syorei_list');
        if( $posts ):?><?php foreach( $posts as $val ): ?>
<section id="case_contents<?php echo $val->ID; ?>" class="modal_flex">
    <div class="ph">
	<?php $case_radio = get_field('case_radio', $val->ID); if ($case_radio == "画像"): ?><img src="<?php $case_ph = get_field('case_ph' , $val->ID); ?><?php echo $case_ph; ?>" alt=""><?php elseif ($case_radio == "動画"): ?>
      <video controls autoplay muted loop playsinline>
        <source src="<?php the_field('case_movie', $val->ID); ?>" type="video/mp4">
      </video><?php endif; ?>
	</div>
	<div class="modal_case_contents_area">
		<div class="modal_case_contents_inner">
          <div class="modal_case_title_area">
              <div class="icon"><img src="<?php $case_ico = get_field('case_ico' , $val->ID); ?><?php echo $case_ico; ?>" alt=""></div>
              <p class="clinic_name">R CLINIC</p>
			  <div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_instagram.svg" alt=""></div>
          </div>
          <h2 class="serif"><?php echo get_the_title( $val->ID ); ?></h2>
  <?php if( have_rows('case_block', $val->ID) ): ?>
          <?php while( have_rows('case_block', $val->ID) ): the_row();?>
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
			<div class="btn btn_gray btn_hv_black"><a href="<?php the_field('case_url', $val->ID); ?>">この症例の施術を⾒る</a></div>
			<div class="btn btn_bg_black btn_hv_black btn_hv_white"><a href="<?php echo esc_url(home_url('/')); ?>reserve" target="_blank">予約する</a></div>
		</div>
	</div>
</section>
<?php endforeach; ?><?php endif; ?>
</div>

				<?php endwhile; ?>
				<?php endif; ?>

<?php elseif ($cat == 'SNSバナーセクション') :?>

				<?php if(have_rows('menu_sns_block')): ?>
				<section class="menu_sns_area ico">
                        <div class="inner">
							<ul class="">
				<?php while( have_rows('menu_sns_block') ): the_row();?>
								<li><div class="btn btn_grade btn_w340 btn_sns"><a href="<?php $menu_sns_url = get_sub_field('menu_sns_url'); if( $menu_sns_url ): ?><?php echo $menu_sns_url; ?><?php endif; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_instagram.svg" alt="instagram"><?php $menu_sns_title = get_sub_field('menu_sns_title'); if( $menu_sns_title ): ?><?php echo $menu_sns_title; ?><?php endif; ?></a></div></li>
				<?php endwhile; ?>
						</ul>
					 </div>
				 </section>
				<?php endif; ?>

<?php elseif ($cat == 'ポイントセクション') :?>

				<?php if(have_rows('menu_point_area')): ?>
				<?php while( have_rows('menu_point_area') ): the_row();?>
				<section class="menu_point_area ico" id="<?php $menu_point_no = get_sub_field('menu_point_no'); if( $menu_point_no ): ?><?php echo $menu_point_no; ?><?php endif; ?>">
                        <div class="inner">
				<?php $menu_point_title = get_sub_field('menu_point_title'); if( $menu_point_title ): ?><h2 class="sub_title ico_logo-r ico_logo-r_b"><?php echo $menu_point_title; ?></h2><?php endif; ?>

                    <?php if(have_rows('menu_point_block')): ?>
                         <?php while(have_rows('menu_point_block')): the_row(); ?>
                            <div class="menu_point_contents">
								<?php $menu_point_subtitle = get_sub_field('menu_point_subtitle'); if( $menu_point_subtitle ): ?><h3><?php echo $menu_point_subtitle; ?></h3><?php endif; ?>
                                <?php $menu_point_txt = get_sub_field('menu_point_txt'); if( $menu_point_txt ): ?><p><?php echo $menu_point_txt; ?></p><?php endif; ?>
                            </div>
					    <?php endwhile; ?>
                    <?php endif; ?>
					 </div>
				 </section>
				<?php endwhile; ?>
				<?php endif; ?>


<?php elseif ($cat == 'こんな⽅におすすめセクション') :?>

				<?php if(have_rows('menu_osusume_area')): ?>
				<?php while( have_rows('menu_osusume_area') ): the_row();?>
                    <section class="menu_osusume_area bg_pink_yellow ico" id="<?php $menu_osusume_no = get_sub_field('menu_osusume_no'); if( $menu_osusume_no ): ?><?php echo $menu_osusume_no; ?><?php endif; ?>">
                        <div class="inner">
                      <?php $menu_osusume_title = get_sub_field('menu_osusume_title'); if( $menu_osusume_title ): ?><h2 class="sub_title ico_logo-r ico_logo-r_w"><?php echo $menu_osusume_title; ?></h2><?php endif; ?>
                          <?php if(have_rows('menu_osusume_block')): ?>
                            <div class="menu_osusume_contents">
                                <?php while(have_rows('menu_osusume_block')): the_row(); ?>
                                    <?php $menu_osusume = get_sub_field('menu_osusume'); if( $menu_osusume ): ?><p><?php echo $menu_osusume; ?></p><?php endif; ?>
                                <?php endwhile; ?>
                            </div>
                          <?php endif; ?>
                        </div>
                    </section>
				<?php endwhile; ?>
				<?php endif; ?>


<?php elseif ($cat == '動画セクション') :?>

                  <?php if(have_rows('menu_movie')): ?>
                      <?php while(have_rows('menu_movie')): the_row(); ?>
				<section class="menu_movie_area ico" id="<?php $menu_movie_no = get_sub_field('menu_movie_no'); if( $menu_movie_no ): ?><?php echo $menu_movie_no; ?><?php endif; ?>">
					<div class="inner">
						<?php $menu_movie_title = get_sub_field('menu_movie_title'); if( $menu_movie_title ): ?><h3 class="sub_title"><?php echo $menu_movie_title; ?></h3><?php endif; ?>
						<div class="menu_movie_contents">
							<?php $menu_movie_id = get_sub_field('menu_movie_id'); if( $menu_movie_id ): ?>
							<iframe src="https://www.youtube.com/embed/<?php echo $menu_movie_id; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							<?php endif; ?>
						</div>
						<?php $menu_movie_txt = get_sub_field('menu_movie_txt'); if( $menu_movie_txt ): ?><p><?php echo $menu_movie_txt; ?></p><?php endif; ?>
					</div>
				</section>
				<?php endwhile; ?>
							<?php endif; ?>



<?php elseif ($cat == '特徴・術式・メカニズムセクション') :?>

						<?php if(have_rows('menu_tokutyo_area')): ?>
							<?php while(have_rows('menu_tokutyo_area')): the_row(); ?>

				<section class="menu_fature_area ico" id="<?php $menu_tokutyo_no = get_sub_field('menu_tokutyo_no'); if( $menu_tokutyo_no ): ?><?php echo $menu_tokutyo_no; ?><?php endif; ?>">
					<div class="inner">
						<?php $menu_tokutyo_title = get_sub_field('menu_tokutyo_title'); if( $menu_tokutyo_title ): ?><h2 class="sub_title"><?php echo $menu_tokutyo_title; ?></h2><?php endif; ?>

						<?php if(have_rows('menu_tokutyo_block')): ?>
							<?php while(have_rows('menu_tokutyo_block')): the_row(); ?>

						<?php $menu_tokutyo_subtitle = get_sub_field('menu_tokutyo_subtitle'); if( $menu_tokutyo_subtitle ): ?><h3 class="ico ico_logo-r ico_logo-r_b"><?php echo $menu_tokutyo_subtitle; ?></h3><?php endif; ?>
						<?php if(have_rows('menu_tokutyo_contents')): ?>
							<?php while(have_rows('menu_tokutyo_contents')): the_row(); ?>

							<?php if( get_sub_field('menu_tokutyo_radio') == "右"): ?>
						<div class="col__area col_2_area">
							<div class="col_2_contents">
								<h4><?php the_sub_field('menu_tokutyo_subtitle'); ?></h4>
								<?php the_sub_field('menu_tokutyo_txt'); ?>
							</div>
							<div class="ph_contents"><img src="<?php the_sub_field('menu_tokutyo_ph01'); ?>" alt="<?php the_sub_field('menu_tokutyo_caption01'); ?>"><p class="caption"><?php the_sub_field('menu_tokutyo_caption01'); ?></p></div>
						</div>
							<?php elseif( get_sub_field('menu_tokutyo_radio') == "下"): ?>
						<div class="col__area col_1_area">
							<div class="col_1_contents">
								<h4><?php the_sub_field('menu_tokutyo_subtitle'); ?></h4>
								<?php the_sub_field('menu_tokutyo_txt'); ?>
							</div>
							<div class="ph_contents ph_contents2">
								<?php $menu_tokutyo_ph02 = get_sub_field('menu_tokutyo_ph02'); if( $menu_tokutyo_ph02 ): ?>
								<div class="ph"><img src="<?php the_sub_field('menu_tokutyo_ph01'); ?>" alt="<?php the_sub_field('menu_tokutyo_caption01'); ?>"><p class="caption"><?php the_sub_field('menu_tokutyo_caption01'); ?></p></div>
								<div class="ph"><img src="<?php echo $menu_tokutyo_ph02; ?>" alt="<?php the_sub_field('menu_tokutyo_caption02'); ?>"><p class="caption"><?php the_sub_field('menu_tokutyo_caption02'); ?></p></div>
								<?php else: ?>
								<div class="ph w80"><img src="<?php the_sub_field('menu_tokutyo_ph01'); ?>" alt="<?php the_sub_field('menu_tokutyo_caption01'); ?>"><p class="caption"><?php the_sub_field('menu_tokutyo_caption01'); ?></p></div>
								<?php endif; ?>
							</div>
						</div>
							<?php elseif( get_sub_field('menu_tokutyo_radio') == "なし"): ?>
						<div class="col__area col_1_area">
							<div class="col_1_contents">
								<h4><?php the_sub_field('menu_tokutyo_subtitle'); ?></h4>
								<?php the_sub_field('menu_tokutyo_txt'); ?>
							</div>
						</div>
							<?php elseif( get_sub_field('menu_tokutyo_radio') == "動画"): ?>
						<div class="col__area col_1_area">
							<div class="col_1_contents">
								<h4><?php the_sub_field('menu_tokutyo_subtitle'); ?></h4>
								<?php the_sub_field('menu_tokutyo_txt'); ?>
							</div>
							<div class="ph_contents ph_contents2">
								<?php $menu_tokutyo_movie = get_sub_field('menu_tokutyo_movie'); if( $menu_tokutyo_movie ): ?>
								<div class="ph w80">
								　<video controls autoplay muted loop playsinline>
                                    <source src="<?php echo $menu_tokutyo_movie; ?>" type="video/mp4">
                                  </video>
								</div>
								<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>

							<?php endwhile; ?>
							<?php endif; ?>

					<?php endwhile; ?>
							<?php endif; ?>
					</div>
				</section>

							<?php endwhile; ?>
							<?php endif; ?>



<?php elseif ($cat == 'リストセクション') :?>


				<?php if(have_rows('menu_list_area')): ?>
							<?php while(have_rows('menu_list_area')): the_row(); ?>
				<section class="menu_seizai_area ico" id="<?php $menu_list_no = get_sub_field('menu_list_no'); if( $menu_list_no ): ?><?php echo $menu_list_no; ?><?php endif; ?>">
					<div class="inner">
						<?php $menu_list_title = get_sub_field('menu_list_title');if( $menu_list_title ): ?><h2 class="sub_title"><?php echo $menu_list_title; ?></h2><?php endif; ?>
						<?php $menu_list_cach = get_sub_field('menu_list_cach');if( $menu_list_cach ): ?><p><?php echo $menu_list_cach; ?></p><?php endif; ?>


						<div class="col__area col_3_area">
							<?php if(have_rows('menu_list_block')): ?>
							<?php while(have_rows('menu_list_block')): the_row(); ?>
							<div class="col_3_contents_area">
								<?php $menu_list_url = get_sub_field('menu_list_url'); if( $menu_list_url ): ?>
								<a href="<?php echo $menu_list_url; ?>"><?php endif; ?>
								<h3><?php the_sub_field('menu_list_subtitle'); ?></h3>
								<?php $menu_list_ph = get_sub_field('menu_list_ph');if( $menu_list_ph ): ?>
								<div class="ph_contents"><img src="<?php echo $menu_list_ph; ?>" alt=""></div>
								<?php endif; ?>

								<div class="col_3_contents">

									<p><?php the_sub_field('menu_list_txt'); ?></p>
								</div>
								<?php $menu_list_url = get_sub_field('menu_list_url'); if( $menu_list_url ): ?></a><?php endif; ?>
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</section>
				<?php endwhile; ?>
				<?php endif; ?>


<?php elseif ($cat == '詳細情報セクション') :?>

				<?php if(have_rows('menu_details_area')): ?>
							<?php while(have_rows('menu_details_area')): the_row(); ?>

				<section class="menu_details_area bg_pink_yellow ico" id="<?php $menu_details_no = get_sub_field('menu_details_no'); if( $menu_details_no ): ?><?php echo $menu_details_no; ?><?php endif; ?>">
					<div class="inner">
						<h2 class="sub_title">説明／ダウンタイム／リスク</h2>
						<dl class="flex_list_box list__box">
							<?php if(have_rows('menu_details_block')): ?>
							<?php while(have_rows('menu_details_block')): the_row(); ?>
							<?php $menu_details_title = get_sub_field('menu_details_title'); if( $menu_details_title ): ?>
							<dt class="menu_details_title"><?php echo $menu_details_title; ?></dt>
							<dd><?php the_sub_field('menu_details_txt'); ?></dd>
							<?php endif; ?>
							<?php endwhile; ?>
							<?php endif; ?>
						</dl>
					</div>
				</section>
				<?php endwhile; ?>
				<?php endif; ?>




<?php elseif ($cat == 'オプションセクション') :?>

				<?php if(have_rows('menu_option_area')): ?>
							<?php while(have_rows('menu_option_area')): the_row(); ?>

				<section class="menu_option_area ico" id="<?php $menu_option_no = get_sub_field('menu_option_no'); if( $menu_option_no ): ?><?php echo $menu_option_no; ?><?php endif; ?>">
					<div class="inner">
						<h2 class="sub_title"><?php $menu_option_title = get_sub_field('menu_option_title'); if( $menu_option_title ): ?><?php echo $menu_option_title; ?><?php endif; ?></h2>
							<?php if(have_rows('menu_option_block')): ?>
							<?php while(have_rows('menu_option_block')): the_row(); ?>
						<div class="menu_option_contents_area">
								<a href="<?php $menu_option_bnr_url = get_sub_field('menu_option_bnr_url'); if( $menu_option_bnr_url ): ?><?php echo $menu_option_bnr_url; ?><?php endif; ?>">
									<div class="menu_option_contents">
                                        <div class="txt_area">
                                            <?php $menu_option_bnr_title = get_sub_field('menu_option_bnr_title'); if( $menu_option_bnr_title ): ?><h3><?php echo $menu_option_bnr_title; ?></h3><?php endif; ?>
                                            <?php $menu_option_bnr_txt = get_sub_field('menu_option_bnr_txt'); if( $menu_option_bnr_txt ): ?><p><?php echo $menu_option_bnr_txt; ?></p><?php endif; ?>
                                        </div>
                                        <?php $menu_option_bnr_ph = get_sub_field('menu_option_bnr_ph'); if( $menu_option_bnr_ph ): ?><div class="ph"><img src="<?php echo $menu_option_bnr_ph; ?>" alt=""></div><?php endif; ?>
									</div>
								</a>
							<?php $menu_option_bnr_aside = get_sub_field('menu_option_bnr_aside'); if( $menu_option_bnr_aside ): ?><p><?php echo $menu_option_bnr_aside; ?></p><?php endif; ?>
						</div>
							<?php endwhile; ?>
							<?php endif; ?>
					</div>
				</section>
				<?php endwhile; ?>
				<?php endif; ?>



<?php elseif ($cat == '関連施術セクション') :?>

				<?php if(have_rows('menu_kanren_area')): ?>
							<?php while(have_rows('menu_kanren_area')): the_row(); ?>

				<section class="menu_kanren_area ico" id="<?php $menu_kanren_no = get_sub_field('menu_kanren_no'); if( $menu_kanren_no ): ?><?php echo $menu_kanren_no; ?><?php endif; ?>">
					<div class="inner">
						<h2 class="sub_title"><?php $menu_kanren_title = get_sub_field('menu_kanren_title'); if( $menu_kanren_title ): ?><?php echo $menu_kanren_title; ?><?php endif; ?></h2>
							<?php if(have_rows('menu_kanren_block')): ?>
							<?php while(have_rows('menu_kanren_block')): the_row(); ?>
						<div class="menu_kanren_contents_area">
                           <?php $menu_kanren_subtitle = get_sub_field('menu_kanren_subtitle'); if( $menu_kanren_subtitle ): ?><h3><?php echo $menu_kanren_subtitle; ?></h3><?php endif; ?>
                          <div class="menu_kanren_contents">
                              <?php $menu_kanren_ph = get_sub_field('menu_kanren_ph'); if( $menu_kanren_ph ): ?><div class="ph"><img src="<?php echo $menu_kanren_ph; ?>" alt=""></div><?php endif; ?>
                              <div class="txt_area">
                                  <?php $menu_kanren_txt = get_sub_field('menu_kanren_txt'); if( $menu_kanren_txt ): ?><p><?php echo $menu_kanren_txt; ?></p><?php endif; ?>

                              </div>
                          </div>
							 <?php if(have_rows('menu_kanren_btn')): ?>
							<div class="btn_area btn_flex_area">
							<?php while(have_rows('menu_kanren_btn')): the_row(); ?>
							   <?php $menu_kanren_btn_url = get_sub_field('menu_kanren_btn_url'); if( $menu_kanren_btn_url ): ?><div class="btn btn_w32p btn_gray btn_hv_black"><a href="<?php echo $menu_kanren_btn_url; ?>"><?php $menu_kanren_btn_name = get_sub_field('menu_kanren_btn_name'); if( $menu_kanren_btn_name ): ?><?php echo $menu_kanren_btn_name; ?><?php endif; ?></a></div><?php endif; ?>
							<?php endwhile; ?>
							</div>
							<?php endif; ?>
						</div>
							<?php endwhile; ?>
							<?php endif; ?>
					</div>
				</section>
				<?php endwhile; ?>
				<?php endif; ?>


<?php elseif ($cat == '施術の流れセクション') :?>

				<?php if(have_rows('menu_flow_area')): ?>
							<?php while(have_rows('menu_flow_area')): the_row(); ?>

				<section class="menu_flow_area ico" id="<?php $menu_flow_no = get_sub_field('menu_flow_no'); if( $menu_flow_no ): ?><?php echo $menu_flow_no; ?><?php endif; ?>">
					<div class="inner">
						<h2 class="sub_title">施術の流れ</h2>

						<div class="col__area col_3_area">
							<?php if(have_rows('menu_flow_block')): ?>
							<?php $i = 1; ?>
							<?php while(have_rows('menu_flow_block')): the_row(); ?>
							<div class="col_3_contents_area step_area">
								<p class="en_serif step_no"><span>STEP</span> <?php echo $i; $i++; ?></p>
								 <?php $menu_flow_ph = get_sub_field('menu_flow_ph'); if( $menu_flow_ph ): ?><div class="ph_contents"><img src="<?php echo $menu_flow_ph; ?>" alt=""></div><?php endif; ?>
								<div class="col_3_contents">
									<?php $menu_flow_txt = get_sub_field('menu_flow_txt'); if( $menu_flow_txt ): ?><p><?php echo $menu_flow_txt; ?></p><?php endif; ?>
								</div>
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div>

					</div>
				</section>
				<?php endwhile; ?>
				<?php endif; ?>


<?php elseif ($cat == 'Q&Aセクション') :?>

				<?php if(have_rows('menu_qa_area')): ?>
							<?php while(have_rows('menu_qa_area')): the_row(); ?>

				<section class="menu_qa_area ico" id="<?php $menu_qa_no = get_sub_field('menu_qa_no'); if( $menu_qa_no ): ?><?php echo $menu_qa_no; ?><?php endif; ?>">
					<div class="inner">
						<h2 class="sub_title">よくあるご質問</h2>
						<dl class="list__box js_accordion">
							<?php if(have_rows('menu_qa_block')): ?>
							<?php while(have_rows('menu_qa_block')): the_row(); ?>
							<?php $menu_qa_title = get_sub_field('menu_qa_title'); if( $menu_qa_title ): ?>
							<dt class="menu_qa_title js_accordion_openbar"><span class="ico en_serif">Q</span><?php echo $menu_qa_title; ?></dt>
							<dd class="js_accordion_content"><span class="ico en_serif">A</span><?php the_sub_field('menu_qa_txt'); ?></dd>
							<?php endif; ?>
							<?php endwhile; ?>
							<?php endif; ?>
						</dl>
					</div>
				</section>
				<?php endwhile; ?>
				<?php endif; ?>



<?php elseif ($cat == '料金セクション') :?>
				<?php if(have_rows('menu_price_area')): ?>
							<?php while(have_rows('menu_price_area')): the_row(); ?>

				<section class="menu_price_area ico" id="<?php $menu_price_no = get_sub_field('menu_price_no'); if( $menu_price_no ): ?><?php echo $menu_price_no; ?><?php endif; ?>">

                <?php if(have_rows('menu_price_block')): ?>
                          <?php while(have_rows('menu_price_block')): the_row(); ?>

                          <div class="inner post_<?php echo get_the_ID(); ?>" id="post_<?php echo get_the_ID(); ?>">
                              <div class="menu_list_title">
                               <?php if( get_sub_field('menu_price_h3')): ?><h3><?php the_sub_field('menu_price_h3'); ?><span></span></h3><?php endif; ?>
                              </div>

                                  <div class="">
                                      <?php if( get_sub_field('menu_price_tyui')): ?><div class="price_note_box"><p><?php the_sub_field('menu_price_tyui'); ?></p></div><?php endif; ?>

                                <?php if(have_rows('menu_price_list_block')): ?>
                                      <?php while(have_rows('menu_price_list_block')): the_row(); ?>
                                      <?php if( get_sub_field('menu_price_title')): ?><h4><?php the_sub_field('menu_price_title'); ?></h4><?php endif; ?>
                                      <?php if(have_rows('menu_price_list')): ?>
                                      <?php while(have_rows('menu_price_list')): the_row(); ?>
                                      <dl class="flex_list_box list__box">
                                          <dt><?php the_sub_field('menu_price_subtitle'); ?></dt>
                                          <dd><?php the_sub_field('menu_price_tani'); ?></dd>
                                          <dd class="price_area"><?php the_sub_field('menu_price_price'); ?></dd>
                                      </dl>
                                      <?php if( get_sub_field('menu_price_aside')): ?><p class="aside"><?php the_sub_field('menu_price_aside'); ?></p><?php endif; ?>
                                      <?php endwhile; ?>
                                      <?php endif; ?>
                                      <?php endwhile; endif; ?>

                                  </div>
                          </div>

				</section>
              <?php endwhile; endif; ?>

			<?php endwhile; endif; ?>



<?php elseif ($cat == 'ドクターセクション') :?>

				<?php if(have_rows('menu_doctor')): ?>
							<?php while(have_rows('menu_doctor')): the_row(); ?>

				<section class="menu_doctor_area" id="<?php $menu_doctor_no = get_sub_field('menu_doctor_no'); if( $menu_doctor_no ): ?><?php echo $menu_doctor_no; ?><?php endif; ?>">
					<div class="inner">
						<div class="col__area col_2_area">
							<?php $menu_doctor_txt = get_sub_field('menu_doctor_txt'); if( $menu_doctor_txt ): ?><p><?php echo $menu_doctor_txt; ?></p><?php endif; ?>
							<?php $menu_doctor_ph = get_sub_field('menu_doctor_ph'); if( $menu_doctor_ph ): ?><div class="ph"><img src="<?php echo $menu_doctor_ph; ?>" alt=""></div><?php endif; ?>
						</div>
                            <?php if(have_rows('menu_doctor_point')): ?>
						<div class="doctor_point_area">
							 <?php while(have_rows('menu_doctor_point')): the_row(); ?>
							<div class="doctor_point">
							<?php $menu_doctor_point_title = get_sub_field('menu_doctor_point_title'); if( $menu_doctor_point_title ): ?><h3><?php echo $menu_doctor_point_title; ?></h3><?php endif; ?>
							<?php $menu_doctor_point_txt = get_sub_field('menu_doctor_point_txt'); if( $menu_doctor_point_txt ): ?><p><?php echo $menu_doctor_point_txt; ?></p><?php endif; ?>
							</div>
							<?php endwhile; ?>
						</div>
                            <?php endif; ?>

					</div>
				</section>
				<?php endwhile; ?>
				<?php endif; ?>


<?php endif; ?>


<?php endwhile; endif; ?><!--menu_list_sec-->


<?php get_footer(); ?>
