<!doctype html>
<html><head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z79Z60DCK7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z79Z60DCK7');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMXFCND');</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Style-Type" content="text/css">
<title>アールビューティークリニック 銀座｜美容整形・美容外科・美容皮膚科</title>

<?php if(is_post_type_archive(array('case'))): ?>
  <meta name="description" content="アールビューティークリニック（R Beauty Clinic）症例写真に関するご案内ページです。当院で施術を受けられた方のBeforeAfterのお写真を掲載しております。これから施術をご検討されている方へぜひ、ご参考ください。">
<?php endif; ?>
<?php if(is_post_type_archive(array('blog'))): ?>
  <meta name="description" content="アールビューティークリニック（R Beauty Clinic）ブログに関するご案内ページです。当院のドクターが監修医となって、様々な美容コラムや現場の声を配信するブログとなっております。おすすめ記事は人気の高いブログです。ぜひご覧ください。">
<?php endif; ?>
<?php if(is_post_type_archive(array('media_list'))): ?>
  <meta name="description" content="アールビューティークリニック（R Beauty Clinic）メディア実績に関するご案内のページです。当院をご紹介いただいた掲載メディアを一覧でご覧いただけます。">
<?php endif; ?>
<?php if(is_post_type_archive(array('movie'))): ?>
  <meta name="description" content="アールビューティークリニック（R Beauty Clinic）配信動画に関するご案内のページです。当院での施術について、お受けいただいた患者様の術後経過をご紹介したものや、ドクターがわかりやすく解説した動画一覧です。施術を検討されている方は、ぜひご覧ください。">
<?php endif; ?>

<?php wp_head(); ?>
<meta name="keywords" content="美容外科,美容皮膚科">
<link rel="preconnect dns-prefetch" href="//www.google.com/maps">
<link rel="preconnect dns-prefetch" href="//developers.google.com/speed/libraries/">
<link rel="preconnect dns-prefetch" href="//marketingplatform.google.com/about/tag-manager/">
<link rel="preconnect dns-prefetch" href="//www.facebook.com/">
<link rel="preconnect dns-prefetch" href="//developers.google.com/apis-explorer/#p/">
<link rel="preconnect dns-prefetch" href="//fonts.google.com/">
<link rel="preconnect dns-prefetch" href="//youtube.com/">
<link rel="preconnect dns-prefetch" href="//unpkg.com/">
<link rel="preconnect dns-prefetch" href="//www.addtoany.com/">
<link rel="preconnect dns-prefetch" href="//www.google.com/analytics/analytics/">
<link rel="preconnect dns-prefetch" href="//cdnjs.com/">

