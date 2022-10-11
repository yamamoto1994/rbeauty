<?php get_header(); ?>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script type='text/javascript' src='http://code.jquery.com/jquery-migrate-1.4.1.js'></script>
<script type='text/javascript' src='/clinic/wp-content/plugins/search-filter-pro/public/assets/js/search-filter-build.min.js?ver=2.4.6'></script>
<script type='text/javascript' src='/clinic/wp-content/plugins/search-filter-pro/public/assets/js/select2.min.js?ver=2.4.6'></script>

			<section class="case">
				<div class="other_ttl_area bg_dark">
					<div class="inner">
						<h1 class="serif title">症例実績</h1>
						<p class="en_serif">Case</p>
					</div>
				</div>
				<section class="case_area">
                          <div class="lo_search_area">
                              <?php echo do_shortcode( '[searchandfilter id="559"]' ); ?>
                          </div>
					
					
					<div class="case_details_list_area">
						<div class="inner">
							<h3><?php the_title(); ?><span><?php the_field('case_age'); ?><?php the_field('case_sex'); ?></span></h3>
							<div class="cate_title_area"><p><?php echo get_the_term_list($post->ID, 'case_cate'); ?></p></div>
							<?php if(have_rows('case_ba')): ?>
							<?php while(have_rows('case_ba')): the_row(); ?>
							<div class="case_before_after_area">
                                <h4><?php $case_ba_title = get_sub_field('case_ba_title'); if( $case_ba_title ): ?><?php echo $case_ba_title; ?><?php endif; ?></h4>
                                <ul class="col_2_area case_before_after">
                                    <li><img src="<?php $case_before_ph = get_sub_field('case_before_ph'); if( $case_before_ph ): ?><?php echo $case_before_ph; ?><?php endif; ?>" alt=""><p>Before</p></li>
                                    <li><img src="<?php $case_after_ph = get_sub_field('case_after_ph'); if( $case_after_ph ): ?><?php echo $case_after_ph; ?><?php endif; ?>" alt=""><p><?php $case_after_txt = get_sub_field('case_after_txt'); if( $case_after_txt ): ?><?php echo $case_after_txt; ?><?php endif; ?></p></li>
                                </ul>
							</div>
							<?php endwhile; ?><?php endif; ?>

							
							<div class="case_flow_area">
                                <ul class="col_2_area case_flow">
							<?php if(have_rows('case_flow')): ?>
							<?php while(have_rows('case_flow')): the_row(); ?>
                                    <li>
										<h4><span class="en_serif"><?php $case_flow_no = get_sub_field('case_flow_no'); if( $case_flow_no ): ?><?php echo $case_flow_no; ?><?php endif; ?></span><?php $case_flow_date = get_sub_field('case_flow_date'); if( $case_flow_date ): ?><?php echo $case_flow_date; ?><?php endif; ?></h4>
										<img src="<?php $case_flow_ph = get_sub_field('case_flow_ph'); if( $case_flow_ph ): ?><?php echo $case_flow_ph; ?><?php endif; ?>" alt="">
										<p><?php $case_flow_txt = get_sub_field('case_flow_txt'); if( $case_flow_txt ): ?><?php echo $case_flow_txt; ?><?php endif; ?></p>
									</li>
							<?php endwhile; ?><?php endif; ?>
                                </ul>
							</div>							
							
							
							<div class="case_doctor_comment_area">
								<div class="case_kihon_area">
									<div><p><span>性別</span><?php the_field('case_sex'); ?></p></div>
									<div><p><span>年齢</span><?php the_field('case_age'); ?></p></div>
									<div><p><span>撮影時期</span><?php the_field('case_satsuei'); ?></p></div>
									<div><p><span>施術詳細</span><?php the_field('case_txt'); ?></p></div>
								</div>
								<div class="case_comment_area">
									<dl>
										<dt>治療概要</dt>
										<dd><?php the_field('case_gaiyo'); ?>
										<dt>副作⽤（リスク）について</dt>
										<dd><?php the_field('case_lisk'); ?></dd>
										<dt>費⽤について</dt>
										<dd><?php the_field('case_price'); ?></dd>
									</dl>
								</div>
								<div class="case_doctor_area">
                                  <div class="ph"><?php
                            if ($terms = get_the_terms($post->ID, 'doctor_cate')):
                            foreach ( $terms as $term ) :
                            $term_id = $term->term_id;
                            $post_id = 'doctor_cate_'.$term_id; ?>
							<img src="<?php $writer_ph = get_field('case_doctorcate_ph',$post_id); ?><?php echo  $writer_ph; ?>" alt="">
						<?php endforeach; endif;?></div>
									<div class="txt_area">
										<div class="doctor"><span>担当ドクター</span><?php echo get_the_term_list($post->ID, 'doctor_cate'); ?> 医師</div>
										<p><?php the_field('case_comment'); ?></p>
									</div>
								</div>
							</div>
						</div>
					</div>

                    <div class="navi_area">
					<?php if (get_previous_post()):?>
                    <div class="en_serif"><?php previous_post_link('%link', 'PREV'); ?></div>
                    <?php endif; ?>
						<div class="serif"><a href="<?php echo esc_url(home_url('/')); ?>case">⼀覧へ戻る</a></div>

                    <?php if (get_next_post()):?>
                    <div class="en_serif"><?php next_post_link('%link ', 'NEXT'); ?></div>
                    <?php endif; ?>
					</div>
              </section>
			</section>


<?php get_footer(); ?>