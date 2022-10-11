<?php get_header(); ?>


			<section class="fv">
				<div class="fv_slide_area">
                  <div class="swiper-wrapper">

					<?php if( have_rows('top_fv_slide') ): ?>
					  <?php $i = 1; ?>
					<?php while( have_rows('top_fv_slide') ): the_row();?>
					  <div class="swiper-slide fv_slide<?php $suji = $i; $i++; echo printf("%02d ", $suji); ?> shadow"><?php $top_slide_url = get_sub_field('top_slide_url'); if( $top_slide_url ): ?><a href="<?php echo apply_filters('the_content', $top_slide_url); ?>"<?php if( get_sub_field('top_slide_radio') == "はい"): ?> target="_blank"<?php else: ?><?php endif; ?>><?php endif; ?><?php $top_slide_ph = get_sub_field('top_slide_ph'); if( $top_slide_ph ): ?><figure><img class="pc" src="<?php echo $top_slide_ph; ?>" alt=""></figure><?php endif; ?><?php $top_slide_ph_sp = get_sub_field('top_slide_ph_sp'); if( $top_slide_ph_sp ): ?><figure><img class="sp" src="<?php echo $top_slide_ph_sp; ?>" alt=""></figure><?php endif; ?><?php $top_slide_txt = get_sub_field('top_slide_txt'); if( $top_slide_txt ): ?><h2 class="pc" data-swiper-parallax="300" data-swiper-parallax-duration="800" data-swiper-parallax-opacity="0"><img src="<?php echo $top_slide_txt; ?>" alt=""></h2><?php endif; ?><?php $top_slide_txt_sp = get_sub_field('top_slide_txt_sp'); if( $top_slide_txt_sp ): ?><h2 class="sp" data-swiper-parallax="300" data-swiper-parallax-duration="800" data-swiper-parallax-opacity="0"><img src="<?php echo $top_slide_txt_sp; ?>" alt=""></h2><?php endif; ?><?php $top_slide_url = get_sub_field('top_slide_url'); if( $top_slide_url ): ?></a><?php endif; ?></div>
					<?php endwhile;endif; ?>
                  </div>
					<div class="pagination"></div>
				</div>
				<div class="fv_slide_bg_area">
                  <div class="swiper-wrapper">
					<?php if( have_rows('top_fv_slide') ): ?>
					<?php while( have_rows('top_fv_slide') ): the_row();?>
                      <div class="swiper-slide" <?php $top_slide_ph = get_sub_field('top_slide_ph'); if( $top_slide_ph ): ?>style="background-image:url(<?php echo $top_slide_ph; ?>);"<?php endif; ?>></div>
					<?php endwhile;endif; ?>
                  </div>
				</div>
			</section>


			<section class="pickup">
			<div class="inner">
			<ul>
			<li><a href="<?php echo esc_url(home_url('/')); ?>face/eye01/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/pickup01.jpg" alt="SNSで大人気の二重整形 R式クイックアイ"></a></li>
			<li><a href="<?php echo esc_url(home_url('/')); ?>face/nose/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/pickup02.jpg" alt="自然で美しい仕上がり　美鼻整形"></a></li>
			<li><a href="<?php echo esc_url(home_url('/')); ?>trouble/978/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/pickup03.jpg" alt="切らないリフトアップ　医療HIFU（ハイフ）"></a></li>
			<li><a href="<?php echo esc_url(home_url('/')); ?>trouble/606/">
			<img src="<?php echo get_template_directory_uri(); ?>/images/top/pickup04.jpg" alt="20・30代からのエイジング対策 バッカルファット除去"></a></li>
			</ul>
			<div class="online_banner"><a href="<?php echo esc_url(home_url('/')); ?>online"><picture>
			<source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/images/online/online_bnr-sp.jpg" alt="オンライン診療" class="pickup-img">
			<img src="<?php echo get_template_directory_uri(); ?>/images/online/online_bnr.png" alt="オンライン診療" class="pickup-img">
			</picture></a></div>
			</div>
			</section>
			<style>
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
			@media screen and (max-width: 767px) {
				.pickup li{
					width:100%;
			margin-bottom: 15px;
			}
			.etc_area {
    background: #F8E0EB;
    padding: 50px 0;
    margin-bottom: 80px !important;
}
			}
			</style>

<?php $top_banner_slide = get_field('top_banner_slide'); if( $top_banner_slide ){ echo $top_banner_slide; }?>


