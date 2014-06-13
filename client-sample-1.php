<?php 

$vpsIp = '128.199.233.252';
$url = 'http://' . $vpsIp . '/php-debug-dork/debug.php';

// 模拟真实的需调试打印的数据
class test{ 
   private $_a;
   public $b;

   protected function _test1(){
     return array('11','22');
   } 

   public function test2(){
     return 'test222';
   }
}

$test = new test();
$dataFromDb = array(
	'a' => array('aaa', 'aaaaa', 'aaaaaaaaaa'),
	'b' => array('bbb', 'bbbbb', 'bbbbbbbbbb'),
        'c' => $test,
        'd' => $test->test2(),
        'e' => true,
);

// $dataFromDbEncoded = urlencode(serialize( $dataFromDb ));
$dataFromDbEncoded = $dataFromDb;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($dataFromDbEncoded));
// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close($ch);

// further processing ....
// if ($server_output == "OK") { ... } else { ... }





