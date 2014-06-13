<?php 
ob_start();

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require './kint09/Kint.class.php';

// $postDebugData = unserialize(urldecode( file_get_contents('php://input') ));
$postDebugData = file_get_contents('php://input');

Kint::dump( $postDebugData );
$dump = ob_get_clean();
file_put_contents('report.php', $dump);