<section class="banner_area">
<h2 class="serif logo_title">キャンペーン情報</h2>
<div class="banner_list_area">
<div class="swiper-wrapper">
<!-- Slides -->
<div class="swiper-slide"><a href="<?php echo esc_url(home_url('/')); ?>campaign"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-bnr.jpg" alt="10月限定キャンペーン"></a></div>
<div class="swiper-slide"><a href="<?php echo esc_url(home_url('/')); ?>line/"><img src="<?php echo get_template_directory_uri(); ?>/images/banner_top_line.jpg" alt="公式ラインアカウント"></a></div>
<div class="swiper-slide"><a class="inline_contents" href="#banner_contents02" rel="banner_modal"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-eye-bnr.jpg" alt="症例モニター募集中　二重整形 埋没法R式クイックイ　スタンダード２点留め両目￥60,000～"></a></div>
<div class="swiper-slide"><a class="inline_contents" href="#banner_contents07" rel="banner_modal"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-nose-bnr.jpg" alt="10月限定CP 鼻尖形成+鼻尖部軟骨移植 通常¥440,000～→ ¥340,000～"></a></div>
<div class="swiper-slide"><a class="inline_contents" href="#banner_contents03" rel="banner_modal"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-tareme-bnr.jpg" alt="10月限定CP 目尻切開+グラマラス形成 通常¥460,000～→ ¥250,000～"></a></div>
<div class="swiper-slide"><a class="inline_contents" href="#banner_contents08" rel="banner_modal"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-buccal-bnr.jpg" alt="10月限定CP バッカルファット除去 通常¥250,000→ ¥190,000"></a></div>
<div class="swiper-slide"><a class="inline_contents" href="#banner_contents04" rel="banner_modal"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-hifu02-bnr.jpg" alt="10月限定CP HIFU 通常¥70,000→ ¥59,000"></a></div>
<div class="swiper-slide"><a class="inline_contents" href="#banner_contents05" rel="banner_modal"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-ost-bnr.jpg" alt="10月限定　オステオポール除去無料（当院で他の鼻施術を受けられる方）"></a></div>
</div>
</div>
</section>

