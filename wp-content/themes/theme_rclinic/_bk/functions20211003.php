<?php
// wp_head()の出力タグの消去
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
	remove_action('wp_head', 'feed_links_extra',3,0);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'parent_post_rel_link');
	remove_action('wp_head', 'start_post_rel_link');
	remove_action('wp_head', 'rel_canonical');
// ウィジェット有効化
    register_sidebars( 5, array( //ここの数字で許可するウィジェット数を指定
        'before_widget' => '<div class="widget">',
		//ウィジェット項目の前後に出力するタグ
        'after_widget' => '</div>',
		//ウィジェット項目のタイトル前後に出力するタグ
        'before_title' => '<h3 class="side-title">',
        'after_title' => '</h3>',
    ));
// カスタムメニュー有効化
	register_nav_menus( array(
		'primary' => '',
	));
	add_theme_support( 'nav-menus' );
//　背景画像をアップロードして変更できる機能を有効化
	add_custom_background();
//　アイキャッチ画像に対応
	add_theme_support( 'post-thumbnails' );
	//　↓width,height,切り抜き(true)orリサイズ(false)
	set_post_thumbnail_size( 730, 730, true);
    add_image_size('front_size', 120, 120, true);
   	add_image_size('blogdetail_size', 1000, 1000, false);?>
<?php
/***************************************************************
■ダッシュボード関連
****************************************************************/
?>
<?php //ダッシュボードメタボックス削除
function my_remove_dashboard_widgets() {
  global $wp_meta_boxes;
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);//被リンク
  //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);//現在の状況
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);//プラグイン
  unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);//最近のコメント
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);//クイック投稿
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);//最近の下書き
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);//WordPress開発ブログ
  unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);//WordPressフォーラム
}
add_action('wp_dashboard_setup', 'my_remove_dashboard_widgets' );
?>
<?php
/* インラインスタイル削除 */
function remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'remove_recent_comments_style' );
?>
<?php
/* the_excerpt() [...]を消す */
function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>
<?php
add_filter( 'category_template', 'my_category_template' );
function my_category_template( $template ) {
  if ( '' == $template || false !== strpos( $template, '/category.php' ) ) {
    $category = get_queried_object();
    $templates = array();
    while ( $category->parent ) {
      $category = get_category( $category->parent );
      $templates[] = "category-{$category->slug}.php";
      $templates[] = "category-{$category->term_id}.php";
    }
    if ( $temp = locate_template( $templates ) )
      $template = $temp;
  }
  return $template;
}
?>
<?php
// 管理画面カスタマイズ
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('updates');
    $wp_admin_bar->remove_menu('comments');
    $wp_admin_bar->remove_menu('new-content');
    $wp_admin_bar->remove_menu('view');
	$wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

function custom_login_logo() {
 echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/images/logo_l.svg) no-repeat top center !important;height:70px !important;width:330px !important; background-size:100%;}</style>'; }
add_action('login_head', 'custom_login_logo');
add_filter('pre_site_transient_update_core', '__return_zero');
remove_action('wp_version_check', 'wp_version_check');
//remove_action('admin_init', '_maybe_update_core');
function custom_admin_footer() {
 echo '　';
 }
add_filter('admin_footer_text', 'custom_admin_footer');
 function custom_login_logo_url() {
    return get_bloginfo( 'url' );
 }
 add_filter('login_headerurl', 'custom_login_logo_url');
 function custom_login_logo_url_title() {
    return 'R Clinic';
 }
 add_filter('login_headertitle', 'custom_login_logo_url_title');
