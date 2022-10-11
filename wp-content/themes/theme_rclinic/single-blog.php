<?php get_header(); ?>

			<section class="blog">
				<div class="other_ttl_area bg_gray_white clinic_ttl_area">
					<div class="inner">
						<h2 class="serif title">ブログ</h2>
					</div>
				</div>
					<div class="inner col_inner">

						<section class="blog_area">
							<div class="details">
								<h1 class="serif"><?php the_title(); ?></h1>
								<?php if( have_rows('blog_tag_block') ): ?>
								<div class="tag_area">
								<?php while( have_rows('blog_tag_block') ): the_row();?>
								 <?php $blog_tag = get_sub_field('blog_tag'); if( $blog_tag ): ?><span>#<?php echo $blog_tag; ?></span><?php endif; ?>
								<?php endwhile; ?>
								</div>
								<?php endif; ?>
								<div class="details_cate_area">
								<div class="cate_area">
								<?php
                                    $terms = get_the_terms($post->ID,'blog_cate');
                                    foreach( $terms as $term ) {
                                    echo '<span>';
                                    echo $term->name;
                                    echo '</span>';
                                    }
                                    ?></div>
								<p class="date"><?php the_time('Y.m.d'); ?></p>
								</div>
								<div class="thumbnail">
								<?php
									the_post_thumbnail( 'full' );
								?>
								</div>
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<?php endwhile; endif; ?>
							</div>
							
							<div class="pagenation">
								<span class="prev"><?php if (get_previous_post()): ?><?php previous_post_link('%link', 'PREV'); ?><span class="btn_arrow_l"></span><?php endif; ?></span>　　<a class="page_list" href="<?php echo esc_url(home_url('/')); ?>blog">LIST</a>　　<span class="next"><?php if (get_next_post()): ?><?php next_post_link('%link', 'NEXT'); ?><span class="btn_arrow_r"></span><?php endif; ?></span></div>
							
							
							<div class="side related">
								<h3>関連記事</h3>
								<ul class="flex">
                                  <?php
                                    global $post;
                                  $term = array_shift(get_the_terms($post->ID, 'blog_cate'));
                                    $args = array(
                                      'numberposts' => 6,
                                      'post_type' => 'blog',
                                          'tax_query' => array(
                                      array(
                                          'taxonomy' => 'blog_cate',
                                          'field' => 'slug',
                                          'terms' => $term->slug,
                                          )
                                      ),
                                      'orderby' => 'rand',
                                      'post__not_in' => array($post->ID)
                                    );
                                  ?>
                                  <?php $myPosts = get_posts($args); if($myPosts) : ?>
                                  <?php foreach($myPosts as $post) : setup_postdata($post); ?>
									<li><a href="<?php echo get_permalink(); ?>">
										<p class="date"><?php the_time('Y.m.d'); ?></p>
										<div class="ph"><figure><?php if (has_post_thumbnail()) : ?>
											<?php the_post_thumbnail('thumbnail'); ?>
											<?php else : ?>
											<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
											<?php endif ; ?></figure></div>
										<h4><?php the_title(); ?></h4></a>
									</li>
									<?php endforeach; ?>
									<?php endif; wp_reset_postdata(); ?>
								</ul>
							</div>
							
						</section>
						
						
					<?php include(TEMPLATEPATH . '/sidebar-blog.php'); ?>	
		
				</div>
			</section>

<?php get_footer(); ?>