<div style="display: none;">
<section id="banner_contents02" class="banner_flex">
<h2 class="serif">二重整形 埋没法 モニター<br>R式クイックアイ</h2>
<div class="banner_flex_area">
<div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-bnr-eye-thum.jpg" alt="二重整形 埋没法 モニター R式クイックアイ"></div>
<div class="modal_banner_contents_area">
<div class="modal_banner_contents">
<div class="txt_area">
<p>大手美容外科で二重施術年間3,000例以上という豊富な経験があるからこそのクオリティーでお客様一人ひとりに合ったデザインをご提案させていただきます！<br>まぶたの裏側から糸を通す埋没法は「まぶたの表に傷をつけない」「手術後からメイクができる」「ダウンタイムが短い」という特徴があり、また、そのため「理想的な目元に近づける」と満足度が高く、全国からも富田医師を指名して来院されます。あなたも理想のお目元になってみませんか？</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area gray_box">
<p class="with-checked">整形がバレたくない</p>
<p class="with-checked">二重になりたい</p>
<p class="with-checked">食い込みが自然な仕上がりにしたい</p>
<p class="with-checked">今のアイプチラインにしたい！</p>
<p class="with-checked">ダウンタイムが取れない</p>
<p>こんな方にオススメです！</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area">
<p>【施術内容】<br>
二重埋没法<br>
R式クイック スタンダード両目<br>
定価￥80,000￥→モニター価格￥64,000<br>
【募集条件】<br>
〇施術前、直後の写真、動画撮影<br>
〇1週間後、1ヶ月後の経過写真撮影のため来院が可能な方<br>
【リスク】<br>
直後のゴロゴロ感、腫れ、内出血、左右差など<br>
</p>
</div>
</div>
</div>
<div class="btn_area btn_flex_area btn_flex_c_area">
<div class="btn btn_gray btn_hv_black btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>face/eye01/">施術について詳しく見る</a></div>
<div class="btn btn_bg_black btn_hv_black btn_hv_white btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>reserve/" rel="noopener noreferrer">予約する</a></div>
</div>
</div>
</section>
<section id="banner_contents07" class="banner_flex">
<h2 class="serif">【10月限定CP】鼻施術</h2>
<div class="banner_flex_area">
<div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-bnr-nose-thum.jpg" alt="【10月限定CP】鼻施術"></div>
<div class="modal_banner_contents_area">
<div class="modal_banner_contents">
<div class="txt_area">
<p>お鼻のバランスで、あなたの顔の印象は変わります！<br>
【10月限定CP】鼻尖形成（団子鼻解消術）+鼻尖部軟骨移植<br>
通常￥440,000〜 CP価格￥340,000〜<br>
鼻整形のエキスパート<br>
吉⽥ 慧 副院長が執刀します！</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area gray_box">
<p class="with-checked">団子鼻を解消したい</p>
<p class="with-checked">鼻先が丸いのが気になる</p>
<p class="with-checked">憧れのオルチャンノーズになりたい</p>
<p class="with-checked">鼻筋を通してシュッとさせたい</p>
<p class="with-checked">周囲にバレたくない</p>
<p>こんな方にオススメです！</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area">
<p>【施術内容】<br>
・鼻尖形成（団子鼻解消術）+鼻尖部軟骨移植<br>
通常 ¥440,000～ → CP価格¥340,000～<br>
【リスク】<br>
むくみ・腫れ・内出血 など<br>
</p>
</div>
</div>
</div>
<div class="btn_area btn_flex_area btn_flex_c_area">
<div class="btn btn_gray btn_hv_black btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>face/nose/">施術について詳しく見る</a></div>
<div class="btn btn_bg_black btn_hv_black btn_hv_white btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>reserve/" rel="noopener noreferrer">予約する</a></div>
</div>
</div>
</section>
<section id="banner_contents03" class="banner_flex">
<h2 class="serif">【10月限定CP】目元施術</h2>
<div class="banner_flex_area">
<div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-bnr-tareme-thum.jpg" alt="【10月限定CP】目元施術"></div>
<div class="modal_banner_contents_area">
<div class="modal_banner_contents">
<div class="txt_area">
<p>デカ目、タレ目形成なら吉田副院長にお任せください！<br>
【10月限定CP】目尻切開+グラマラス<br>
通常￥460,000〜　→CP価格￥250,000〜<br>
タレ目整形のエキスパート<br>
吉⽥ 慧 副院長が執刀します！</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area gray_box">
<p class="with-checked">愛される目元にしたい</p>
<p class="with-checked">タレ目にしたい</p>
<p class="with-checked">デカ目にしたい</p>
<p class="with-checked">大きな瞳でウルウルさせたい</p>
<p>こんな方にオススメです！</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area">
<p>【施術内容】<br>
・目尻切開+グラマラス<br>
通常 ¥460,000～ → CP価格¥250,000～<br>
【リスク】<br>
むくみ・腫れ・内出血・引きつれなど
</p>
</div>
</div>
</div>
<div class="btn_area btn_flex_area btn_flex_c_area">
<div class="btn btn_gray btn_hv_black btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>face/eye01/">施術について詳しく見る</a></div>
<div class="btn btn_bg_black btn_hv_black btn_hv_white btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>reserve/" rel="noopener noreferrer">予約する</a></div>
</div>
</div>
</section>
<section id="banner_contents04" class="banner_flex">
<h2 class="serif">【10月限定CP】切らない小顔治療</h2>
<div class="banner_flex_area">
<div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-bnr-hifu-thum.jpg" alt="【10月限定CP】HIFU"></div>
<div class="modal_banner_contents_area">
<div class="modal_banner_contents">
<div class="txt_area">
<p>たるみに劇的な効果をもたらす、切らないリフトアップで若々しい印象へ！<br>
【10月限定CP】HIFU<br>
通常 スタンダード1回￥70,000　→CP価格￥59,000</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area gray_box">
<p class="with-checked">フェイスラインのたるみが気になる</p>
<p class="with-checked">ダウンタイムのない小顔治療を受けたい</p>
<p class="with-checked">頬のたるみが気になる</p>
<p class="with-checked">ほうれい線や小ジワが気になる</p>
<p class="with-checked">痛みはない方がよい</p>
<p>こんな方にオススメです！</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area">
<p>【施術内容】<br>
・HIFU<br>
通常 スタンダード1回￥70,000　→CP価格￥59,000<br>
【リスク】<br>
まれに施術後1週間程、筋肉痛のような痛みを生じることがありますが、一時的なものですのでご安心ください。
</p>
</div>
</div>
</div>
<div class="btn_area btn_flex_area btn_flex_c_area">
<div class="btn btn_gray btn_hv_black btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>trouble/978/">施術について詳しく見る</a></div>
<div class="btn btn_bg_black btn_hv_black btn_hv_white btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>reserve/" rel="noopener noreferrer">予約する</a></div>
</div>
</div>
</section>

