<?php
/* 
	regClientScript.php
	=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
	This is a wrapper snippet for the $modx->regClientScript call and 
	takes a single parameter - a path to the file

*/

$f = (isset($f)) ? $f : 0;

if ($f) {
	$modx->regClientScript($f);
} else {
	return false;
}

?>