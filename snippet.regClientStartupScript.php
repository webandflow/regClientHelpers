<?php
/* 
	regClientStartupScript.php
	=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
	This is a wrapper snippet for the $modx->regClientStartupScript call and 
	takes a single parameter - a path to the file

*/

$f = (isset($f)) ? $f : 0;

$ignoreResources = isset($ignoreResources) ? $ignoreResources : 'false';
if($ignoreResources) { 
	$resourcesToIgnore = explode(',',$ignoreResources);
}

if ($f  && !(in_array($modx->resource->get('id'), $resourcesToIgnore))) {
	$modx->regClientStartupScript($f);
} else {
	return false;
}

?>