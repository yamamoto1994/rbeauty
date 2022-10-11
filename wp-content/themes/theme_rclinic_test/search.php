<?php get_header(); ?>

			<section class="search">
				<div class="other_ttl_area">
					<div class="inner">
						<p class="en_serif title">SEARCH</p>
					</div>
				</div>
					<div class="inner">

							
<?php
global $wp_query;
$total_results = $wp_query->found_posts;
$search_query = get_search_query();
?>
<h3>「<?php echo $search_query; ?>」の検索結果<span>（<?php echo $total_results; ?>件）</span></h3>
							

<?php if( $total_results >0 ): ?>
<div class="serch_details">
	<ul>
<?php if(have_posts()):	while(have_posts()): the_post(); ?>
	<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
	</ul>
</div>

<?php wp_reset_postdata(); ?>

<?php else: ?>
<div class="serch_details">
<p><?php echo $search_query; ?> に一致する情報は見つかりませんでした。</p>
</div>

<?php endif; ?>
														
				</div>
			</section>

<?php get_footer(); ?>

