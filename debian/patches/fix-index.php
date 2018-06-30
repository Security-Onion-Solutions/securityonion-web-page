Description: <short summary of the patch>
 TODO: Put a short summary on the line above and replace this paragraph
 with a longer explanation of this change. Complete the meta-information
 with other relevant fields (see below for details). To make it easier, the
 information below has been extracted from the changelog. Adjust it or drop
 it.
 .
 securityonion-web-page (20141015-0ubuntu0securityonion79) xenial; urgency=medium
 .
   * fix index.php
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

--- securityonion-web-page-20141015.orig/index.php
+++ securityonion-web-page-20141015/index.php
@@ -22,14 +22,7 @@ Please follow the <a href="https://githu
 * <a href="/cyberchef/cyberchef.htm">CyberChef</a>: The Cyber Swiss Army Knife - a web app for encryption, encoding, compression and data analysis<br>
 <?php if (file_exists("/etc/nsm/servertab")): ?>
 	* <a href="/squert/">Squert</a>: View and categorize NIDS/HIDS alerts<br>
-	<?php if (file_exists("/etc/nsm/securityonion.conf")): ?>
-		<?php $array = parse_ini_string(file_get_contents("/etc/nsm/securityonion.conf")); ?>
-		<?php if ( array_key_exists('KIBANA_ENABLED', $array) && $array['KIBANA_ENABLED'] == "yes" ): ?>
-			* <a href="/app/kibana">Kibana</a>: Search logs (IDS, Bro, and syslog) stored in Elasticsearch<br>
-		<?php elseif ( array_key_exists('ELSA', $array) && $array['ELSA'] == 1 ): ?>
-			* <a href="/elsa/">ELSA</a>: Search logs (IDS, Bro, and syslog)<br>
-		<?php endif; ?>
-	<?php endif; ?>
+	* <a href="/app/kibana">Kibana</a>: Search logs (IDS, Bro, and syslog) stored in Elasticsearch<br>
 <?php else: ?>
 (More tools will be available here after you run Setup.)<br>
 <?php endif; ?>
