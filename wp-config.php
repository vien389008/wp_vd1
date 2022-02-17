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
define( 'DB_NAME', 'wp_demo1' );

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
define( 'AUTH_KEY',         '/OtCKHY@GbZw+% a7_oW95rgh/FJOI/kLK7jy=]w_L4rKFO:Z;8+X??hxa@I;fTx' );
define( 'SECURE_AUTH_KEY',  'h!_o=VjJw9Zb,DMT7:gJ|rj3/!{JpxA9D7;@1(1C>7<DjG1{Pvk)6U;94NF9Y[wa' );
define( 'LOGGED_IN_KEY',    'P76FLc|4OmhFIy6^n/Jo4!*k(;*stbQHx/Y.ouH{sM0g5$D9G>._SOzlhQp:O`]1' );
define( 'NONCE_KEY',        'r=BK,kA)[(e^HoV+Ky%Gcg/?]Xsyry#3>()lX&2gdCgiVyFRmMFzZ2,ypNT3$h.k' );
define( 'AUTH_SALT',        ';4(k:,`ltZeg$GcJnIx*K$zIlZZs,<vY LTjhW9]cLp xXPdTDPB:tBr=nHb>8MN' );
define( 'SECURE_AUTH_SALT', 'CBx[QZhSe;Puv f9Oad?Cwdm)d_/fJ5y~RX>[N|YG&5);4N0E|E^x6LA.IhXWDoQ' );
define( 'LOGGED_IN_SALT',   ']-Hyl,}+q^cKJ.MkwB=J^ DQxGwCJw+**ynNp-<%xk7Tp4V_Z&H%040fBS`~I$-*' );
define( 'NONCE_SALT',       '5K@%1[ugk3oD(X({I,!|H{{AHF4_owOdB 1yJ%%,lx6qd=(iolTmdr;/1b]+rI%f' );

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
