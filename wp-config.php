<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'rbeauty' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_/F@Pnt/4!^hm[!mJ+XiZ`7Xu=)9NJ}$fq- 7MB]G^v=dL56x3Ix(H>v#G#k4<h*' );
define( 'SECURE_AUTH_KEY',  'nr1gs0bF6){2U42afTvRPI2-$ncE}$Y~+gIeocuO!z<M*||5N<{Tny3CT`FGs0`c' );
define( 'LOGGED_IN_KEY',    '-z8HVR`p)cR{OVP^Xb!7dJfb+speC k3i!WaoI%xRS%VMsO#}?)3FM(+gVf|hu ;' );
define( 'NONCE_KEY',        'Lq|f~i{.uYOfF=DRRk-#6=Z(H#J(%K~S*jJ9E1h,f1#ZSnqtQ(,;yJ1i|yNQz,<|' );
define( 'AUTH_SALT',        'jDX;*p<|P3LeVb+P6!VQ0|*<SqBopyg[.BPp#HL9*gS]CL%L,-E`c~1%N7;:$kiS' );
define( 'SECURE_AUTH_SALT', 'zHjF|g|V8ct`jB2|-}h^BWH(W?!c!F.eHWzuiO_PN fU5WJQEFJ?_.=amnX3`J_K' );
define( 'LOGGED_IN_SALT',   '(qZH;n,]fU:XW-$61h1Ir:$YLC[S~-v./U?,ZJhg5{i;7V#aUFG1`a4j*Oeb;EBV' );
define( 'NONCE_SALT',       'CVQ;k:kB0VKO|{|QZ_.at^evdV[B$SSML@%XC%QVmCxOe)>>YQQWWuh-K?(..//2' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
