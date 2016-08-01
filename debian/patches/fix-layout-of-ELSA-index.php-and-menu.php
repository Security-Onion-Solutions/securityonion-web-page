Description: <short summary of the patch>
 TODO: Put a short summary on the line above and replace this paragraph
 with a longer explanation of this change. Complete the meta-information
 with other relevant fields (see below for details). To make it easier, the
 information below has been extracted from the changelog. Adjust it or drop
 it.
 .
 securityonion-web-page (20141015-0ubuntu0securityonion65) trusty; urgency=medium
 .
   * fix layout of ELSA index.php and menu.php
Author: Doug Burks <doug.burks@gmail.com>

---
The information above should follow the Patch Tagging Guidelines, please
checkout http://dep.debian.net/deps/dep3/ to learn about the format. Here
are templates for supplementary fields that you might want to add:

Origin: <vendor|upstream|other>, <url of original patch>
Bug: <url in upstream bugtracker>
Bug-Debian: http://bugs.debian.org/<bugnumber>
Bug-Ubuntu: https://launchpad.net/bugs/<bugnumber>
Forwarded: <no|not-needed|url proving that it has been forwarded>
Reviewed-By: <name and email of someone who approved the patch>
Last-Update: <YYYY-MM-DD>

--- securityonion-web-page-20141015.orig/elsa/index.php
+++ securityonion-web-page-20141015/elsa/index.php
@@ -1,7 +1,7 @@
 <html>
 <head>
 <title>ELSA</title>
-<FRAMESET cols="15%,85%">
+<FRAMESET cols="281px,*">
    <FRAME name="fixed" src="menu.php">
    <FRAME name="dynamic" src="/elsa-query/">
 </FRAMESET>
--- securityonion-web-page-20141015.orig/elsa/menu.php
+++ securityonion-web-page-20141015/elsa/menu.php
@@ -47,14 +47,17 @@ function showhide(tspan, tri) {
 		background-color:#A3C3E0;
 	}
 
-	@media all and (min-width: 0px) and (max-width: 230px) {
+	@media all and (min-width: 0px) and (max-width: 280px) {
 		.tab {
 			font-size:12px;
 			margin-left:0px;
 		}
+		.font {
+			font-size:12px;
+		}
 	}
 
-	@media all and (min-width: 231px) {
+	@media all and (min-width: 281px) {
 		.tab {
 			margin-left:25px;
 		}
@@ -67,7 +70,7 @@ function showhide(tspan, tri) {
 	/* Define href variables */
 	$h1 = "/elsa-query/?query_string=";
 	$h2 = " class=\"tab\" target=\"dynamic\" onclick=\"turnBackBold (this);\"";
-	$h3 = " target=\"dynamic\" onclick=\"turnBackBold (this);\"";
+	$h3 = " class=\"font\" target=\"dynamic\" onclick=\"turnBackBold (this);\"";
 ?>
 
 <a href="https://securityonion.net" target="_blank"><img STYLE="border: none;" src="so-logo.jpeg" alt="Security Onion Website"></img></a><br /><br />
