<html>
<head>
<title>ELSA Queries</title>
<script type="text/javascript">
<!--
var tri_open = "";
var tri_closed = "";

window.onload = preload;

function turnBackBold (speclink) {
        var anchors = document.links
        for (i=0; i<anchors.length; i++) {
		anchors[i].style.fontWeight = '300';
		anchors[i].style.background = '#A3C3E0';
        }
	speclink.style.fontWeight = '900';
	speclink.style.background = '#c3d9ff';
}

function preload() {
	if (document.images) {
		tri_open = new Image(14,10);
		tri_closed = new Image(14,10);
		tri_open.src = "tri_o.gif";
		tri_closed.src = "tri_c.gif";
	}
}

function showhide(tspan, tri) {
	tspanel = document.getElementById(tspan);
	triel = document.getElementById(tri);
	if (tspanel.style.display == 'none') {
		tspanel.style.display = '';
		triel.src = "tri_o.gif";
	} else {
		tspanel.style.display = 'none';
		triel.src = "tri_c.gif";
	}
}
-->
</script>

<style>
body {
font-size:14px;
background-color:#A3C3E0;
}
</style>
</head>
<a href="http://www.securityonion.net" target="_blank"><img STYLE="border: none;" src="so-logo.jpeg" alt="Security Onion Website"></img></a><br><br>
<a href="javascript:showhide('conn','tri_conn')"><img src="tri_c.gif" id="tri_conn" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('conn','tri_conn')" class="navlnk">Connections</a><br>
<span id="conn"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_CONN icmp or tcp or udp groupby:node" target="dynamic" onclick="turnBackBold (this);">Grouped by Node</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_CONN icmp or tcp or udp groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_CONN icmp or tcp or udp groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_CONN icmp or tcp or udp groupby:dstport" target="dynamic" onclick="turnBackBold (this);">Top DST Ports</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_CONN &quot;-&quot; groupby:service" target="dynamic" onclick="turnBackBold (this);">Top Services</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_CONN +BRO_CONN.dstport=53 groupby:service" target="dynamic" onclick="turnBackBold (this);">Port 53 groupby Service</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_CONN +BRO_CONN.dstport=80 groupby:service" target="dynamic" onclick="turnBackBold (this);">Port 80 groupby Service</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_CONN +BRO_CONN.dstport=443 groupby:service" target="dynamic" onclick="turnBackBold (this);">Port 443 groupby Service</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_CONN &quot;-&quot; groupby:resp_country_code" target="dynamic" onclick="turnBackBold (this);">Groupby Resp Country</a><br>
</span>
<br><a href="javascript:showhide('dhcp','tri_dhcp')"><img src="tri_c.gif" id="tri_dhcp" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('dhcp','tri_dhcp')" class="navlnk">DHCP</a><br>
<span id="dhcp"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_DHCP &quot;68&quot; groupby:assigned_ip" target="dynamic" onclick="turnBackBold (this);">Top Assigned IPs</a><br>
</span>
<br><a href="javascript:showhide('dns','tri_dns')"><img src="tri_c.gif" id="tri_dns" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('dns','tri_dns')" class="navlnk">DNS</a><br>
<span id="dns"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_DNS dstport=&quot;53&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_DNS dstport=&quot;53&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_DNS dstport=&quot;53&quot; groupby:hostname" target="dynamic" onclick="turnBackBold (this);">Top Requests</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_DNS dstport=&quot;53&quot; groupby:answer" target="dynamic" onclick="turnBackBold (this);">Top Responses</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_DNS dstport=&quot;53&quot; groupby:query_class" target="dynamic" onclick="turnBackBold (this);">Top Query Class</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_DNS dstport=&quot;53&quot; groupby:query_type" target="dynamic" onclick="turnBackBold (this);">Top Query Type</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_DNS dstport=&quot;53&quot; groupby:return_code" target="dynamic" onclick="turnBackBold (this);">Top Return Code</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_DNS nxdomain groupby:hostname" target="dynamic" onclick="turnBackBold (this);">Top nxdomain</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_DNS proto=&quot;tcp&quot; &quot;axfr&quot; OR &quot;ixfr&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Zone Transfers</a><br>
</span>
<br><a href="javascript:showhide('files','tri_files')"><img src="tri_c.gif" id="tri_files" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('files','tri_files')" class="navlnk">Files</a><br>
<span id="files"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_FILES &quot;-&quot; groupby:mime_type" target="dynamic" onclick="turnBackBold (this);">MIME Types</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_FILES &quot;-&quot; groupby:source" target="dynamic" onclick="turnBackBold (this);">Sources</a><br>
</span>
<br><a href="javascript:showhide('firewall','tri_firewall')"><img src="tri_c.gif" id="tri_files" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('firewall','tri_firewall')" class="navlnk">Firewall</a><br>
<span id="firewall"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=FIREWALL_CONNECTION_END groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs Allowed</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=FIREWALL_CONNECTION_END groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs Allowed</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=FIREWALL_ACCESS_DENY groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs Denied</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=FIREWALL_ACCESS_DENY groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs Denied</a><br>
</span>
<br><a href="javascript:showhide('ftp','tri_ftp')"><img src="tri_c.gif" id="tri_ftp" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('ftp','tri_ftp')" class="navlnk">FTP</a><br>
<span id="ftp"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_FTP &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_FTP &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_FTP &quot;-&quot; groupby:dstport" target="dynamic" onclick="turnBackBold (this);">Top DST Ports</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_FTP &quot;-&quot; groupby:command" target="dynamic" onclick="turnBackBold (this);">Top Commands</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_FTP &quot;-&quot; groupby:mime_type" target="dynamic" onclick="turnBackBold (this);">Top MIME Types</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_FTP &quot;-&quot; groupby:arg" target="dynamic" onclick="turnBackBold (this);">Top arg</a><br>
</span>
<br><a href="javascript:showhide('logs','tri_logs')"><img src="tri_c.gif" id="tri_logs" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('logs','tri_logs')" class="navlnk">Host Logs</a><br>
<span id="logs"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=none program=&quot;ossec&quot; &quot;alert&quot; &quot;Integrity checksum&quot;" target="dynamic" onclick="turnBackBold (this);">File Changes</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=none program=&quot;ossec&quot; &quot;alert&quot; &quot;ossec: Agent&quot; OR &quot;ossec: Ossec&quot;" target="dynamic" onclick="turnBackBold (this);">OSSEC Status</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=none program=&quot;ossec&quot; &quot;alert&quot; -&quot;Integrity checksum&quot; -&quot;ossec: Agent&quot; -&quot;ossec: Ossec&quot; -&quot;packets_received&quot;" target="dynamic" onclick="turnBackBold (this);">OSSEC Alerts</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=none program=&quot;ossec_archive&quot; &quot;<?php echo date('Y'); ?>&quot; -&quot;packets_received&quot; -&quot;--MARK--&quot; -&quot;AnyEvent&quot;" target="dynamic" onclick="turnBackBold (this);">All OSSEC Logs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=none -program=ossec_archive -program=ossec groupby:program" target="dynamic" onclick="turnBackBold (this);">Syslog-NG (Program)</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=none -program=ossec_archive -program=ossec groupby:host" target="dynamic" onclick="turnBackBold (this);">Syslog-NG (Host)</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SYSLOG udp or tcp" target="dynamic" onclick="turnBackBold (this);">Syslog Detected by Bro</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=&quot;WINDOWS_PROCESS&quot; &quot;new process&quot; groupby:image" target="dynamic" onclick="turnBackBold (this);">Windows Processes</a><br>
</span>
<br><a href="javascript:showhide('http','tri_http')"><img src="tri_c.gif" id="tri_http" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('http','tri_http')" class="navlnk">HTTP</a><br>
<span id="http"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_HTTP &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_HTTP &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_HTTP &quot;-&quot; groupby:dstport" target="dynamic" onclick="turnBackBold (this);">Top DST Ports</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_HTTP &quot;-&quot; groupby:mime_type" target="dynamic" onclick="turnBackBold (this);">Top MIME Types</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_HTTP &quot;-&quot; groupby:user_agent" target="dynamic" onclick="turnBackBold (this);">Top User Agents</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_HTTP &quot;-&quot; groupby:site" target="dynamic" onclick="turnBackBold (this);">Top Sites</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_HTTP BRO_HTTP.mime_type=&quot;x-dosexec&quot; groupby:site" target="dynamic" onclick="turnBackBold (this);">Sites hosting EXEs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_HTTP BRO_HTTP.mime_type=&quot;x-rar&quot; groupby:site" target="dynamic" onclick="turnBackBold (this);">Sites hosting RARs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_HTTP BRO_HTTP.mime_type=&quot;vnd.ms-cab-compressed&quot; groupby:site" target="dynamic" onclick="turnBackBold (this);">Sites hosting CABs</a><br>
</span>
<br><a href="javascript:showhide('intel','tri_intel')"><img src="tri_c.gif" id="tri_intel" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('intel','tri_intel')" class="navlnk">Intel</a><br>
<span id="intel"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_INTEL &quot;intel&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_INTEL &quot;intel&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_INTEL &quot;intel&quot; groupby:dstport" target="dynamic" onclick="turnBackBold (this);">Top DST Ports</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_INTEL &quot;intel&quot; groupby:indicator" target="dynamic" onclick="turnBackBold (this);">Top Indicators</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_INTEL &quot;intel&quot; groupby:indicator_type" target="dynamic" onclick="turnBackBold (this);">Top Indicator Types</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_INTEL &quot;intel&quot; groupby:sources" target="dynamic" onclick="turnBackBold (this);">Top Sources</a><br>
</span>
<br><a href="javascript:showhide('irc','tri_irc')"><img src="tri_c.gif" id="tri_irc" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('irc','tri_irc')" class="navlnk">IRC</a><br>
<span id="irc"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_IRC &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_IRC &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_IRC &quot;-&quot; groupby:dstport" target="dynamic" onclick="turnBackBold (this);">Top DST Ports</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_IRC &quot;-&quot; groupby:mime_type" target="dynamic" onclick="turnBackBold (this);">Top MIME Types</a><br>
</span>
<br><a href="javascript:showhide('notice','tri_notice')"><img src="tri_c.gif" id="tri_notice" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('notice','tri_notice')" class="navlnk">Notice</a><br>
<span id="notice"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_NOTICE &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_NOTICE &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_NOTICE &quot;-&quot; groupby:notice_type" target="dynamic" onclick="turnBackBold (this);">Top Notice Types</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_NOTICE &quot;ShellShock::Exploit&quot; " target="dynamic" onclick="turnBackBold (this);">ShellShock Exploits</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_NOTICE &quot;ShellShock::Scanner&quot; " target="dynamic" onclick="turnBackBold (this);">ShellShock Scanners</a><br>
</span>
<br><a href="javascript:showhide('radius','tri_radius')"><img src="tri_c.gif" id="tri_radius" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('radius','tri_radius')" class="navlnk">RADIUS</a><br>
<span id="radius"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_RADIUS &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_RADIUS &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_RADIUS &quot;-&quot; groupby:dstport" target="dynamic" onclick="turnBackBold (this);">Top DST Ports</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_RADIUS &quot;-&quot; groupby:remote_ip" target="dynamic" onclick="turnBackBold (this);">Remote IP</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_RADIUS &quot;-&quot; groupby:user" target="dynamic" onclick="turnBackBold (this);">Users</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_RADIUS &quot;-&quot; groupby:mac" target="dynamic" onclick="turnBackBold (this);">MAC Addresses</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_RADIUS &quot;-&quot; groupby:connect_info" target="dynamic" onclick="turnBackBold (this);">Connect Info</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_RADIUS &quot;-&quot; groupby:result" target="dynamic" onclick="turnBackBold (this);">Result</a><br>
</span>
<br><a href="javascript:showhide('smtp','tri_smtp')"><img src="tri_c.gif" id="tri_smtp" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('smtp','tri_smtp')" class="navlnk">SMTP</a><br>
<span id="smtp"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SMTP &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SMTP &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SMTP &quot;-&quot; groupby:dstport" target="dynamic" onclick="turnBackBold (this);">Top DST Ports</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SMTP &quot;-&quot; groupby:subject" target="dynamic" onclick="turnBackBold (this);">Top Subjects</a><br>
</span>
<br><a href="javascript:showhide('snmp','tri_snmp')"><img src="tri_c.gif" id="tri_snmp" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('snmp','tri_snmp')" class="navlnk">SNMP</a><br>
<span id="snmp"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SNMP &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SNMP &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SNMP &quot;-&quot; groupby:dstport" target="dynamic" onclick="turnBackBold (this);">Top DST Ports</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SNMP &quot;-&quot; groupby:get_requests" target="dynamic" onclick="turnBackBold (this);">GET Requests</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SNMP &quot;-&quot; groupby:get_responses" target="dynamic" onclick="turnBackBold (this);">GET Responses</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SNMP &quot;-&quot; groupby:duration" target="dynamic" onclick="turnBackBold (this);">Duration</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SNMP &quot;-&quot; groupby:version" target="dynamic" onclick="turnBackBold (this);">Version</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SNMP &quot;-&quot; groupby:community" target="dynamic" onclick="turnBackBold (this);">Community</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SNMP &quot;-&quot; groupby:display_string" target="dynamic" onclick="turnBackBold (this);">Display String</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SNMP &quot;-&quot; groupby:up_since" target="dynamic" onclick="turnBackBold (this);">Up Since</a><br>
</span>
<br><a href="javascript:showhide('snsu','tri_snsu')"><img src="tri_c.gif" id="tri_snsu" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('snsu','tri_snsu')" class="navlnk">Snort/Suricata</a><br>
<span id="snsu"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=SNORT &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=SNORT &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=SNORT &quot;-&quot; groupby:sig_msg" target="dynamic" onclick="turnBackBold (this);">Top NIDS Alerts</a><br>
</span>
<br><a href="javascript:showhide('soft','tri_soft')"><img src="tri_c.gif" id="tri_soft" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('soft','tri_soft')" class="navlnk">Software</a><br>
<span id="soft"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SOFTWARE &quot;-&quot; groupby:software_type" target="dynamic" onclick="turnBackBold (this);">Software Detected by Bro</a><br>
</span>
<br><a href="javascript:showhide('ssh','tri_ssh')"><img src="tri_c.gif" id="tri_ssh" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('ssh','tri_ssh')" class="navlnk">SSH</a><br>
<span id="ssh"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSH &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSH &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSH &quot;-&quot; groupby:dstport" target="dynamic" onclick="turnBackBold (this);">Top DST Ports</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSH &quot;-&quot; groupby:country" target="dynamic" onclick="turnBackBold (this);">Top Countries</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSH &quot;-&quot; groupby:status" target="dynamic" onclick="turnBackBold (this);">Status</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=SSH_LOGIN port groupby:user" target="dynamic" onclick="turnBackBold (this);">Logins</a><br>
</span>
<br><a href="javascript:showhide('ssl','tri_ssl')"><img src="tri_c.gif" id="tri_ssl" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('ssl','tri_ssl')" class="navlnk">SSL</a><br>
<span id="ssl"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSL &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSL &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSL &quot;-&quot; groupby:dstport" target="dynamic" onclick="turnBackBold (this);">Top DST Ports</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSL &quot;-&quot; groupby:hostname" target="dynamic" onclick="turnBackBold (this);">Top Hostnames</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSL &quot;sslv3&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SSLv3 SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSL &quot;sslv3&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top SSLv3 DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSL &quot;sslv3&quot; groupby:hostname" target="dynamic" onclick="turnBackBold (this);">Top SSLv3 Hostnames</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSL &quot;-&quot; groupby:ssl_version" target="dynamic" onclick="turnBackBold (this);">Top SSL Versions</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_SSL &quot;-&quot; groupby:ssl_cipher" target="dynamic" onclick="turnBackBold (this);">Top SSL Ciphers</a><br>
</span>
<br><a href="javascript:showhide('tun','tri_tun')"><img src="tri_c.gif" id="tri_tun" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('tun','tri_tun')" class="navlnk">Tunnels</a><br>
<span id="tun"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_TUNNEL &quot;Tunnel&quot; groupby:tunnel_type" target="dynamic" onclick="turnBackBold (this);">Top Tunnels</a><br>
</span>
<br><a href="javascript:showhide('wrd','tri_wrd')"><img src="tri_c.gif" id="tri_wrd" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('wrd','tri_wrd')" class="navlnk">Weird</a><br>
<span id="wrd"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_WEIRD &quot;-&quot; groupby:srcip" target="dynamic" onclick="turnBackBold (this);">Top SRC IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_WEIRD &quot;-&quot; groupby:dstip" target="dynamic" onclick="turnBackBold (this);">Top DST IPs</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_WEIRD &quot;-&quot; groupby:name" target="dynamic" onclick="turnBackBold (this);">Top Weird Types</a><br>
</span>
<br><a href="javascript:showhide('509','tri_509')"><img src="tri_c.gif" id="tri_509" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('509','tri_509')" class="navlnk">X.509</a><br>
<span id="509"  style="display: none">
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_X509 &quot;-&quot; groupby:cert_version" target="dynamic" onclick="turnBackBold (this);">Version</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_X509 &quot;-&quot; groupby:cert_key_length" target="dynamic" onclick="turnBackBold (this);">Key Length</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_X509 &quot;-&quot; groupby:cert_serial" target="dynamic" onclick="turnBackBold (this);">Serial</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_X509 &quot;-&quot; groupby:cert_subject" target="dynamic" onclick="turnBackBold (this);">Subject</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_X509 &quot;-&quot; groupby:cert_issuer" target="dynamic" onclick="turnBackBold (this);">Issuer</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_X509 &quot;-&quot; groupby:cert_key_alg" target="dynamic" onclick="turnBackBold (this);">Key Algorithm</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_X509 &quot;-&quot; groupby:cert_sig_alg" target="dynamic" onclick="turnBackBold (this);">Sig Algorithm</a><br>
<a href="https://<?php echo $_SERVER['HTTP_HOST']; ?>:3154/?query_string=class=BRO_X509 &quot;-&quot; groupby:cert_key_type" target="dynamic" onclick="turnBackBold (this);">Key Type</a><br>
</span>

<?php if (file_exists("local.php")): ?>
          <br /><a href="javascript:showhide('local','tri_local')"><img src="tri_c.gif" id="tri_local" width="14" height="10" border="0" alt=""></a><a href="javascript:showhide('local','tri_local')" class="navlnk">Local</a><br />
          <span id="local" style="display: none">
          <?php require_once("local.php"); ?>
          </span>
<?php endif; ?>

</body>
</html>
