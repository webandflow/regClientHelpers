<?php
/* 
	regClientHTMLBlock.php
	=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
	This is a wrapper snippet for the $modx->regClientHTMLBlock call and 
	takes a single parameter:
	
	html = either an HTML string of the name of a chunk in MODX.

*/

$html = (isset($html)) ? $html : 0;
$chunk = $modx->getChunk($html);
$ignoreResources = isset($ignoreResources) ? $ignoreResources : 'false';

if($ignoreResources) { 
	$resourcesToIgnore = explode(',',$ignoreResources);
}

if ($chunk != '') {
  $html = $chunk;
}

if ($html && !(in_array($modx->resource->get('id'), $resourcesToIgnore))) {
	$modx->regClientHTMLBlock($html);
} else {
	return false;
}