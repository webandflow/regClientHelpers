# Helper Elements #
author: Desmond Smith, [contact me](mailto:des@webandflowdesign.com)
###

Helper Elements are short quick snippets used to access some of the MODX api calls.  These are helpful when you need to include Javascript or CSS but don't necessarily want to create a new template or chunk.  These can be inserted just like any other MODX snippet.

There are currently five items in the collection:

* snippet.regClientScript.php
* snippet.regClientStartupScript.php
* snippet.regClientHTMLBlock.php
* snippet.regClientStartupHTMLBlock.php
* snippet.regClientCSS.php


### Installation ###
Download the transport package, and install locally via MODX package managment

### About ###
Each of the chunks included with regClientHelpers has been designed to allow access to their respective MODX API calls from non-php based elements.  For example, using _regClientScript_ in a chunk will register a javascript file before the closing BODY tag.  They were designed to solve the problem of needing to include javascript and css on certain pages, but while not wanting to develop separate templates or other elements for essentially one-off uses.

### Usage ###
#### regClientScript, regClientStartupScript, regClientCSS ####
These snippets takes two parameters:
*f: represents the filename of the script/CSS being registered
*ignoreResources: a comma-separated list of resource ids for resources on which the script is not to be registered

**Example:** [[regClientScript? &f=`js/jquery.somefile.js` &ignoreResources=`2,45,123`]]


#### regClientHTMLBlock, regClientStartupHTMLBlock ####
These snippets takes two parameters:
*html: can be either an HTML string or a MODX chunk
*ignoreResources: a comma-separated list of resource ids for resources on which the script is not to be registered

**Example:**
1. [[regClientHTMLBlock? &html=`nameOfMyChunk` &ignoreResources=`2,45,123`]]
2. [[regClientHTMLBlock? html=`<script type="text/javascript">alert('This is wicked awesome');</script>`]]



