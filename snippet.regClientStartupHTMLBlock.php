<?php
/* 
	regClientStartupHTMLBlock.php
	=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-
	This is a wrapper snippet for the $modx->regClientStartupHTMLBlock call and 
	takes a single parameter:
	
	html = either an HTML string of the name of a chunk in MODX.
	
	if the chunk contains snippets, they won't be processed here.  You'll 
	need to move them out of the chunk you're calling.

*/

$html = (isset($html)) ? $html : 0;
$ignoreResources = isset($ignoreResources) ? $ignoreResources : 'false';
if($ignoreResources) { 
	$resourcesToIgnore = explode(',',$ignoreResources);
}

if ($chunk = $modx->getChunk($html)) {	
	$html = $chunk;
}

if ($html && !(in_array($modx->resource->get('id'), $resourcesToIgnore))) {
	$modx->regClientStartupHTMLBlock($html);
} else {
	return false;
}

?>