<section id="banner_contents08" class="banner_flex">
<h2 class="serif">【10月限定CP】輪郭スッキリ治療</h2>
<div class="banner_flex_area">
<div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-bnr-buccal-thum.jpg" alt="【10月限定CP】バッカルファット除去"></div>
<div class="modal_banner_contents_area">
<div class="modal_banner_contents">
<div class="txt_area">
<p>20・30代からのエイジング対策！<br>
【10月限定CP】バッカルファット除去<br>
通常 ￥250,000　→CP価格￥190,000</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area gray_box">
<p class="with-checked">下膨れ顔が気になっている</p>
<p class="with-checked">顔痩せができない</p>
<p class="with-checked">ほうれい線が目立ってきた</p>
<p class="with-checked">将来的なたるみ対策をしたい</p>
<p class="with-checked">ブルドッグ顔にはなりたくない</p>
<p>こんな方にオススメです！</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area">
<p>【施術内容】<br>
・バッカルファット除去<br>
通常 ￥250,000　→CP価格￥190,000<br>
【リスク】<br>
腫れ、内出血、感染
</p>
</div>
</div>
</div>
<div class="btn_area btn_flex_area btn_flex_c_area">
<div class="btn btn_gray btn_hv_black btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>trouble/606/">施術について詳しく見る</a></div>
<div class="btn btn_bg_black btn_hv_black btn_hv_white btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>reserve/" rel="noopener noreferrer">予約する</a></div>
</div>
</div>
</section>

<section id="banner_contents05" class="banner_flex">
<h2 class="serif">【10月限定CP】オステオポール除去</h2>
<div class="banner_flex_area">
<div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/top/cp-bnr-ost-thum.jpg" alt="【10月限定CP】オステオポール除去"></div>
<div class="modal_banner_contents_area">
<div class="modal_banner_contents">
<div class="txt_area">
<p>気になるお鼻のSOS！いつでもご相談ください！<br>
【10月限定CP】オステオポール除去<br>
＜無料＞￥0<br>
※当院で他の鼻施術を受けられる方限定</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area gray_box">
<p class="with-checked">他院で移植をした鼻先の形が気になる</p>
<p class="with-checked">他院施術で鼻先が固くなってきた</p>
<p class="with-checked">鼻先以外にも他院修正してもらいたい箇所がある<br>ご相談は無料です！</p>
<p>こんな方にオススメです！</p>
</div>
</div>
<div class="modal_banner_contents">
<div class="txt_area">
<p>【施術内容】<br>
・オステオポール除去<br>
＜無料＞￥0<br>
【リスク】<br>
腫れ、内出血、赤みなど
</p>
</div>
</div>
</div>
<div class="btn_area btn_flex_area btn_flex_c_area">
<div class="btn btn_gray btn_hv_black btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>face/nose/">施術について詳しく見る</a></div>
<div class="btn btn_bg_black btn_hv_black btn_hv_white btn_w280"><a href="<?php echo esc_url(home_url('/')); ?>reserve/" rel="noopener noreferrer">予約する</a></div>
</div>
</div>
</section>
</div>
</section>
</section>



