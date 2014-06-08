<?php 
$vpsIp = '128.199.233.252';

$dataFromDb = array(
	'a' => array('aaa', 'aaaaa', 'aaaaaaaaaa'),
	'b' => array('bbb', 'bbbbb', 'bbbbbbbbbb'),
);

$url = 'http://' . $vpsIp . '/php-debug-dork/debug.php';
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($dataFromDb),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);


var_dump($result);