<?php get_header(); ?>
<?php 
  $catid = get_query_var('cat'); 
  $category = get_category($catid); 
  $catslug = $category->slug;
  $catname = $category->name;
?>
			<section class="menu <?php echo $catslug;?>">
				<div class="ttl_area">
					<div class="inner">
						<h1 class="serif title"><?php echo $catname;?>のお悩み</h1>
					</div>
				</div>

				<div class="lo_nav_area">
					<div class="inner">
                        <ul class="lo_nav">
                                <?php
                                $args = array('child_of' => $catid  );
                                $categories = get_categories($args); ?>
                            <?php foreach($categories as $category){
                               echo '<li class="btn btn_black btn_bottom"><a href="#' . $category->category_nicename . '" title="' . $category->name . '" ' . '>' . $category->name . '</a></li>';
                            } ?>
                         </ul>
					</div>
				</div>
				
				<section class="parent_menu_list_area">
					<?php $post_id = 'category_'.$catid; ?>
						<?php
                              $categories = get_terms( 'category', array(
                                  'hide_empty' => 0,
                                  'child_of' => $catid,
                                   )
                              );?>
                            <?php foreach($categories as $category):?>
					<div class="inner parent_menu_list" id="<?php echo $category->slug; ?>">
                         <div class="parent_title">
							<div class="ph"><img src="<?php $cate_ph = get_field('cate_ph','category_'.$category->term_id); ?><?php echo $cate_ph; ?>" alt=""></div>
							 <h2 class="serif"><?php echo $category->name;?></h2>
							 <p><?php echo category_description($category->term_id); ?></p>
						</div>
						<ul class="parent_menu_list_contents">
							<?php
							$postslist = get_posts( "category=$category->term_id & numberposts=-1" );
							foreach ( $postslist as $post ) {
							?>
                            <li>
								<a href="<?php the_permalink(); ?>">
                              <h3 class="serif"><?php the_title(); ?></h3>
                              <p><?php the_field('menu_cate_txt'); ?></p>
								</a>
                            </li>
							<?php } ?>
						</ul>
					</div>
					<?php endforeach; ?>
				</section>
				
			</section>
<?php get_footer(); ?>