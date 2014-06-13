<?php 
error_reporting(E_ALL);
ini_set('display_errors', 'on');


require './kint09/Kint.class.php';






$O = unserialize(urldecode($_POST['a']));
Kint::dump( $O );



