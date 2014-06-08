<?php 

require './kint/Kint.class.php';


Kint::dump($GLOBALS, $_SERVER, array('a','b','c'));