<section class="etc_area">
<div class="inner">
<a href="<?php echo esc_url(home_url('/')); ?>beautygirl01/"><figure><img src="<?php echo get_template_directory_uri(); ?>/images/b-story/bnr-top01.jpg" alt="憧れのアノ人は何を受けた？整形ヒストリー大公開" loading="lazy"></figure></a>
</div>
</section>



        <?php if( have_rows('top_trouble') ): ?>
            <?php while( have_rows('top_trouble') ): the_row();?>
             <section class="trouble_area">
				<div class="title_area">
                    <h2 class="serif logo_title">お悩みの部位から探す</h2>
				</div>
				<section class="face trouble_contents_area">
					<div class="inner trouble_list_title_area">
                       <h3 class="trouble_list_title"><span class="en_serif en_title">FACE</span><span class="serif jp_title">お顔のお悩み</span></h3>
                        <p class="pc"><?php $top_trouble_face = get_sub_field('top_trouble_face'); if( $top_trouble_face ): ?><?php echo $top_trouble_face; ?><?php endif; ?></p>
					</div>
                    <div class="trouble_list_area bg_pink_yellow">
						<div class="inner">
							<p class="sp"><?php $top_trouble_face = get_sub_field('top_trouble_face'); if( $top_trouble_face ): ?><?php echo $top_trouble_face; ?><?php endif; ?></p>
                            <div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/trouble_face_ph.png" alt="" loading="lazy"></div>
                            <div class="trouble_list">
								<?php $top_trouble_face_menu = get_sub_field('top_trouble_face_menu'); if( $top_trouble_face_menu ): ?><?php echo $top_trouble_face_menu; ?><?php endif; ?>
                            </div>
						</div>
                    </div>
					<div class="ico ico01 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_pink.png" alt="" loading="lazy"></div>
					<div class="ico ico02 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_green.png" alt="" loading="lazy"></div>
					<div class="ico ico03 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_blue.png" alt="" loading="lazy"></div>
				</section>
				<section class="body trouble_contents_area">
					<div class="inner trouble_list_title_area">
                       <h3 class="trouble_list_title"><span class="en_serif en_title">BODY</span><span class="serif jp_title">お⾝体のお悩み</span></h3>
					  <p class="pc"><?php $top_trouble_body = get_sub_field('top_trouble_body'); if( $top_trouble_body ): ?><?php echo $top_trouble_body; ?><?php endif; ?></p>
					</div>
                    <div class="trouble_list_area bg_blue_purple">
						<div class="inner">
							<p class="sp"><?php $top_trouble_body = get_sub_field('top_trouble_body'); if( $top_trouble_body ): ?><?php echo $top_trouble_body; ?><?php endif; ?></p>
                            <div class="ph"><img src="<?php echo get_template_directory_uri(); ?>/images/trouble_body_ph.png" alt="" loading="lazy"></div>
                            <div class="trouble_list">
								<?php $top_trouble_body_menu = get_sub_field('top_trouble_body_menu'); if( $top_trouble_body_menu ): ?><?php echo $top_trouble_body_menu; ?><?php endif; ?>
                            </div>
						</div>
                    </div>
					<div class="ico ico01 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_yellow.png" alt="" loading="lazy"></div>
					<div class="ico ico02 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_blue.png" alt="" loading="lazy"></div>
					<div class="ico ico03 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_purple.png" alt="" loading="lazy"></div>
				</section>
				<section class="skin trouble_contents_area">
					<div class="inner trouble_list_title_area">
                       <h3 class="trouble_list_title"><span class="en_serif en_title">SKIN</span><span class="serif jp_title">お肌のお悩み</span></h3>
					   <p class="pc"><?php $top_trouble_skin = get_sub_field('top_trouble_skin'); if( $top_trouble_skin ): ?><?php echo $top_trouble_skin; ?><?php endif; ?></p>
					</div>
                    <div class="trouble_list_area bg_orange_blue">
						<div class="inner">
							<p class="sp"><?php $top_trouble_skin = get_sub_field('top_trouble_skin'); if( $top_trouble_skin ): ?><?php echo $top_trouble_skin; ?><?php endif; ?></p>
                            <div class="ph"><img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/trouble_skin_ph.png" alt="" loading="lazy"><img class="sp" src="<?php echo get_template_directory_uri(); ?>/images/trouble_skin_ph_sp.png" alt="" loading="lazy"></div>
                            <div class="trouble_list">
                               <?php $top_trouble_skin_menu = get_sub_field('top_trouble_skin_menu'); if( $top_trouble_skin_menu ): ?><?php echo $top_trouble_skin_menu; ?><?php endif; ?>
                            </div>
						</div>
                    </div>
					<div class="ico ico01 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_blue.png" alt="" loading="lazy"></div>
					<div class="ico ico02 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_green.png" alt="" loading="lazy"></div>
					<div class="ico ico03 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_pink.png" alt="" loading="lazy"></div>
				</section>
			</section>
