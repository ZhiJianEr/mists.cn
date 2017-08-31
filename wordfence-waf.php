<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/home/web/www/themists-blog/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/home/web/www/themists-blog/wp-content/wflogs/');
	include_once '/home/web/www/themists-blog/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>