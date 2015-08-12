<?php
// tail -f /usr/local/openresty/nginx/logs/error.log

require(__DIR__ . '/Async.php7');

// register_shutdown_function 测试失败
// 超时时间测试失败

Async::runWith(function() {
	sleep(5);

	error_log(print_r($_GET, true));
	error_log(print_r($_POST, true));
	error_log(print_r($_COOKIE, true));
	// file_put_contents('get'.microtime(), print_r($_GET, true));
	// file_put_contents('post'.microtime(), print_r($_POST, true));
	// file_put_contents('cookie'.microtime(), print_r($_COOKIE, true));
});
