<?php
/*
 * regClientHelpers is an add-on for MODX Revolution that provides 
 * wrapper snippets to some commonly used MODX API calls.  It allows
 * these calls to be made by processes that would normally not be
 * able make them
 *
 * Copyright 2010-2011 by Desmond Smith .
 *
 * This file is part of regClientHelpers.
 *
 * regClientHelpers is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * regClientHelpers is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * regClientHelpers; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 */

/**
 * This file provides snippet access to $modx->regClientScript().
 *
 * @author Desmond Smith <des@webandflowdesign.com>
 * @copyright Copyright (C) 2010-2011, Desmond Smith
 * @license http://opensource.org/licenses/gpl-3.0.php GNU Public License v2
 * @package regClientHelpers
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