<?php endwhile;endif; ?>

			<section class="menu_area">
				<div class="title_area">
                    <h2 class="serif logo_title">施術メニュー</h2>
				</div>

				<section class="bg_gray_white surgery menu_contents_area">
					<div class="inner">
                        <div class="menu_list_title_area">
                           <h3 class="menu_list_title"><span class="serif jp_title">美容外科</span><span class="en_serif en_title">Cosmetic Surgery</span></h3>
                        </div>
                       <ul>
                        <?php
                          $categories = get_terms( 'menu_category', array(
                              'hide_empty' => 0,
                              'child_of' => 4,
                               )
                          );
                          foreach($categories as $value):
                          ?>
                          <li>
							  <a href="<?php echo esc_url(home_url('/')); ?>menu/menu_surgery#<?php echo $value->slug; ?>">
							   <div class="ph"><img src="<?php $cate_ph = get_field('cate_ph','category_'.$value->term_id); ?><?php echo $cate_ph; ?>" alt="" loading="lazy"></div>
                                <h3 class="ico_line_grade ico_line_l_grade serif"><?php echo $value->name;?></h3>
							  </a>
						   </li>
                          <?php endforeach; ?>
                        </ul>
                          <div class="btn btn_grade btn_w280 btn_round"><a href="<?php echo esc_url(home_url('/')); ?>menu/menu_surgery#menu_surgery">施術⼀覧を⾒る</a></div>
					</div>
				</section>
				<section class="dermatology menu_contents_area">
					<div class="inner">
                        <div class="menu_list_title_area">
                           <h3 class="menu_list_title"><span class="serif jp_title">美容⽪膚科</span><span class="en_serif en_title">Cosmetic Dermatology</span></h3>
                        </div>
                       <ul>
                        <?php
                          $categories = get_terms( 'menu_category', array(
                              'hide_empty' => 0,
                              'child_of' => 5,
                               )
                          );
                          foreach($categories as $value):
                          ?>
                          <li>
							  <a href="<?php echo esc_url(home_url('/')); ?>menu/menu_dermatology#<?php echo $value->slug; ?>">
							   <div class="ph"><img src="<?php $cate_ph = get_field('cate_ph','category_'.$value->term_id); ?><?php echo $cate_ph; ?>" alt="" loading="lazy"></div>
                                <h3 class="ico_line_grade ico_line_l_grade serif"><?php echo $value->name;?></h3>
							  </a>
						   </li>
                          <?php endforeach; ?>
                        </ul>
                          <div class="btn btn_grade btn_w280 btn_round"><a href="<?php echo esc_url(home_url('/')); ?>menu/menu_dermatology#menu_dermatology">施術⼀覧を⾒る</a></div>
					</div>
				</section>
				<section class="bg_gray_white other menu_contents_area">
					<div class="inner">
                        <div class="menu_list_title_area">
                           <h3 class="menu_list_title"><span class="serif jp_title">その他</span><span class="en_serif en_title">Other</span></h3>
                        </div>
                       <ul>
                        <?php
                          $categories = get_terms( 'menu_category', array(
                              'hide_empty' => 0,
                              'child_of' => 3,
                               )
                          );
                          foreach($categories as $value):
                          ?>
                          <li>
							  <a href="<?php echo esc_url(home_url('/')); ?>menu/menu_other#<?php echo $value->slug; ?>">
							   <div class="ph"><img src="<?php $cate_ph = get_field('cate_ph','category_'.$value->term_id); ?><?php echo $cate_ph; ?>" alt="" loading="lazy"></div>
                                <h3 class="ico_line_grade ico_line_l_grade serif"><?php echo $value->name;?></h3>
							  </a>
						   </li>
                          <?php endforeach; ?>
                        </ul>
                          <div class="btn btn_grade btn_w280 btn_round"><a href="<?php echo esc_url(home_url('/')); ?>menu/menu_other#menu_other">施術⼀覧を⾒る</a></div>
					</div>
				</section>
			</section>
		<section class="instagrammer_area">
				<p class="txt en_serif">Thank you for</p>
				<div class="slide_area instagrammer_slide_area">
                  <div class="swiper-wrapper loop">
                    <?php query_posts( array( 'post_type' =>array('case_instagrammer'),'posts_per_page' => -1 )); ?>
                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                      <div class="swiper-slide case_hv"><a class="inline_contents" href="#case_insta_contents<?php echo get_the_ID(); ?>" rel="case_insta_modal">
                          <?php $case_insta_radio = get_field('case_insta_radio'); if ($case_insta_radio == "画像"): ?><img src="<?php $case_insta_ph = get_field('case_insta_ph'); ?><?php echo $case_insta_ph; ?>" alt="" loading="lazy"><?php elseif ($case_insta_radio == "動画"): ?>
							  <video controls autoplay muted loop playsinline>
                                    <source src="<?php the_field('case_insta_movie'); ?>" type="video/mp4">
                                  </video><?php endif; ?>
						  </a>
						  <p><?php $case_insta_name = get_field('case_insta_name'); ?><?php echo $case_insta_name; ?></p>
                      </div>
                    <?php endwhile; endif;wp_reset_query();?>
                  </div>
				</div>
			</section>