?>
<?php
function edit_admin_menus() {
	global $menu;
	global $submenu;

	$menu[5][0] = '診療・お悩み'; // 投稿
	$submenu['edit.php'][5][0] = '診療・お悩み一覧';
}
add_action( 'admin_menu', 'edit_admin_menus' );
?>
<?php
add_action( 'parse_query', 'my_parse_query' );
function my_parse_query( $query ) {
  if ( ! isset( $query->query_vars['paged'] ) && isset( $query->query_vars['page'] ) )
    $query->query_vars['paged'] = $query->query_vars['page'];
}
?>
<?php
function add_admin_menu_separator($position) {
    global $menu;
    $index = 0;
    foreach($menu as $offset => $section) {
        if (substr($section[2],0,9)=='separator') {
            $index++;
        }
        if ($offset>=$position) {
            $menu[$position] = array(
                '',
                'read',
                "separator{$index}",
                '',
                'wp-menu-separator'
            );
            break;
        }
    }
    ksort( $menu );
}?>
<?php
// 管理画面のメニュー項目の順序の変更
function custom_menu_order($menu_ord) {
	if (!$menu_ord) return true;

	return array(
		'index.php',
		'separator1',
		'edit.php',
		'edit.php?post_type=news',
		'edit.php?post_type=philosophy',
		'separator2',
		'edit.php?post_type=page',
		'upload.php',
	    'options-general.php',
		'tools.php',
		'link-manager.php',
		'edit-comments.php',
		'themes.php',
		'users.php',
		'plugins.php',
	);
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');
?>
<?php
// メニューを非表示にする
 function remove_menu () {
	// if (!current_user_can('level_10')) {
     global $menu;
     global $current_user;
     get_currentuserinfo();
     if($current_user -> user_login == 'rclinic_admin_editor') {
     remove_menu_page('index.php'); // ダッシュボード
     remove_menu_page('edit.php'); // 投稿
     remove_menu_page('link-manager.php'); // リンク
     remove_menu_page('upload.php'); // メディア
     remove_menu_page('edit.php?post_type=page'); // 固定ページ
     remove_menu_page('edit-tags.php?taxonomy=post_tag'); // タグ
     remove_menu_page('edit-comments.php'); // コメント
//     remove_menu_page('profile.php'); // プロフィール(管理者以外のユーザー用)
     remove_menu_page('aiowpsec'); // セキュリテッィ
     remove_menu_page('acf');
     remove_menu_page('cptui_main_menu'); // UI
     remove_menu_page('themes.php'); // 外観
     remove_menu_page('plugins.php'); // プラグイン
//     remove_menu_page('users.php'); // ユーザー
     remove_menu_page('options-general.php'); // 設定
     remove_menu_page('tools.php'); // ツール
     remove_menu_page('edit.php?post_type=mtssb_article');

    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag');// タグ
    remove_submenu_page('edit.php', 'wpguy_category_order_options');
}
 }
 add_action('admin_menu', 'remove_menu');
?>
<?php
function post_is_in_descendant_category( $cats, $_post = null )
{
 foreach ( (array) $cats as $cat ) {
  // get_term_children() accepts integer ID only
  $descendants = get_term_children( (int) $cat, 'category');
  if ( $descendants && in_category( $descendants, $_post ) )
   return true;
 }
 return false;
}
?>
<?php
//固定ページの親ページをスラッグで判定する関数
function ps_get_root_page( $cur_post, $cnt = 0 ) {
	if ( $cnt > 100 ) { return false; }
	$cnt++;
	if ( $cur_post->post_parent == 0 ) {
		$root_page = $cur_post;
	} else {
		$root_page = ps_get_root_page( get_post( $cur_post->post_parent ), $cnt );
	}
	return $root_page;
}
?>
<?php
add_filter('upload_post_params', 'custom_upload_post_params');
function custom_upload_post_params( $post_params )
{
	$post_params["short"]=0;
	$post_params["fetch"]=1;
	return $post_params;
}
?>
<?php
function rm_wpautop($content) {
global $post;
// Get the keys and values of the custom fields:
if(preg_match('||siu',$content)){
remove_filter('the_content', 'wpautop');
} else {
add_filter('the_content', 'wpautop');
}
return $content;
}
// Hook into the Plugin API
add_filter('the_content', 'rm_wpautop', 9);
?>
<?php add_filter('show_admin_bar', '__return_false');?>
<?php function custom_archive_title( $title ){
    if ( is_post_type_archive() ) {
        if ( is_year() ) {
            $title = post_type_archive_title( '', false ) . ' ' . sprintf( __( 'Year: %s' ), get_the_date( _x( 'Y', 'yearly archives date format' ) ) );
        } elseif ( is_month() ) {
            $title = post_type_archive_title( '', false ) . ' ' . sprintf( __( 'Month: %s' ), get_the_date( _x( 'F Y', 'monthly archives date format' ) ) );
        } elseif ( is_day() ) {
            $title = post_type_archive_title( '', false ) . ' ' . sprintf( __( 'Day: %s' ), get_the_date( _x( 'F j, Y', 'daily archives date format' ) ) );
        } else {
            $title = post_type_archive_title( '', false );
        }
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'custom_archive_title', 10 ); ?>
<?php
// pagenavi
function bmPageNavi() {
  global $wp_rewrite;
  global $wp_query;
  global $paged;

  $paginate_base = get_pagenum_link(1);
  if (strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()) {
    $paginate_format = '';
    $paginate_base = add_query_arg('page', '%#%');
  } else {
    $paginate_format = (substr($paginate_base, -1 ,1) == '/' ? '' : '/') .
    untrailingslashit('?page=%#%', 'paged');;
    $paginate_base .= '%_%';
  }

  $result = paginate_links( array(
    'base' => $paginate_base,
    'format' => $paginate_format,
    'total' => $wp_query->max_num_pages,
    'mid_size' => 5,
    'current' => ($paged ? $paged : 1),
    'prev_text' => 'Prev',
    'next_text' => 'Next',
  ));

  return $result;
}; ?>
<?php
// タグをチェック項目として表示
function re_register_post_tag_taxonomy() {
global $wp_rewrite;
$rewrite = array(
'slug' => get_option('tag_base') ? get_option('tag_base') : 'tag',
'with_front' => ! get_option('tag_base') || $wp_rewrite->using_index_permalinks(),
'ep_mask' => EP_TAGS,
);

$labels = array(
'name' => _x( 'Tags', 'taxonomy general name' ),
'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
'search_items' => __( 'Search Tags' ),
'popular_items' => __( 'Popular Tags' ),
'all_items' => __( 'All Tags' ),
'parent_item' => null,
'parent_item_colon' => null,
'edit_item' => __( 'Edit Tag' ),
'view_item' => __( 'View Tag' ),
'update_item' => __( 'Update Tag' ),
'add_new_item' => __( 'Add New Tag' ),
'new_item_name' => __( 'New Tag Name' ),
'separate_items_with_commas' => __( 'Separate tags with commas' ),
'add_or_remove_items' => __( 'Add or remove tags' ),
'choose_from_most_used' => __( 'Choose from the most used tags' ),
'not_found' => __( 'No tags found.' )
);

register_taxonomy( 'post_tag', 'post', array(
'hierarchical' => true,
'query_var' => 'tag',
'rewrite' => $rewrite,
'public' => true,
'show_ui' => true,
'show_admin_column' => true,
'_builtin' => true,
'labels' => $labels
) );
}
add_action( 'init', 're_register_post_tag_taxonomy', 1 ); ?>
<?php
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
return get_bloginfo('url');
}
add_shortcode('tmp', 'shortcode_tp');
function shortcode_tp() {
return get_template_directory_uri();
}
add_shortcode('uploads', 'shortcode_up');
function shortcode_up() {
$upload_dir = wp_upload_dir();
return $upload_dir['baseurl'];
}; ?>
<?php
// 人気記事出力用
function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "0 View";
	}
	return $count.' Views';
}
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
	}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
	}
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); ?>
<?php
// 一番目の画像をサムネイル
function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

    if(empty($first_img)){
        // 記事内で画像がなかったときのためのデフォルト画像を指定
        $first_img = ''.get_bloginfo('template_directory').'/images/default.png';
    }
    return $first_img;
}; ?>
<?php
//カスタム投稿用post_typeセット
add_filter('template_include','custom_search_template');
function custom_search_template($template){
  if ( is_search() ){
    $post_types = get_query_var('post_type');
    foreach ( (array) $post_types as $post_type )
      $templates[] = "{$post_type}-search.php";
    $templates[] = 'search.php';
    $template = get_query_template('search',$templates);
  }
  return $template;
}; ?>
<?php function my_admin_style() {
  echo '<style>
  #editor-post-taxonomies-hierarchical-term-1,
    #editor-post-taxonomies-hierarchical-term-1 + label{
  display:none;
  }
  </style>'.PHP_EOL;
}
add_action('admin_print_styles', 'my_admin_style');?>
<?php
//カスタムフィールドもプレビューできるようにする
function get_preview_id($postId) {
    global $post;
    $previewId = 0;
    if ( isset($_GET['preview'])
            && ($post->ID == $postId)
                && $_GET['preview'] == true
                    &&  ($postId == url_to_postid($_SERVER['REQUEST_URI']))
        ) {
        $preview = wp_get_post_autosave($postId);
        if ($preview != false) { $previewId = $preview->ID; }
    }
    return $previewId;
}

