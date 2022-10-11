<?php
/*
Template Name: クリニック個別ページテンプレート
*/
?>
<?php get_header(); ?>
<?php
$page = get_post(get_the_ID());
$slug = $page->post_name;
?>
<!-- wp:html -->

<section>
	<div class="clinic-fv">
		<img class="clinic-fv__img pc" src="<?php $top_clinic = get_field('top');
											if ($top_clinic) {
												echo $top_clinic;
											} ?>">
		<img class="clinic-fv__img sp" src="<?php $top_clinic_sp = get_field('top_sp');
											if ($top_clinic_sp) {
												echo $top_clinic_sp;
											} ?>">
	</div>
</section>


<section class="pickup">
	<div class="inner">
		<ul>
			<?php if (have_rows('top_fv_shita')) : ?>
				<?php while (have_rows('top_fv_shita')) : the_row(); ?>
					<li>
						<?php $top_fv_shita_link = get_sub_field('top_fv_shita_link');
						if ($top_fv_shita_link) : ?>
							<a href="<?php echo $top_fv_shita_link; ?>">
							<?php endif; ?>
							<?php $top_fv_shita_ph = get_sub_field('top_fv_shita_ph');
							if ($top_fv_shita_ph) : ?>
								<img src="<?php echo $top_fv_shita_ph; ?>" alt="">
							<?php endif; ?>
							<?php $top_fv_shita_link = get_sub_field('top_fv_shita_link');
							if ($top_fv_shita_link) : ?>
							</a>
						<?php endif; ?>
					</li>
				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</div>
</section>

<?php $access = get_field('アクセス');
echo apply_filters('the_content', $access);
?>


<style>
	.access {
		margin-top: 30px;
	}

	.sche-btn {
		line-height: 23px;
		font-size: 1.2rem;
		background: #e5e5e5;
		border-radius: 20px;
		padding: 2px 22px 2px 15px;
		position: relative;
	}

	.sche-btn::after {
		display: block;
		position: absolute;
		top: 45%;
		right: 12px;
		width: 6px;
		height: 6px;
		margin-top: -3px;
		border-top: solid 2px #313131;
		border-right: solid 2px #313131;
		-webkit-transform: rotate(45deg);
		transform: rotate(45deg);
		content: "";
	}

	.panel {
		display: none;
	}

	.tab-group {
		display: flex;
		width: 50%;
		justify-content: space-around;
		margin: 20px auto;
	}

	.tab {
		background-color: #fff;
		border-radius: 25px;
		line-height: 50px;
		text-align: center;
		width: 200px;
	}

	.tab.is-active2 {
		background: #F00;
		color: #FFF;
		transition: all 0.2s ease-out;
	}

	.panel.is-show2 {
		display: block;
	}

	@media screen and (max-width: 767px) {
		.tab {
			background-color: #fff;
			border-radius: 25px;
			line-height: 50px;
			text-align: center;
			width: 140px;
		}

		.tab-group {
			width: 100%;
		}


		.access .padding_adj {
			padding: 36px 0 30px;
		}

	}


	.clinic-fv {
		max-width: 1200px;
		width: 100%;
		margin: 0px auto;
		padding: 50px 0 30px;
	}

	.clinic-fv__img {
		max-width: 100%;
	}

	@media screen and (max-width: 767px) {
		.clinic-fv {
			padding: 0;
		}
	}

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

.other_ttl_area {
	overflow: hidden;
}

</style>

<script>
	document.addEventListener('DOMContentLoaded', function() {
		// タブに対してクリックイベントを適用
		const tabs = document.getElementsByClassName('tab');
		for (let i = 0; i < tabs.length; i++) {
			tabs[i].addEventListener('click', tabSwitch, false);
		}

		// タブをクリックすると実行する関数
		function tabSwitch() {
			// タブのclassの値を変更
			document.getElementsByClassName('is-active2')[0].classList.remove('is-active2');
			this.classList.add('is-active2');
			// コンテンツのclassの値を変更
			document.getElementsByClassName('is-show2')[0].classList.remove('is-show2');
			const arrayTabs = Array.prototype.slice.call(tabs);
			const index = arrayTabs.indexOf(this);
			document.getElementsByClassName('panel')[index].classList.add('is-show2');
		};
	}, false);
</script>
<!-- /wp:html -->




<?php get_footer(); ?>