<div style="display: none;">
<?php query_posts( array( 'post_type' =>array('case_instagrammer'),'posts_per_page' => -1 )); ?>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<section id="case_insta_contents<?php echo get_the_ID(); ?>" class="modal_flex">
    <div class="ph">
	<?php $case_radio = get_field('case_radio'); if ($case_radio == "画像"): ?><img src="<?php $case_ph = get_field('case_ph'); ?><?php echo $case_ph; ?>" alt="" loading="lazy"><?php elseif ($case_radio == "動画"): ?>
							  <video controls autoplay muted loop playsinline>
                                    <source src="<?php the_field('case_movie'); ?>" type="video/mp4">
                                  </video><?php endif; ?>
	</div>
	<div class="modal_case_contents_area">
		<div class="modal_case_contents_inner">
          <div class="modal_case_title_area">
              <div class="icon"><?php $case_ico = get_field('case_ico'); if( $case_ico ): ?><img src="<?php echo $case_ico; ?>" alt=""><?php else:?><img src="<?php echo get_template_directory_uri(); ?>/images/trouble/cate_fce_hutae.jpg" alt=""><?php endif; ?></div>
              <p class="clinic_name">R CLINIC</p>
			  <div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_instagram.svg" alt=""></div>
          </div>
          <h2 class="serif"><?php the_title(); ?></h2>
  <?php if( have_rows('case_block') ): ?>
          <?php while( have_rows('case_block') ): the_row();?>
          <div class="modal_case_contents">
              <?php $case_details_title = get_sub_field('case_details_title'); if( $case_details_title ): ?><h3><?php echo $case_details_title; ?></h3><?php endif; ?>
              <?php $case_details_txt = get_sub_field('case_details_txt'); if( $case_details_txt ): ?>
			  <div class="txt_area">
                  <?php echo $case_details_txt; ?>
              </div>
			 <?php endif; ?>
          </div>
          <?php endwhile; ?>
      <?php endif; ?>
			<div class="btn btn_gray btn_hv_black"><a href="<?php the_field('case_url'); ?>">この症例の施術を⾒る</a></div>
			<div class="btn btn_bg_black btn_hv_black btn_hv_white"><a href="https://clinics.medley.life/reservation/5f8d518fae8ded65041eca46" target="_blank">予約する</a></div>
		</div>
	</div>
</section>
<?php endwhile; endif;wp_reset_query();?>
</div>

<!--<section class="case_area">
              <div class="inner">
                  <div class="case_list_title_area">
                     <h2 class="case_list_title"><span class="en_serif en_title">Case</span><span class="serif jp_title">症例写真のご紹介</span></h2>
                  </div>
                   <ul>
                    <?php query_posts( array( 'post_type' =>array('case_top'),'posts_per_page' => 12 )); ?>
                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                      <li class="case_hv">
                          <a class="inline_contents" href="#case_contents<?php echo get_the_ID(); ?>" rel="case_modal"><?php $case_radio = get_field('case_radio'); if ($case_radio == "画像"): ?><img src="<?php $case_ph = get_field('case_ph'); ?><?php echo $case_ph; ?>" alt=""><?php elseif ($case_radio == "動画"): ?>
							  <video controls autoplay muted loop playsinline>
                                    <source src="<?php the_field('case_movie'); ?>" type="video/mp4">
                                  </video><?php endif; ?></a>
						  <h3 class="ico_line_grade ico_line_t_grade"><?php the_title(); ?></h3>
                      </li>
                    <?php endwhile; endif;wp_reset_query();?>
                   </ul>
				  <div class="btn btn_grade btn_w280 btn_round"><a href="<?php echo esc_url(home_url('/')); ?>case">施術⼀覧を⾒る</a></div>
				  <div class="banner"><a href="<?php echo esc_url(home_url('/')); ?>monitor"><img src="<?php echo get_template_directory_uri(); ?>/images/trouble/diet/monitor_apply_bnr.jpg" alt="格安で人気施術を受けられるチャンス！症例モニター募集"></a></div>
				</div>
                <div class="ico ico01 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_blue.png" alt=""></div>
                <div class="ico ico02 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_purple.png" alt=""></div>
                <div class="ico ico03 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_green.png" alt=""></div>
                <div class="ico ico04 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_yellow.png" alt=""></div>
                <div class="ico ico05 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_blue.png" alt=""></div>
                <div class="ico ico06 fadein"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_square_purple.png" alt=""></div>
			</section>



