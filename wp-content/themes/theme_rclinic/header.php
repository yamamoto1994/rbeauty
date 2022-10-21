<!doctype html>
<html><head>



<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMXFCND');</script>
<!-- End Google Tag Manager -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z79Z60DCK7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z79Z60DCK7');
</script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<title>アールビューティークリニック 銀座・名古屋・大阪｜美容整形・美容外科・美容皮膚科</title>
<?php if(is_post_type_archive(array('case'))): ?>
  <meta name="description" content="アールビューティークリニック（R Beauty Clinic）症例写真に関するご案内ページです。当院で施術を受けられた方のBeforeAfterのお写真を掲載しております。これから施術をご検討されている方へぜひ、ご参考ください。">
<?php endif; ?>
<?php if(is_post_type_archive(array('blog'))): ?>
  <meta name="description" content="アールビューティークリニック（R Beauty Clinic）ブログに関するご案内ページです。当院のドクターが監修医となって、様々な美容コラムや現場の声を配信するブログとなっております。おすすめ記事は人気の高いブログです。ぜひご覧ください。">
<?php endif; ?>
<?php wp_head(); ?>
<meta name="keywords" content="二重整形,美容外科,美容皮膚科,鼻整形,銀座,大阪,名古屋">
<link rel="icon" type="image/x-icon" href="<?php echo esc_url(home_url('/')); ?>favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php echo esc_url(home_url('/')); ?>apple-touch-icon-precomposed.png">
<?php if(is_front_page()) {
echo '<link rel="stylesheet" href="'. get_template_directory_uri() .'/common/css/importTop.css?" />';
}else {
echo '<link rel="stylesheet" href="'. get_template_directory_uri() .'/common/css/import.css" />';
} ?>
<?php if (is_category() || is_single() || is_page('schedule') || is_page('faq') ||is_parent_slug() === 'faq' || is_post_type_archive( array('case','blog','media_list','news','movie','photo_selection','photo_selection_face','photo_selection_nose'))  || is_singular('blog')  || is_singular('media_list')  || is_singular('news')  || is_singular('movie')|| is_tax('menu_category') || is_tax('movie_cate')  || is_tax('case_tag')  || is_page('case-list')|| in_array(148, get_post_ancestors($post->ID)) || is_tax('blog_cate')): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/style_cms.css?v1.2" media="screen and (min-width:768px)">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/style_cms_SP.css?v1.1" media="screen and (max-width:767px)">
<?php endif ?>
<?php if ( is_page(array('1125','5766','5843','6132','6339','6462','5153','5164','5410','5492','5453'))) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/monitor.css?<?php echo date('Ymd-Hi'); ?>">
<?php endif; ?>
<?php if ( is_page(array('5168','4877'))) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/b-story.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lity.min.css">
<?php endif; ?>
<?php if ( is_page(array('5947'))) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/benefit.css?<?php echo date('Ymd-Hi'); ?>">
<?php endif; ?>
<?php if(is_page('face') || is_parent_slug() === 'face' || is_page('body') || is_parent_slug() === 'body' || is_page('skin') || is_parent_slug() === 'skin' || is_page('other') || is_parent_slug() === 'other' || is_parent_slug() === 'faq' && !is_front_page()) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/style.trouble.css" />
<?php else: ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/style_other.css" />
<?php endif ?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/colorbox.css" />
<?php if(!is_front_page()) { ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/lite-youtube-embed/src/lite-yt-embed.css" />
  <script src="<?php echo get_template_directory_uri(); ?>/js/lite-youtube-embed/src/lite-yt-embed.js"></script>
<?php } ?>

<!-- Facebook Pixel Code -->

<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '429749458156041');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=429749458156041&ev=PageView&noscript=1"
/></noscript>

