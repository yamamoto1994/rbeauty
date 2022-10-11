<?php function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
		 //echo "<div class=\"pagenation\">\n";
		 //Prev：現在のページ値が１より大きい場合は表示
         if($paged > 1) echo "<div class=\"en_serif\"><a href='".get_pagenum_link($paged - 1)."'>PREV</a></div>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<div class=\"active en_serif\">".$i."</div>\n":"<div class=\"en_serif\"><a href='".get_pagenum_link($i)."'>".$i."</a></div>\n";
             }
         }
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) echo "<div class=\"en_serif\"><a href=\"".get_pagenum_link($paged + 1)."\">NEXT</a></div>\n";
		//echo "</div>\n";
     }
}; ?>

<?php
if (function_exists("pagination")) {
	pagination($additional_loop->max_num_pages);
}
?>