<div style="display: none;">
<?php query_posts( array( 'post_type' =>array('case_top'),'posts_per_page' => -1 )); ?>
<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<section id="case_contents<?php echo get_the_ID(); ?>" class="modal_flex">
    <div class="ph">
	<?php $case_radio = get_field('case_radio'); if ($case_radio == "画像"): ?><img src="<?php $case_ph = get_field('case_ph'); ?><?php echo $case_ph; ?>" alt=""><?php elseif ($case_radio == "動画"): ?>
							  <video controls autoplay muted loop playsinline>
                                    <source src="<?php the_field('case_movie'); ?>" type="video/mp4">
                                  </video><?php endif; ?>
	</div>
	<div class="modal_case_contents_area">
		<div class="modal_case_contents_inner">
          <div class="modal_case_title_area">
              <div class="icon"><img src="<?php $case_ico = get_field('case_ico'); ?><?php echo $case_ico; ?>" alt=""></div>
              <p class="clinic_name">R CLINIC</p>
			  <div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_instagram.svg" alt=""></div>
          </div>
          <h2 class="serif"><?php the_title(); ?></h2>
  <?php if( have_rows('case_block') ): ?>
          <?php while( have_rows('case_block') ): the_row();?>
          <div class="modal_case_contents">
              <?php $case_details_title = get_sub_field('case_details_title'); if( $case_details_title ): ?><h3><?php echo $case_details_title; ?></h3><?php endif; ?>
              <?php $case_details_txt = get_sub_field('case_details_txt'); if( $case_details_txt ): ?>
			  <div class="txt_area">
                  <?php echo $case_details_txt; ?>
              </div>
			 <?php endif; ?>
          </div>
          <?php endwhile; ?>
      <?php endif; ?>
			<div class="btn btn_gray btn_hv_black"><a href="<?php the_field('case_url'); ?>">この症例の施術を⾒る</a></div>
			<div class="btn btn_bg_black btn_hv_black btn_hv_white"><a href="https://clinics.medley.life/reservation/5f8d518fae8ded65041eca46" target="_blank">予約する</a></div>
		</div>
	</div>
</section>
<?php endwhile; endif;wp_reset_query();?>
</div>-->



<?php $top_clinic = get_field('top_clinic'); if( $top_clinic ){ echo $top_clinic; }?>
<?php $top_doctor = get_field('top_doctor'); if( $top_doctor ){ echo $top_doctor; }?>
<?php $top_sns = get_field('top_sns'); if( $top_sns ){ echo $top_sns; }?>


<section class="movie_area">
<div class="basic_list_title_area">
<h2 class="basic_list_title"><span class="en_serif en_title">Movie</span><span class="serif jp_title">動画一覧</span></h2>
</div>
                    <div id="movie">
											<div class="swiper-wrapper">
<?php query_posts( array( 'post_type' =>array('movie'),'posts_per_page' => 6 )); ?>
									 <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
												 <div class="swiper-slide"><div class="movie"><lite-youtube class="lazyload" videoid="<?php $movie_id = get_field('movie_id'); if( $movie_id ): ?><?php echo $movie_id; ?><?php endif; ?>" playlabel="Play"></lite-youtube></div></div>
<?php endwhile; endif;wp_reset_query();?>
											 </div>
                    </div>
                <div class="swiper_prev"></div>
                <div class="swiper_next"></div>
				<div class="btn btn_grade btn_w280 btn_round"><a href="<?php echo esc_url(home_url('/')); ?>movie">⼀覧を⾒る</a></div>
		</section>
		<style>lite-youtube {
		position: absolute;
		top: 0;
		right: 0;
		width: 100% !important;
		height: 100% !important;
		z-index: 9;
		}</style>

		<section class="news_area">
				<div class="inner">
					<div class="news_title_area">
		              <h2 class="co_white en_serif">NEWS</h2>
						<div class="btn btn_gray btn_hv_black btn_w150 pc"><a href="<?php echo esc_url(home_url('/')); ?>news">⼀覧を⾒る</a></div>
					</div>
					<div class="txt_area">
								<dl>
							<?php query_posts( array( 'post_type' =>array('news'),'posts_per_page' => 4 )); ?>
		                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
									<dt class="fo14"><?php the_time('Y.m.d'); ?></dt>
									<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
							<?php endwhile; endif;wp_reset_query();?>
						</dl>
						<div class="btn btn_gray btn_hv_black btn_w150 sp"><a href="<?php echo esc_url(home_url('/')); ?>news">⼀覧を⾒る</a></div>
							</div>
				</div>
		</section>

<?php get_footer(); ?>
