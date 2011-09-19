<?php
/* 
	regClientCSS.php
	=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
	This is a wrapper snippet for the $modx->regClientStartupScript call and 
	takes a single parameter - a path to the file

*/

$f = (isset($f)) ? $f : 0;

if ($f) {
	$modx->regClientCSS($f);
} else {
	return false;
}

?>