<!-- End Facebook Pixel Code -->
<!-- Begin Mieruca Embed Code -->
<script type="text/javascript" id="mierucajs">
window.__fid = window.__fid || [];__fid.push([111411853]);
(function() {
function mieruca(){if(typeof window.__fjsld != "undefined") return; window.__fjsld = 1; var fjs = document.createElement('script'); fjs.type = 'text/javascript'; fjs.async = true; fjs.id = "fjssync"; var timestamp = new Date;fjs.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://hm.mieru-ca.com/service/js/mieruca-hm.js?v='+ timestamp.getTime(); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(fjs, x); };
setTimeout(mieruca, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent("onload", mieruca) : window.addEventListener("load", mieruca, false)) : mieruca();
})();
</script>
<!-- End Mieruca Embed Code -->


</head>
<body<?php if (is_front_page()): ?> class="top"<?php endif; ?>>
  
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMXFCND"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div class="pop_area">
<div class="inner">
<div class="ph"><a href="https://lin.ee/sK3JB9b" target="_blank"><img class="pc" src="<?php the_field('modal_pc',5); ?>" alt="" loading="lazy"><img class="sp" src="<?php the_field('modal_sp',5); ?>" alt=""" loading="lazy"></a>
<div class="pop_close"><span></span></div>
</div>
</div>
</div>
<header>

			<h1 class="head_title">
				<?php $post_data = get_post($post->post_parent);
                      $parent_slug = $post_data->post_name;
                      $category = get_the_category();
                      $cat_id   = $category[0]->cat_ID;
                      $cat_name = $category[0]->cat_name;
                      $cat_slug = $category[0]->category_nicename;?>
				<?php if (get_post_type() === 'news' && is_single() || get_post_type() === 'blog' && is_single()) : ?>
				<?php the_title(); ?>｜
				<?php elseif (is_post_type_archive('case')): ?>
				二重埋没など経過写真や症例写真をご紹介｜
				<?php elseif (is_post_type_archive('media_list')): ?>
				メディア実績のご紹介　有名ユーチューバー多数コラボや信頼の実績の美容外科医｜
				<?php elseif (is_post_type_archive('blog')): ?>
				美容コラム・現場の声を配信｜
				<?php elseif (is_page()) :?>
                    <?php if ($post->post_parent) :?>
                        <?php if ($parent_slug === 'price_face' || $parent_slug === 'price_body' || $parent_slug === 'price_skin' || $parent_slug === 'price_other'):?>
                            <?php the_title(); ?>の料金一覧｜
				         <?php else: ?>
                        <?php if( get_field('seo_txt')): ?><?php the_field('seo_txt'); ?><?php else :?><?php the_title(); ?>｜<?php endif; ?>
                        <?php endif ?>
                    <?php else: ?>
                        <?php if( get_field('seo_txt')): ?><?php the_field('seo_txt'); ?><?php else :?><?php the_title(); ?>｜<?php endif; ?>
                    <?php endif ?>

				<?php elseif (is_single()) :?>
				     <?php the_title(); ?>｜<?php if( get_field('seo_txt')): ?><?php the_field('seo_txt'); ?><?php endif; ?>
				<?php endif ?> アールビューティークリニック銀座・名古屋・大阪
			</h1>
			<div class="inner">
                <div class="navBtnArea sp">
                    <div class="navBtn">
                        <div class="icon-animation">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>
                    </div>
                </div>
					<div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="アールビューティークリニック 銀座・名古屋｜美容整形・美容外科・美容皮膚科"></a></div>
				<nav class="dNav pc">
					<ul>
						<!-- <li class="tel_area">
							<a class="tel" href="tel:03-6228-7881">
                <p>診療時間は［10:00~19:00 不定休］</p>
                <span class="serif"><p>銀座院</p> <text>03-6228-7881</text></span>
                <span class="serif"><p>名古屋院</p> <text>052-571-4700</text></span>
              </a>
						</li> -->
						<li class="monitor_btn_area"><a href="<?php echo esc_url(home_url('/')); ?>monitor"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_woman_w.svg" alt=""><span>モニター募集</span></a></li>
						<li class="tel_btn_area">
              <a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/ico_tel_w.svg" alt="">
                <span>電話予約</span>
              </a>
              <div class="tel_select">
                <ul>
                  <li><a href="tel:03-6228-7881" target="_blank">銀座院 03-6228-7881</a></li>
                  <li><a href="tel:03-6228-7881" target="_blank">大阪院 xxx-xxx-xxxx</a></li>
                  <li><a href="tel:052-571-4700" target="_blank">名古屋院 052-571-4700</a></li>
                </ul>
              </div>
            </li>
						<li class="reserve_btn_area"><a href="<?php echo esc_url(home_url('/')); ?>reserve"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_bell_w.svg" alt=""><span>WEB予約</span></a></li>
						<li class="line_btn_area">
              <a>
                <img src="<?php echo get_template_directory_uri(); ?>/images/ico_line_green.svg" alt="">
                <span>LINE相談</span>
              </a>
						  <div class="line_hukidashi">
                <img src="<?php echo get_template_directory_uri(); ?>/images/ico_gift.svg" alt="">クーポン配信中！
              </div>
              <div class="line_select">
                <ul>
                  <li><a href="https://lin.ee/sK3JB9b" target="_blank">銀座院</a></li>
                  <li><a href="https://lin.ee/oqmQUP2" target="_blank">大阪院</a></li>
                  <li><a href="https://lin.ee/y5Ejtoy" target="_blank">名古屋院</a></li>
                </ul>
              </div>
            </li>
					</ul>

				</nav>
			</div>
      <nav class="gNav">
        <div class="sp btn_area sp_btn_area f-kotei">
            <div class="line_btn_area" id="js-line_btn_area_hd">
              <a>
                <em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_line_w.svg" alt="">LINE予約
              </a>
            </div>
            <div class="f-moni"><a class="" href="<?php echo esc_url(home_url('/')); ?>monitor"><em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_moni.svg" alt="">モニター募集</a></div>
            <div class="f-shop"><a class="" href="https://rbeauty-cosme.com/" target="_blank"><em>shop</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_shopify_white.png" alt="">Online Store</a></div>
            <div class="f-tel" id="js-f-tel-hd">
              <a>
                <em>10時-19時</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tel_w.svg" alt="TEL">電話予約
              </a>
            </div>

            <div class="f-yoyaku"><a class="" href="<?php echo esc_url(home_url('/')); ?>reserve"><em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_bell_w.svg" alt="">WEB予約</a></div>
            <div class="line_select-sp">
              <ul>
                  <li><a href="https://lin.ee/sK3JB9b" target="_blank">銀座院</a></li>
                  <li><a href="https://lin.ee/oqmQUP2" target="_blank">大阪院</a></li>
                  <li><a href="https://lin.ee/y5Ejtoy" target="_blank">名古屋院</a></li>
              </ul>
            </div>
            <div class="tel_select-sp">
              <ul>
                  <li><a href="tel:03-6228-7881">銀座院：03-6228-7881</a></li>
                  <li><a href="tel:xxx-xxxx-xxxx">大阪院：xxx-xxxx-xxxx</a></li>
                  <li><a href="tel:052-571-4700">名古屋院：052-571-4700</a></li>
              </ul>
            </div>
        </div>
                <div class="sp sp_gNav">
					<div class="sp_gNav_list">
                        <h2 class="sp_nav_title  sp_nav_title_bg">お悩みから探す</h2>
                        <ul class="sp_nav_list js-tab-menu_parent">
                          <li class="js-tab-menu is-active">お顔</li>
                          <li class="js-tab-menu">お⾝体</li>
                          <li class="js-tab-menu">お肌</li>
                          <li class="js-tab-menu">その他</li>
                        </ul>
                            <div class="tab__body is-show">
                                <ul class="children">
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/eye01/">⼆重 ・⽬の整形</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/eye02/">⽬元のシワ・クマ・たるみ・若返り</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/face/">輪郭・⼩顔・リフトアップ</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/nose/">⿐の整形</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/fatinjection/">脂肪注入・再生医療</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/lips/">⼝唇の整形</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/hy/">ヒアルロン酸</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/botox/">ボトックス</a></li>
                                </ul>
                            </div>
                            <div class="tab__body">
                                <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>body/diet/">メディカルダイエット</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>body/liposuction/">脂肪吸引</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>body/gyn/">婦⼈科形成・デリケートゾーン</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>body/hips/">ヒップ</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>body/bust/">豊胸・バスト</a></li>
                                </ul>
                            </div>
                            <div class="tab__body">
                                <ul class="children">
                                   <li><a href="<?php echo esc_url(home_url('/')); ?>skin/skin01/">スキン</a></li>
                                   <li><a href="<?php echo esc_url(home_url('/')); ?>skin/skin02/">ニキビ</a></li>
                                   <li><a href="<?php echo esc_url(home_url('/')); ?>skin/skin03/">美⽩（シミ・肝斑）</a></li>
                                   <li><a href="<?php echo esc_url(home_url('/')); ?>skin/skin04/">ハリ・ツヤ</a></li>
                                </ul>
                            </div>
                            <div class="tab__body">
                                <ul class="children">
                                   <li><a href="<?php echo esc_url(home_url('/')); ?>other/epilation/">脱⽑</a></li>
                                   <li><a href="<?php echo esc_url(home_url('/')); ?>other/hokuro/">ホクロ除去</a></li>
                                   <li><a href="<?php echo esc_url(home_url('/')); ?>other/scar/">傷痕・傷痕修正</a></li>
                                   <!--<li><a href="<?php echo esc_url(home_url('/')); ?>other/tatoo/">タトゥー除去</a></li>-->
                                   <li><a href="<?php echo esc_url(home_url('/')); ?>other/sweat/">多汗症・ワキガ治療</a></li>
                                </ul>
                            </div>
					</div>
  					<div class="sp_gNav_list">
                        <h2 class="sp_nav_title sp_nav_title_bg">料⾦</h2>
                        <ul class="sp_nav_list js-tab-menu_parent">
                          <li class="js-tab-menu">お顔</li>
                          <li class="js-tab-menu">お⾝体</li>
                          <li class="js-tab-menu">お肌</li>
                          <li class="js-tab-menu">その他</li>
                        </ul>
                            <div class="tab__body">
									   <ul class="children">
                                          <?php
                                            $parentId = 152;
                                            $args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
                                            query_posts($args);
                                            if (have_posts()) :while (have_posts()) : the_post();?>
										   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										   <?php endwhile;endif;wp_reset_query();?>
									   </ul>
                            </div>
                            <div class="tab__body">
									   <ul class="children">
                                          <?php
                                            $parentId = 154;
                                            $args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
                                            query_posts($args);
                                            if (have_posts()) :while (have_posts()) : the_post();?>
										   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										   <?php endwhile;endif;wp_reset_query();?>
									   </ul>
                            </div>
                            <div class="tab__body">
									   <ul class="children">
                                          <?php
                                            $parentId = 150;
                                            $args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
                                            query_posts($args);
                                            if (have_posts()) :while (have_posts()) : the_post();?>
										   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										   <?php endwhile;endif;wp_reset_query();?>
									   </ul>
                            </div>
                            <div class="tab__body">
									   <ul class="children">
                                          <?php
                                            $parentId = 156;
                                            $args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
                                            query_posts($args);
                                            if (have_posts()) :while (have_posts()) : the_post();?>
										   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										   <?php endwhile;endif;wp_reset_query();?>
									   </ul>
                            </div>
					</div>
  					<div class="sp_gNav_list js_accordion">
                        <h2 class="sp_nav_title js_accordion_openbar">施術⼀覧</h2>
                        <ul class="js_accordion_content">
                          <li><a href="<?php echo esc_url(home_url('/')); ?>menu/menu_surgery#menu_surgery">美容外科</a></li>
                          <li><a href="<?php echo esc_url(home_url('/')); ?>menu/menu_dermatology#menu_dermatology">美容⽪膚科</a></li>
                          <li><a href="<?php echo esc_url(home_url('/')); ?>menu/menu_other#menu_other">その他</a></li>
                        </ul>
					  </div>
  					<div class="sp_gNav_list js_accordion">
                        <h2 class="sp_nav_title js_accordion_openbar">クリニック⼀覧</h2>
                        <ul class="js_accordion_content">
                          <li><a href="<?php echo esc_url(home_url('/')); ?>rclinic/ginza/">銀座院</a></li>
                          <li><a href="<?php echo esc_url(home_url('/')); ?>rclinic/nagoya/">名古屋院</a></li>
                        </ul>
					  </div>
  					<div class="sp_gNav_list sp_gNav_list_flex">
						<h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>case">症例⼀覧</a></h2>
						<h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>monitor">症例モニター募集</a></h2>
            <!-- <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>access">アクセス</a></h2> -->
						<h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>doctor">ドクター紹介</a></h2>
						<h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>philosophy">クリニック案内</a></h2>
            <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>campaign">キャンペーン</a></h2>
            <h2 class="sp_nav_stitle"><a href="https://rbeauty-cosme.com/" target="_blank">Online Store</a></h2>
						<h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>first">初めての⽅へ</a></h2>
            <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>first#ticket">優待制度</a></h2>
						<h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>minor">未成年の⽅へ</a></h2>
            <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>faq">Q&A</a></h2>
						<h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>warranty">安心保証制度</a></h2>
						<h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>blog">ブログ</a></h2>
						<h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>recruit">採用情報</a></h2>
					</div>
					<!--<div class="btn_area sp_sns_list">
						<p>R Beauty CLINIC 公式SNS</p>
						<div class="btn btn_sns btn_black btn_round"><a href="https://www.instagram.com/r_beauty.clinic/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_instagram.png" alt="">公式Instagram</a></div>
					</div>-->
				</div>

				<ul class="pc">
					<li class="current_list onayami"><a class="pc">診療</a>
						<div class="sub_menu">
							<div class="menu_inner">
								<div class="menu_list">
									<h2><span class="en_serif en_name">FACE</span><span class="cate_name">お顔のお悩み</span></h2>
									<ul class="children">
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/eye01/">⼆重 ・⽬の整形</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/eye02/">⽬元のシワ・クマ・たるみ・若返り</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/face/">輪郭・⼩顔・リフトアップ</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/nose/">⿐の整形</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/fatinjection/">脂肪注入・再生医療</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/lips/">⼝唇の整形</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/hy/">ヒアルロン酸</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>face/botox/">ボトックス</a></li>
									</ul>
								</div>
								<div class="menu_list">
									<h2><span class="en_serif en_name">BODY</span><span class="cate_name">お⾝体のお悩み</span></h2>
									<ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>body/diet/">メディカルダイエット</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>body/liposuction/">脂肪吸引</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>body/gyn/">婦⼈科形成・デリケートゾーン</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>body/hips/">ヒップ</a></li>
                                     <li><a href="<?php echo esc_url(home_url('/')); ?>body/bust/">豊胸・バスト</a></li>
									</ul>
								</div>
								<div class="menu_list">
									<h2><span class="en_serif en_name">SKIN</span><span class="cate_name">お肌のお悩み</span></h2>
									<ul class="children">
                                       <li><a href="<?php echo esc_url(home_url('/')); ?>skin/skin01/">スキン</a></li>
                                       <li><a href="<?php echo esc_url(home_url('/')); ?>skin/skin02/">ニキビ</a></li>
                                       <li><a href="<?php echo esc_url(home_url('/')); ?>skin/skin03/">美⽩（シミ・肝斑）</a></li>
                                       <li><a href="<?php echo esc_url(home_url('/')); ?>skin/skin04/">ハリ・ツヤ</a></li>
									</ul>
								</div>
								<div class="menu_list">
									<h2><span class="en_serif en_name">OTHER</span><span class="cate_name">その他のお悩み</span></h2>
									<ul class="children">
                                       <li><a href="<?php echo esc_url(home_url('/')); ?>other/epilation/">脱⽑</a></li>
                                       <li><a href="<?php echo esc_url(home_url('/')); ?>other/hokuro/">ホクロ除去</a></li>
                                       <li><a href="<?php echo esc_url(home_url('/')); ?>other/scar/">傷痕・傷痕修正</a></li>
                                       <!--<li><a href="<?php echo esc_url(home_url('/')); ?>other/tatoo/">タトゥー除去</a></li>-->
                                       <li><a href="<?php echo esc_url(home_url('/')); ?>other/sweat/">多汗症・ワキガ治療</a></li>
									</ul>
								</div>
							</div>
						</div>

					</li>
					<li class="current_list onayami"><a class="pc">料⾦</a>
						<div class="sub_menu">
							<div class="menu_inner">
                                <div class="menu_list">
									<h2><span class="en_serif en_name">FACE</span><span class="cate_name">お顔</span></h2>
									   <ul class="children">
                                          <?php
                                            $parentId = 152;
                                            $args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
                                            query_posts($args);
                                            if (have_posts()) :while (have_posts()) : the_post();?>
										   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										   <?php endwhile;endif;wp_reset_query();?>
									   </ul>
								</div>
                                <div class="menu_list">
									<h2><span class="en_serif en_name">BODY</span><span class="cate_name">お身体</span></h2>
									   <ul class="children">
                                          <?php
                                            $parentId = 154;
                                            $args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
                                            query_posts($args);
                                            if (have_posts()) :while (have_posts()) : the_post();?>
										   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										   <?php endwhile;endif;wp_reset_query();?>
									   </ul>
								</div>
                                <div class="menu_list">
									<h2><span class="en_serif en_name">SKIN</span><span class="cate_name">お肌</span></h2>
									   <ul class="children">
                                          <?php
                                            $parentId = 150;
                                            $args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
                                            query_posts($args);
                                            if (have_posts()) :while (have_posts()) : the_post();?>
										   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										   <?php endwhile;endif;wp_reset_query();?>
									   </ul>
								</div>
                                <div class="menu_list">
									<h2><span class="en_serif en_name">OTHER</span><span class="cate_name">その他</span></h2>
									   <ul class="children">
                                          <?php
                                            $parentId = 156;
                                            $args = 'posts_per_page=-1&post_type=page&orderby=menu_order&order=asc&post_parent='.$parentId;
                                            query_posts($args);
                                            if (have_posts()) :while (have_posts()) : the_post();?>
										   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
										   <?php endwhile;endif;wp_reset_query();?>
									   </ul>
								</div>
							</div>
						</div>

					</li>
					<li class="current_list clinic-adjust"><a class="pc" href="<?php echo esc_url(home_url('/')); ?>rclinic">クリニック一覧</a>
            <div class="sub_menu">
							<div class="menu_inner">
								<div class="menu_list">
                  <ul class="children">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>rclinic/ginza">銀座院</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>rclinic/osaka">大阪院</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>rclinic/nagoya">名古屋院</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>case">症例⼀覧</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>doctor">ドクター紹介</a></li>
					<!-- <li><a href="<?php echo esc_url(home_url('/')); ?>access">アクセス</a></li> -->
					<li class="current_list"><a href="<?php echo esc_url(home_url('/')); ?>philosophy">Rクリニックについて</a>
						<div class="sub_menu">
							<div class="menu_inner">

								<div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>philosophy">クリニック案内</a></li>
                                  </ul>
								</div>
                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>first">初めての⽅へ</a></li>
                                  </ul>
                </div>
                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>first#ticket">優待制度</a></li>
                                  </ul>
                </div>
								<div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>minor">未成年の⽅へ</a></li>
                                  </ul>
								</div>
                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>faq">Q&A</a></li>
                                  </ul>
                </div>
								<div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>warranty">安心保証制度</a></li>
                                  </ul>
								</div>

								<div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>blog">ブログ</a></li>
                                  </ul>
								</div>
                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>beautygirl01">Beauty Story</a></li>
                                  </ul>
								</div>

                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>movie">配信動画</a></li>
                                  </ul>
                </div>
                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>online">オンライン診療</a></li>
                                  </ul>
                </div>
								<div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>recruit">採用情報</a></li>
                                  </ul>
								</div>
							</div>
						</div>
					</li>
          					<li><a href="<?php echo esc_url(home_url('/')); ?>campaign">キャンペーン</a></li>
                    <li><a href="https://rbeauty-cosme.com/" target="_blank" id="shopify-ico">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ico_shopify.png" alt="shopifyカートアイコン">
                      <span>Online Store</span>
                    </a></li>
				</ul>
			</nav>
		</header>
  <div class="sp fixed_nav sp_btn_area f-kotei">
      <div class="line_btn_area" id="js-line_btn_area_ft">
        <a class="">
          <em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_line_w.svg" alt="">LINE予約
        </a>
        <div class="line_hukidashi"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_gift.svg" alt="">クーポン配信中！
        </div>
        <ul class="line-ft-select-sp">
          <li><a href="https://lin.ee/sK3JB9b" target="_blank">銀座院</a></li>
          <li><a href="https://lin.ee/y5Ejtoy" target="_blank">名古屋院</a></li>
          <li><a href="https://lin.ee/oqmQUP2" target="_blank">大阪院</a></li>
        </ul>
        <div class="tel_ft_select-sp">
              <ul>
                  <li><a href="tel:03-6228-7881">銀座院：03-6228-7881</a></li>
                  <li><a href="tel:052-571-4700">大阪院：xxx-xxxx-xxxx</a></li>
                  <li><a href="tel:052-571-4700">名古屋院：052-571-4700</a></li>
              </ul>
        </div>
      </div>

      <div class="f-moni"><a class="" href="<?php echo esc_url(home_url('/')); ?>monitor"><em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_moni.svg" alt="">モニター募集</a></div>
      <div class="f-shop"><a class="" href="https://rbeauty-cosme.com/" target="_blank"><em>shop</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_shopify_white.png" alt="">Online Store</a></div>
      <div class="f-tel" id="js-f-tel-ft"><a><em>10時-19時</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tel_w.svg" alt="TEL">電話予約</a></div>
      <div class="f-yoyaku"><a href="<?php echo esc_url(home_url('/')); ?>reserve"><em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_bell_w.svg" alt="">WEB予約</a></div>
  </div>
  <style>
.f-kotei a {
    color: #fff;
}
.f-moni,
.f-shop {
    width: 20% !important;
}
.line_btn_area a {
    background: #18b92a;
}
.tel_btn_area a {
  background: #D03FFE;
}

.f-moni a {
    background: #000;
}
.f-shop a {
  background: #e4007f;
}
.f-tel a {
    background: #7a8b8e;
}
.f-yoyaku a {
    background: #c49859;
}
.f-kotei a em{
  background: #fff;
  border-radius: 20px;
  color: #c49859;
  font-style: normal;
  font-size: 9px;
  padding: 1px 7px;
  margin-bottom: 2px;
  display: inline-block;
}
.line_btn_area a em,
.tel_btn_area a em {
  color:#18b92a;
}
.f-tel a em{
  color:#7a8b8e;
}
.f-moni a em {
  color:#000;
}
.f-shop a em {
  color: #e4007f;
}

.f-kotei div img {
    height: 20px;
}
.f-kotei{
  border: none !important;
}
.f-kotei div {
  border-right: none;
}

.clinic-adjust {
  position: relative;
}

.clinic-adjust .sub_menu {
  padding: 20px 10px 10px!important;
}

.line_select,
.tel_select {
  position: absolute;
  display: none;
}
.tel_select {
  width: 140%;
}
.line_select ul,
.tel_select ul {
  flex-direction: column;
  margin-top: 0!important;
}
.tel_select ul,
.tel_select ul li {
  width: 100%;
}

.line_select ul li {
  
}
.line_select ul li a,
.tel_select ul li a {
  background-color: #FFF;
  border: 1px solid #333333;
  border-radius: 0px;
  color: #333333;
  padding-left: 10px;
  text-align: left;
}

.line_select ul li:nth-child(1) a,
.line_select ul li:nth-child(2) a,
.tel_select ul li:nth-child(1) a,
.tel_select ul li:nth-child(2) a {
  border-bottom: none;
}
.line_select ul li a:hover,
.tel_select ul li a:hover {
  opacity: 1;
  background-color: #f7fcfe;
  font-weight: bold;
}

.tel_btn_area a {
  /* width: 100%; */
}

.line_select-sp, .tel_select-sp {
  width: 100%!important;
}

.line_select-sp ul, .tel_select-sp ul {
  border-top: 4px solid #18b92a;
  width: 100%;
  background-color: #FFF;
}

.tel_select-sp ul {
  border-top: 4px solid #7a8b8e;
}

.line_select-sp ul li, .tel_select-sp ul li {
  padding: 10px!important;
  width: 100%;
}
.line_select-sp ul li a, .tel_select-sp ul li a {
  color: #333333!important;
  text-align: left;
}

.line-ft-select-sp, .tel_ft_select-sp {
  position: absolute;
  bottom: 66px;
  left: 0px;
  width: 100%!important;
}

.line-ft-select-sp {
  border-bottom: 4px solid #18b92a;
}

.tel_ft_select-sp {
  border-bottom: 4px solid #7a8b8e;
}

.line-ft-select-sp li, .tel_ft_select-sp li {

}
.line-ft-select-sp li a, .tel_ft_select-sp li a {
  background-color: #FFF;
  color: #333333;
  width: 100%;
  border-top: 1px solid #333333;
  text-align: left;
  padding: 10px 10px;
}

.serif {
  font-size: 2rem!important;
  margin-top: 4px;
}
.serif p {
  font-size: 1.7rem!important;
  display: inline;
}
.serif text {
  font-size: 2rem!important;
  margin-right: 10px;
}
#shopify-ico {
}

#shopify-ico img {
  width: 13px;
  height: 16px;
  padding-top: 2px;
}

  </style>
	<article>



