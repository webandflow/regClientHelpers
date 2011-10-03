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

Each represents a snippet-based wrapper for the associated MODX API call.  regClientScript, regClientStartupScript, and regClientCSS each take a single filename as the only parameter ($f).  regClientHTMLBlock and regClientStartupHTMLBlock both take a single string as the only parameter ($html).  $html can represent a literal HTML string or the name of a MODX chunk.

