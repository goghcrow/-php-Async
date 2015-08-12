<?php
require(__DIR__ . '/Async.php7');
$base_file = 'http://t.cc/Async/test_async_runwith.php';
$get = ['get_key1'=>'get_key1_val','get_key2'=>'get_key2_val'];
$post = ['post_key1'=>'post_key1_val','post_key2'=>'post_key2_val'];
$cookie = ['cookie_key1'=>'cookie_key1_val','cookie_key2'=>'cookie_key2_val'];
$url = $base_file . '?' . http_build_query($get);
$ret = Async::request($url, $post, $cookie);
var_dump($ret);
