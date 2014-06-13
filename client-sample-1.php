<?php 
$vpsIp = '128.199.233.252';

// 模拟真实的需调试打印的数据
$dataFromDb = array(
	'a' => array('aaa', 'aaaaa', 'aaaaaaaaaa'),
	'b' => array('bbb', 'bbbbb', 'bbbbbbbbbb'),
);



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://www.mysite.com/tester.phtml");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "postvar1=value1&postvar2=value2&postvar3=value3");

// in real life you should use something like:
// curl_setopt($ch, CURLOPT_POSTFIELDS, 
//          http_build_query(array('postvar1' => 'value1')));

// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);

curl_close ($ch);

// further processing ....
if ($server_output == "OK") { ... } else { ... }







$dataFromDbEncoded = urlencode(serialize( $dataFromDb ));

$url = 'http://' . $vpsIp . '/php-debug-dork/debug.php';
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($dataFromDbEncoded),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);


var_dump($result);
