<?php
/* 
	regClientScript.php
	=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
	This is a wrapper snippet for the $modx->regClientScript call and 
	takes a single parameter - a path to the file

*/

$f = (isset($f)) ? $f : 0;
$p = explode('.',$f);
array_flip($p);

if ($f && $p[0] = 'js') {
	$modx->regClientScript($f);
} else {
	return false;
}

?>