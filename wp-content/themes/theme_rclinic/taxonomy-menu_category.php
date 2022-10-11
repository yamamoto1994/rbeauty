<?php get_header(); ?>
			<section class="menu">
				<div class="ttl_area parent_ttl_area">
					<div class="inner">
						<h1 class="serif title">施術⼀覧</h1>
					</div>
				</div>
				<div class="lo_nav_area bg_gray">
					<div class="inner">
                        <ul class="lo_nav_list js-tab-menu_parent">
                          <li class="js-tab-menu is-active">美容外科</li>
                          <li class="js-tab-menu">美容⽪膚科</li>
                          <li class="js-tab-menu">その他</li>
                        </ul>
                            <div class="tab__body is-show">
                                <ul>
                                  <?php
                                    $categories = get_terms( 'menu_category', array(
                                        'hide_empty' => 0,
                                        'child_of' => 4,
                                         )
                                    );
                                    foreach($categories as $value):
                                    ?>
                                    <li class="btn btn_black btn_bottom btn_round btn_hv_black btn_w32p"><a href="#<?php echo $value->slug; ?>"><?php echo $value->name; ?></a></li>
                                 <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="tab__body">
                                <ul>
                                  <?php
                                    $categories = get_terms( 'menu_category', array(
                                        'hide_empty' => 0,
                                        'child_of' => 5,
                                         )
                                    );
                                    foreach($categories as $value):
                                    ?>
                                   <li class="btn btn_black btn_bottom btn_round btn_hv_black btn_w32p"><a href="#<?php echo $value->slug; ?>"><?php echo $value->name; ?></a></li>
                                 <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="tab__body">
                                <ul>
                                  <?php
                                    $categories = get_terms( 'menu_category', array(
                                        'hide_empty' => 0,
                                        'child_of' => 3,
                                         )
                                    );
                                    foreach($categories as $value):
                                    ?>
                                    <li class="btn btn_black btn_bottom btn_round btn_hv_black btn_w32p"><a href="#<?php echo $value->slug; ?>"><?php echo $value->name; ?></a></li>
                                 <?php endforeach; ?>
                                </ul>
                            </div>
					</div>
				</div>

				<section class="menu_list_area" id="menu_surgery">
					<div class="inner">
                        <h2 class="serif logo_title">美容外科</h2>
						<?php 
                        $my_tax = 'menu_category';
                        $parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 4) );
                        if ( !empty( $parent_terms ) ) :
                          foreach ( $parent_terms as $value ) : 
                            $pt_id = $value->term_id;
                            $pt_name = $value->name;
                            $pt_slug = $value->slug;
                            $pt_url = get_term_link($value);
                      ?>
						<div class="menu_list_contents_area" id="<?php echo $pt_slug; ?>">
							<div class="menu_list_contents">
								<figure><?php $cate_ph = get_field('cate_ph','category_'.$pt_id); ?>
									  <img src="<?php echo $cate_ph; ?>" alt="<?php echo $pt_name;?>" />
								</figure>
                                <h3><?php echo $pt_name;?></h3>
							</div>
							<ul>

					  <?php query_posts( array(
                            'post_type' => 'post',
                            'taxonomy' => 'menu_category',
                            'term' => $pt_slug, 
                            'posts_per_page' => -1
                        )); ?>
						<?php if(have_posts()): ?>
                          <?php while(have_posts()):the_post(); ?>
								<li class="ico_line_grade ico_line_l_grade"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile;?><?php endif; ?>

							</ul>
						</div>
						<?php endforeach; ?><?php endif; ?>
				</div>
				</section>

				
				<section class="menu_list_area" id="menu_dermatology">
					<div class="inner">
                        <h2 class="serif logo_title">美容⽪膚科</h2>
						<?php 
                        $my_tax = 'menu_category';
                        $parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 5) );
                        if ( !empty( $parent_terms ) ) :
                          foreach ( $parent_terms as $value ) : 
                            $pt_id = $value->term_id;
                            $pt_name = $value->name;
                            $pt_slug = $value->slug;
                            $pt_url = get_term_link($value);
                      ?>
						<div class="menu_list_contents_area" id="<?php echo $pt_slug; ?>">
							<div class="menu_list_contents">
								<figure><?php $cate_ph = get_field('cate_ph','category_'.$pt_id); ?>
									  <img src="<?php echo $cate_ph; ?>" alt="<?php echo $pt_name;?>" />
								</figure>
                                <h3><?php echo $pt_name;?></h3>
							</div>
							<ul>

					  <?php query_posts( array(
                            'post_type' => 'post',
                            'taxonomy' => 'menu_category',
                            'term' => $pt_slug, 
                            'posts_per_page' => -1
                        )); ?>
						<?php if(have_posts()): ?>
                          <?php while(have_posts()):the_post(); ?>
								<li class="ico_line_grade ico_line_l_grade"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile;?><?php endif; ?>

							</ul>
						</div>
						<?php endforeach; ?><?php endif; ?>
				</div>
				</section>				

				<section class="menu_list_area" id="menu_other">
					<div class="inner">
                        <h2 class="serif logo_title">その他</h2>
						<?php 
                        $my_tax = 'menu_category';
                        $parent_terms = get_terms( $my_tax, array('hide_empty' => false, 'parent' => 3) );
                        if ( !empty( $parent_terms ) ) :
                          foreach ( $parent_terms as $value ) : 
                            $pt_id = $value->term_id;
                            $pt_name = $value->name;
                            $pt_slug = $value->slug;
                            $pt_url = get_term_link($value);
                      ?>
						<div class="menu_list_contents_area" id="<?php echo $pt_slug; ?>">
							<div class="menu_list_contents">
								<figure><?php $cate_ph = get_field('cate_ph','category_'.$pt_id); ?>
									  <img src="<?php echo $cate_ph; ?>" alt="<?php echo $pt_name;?>" />
								</figure>
                                <h3><?php echo $pt_name;?></h3>
							</div>
							<ul>

					  <?php query_posts( array(
                            'post_type' => 'post',
                            'taxonomy' => 'menu_category',
                            'term' => $pt_slug, 
                            'posts_per_page' => -1
                        )); ?>
						<?php if(have_posts()): ?>
                          <?php while(have_posts()):the_post(); ?>
								<li class="ico_line_grade ico_line_l_grade"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile;?><?php endif; ?>

							</ul>
						</div>
						<?php endforeach; ?><?php endif; ?>
				</div>
				</section>
</section>



<?php get_footer(); ?>