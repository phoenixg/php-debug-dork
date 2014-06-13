<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'on');


require './kint09/Kint.class.php';




file_put_contents('report.php', file_get_contents('php://input'));
$O = unserialize(urldecode($_POST['a']));
Kint::dump( $O );



