<?php get_header(); ?>


<?php $page_data = get_page_by_path('top'); $page = get_post($page_data);
$content = $page -> post_content;
echo apply_filters('the_content', $content);?>


		    <section class="news_area">
				<div class="inner">
					<div class="title_area">
						<h2 class="en_txt">NEWS</h2>
						<div class="btn_circle"><a href="<?php echo esc_url(home_url('/')); ?>news">LIST<svg width="22" height="22" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="10" /></svg></a></div>
					</div>
					<div class="txt_area">
						<dl>
							<?php query_posts( array( 'post_type' =>array('news'),'posts_per_page' => 6 )); ?>
							<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
							<dt><?php the_time('Y.m.d'); ?></dt>
							<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
							<?php endwhile; endif;wp_reset_query();?>
						</dl>
					</div>
				</div>
			</section>

			
<?php $top_contents = get_field('top_contents'); if( $top_contents ){ echo $top_contents; }?>

			<section class="blog_area">
				<div class="inner">
					<div class="title_area">
						<h2 class="en_txt">COLUMN</h2>
					</div>
					<dl>
						<?php query_posts( array( 'post_type' =>array('column'),'posts_per_page' => 6 )); ?>
							<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
						<dt><p class="date"><?php the_time('Y.m.d'); ?></p><h3><?php the_title(); ?></h3>
							<div class="cate_area">
								<?php
				$terms = get_the_terms($post->ID,'column_cate');
				foreach( $terms as $term ) {
				echo '<span class="case">';
				echo $term->name;
				echo '</span>';
				}
				?>
							</div>
						</dt>
						<dd><a href="<?php the_permalink(); ?>"><?php echo mb_substr(strip_tags($post-> post_content),0,200) . '...'; ?></a></dd>
						<?php endwhile; endif;wp_reset_query();?>
					</dl>
					<div class="btn_circle"><a href="<?php echo esc_url(home_url('/')); ?>column">LIST<svg width="22" height="22" xmlns="http://www.w3.org/2000/svg"><circle cx="11" cy="11" r="10" /></svg></a></div>
				</div>
			</section>

<?php $top_sns = get_field('top_sns'); if( $top_sns ){ echo $top_sns; }?>

<?php get_footer(); ?>