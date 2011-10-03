<?php
/* 
	regClientScript.php
	=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
	This is a wrapper snippet for the $modx->regClientScript call and 
	takes a single parameter - a path to the file

*/

$f = (isset($f)) ? $f : 0;
$ignoreResources = isset($ignoreResources) ? $ignoreResources : 'false';
if($ignoreResources) { 
	$resourcesToIgnore = explode(',',$ignoreResources);
}

if ($f  && !(in_array($modx->resource->get('id'), $resourcesToIgnore))) {
	$modx->regClientScript($f);
} else {
	return false;
}

?>