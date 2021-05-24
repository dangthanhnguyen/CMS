<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p/>L1:cSYQ{)`txnr}zbjc(`QmN%9B~+}Ke=c&jQ/R}-cb^/Z:9M:*,WU`hk#)li' );
define( 'SECURE_AUTH_KEY',  '(A*;5R>#!;i&eT3!nfF=K0u8V]Mt>Hnb6M`D~o/#Vhi*|]>&PJ;{v^}f^H]?:Q$@' );
define( 'LOGGED_IN_KEY',    'w}S.Gjqt2Jn=i?jEzs^gEc2Qmk9BIWWj{pLPDvi08npf(637 ,9)p? bhC, q>QV' );
define( 'NONCE_KEY',        'l2<j-tjFJbco*Cy{n8qFjaMB1qyNB`0Fn]9*qO*2gnC]$:4nHkew,-m>C*KtX6{(' );
define( 'AUTH_SALT',        'k_~.O?MB{^cP[M)tDbz993IT{o?%ZJQMq9B-7GEs63Zk-J+z6?t%Q!D)<ac]VCYH' );
define( 'SECURE_AUTH_SALT', 'bwcnOgTaaTF[}U+IwnV4&(x!fsuM`L/$rX1HpavRgFsoZU>AD%PEDoA>y!NF6r4r' );
define( 'LOGGED_IN_SALT',   'LV>PsxnRl(T[`XaiDgRK`&bUS;5udA {{xg0OoDz^dsfv|i?2^77%wi&dv8AXJ:w' );
define( 'NONCE_SALT',       'smE`Qg~Vq15#op0#hU_kvpoY5]/p^==@KF@?(>+BFk^*RV/J2W+9*@BD##`e~IW@' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