add_filter('get_post_metadata', function($meta_value, $post_id, $meta_key, $single) {
    if ($preview_id = get_preview_id($post_id)) {
        if ($post_id != $preview_id) {
            $meta_value = get_post_meta($preview_id, $meta_key, $single);
        }
    }
    return $meta_value;
}, 10, 4);

add_action('wp_insert_post', function ($postId) {
    global $wpdb;
    if (wp_is_post_revision($postId)) {
        if (isset($_POST['fields']) && count($_POST['fields']) != 0) {
            foreach ($_POST['fields'] as $key => $value) {
                $field = get_field($key);
                if ( !isset($field['name']) || !isset($field['key']) ) continue;
                if (count(get_metadata('post', $postId, $field['name'], $value)) != 0) {
                    update_metadata('post', $postId, $field['name'], $value);
                    update_metadata('post', $postId, "_" . $field['name'], $field['key']);
                } else {
                    add_metadata('post', $postId, $field['name'], $value);
                    add_metadata('post', $postId, "_" . $field['name'], $field['key']);
                }
            }
        }
        do_action('save_preview_postmeta', $postId);
    }
});?>
<?php function my_block_enqueue() {
  wp_enqueue_script(
    'my-block-script',
    get_stylesheet_directory_uri() . '/js/my-block.js',
    array( 'wp-blocks' )
  );
wp_enqueue_style( 'my-editor', get_stylesheet_directory_uri() .'/css/block-editor.css' );
}
add_action( 'enqueue_block_editor_assets', 'my_block_enqueue' );?>
<?php //カテゴリ名の表示
function custom_cat_name($ID,$set=NULL){
    $showCat = array('face','body','skin','other');
    $category = get_the_category($ID);
    $res = '';
    for ($i=0; $i<count($category); $i++) {
        $catName = $category[$i]->slug;
        if(array_search($catName,$showCat) !== FALSE){
            $res = $catName;
        }
    }
    if($set == 'name'){
        $obj = get_category_by_slug($res);
        return $obj->name;
    }else{
        return $res;
    }
}
 //子ページのスラッグ使用
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}?>
<?php function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
  return;
  if ( $query->is_post_type_archive('photo_selection') ) {
    $query->set( 'posts_per_page', '36' );
  }
  if ( $query->is_post_type_archive('photo_selection_face') ) {
    $query->set( 'posts_per_page', '36' );
  }
  if ( $query->is_post_type_archive('case') ) {
    $query->set( 'posts_per_page', '12' );
  }
  if ( $query->is_post_type_archive('movie') ) {
    $query->set( 'posts_per_page', '15' );
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


?>
