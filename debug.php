<?php 
// 本脚本负责将POST过来的数据用Kint输出后，存储到report.php
ob_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require './kint09/Kint.class.php';

// $postDebugData = unserialize(urldecode( file_get_contents('php://input') ));
// $postDebugData = file_get_contents('php://input');

Kint::dump( $_POST );
$dump = ob_get_clean();
file_put_contents('report.php', $dump);
