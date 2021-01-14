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
 * * MySQL 設定
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

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'ashiyatailor_wp' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'ashiyatailor_wp' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '2SKOX5crou' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql8020.xserver.jp' );

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
define( 'AUTH_KEY',         'wHXWE90!QXD6)DBN0,4<$=bm`ZSLz#ZEKlEj_8MU~_p2*%V3i:>AWVDF6o}.)&@6' );
define( 'SECURE_AUTH_KEY',  'B%v<n;N_2RFyUR5{3r<G`yd$z[[I;>HDG9Nx1|A! nh5Vpd}dA=}r(oS=J``#AO}' );
define( 'LOGGED_IN_KEY',    ')YURP{>GwyRO-C* [ ?Wh[]$gS#1_2g&z_NQ4ofE6.E`ko@m.Moa:kx^;1XTUBkx' );
define( 'NONCE_KEY',        'I;ibL9O>=_uUpWYqm8<eq+U6b?1=>1]b+IDb?y,E2HWM;23I2:Tg<^Ib++uD;TT<' );
define( 'AUTH_SALT',        'ko#eu#q{%Q:-mc5t^I;}_WIS:5DAeg(P;T*ZC`W@Rg*Q[36F},W<V{)&#cboT(TW' );
define( 'SECURE_AUTH_SALT', 'DN}$n6*XZ=CK<0yJbBl2ABM7a{]yE4[r8hE:G6~g+c=-fX!UA<Aa4%#ng]IQV0Ai' );
define( 'LOGGED_IN_SALT',   '~0D?=Hs_MzinvNIG%}4JYXEl~$u5&W$5213QT8?JV/x(?g5IM<zf!mTn-N(V~AG<' );
define( 'NONCE_SALT',       'd;dqnkdC3&540ekl54.6kTq:`*LYWQ1(-e{_h6LzhTJC$[dbEM{P]a}3;r_;6I2K' );

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

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
