

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
