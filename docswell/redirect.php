<?php

######################################################################
# DocsWell: Documents Announcement & Retrieval System
# ===================================================================
#
# Copyright (c) 2001 by
#                Lutz Henckel (lutz.henckel@fokus.gmd.de) and
#                Gregorio Robles (grex@scouts-es.org)
#
# BerliOS DocsWell: http://docswell.berlios.de
# BerliOS - The OpenSource Mediator: http://www.berlios.de
#
# Keep track of access counts
#
# This program is free software. You can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 or later of the GPL.
###################################################################### 

page_open(array("sess" => "DocsWell_Session"));

require("config.inc");
require("lib.inc");

$db = new DB_DocsWell;
			// increase counter
increasecnt($id,$type);
			// Redirect to URL
?>
<HTML>
<HEAD>
   <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
   <META HTTP-EQUIV="refresh" CONTENT="0;url=<?php echo "$url"; ?>">
   <META NAME="GENERATOR" CONTENT="Mozilla/4.05 [en] (X11; I; SunOS 5.6 sun4m) [Netscape]">
   <META NAME="robots" CONTENT="noindex">
   <TITLE>Page redirected to ...</TITLE>
<LINK rel="stylesheet" type="text/css" href="berlios.css">
</HEAD>
<BODY>
</BODY>
</HTML>
<?php
@page_close();
?>
