<?php
/*
Template Name: 料金表テンプレート
*/
?>
<?php get_header(); ?>
<?php
$page = get_post( get_the_ID() );
$slug = $page->post_name;
?>
			<section class="menu price">
				<div class="other_ttl_area">
					<div class="inner">
						<h1 class="serif title">料⾦ / <?php the_title(); ?></h1>
					</div>
				</div>

				<div class="lo_nav_area">
					<div class="inner">
                        <ul class="lo_nav">


							<?php 
                                      $posts = get_posts(array(
                                      'posts_per_page' => -1,
                                      'category_name' => $slug
                                      ));
                                      ?>

                            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
<?php if( have_rows('menu_list_sec') ): ?>	
	<?php while( have_rows('menu_list_sec') ): the_row();?>
<?php
    $cat = get_sub_field('menu_section_radio');
    if ($cat == '料金セクション') :?>
							<?php if(have_rows('menu_price_area')): ?>
							<?php while(have_rows('menu_price_area')): the_row(); ?>
							<?php if(have_rows('menu_price_block')): ?>  
							<?php while(have_rows('menu_price_block')): the_row(); ?>
							<li class="btn btn_black btn_bottom btn_hv_black btn_w32p"><a href="#post_<?php echo get_the_ID(); ?>"><?php the_sub_field('menu_price_h3'); ?></a></li>
							<?php endwhile; endif; ?>
							<?php endwhile; endif; ?>


<?php endif; ?>			
<?php endwhile; endif; ?>
				<?php endforeach; ?><?php endif; ?>
                        </ul>
					</div>
				</div>
				
						 

						  
				<section class="menu_list_area">
	
						<div class="" id="<?php echo $post->post_name; ?>">
                            <div class="menu_price_area">
								

                            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
<?php if( have_rows('menu_list_sec') ): ?>	
	<?php while( have_rows('menu_list_sec') ): the_row();?>
<?php
    $cat = get_sub_field('menu_section_radio');
    if ($cat == '料金セクション') :?>
						<?php if(have_rows('menu_price_area')): ?>
							<?php while(have_rows('menu_price_area')): the_row(); ?>
								  <?php if(have_rows('menu_price_block')): ?>  
											<?php while(have_rows('menu_price_block')): the_row(); ?>
											  <?php if( get_sub_field('menu_price_radio') == "いいえ"): ?>
											  <?php else: ?>
								<div class="menu_list_inner">
								
											<div class="inner post_<?php echo get_the_ID(); ?>" id="post_<?php echo get_the_ID(); ?>">
                                                <div class="menu_list_title">
                                                 <?php if( get_sub_field('menu_price_h3')): ?><h2 class="serif logo_title"><?php the_sub_field('menu_price_h3'); ?></h2><?php endif; ?>
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
								</div>
								<?php endif; ?>
								<?php endwhile; endif; ?>
								<?php endwhile; endif; ?>

<?php endif; ?>			
<?php endwhile; endif; ?>
								<?php endforeach; ?><?php endif; ?>
								</div>
                            </div>


						 
					</section>	
				</section>	

<?php get_footer(); ?>