<link rel="icon" type="image/x-icon" href="<?php echo esc_url(home_url('/')); ?>favicon.ico">
<link rel="apple-touch-icon-precomposed" href="<?php echo esc_url(home_url('/')); ?>apple-touch-icon-precomposed.png">
<?php if(is_front_page()) {
echo '<link rel="stylesheet" href="'. get_template_directory_uri() .'/common/css/importTop2.css?" />';
}else {
echo '<link rel="stylesheet" href="'. get_template_directory_uri() .'/common/css/import.css" />';
} ?>
<?php if (is_category() || is_single() || is_page('schedule') || is_page('faq') ||is_parent_slug() === 'faq' || is_post_type_archive( array('case','blog','media_list','news','movie','photo_selection','photo_selection_face','photo_selection_nose'))  || is_singular('blog')  || is_singular('media_list')  || is_singular('news')  || is_singular('movie')|| is_tax('menu_category') || is_tax('movie_cate') || is_tax('case_tag')  || is_page('case-list')|| in_array(148, get_post_ancestors($post->ID))): ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/style_cms.css?20211006" media="screen and (min-width:768px)">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/style_cms_SP.css?20211007" media="screen and (max-width:767px)">
<?php endif ?>
<?php if ( is_page(array('1125','5153','5164','5410'))) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/monitor.css?<?php echo date('Ymd-Hi'); ?>">
<?php endif; ?>
<?php if ( is_page(array('4877'))) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/b-story.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lity.min.css">
<?php endif; ?>
<?php if ( is_page(array('5290'))) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/benefit.css?<?php echo date('Ymd-Hi'); ?>">
<?php endif; ?>
<?php if(is_page('face') || is_parent_slug() === 'face' || is_page('body') || is_parent_slug() === 'body' || is_page('skin') || is_parent_slug() === 'skin' || is_page('other') || is_parent_slug() === 'other' || is_parent_slug() === 'faq' && !is_front_page()) : ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/style.trouble.css" />
<?php else: ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/style_other.css" />
<?php endif ?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/colorbox.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/colorbox.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/lite-youtube-embed/src/lite-yt-embed.css" />

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
</head>
<body<?php if (is_front_page()): ?> class="top"<?php endif; ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMXFCND"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php the_field('top_pop',5); ?>

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
				<?php endif ?> アールビューティークリニック銀座
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
					<div class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="アールビューティークリニック 銀座｜美容整形・美容外科・美容皮膚科"></a></div>
				<nav class="dNav pc">
					<ul>
						<li class="tel_area">
							<a class="tel" href="tel:03-6228-7881"><p>診療時間は［10:00~19:00 不定休］</p><span class="serif">03-6228-7881</span></a>
						</li>
						<li class="monitor_btn_area"><a href="<?php echo esc_url(home_url('/')); ?>monitor"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_woman_w.svg" alt=""><span>モニター募集</span></a></li>
						<li class="reserve_btn_area"><a href="<?php echo esc_url(home_url('/')); ?>reserve"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_bell_w.svg" alt=""><span>WEB予約</span></a></li>
						<li class="line_btn_area"><a href="https://lin.ee/sK3JB9b" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_line_green.svg" alt=""><span>LINE相談</span></a>
							<div class="line_hukidashi"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_gift.svg" alt="">クーポン配信中！</div></li>
					</ul>
				</nav>
			</div>
			<nav class="gNav">
        <div class="sp btn_area sp_btn_area f-kotei">
            <div class="line_btn_area"><a class="" href="https://lin.ee/sK3JB9b" target="_blank"><em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_line_w.svg" alt="">LINE予約</a></div>
            <div class="f-moni"><a class="" href="<?php echo esc_url(home_url('/')); ?>monitor"><em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_moni.svg" alt="">モニター募集</a></div>
            <div class="f-tel"><a class="" href="tel:03-6228-7881"><em>10時-19時</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tel_w.svg" alt="TEL">電話予約</a></div>
            <div class="f-yoyaku"><a class="" href="<?php echo esc_url(home_url('/')); ?>reserve"><em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_bell_w.svg" alt="">WEB予約</a></div>
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
                                   <li><a href="<?php echo esc_url(home_url('/')); ?>other/tatoo/">タトゥー除去</a></li>
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
          <div class="sp_gNav_list sp_gNav_list_flex">
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>case" id="header-sp-case">症例⼀覧</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>monitor" id="header-sp-monitor2">症例モニター募集</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>access" id="header-sp-acc">アクセス</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>doctor" id="header-sp-dr">ドクター紹介</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>clinic" id="header-sp-clinic">当院について</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>campaign" id="header-sp-cam">キャンペーン</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>first" id="header-sp-first">初めての⽅へ</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>first#ticket" id="header-sp-ticket">優待制度</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>minor" id="header-sp-minor">未成年の⽅へ</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>faq" id="header-sp-qa">Q&A</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>warranty" id="header-sp-warr">安心保証制度</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>blog" id="header-sp-blog">ブログ</a></h2>
          <h2 class="sp_nav_stitle"><a href="<?php echo esc_url(home_url('/')); ?>recruit" id="header-sp-rec">採用情報</a></h2>
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
                                       <li><a href="<?php echo esc_url(home_url('/')); ?>other/tatoo/">タトゥー除去</a></li>
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
					<li><a href="<?php echo esc_url(home_url('/')); ?>case" id="header-pc-case">症例⼀覧</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>doctor" id="header-pc-dr">ドクター紹介</a></li>
					<li><a href="<?php echo esc_url(home_url('/')); ?>access" id="header-pc-access">アクセス</a></li>
          <li class="current_list"><a href="<?php echo esc_url(home_url('/')); ?>clinic" id="header-pc-clinic">Rクリニックについて</a>
						<div class="sub_menu">
							<div class="menu_inner">

								<div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>clinic" id="header-pc-clinic2">クリニック案内</a></li>
                                  </ul>
								</div>
                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>first" id="header-pc-first">初めての⽅へ</a></li>
                                  </ul>
                </div>
                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>first#ticket" id="header-pc-ticket">優待制度</a></li>
                                  </ul>
                </div>
								<div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>minor" id="header-pc-minor">未成年の⽅へ</a></li>
                                  </ul>
								</div>
                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>faq" id="header-pc-qa">Q&A</a></li>
                                  </ul>
                </div>
								<div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>warranty" id="header-pc-warra">安心保証制度</a></li>
                                  </ul>
								</div>

								<div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>blog" id="header-pc-blog">ブログ</a></li>
                                  </ul>
								</div>
                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>beautygirl01" id="header-pc-bs">Beauty Story</a></li>
                                  </ul>
								</div>

                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>movie" id="header-pc-movie">配信動画</a></li>
                                  </ul>
                </div>
                <div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>online" id="header-pc-online">オンライン診療</a></li>
                                  </ul>
                </div>
								<div class="menu_list">
                                  <ul class="children">
                                    <li><a href="<?php echo esc_url(home_url('/')); ?>recruit" id="header-pc-rec">採用情報</a></li>
                                  </ul>
								</div>
							</div>
						</div>
					</li>
          					<li><a href="<?php echo esc_url(home_url('/')); ?>campaign" id="header-pc-cam">キャンペーン</a></li>
				</ul>
			</nav>
		</header>
    <div class="sp fixed_nav sp_btn_area f-kotei">
        <div class="line_btn_area"><a class="" href="https://lin.ee/sK3JB9b" target="_blank"><em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_line_w.svg" alt="">LINE予約</a><div class="line_hukidashi"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_gift.svg" alt="">クーポン配信中！</div></div>
        <div class="f-moni"><a class="" href="<?php echo esc_url(home_url('/')); ?>monitor"><em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_moni.svg" alt="">モニター募集</a></div>
        <div class="f-tel"><a class="" href="tel:03-6228-7881"><em>10時-19時</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_tel_w.svg" alt="TEL">電話予約</a></div>
        <div class="f-yoyaku"><a href="<?php echo esc_url(home_url('/')); ?>reserve"><em>24H受付</em><img src="<?php echo get_template_directory_uri(); ?>/images/ico_bell_w.svg" alt="">WEB予約</a></div>
    </div>
    <style>
  .f-kotei a {
      color: #fff;
  }
  .f-moni {
      width: 40% !important;
  }
  .line_btn_area a {
      background: #18b92a;
  }
  .f-moni a {
      background: #000;
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
  .line_btn_area a em{
    color:#18b92a;
  }
  .f-tel a em{
    color:#7a8b8e;
  }
  .f-moni a em{
    color:#000;
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
    </style>
	<article>
