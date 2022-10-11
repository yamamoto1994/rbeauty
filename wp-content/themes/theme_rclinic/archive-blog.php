<?php get_header(); ?>

<section class="blog">
	<div class="other_ttl_area bg_gray_white clinic_ttl_area">
		<div class="inner">
			<h2 class="serif title">ブログ</h2>
		</div>
	</div>
	<div class="inner">
		<h2 class="t-title mt50">新着ブログ一覧</h2>
		<div class="blog_cate_sp">
			<ul>
				<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'blog_cate','hide_empty' => 0)); ?>
			</ul>
		</div>
	</div>
	<div class="inner col_inner">
		<section class="blog_area">
			<ul class="n-blog">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<li class="list">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php if (have_rows('blog_tag_block')) : ?>
								<div class="tag_area">
									<?php while (have_rows('blog_tag_block')) : the_row(); ?>
										<?php $blog_tag = get_sub_field('blog_tag');
										if ($blog_tag) : ?><span>#<?php echo $blog_tag; ?></span><?php endif; ?>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
							<p class="date"><?php the_time('Y-m-d'); ?></p>
							<div class="cate_area">
								<?php
								$terms = get_the_terms($post->ID, 'blog_cate');
								foreach ($terms as $term) {
									echo '<span>';
									echo $term->name;
									echo '</span>';
								}
								?></div>
							<div class="contents_area">
								<div class="ph"><a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) : ?>
											<?php the_post_thumbnail('thumbnail'); ?>
										<?php else : ?>
											<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" />
										<?php endif; ?></a></div>
								<div class="txt">
									<p><a href="<?php the_permalink(); ?>"><?php echo mb_substr(strip_tags($post->post_content), 0, 60) . '...'; ?></a></p>
								</div>
							</div>
						</li>
				<?php endwhile;
				endif; ?>
			</ul>
			<div class="pagenation"><?php include(TEMPLATEPATH . '/pagenavi.php'); ?></div>
		</section>
		<?php include(TEMPLATEPATH . '/sidebar-blog.php'); ?>

	</div>
</section>

<?php get_footer(); ?>
