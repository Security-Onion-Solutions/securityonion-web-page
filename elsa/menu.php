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

	@media all and (min-width: 0px) and (max-width: 230px) {
		.tab {
			font-size:12px;
			margin:0px;
		}
	}

	@media all and (min-width: 231px) {
		.tab {
			margin:25px;
		}
	}
</style>
</head>
<body>

<?php
	/* Define href variables */
	$h1 = "https://{$_SERVER['HTTP_HOST']}:3154/?query_string=";
	$h2 = " class=\"tab\" target=\"dynamic\" onclick=\"turnBackBold (this);\"";
?>

<a href="http://www.securityonion.net" target="_blank"><img STYLE="border: none;" src="so-logo.jpeg" alt="Security Onion Website"></img></a><br /><br />

<!-- 'Connections' ELSA Queries -->
<?php $descr = "Network connections seen by Bro (session data)"; ?>
<a href="javascript:showhide('conn','tri_conn')"><img src="tri_c.gif" id="tri_conn" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('conn','tri_conn')" title="<?php echo $descr ?>" class="navlnk">Connections</a><br />
<span id="conn" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_CONN icmp or tcp or udp groupby:node"			<?php echo $h2; ?>>Grouped by Node</a><br />
	<a href="<?php echo $h1; ?>class=BRO_CONN icmp or tcp or udp groupby:srcip"			<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_CONN icmp or tcp or udp groupby:dstip"			<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_CONN icmp or tcp or udp groupby:dstport"			<?php echo $h2; ?>>Top DST Ports</a><br />
	<a href="<?php echo $h1; ?>class=BRO_CONN &quot;-&quot; groupby:service"			<?php echo $h2; ?>>Top Services</a><br />
	<a href="<?php echo $h1; ?>class=BRO_CONN +BRO_CONN.dstport=53 groupby:service"			<?php echo $h2; ?>>Port 53 groupby Service</a><br />
	<a href="<?php echo $h1; ?>class=BRO_CONN +BRO_CONN.dstport=80 groupby:service"			<?php echo $h2; ?>>Port 80 groupby Service</a><br />
	<a href="<?php echo $h1; ?>class=BRO_CONN +BRO_CONN.dstport=443 groupby:service"		<?php echo $h2; ?>>Port 443 groupby Service</a><br />
	<a href="<?php echo $h1; ?>class=BRO_CONN &quot;-&quot; groupby:resp_country_code"		<?php echo $h2; ?>>Groupby Resp Country</a><br />
</span><br />

<!-- 'DHCP' ELSA Queries -->
<?php $descr = "DHCP transactions seen by Bro"; ?>
<a href="javascript:showhide('dhcp','tri_dhcp')"><img src="tri_c.gif" id="tri_dhcp" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('dhcp','tri_dhcp')" title="<?php echo $descr ?>" class="navlnk">DHCP</a><br />
<span id="dhcp" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_DHCP &quot;68&quot; groupby:assigned_ip"			<?php echo $h2; ?>>Top Assigned IPs</a><br />
</span><br />

<!-- 'DNS' ELSA Queries -->
<?php $descr = "DNS transactions seen by Bro"; ?>
<a href="javascript:showhide('dns','tri_dns')"><img src="tri_c.gif" id="tri_dns" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('dns','tri_dns')" title="<?php echo $descr ?>" class="navlnk">DNS</a><br />
<span id="dns" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_DNS dstport=&quot;53&quot; groupby:srcip"			<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_DNS dstport=&quot;53&quot; groupby:dstip"			<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_DNS dstport=&quot;53&quot; groupby:hostname"		<?php echo $h2; ?>>Top Requests</a><br />
	<a href="<?php echo $h1; ?>class=BRO_DNS dstport=&quot;53&quot; groupby:answer"			<?php echo $h2; ?>>Top Responses</a><br />
	<a href="<?php echo $h1; ?>class=BRO_DNS dstport=&quot;53&quot; groupby:query_class"		<?php echo $h2; ?>>Top Query Class</a><br />
	<a href="<?php echo $h1; ?>class=BRO_DNS dstport=&quot;53&quot; groupby:query_type"		<?php echo $h2; ?>>Top Query Type</a><br />
	<a href="<?php echo $h1; ?>class=BRO_DNS dstport=&quot;53&quot; groupby:return_code"		<?php echo $h2; ?>>Top Return Code</a><br />
	<a href="<?php echo $h1; ?>class=BRO_DNS nxdomain groupby:hostname"				<?php echo $h2; ?>>Top nxdomain</a><br />
	<a href="<?php echo $h1; ?>class=BRO_DNS proto=&quot;tcp&quot; &quot;axfr&quot; OR &quot;ixfr&quot; groupby:srcip"
													<?php echo $h2; ?>>Zone Transfers</a><br />
</span><br />

<!-- 'Files' ELSA Queries -->
<?php $descr = "Files transferred via network seen by Bro"; ?>
<a href="javascript:showhide('files','tri_files')"><img src="tri_c.gif" id="tri_files" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('files','tri_files')" title="<?php echo $descr ?>" class="navlnk">Files</a><br />
<span id="files" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_FILES &quot;-&quot; groupby:mime_type"			<?php echo $h2; ?>>MIME Types</a><br />
	<a href="<?php echo $h1; ?>class=BRO_FILES &quot;-&quot; groupby:source"			<?php echo $h2; ?>>Sources</a><br />
</span><br />

<!-- 'Firewall' ELSA Queries -->
<?php $descr = "Firewall logs collected via syslog"; ?>
<a href="javascript:showhide('firewall','tri_firewall')"><img src="tri_c.gif" id="tri_files" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('firewall','tri_firewall')" title="<?php echo $descr ?>" class="navlnk">Firewall</a><br />
<span id="firewall" style="display: none">
	<a href="<?php echo $h1; ?>class=FIREWALL_CONNECTION_END groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs Allowed</a><br />
	<a href="<?php echo $h1; ?>class=FIREWALL_CONNECTION_END groupby:dstip"				<?php echo $h2; ?>>Top DST IPs Allowed</a><br />
	<a href="<?php echo $h1; ?>class=FIREWALL_ACCESS_DENY groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs Denied</a><br />
	<a href="<?php echo $h1; ?>class=FIREWALL_ACCESS_DENY groupby:dstip"				<?php echo $h2; ?>>Top DST IPs Denied</a><br />
</span><br />

<!-- 'FTP' ELSA Queries -->
<?php $descr = "FTP transactions seen by Bro"; ?>
<a href="javascript:showhide('ftp','tri_ftp')"><img src="tri_c.gif" id="tri_ftp" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('ftp','tri_ftp')" title="<?php echo $descr ?>" class="navlnk">FTP</a><br />
<span id="ftp" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_FTP &quot;-&quot; groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_FTP &quot;-&quot; groupby:dstip"				<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_FTP &quot;-&quot; groupby:dstport"				<?php echo $h2; ?>>Top DST Ports</a><br />
	<a href="<?php echo $h1; ?>class=BRO_FTP &quot;-&quot; groupby:command"				<?php echo $h2; ?>>Top Commands</a><br />
	<a href="<?php echo $h1; ?>class=BRO_FTP &quot;-&quot; groupby:mime_type"			<?php echo $h2; ?>>Top MIME Types</a><br />
	<a href="<?php echo $h1; ?>class=BRO_FTP &quot;-&quot; groupby:arg"				<?php echo $h2; ?>>Top arg</a><br />
</span><br />

<!-- 'Host Logs' ELSA Queries -->
<?php $descr = "Host logs seen by OSSEC, syslog, and/or Bro"; ?>
<a href="javascript:showhide('logs','tri_logs')"><img src="tri_c.gif" id="tri_logs" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('logs','tri_logs')" title="<?php echo $descr ?>" class="navlnk">Host Logs</a><br />
<span id="logs" style="display: none">
	<a href="<?php echo $h1; ?>class=none program=&quot;ossec&quot; &quot;alert&quot; &quot;Integrity checksum&quot;"
													<?php echo $h2; ?>>File Changes</a><br />
	<a href="<?php echo $h1; ?>class=none program=&quot;ossec&quot; &quot;alert&quot; &quot;ossec: Agent&quot; OR &quot;ossec: Ossec&quot;"
													<?php echo $h2; ?>>OSSEC Status</a><br />
	<a href="<?php echo $h1; ?>class=none program=&quot;ossec&quot; &quot;alert&quot; -&quot;Integrity checksum&quot; -&quot;ossec: Agent&quot; -&quot;ossec: Ossec&quot; -&quot;packets_received&quot;"									<?php echo $h2; ?>>OSSEC Alerts</a><br />
	<a href="<?php echo $h1; ?>class=none program=&quot;ossec_archive&quot; &quot;<?php echo date('Y'); ?>&quot; -&quot;packets_received&quot; -&quot;--MARK--&quot; -&quot;AnyEvent&quot;"											<?php echo $h2; ?>>All OSSEC Logs</a><br />
	<a href="<?php echo $h1; ?>class=none -program=ossec_archive -program=ossec groupby:program"	<?php echo $h2; ?>>Syslog-NG (Program)</a><br />
	<a href="<?php echo $h1; ?>class=none -program=ossec_archive -program=ossec groupby:host"	<?php echo $h2; ?>>Syslog-NG (Host)</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SYSLOG udp or tcp"						<?php echo $h2; ?>>Syslog Detected by Bro</a><br />
	<a href="<?php echo $h1; ?>class=&quot;WINDOWS_PROCESS&quot; &quot;new process&quot; groupby:image"
													<?php echo $h2; ?>>Windows Processes</a><br />
</span><br />

<!-- 'HTTP' ELSA Queries -->
<?php $descr = "HTTP transactions seen by Bro"; ?>
<a href="javascript:showhide('http','tri_http')"><img src="tri_c.gif" id="tri_http" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('http','tri_http')" title="<?php echo $descr ?>" class="navlnk">HTTP</a><br />
<span id="http" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_HTTP &quot;-&quot; groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_HTTP &quot;-&quot; groupby:dstip"				<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_HTTP &quot;-&quot; groupby:dstport"			<?php echo $h2; ?>>Top DST Ports</a><br />
	<a href="<?php echo $h1; ?>class=BRO_HTTP &quot;-&quot; groupby:mime_type"			<?php echo $h2; ?>>Top MIME Types</a><br />
	<a href="<?php echo $h1; ?>class=BRO_HTTP &quot;-&quot; groupby:user_agent"			<?php echo $h2; ?>>Top User Agents</a><br />
	<a href="<?php echo $h1; ?>class=BRO_HTTP &quot;-&quot; groupby:site"				<?php echo $h2; ?>>Top Sites</a><br />
	<a href="<?php echo $h1; ?>class=BRO_HTTP BRO_HTTP.mime_type=x-dosexec groupby:site"<?php echo $h2; ?>>Sites hosting EXEs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_HTTP BRO_HTTP.mime_type=vnd.ms-cab-compressed groupby:site"<?php echo $h2; ?>>Sites hosting CABs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_HTTP BRO_HTTP.mime_type=java-archive groupby:site"	<?php echo $h2; ?>>Sites hosting JARs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_HTTP BRO_HTTP.mime_type=x-rar groupby:site"	<?php echo $h2; ?>>Sites hosting RARs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_HTTP BRO_HTTP.mime_type=zip groupby:site"	<?php echo $h2; ?>>Sites hosting ZIPs</a><br />
</span><br />

<!-- 'Intel' ELSA Queries -->
<?php $descr = "Intel indicators seen by Bro. Add your own indicators to /opt/bro/share/bro/intel/intel.dat"; ?>
<a href="javascript:showhide('intel','tri_intel')"><img src="tri_c.gif" id="tri_intel" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('intel','tri_intel')" title="<?php echo $descr ?>" class="navlnk">Intel</a><br />
<span id="intel" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_INTEL &quot;intel&quot; groupby:srcip"			<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_INTEL &quot;intel&quot; groupby:dstip"			<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_INTEL &quot;intel&quot; groupby:dstport"			<?php echo $h2; ?>>Top DST Ports</a><br />
	<a href="<?php echo $h1; ?>class=BRO_INTEL &quot;intel&quot; groupby:indicator"			<?php echo $h2; ?>>Top Indicators</a><br />
	<a href="<?php echo $h1; ?>class=BRO_INTEL &quot;intel&quot; groupby:indicator_type"		<?php echo $h2; ?>>Top Indicator Types</a><br />
	<a href="<?php echo $h1; ?>class=BRO_INTEL &quot;intel&quot; groupby:sources"			<?php echo $h2; ?>>Top Sources</a><br />
</span><br />

<!-- 'IRC' ELSA Queries -->
<?php $descr = "IRC traffic seen by Bro"; ?>
<a href="javascript:showhide('irc','tri_irc')"><img src="tri_c.gif" id="tri_irc" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('irc','tri_irc')" title="<?php echo $descr ?>" class="navlnk">IRC</a><br />
<span id="irc" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_IRC &quot;-&quot; groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_IRC &quot;-&quot; groupby:dstip"				<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_IRC &quot;-&quot; groupby:dstport"				<?php echo $h2; ?>>Top DST Ports</a><br />
	<a href="<?php echo $h1; ?>class=BRO_IRC &quot;-&quot; groupby:mime_type"			<?php echo $h2; ?>>Top MIME Types</a><br />
</span><br />

<!-- 'Notice' ELSA Queries -->
<?php $descr = "Notices generated by Bro"; ?>
<a href="javascript:showhide('notice','tri_notice')"><img src="tri_c.gif" id="tri_notice" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('notice','tri_notice')" title="<?php echo $descr ?>" class="navlnk">Notice</a><br />
<span id="notice" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_NOTICE &quot;-&quot; groupby:srcip"			<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_NOTICE &quot;-&quot; groupby:dstip"			<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_NOTICE &quot;-&quot; groupby:notice_type"			<?php echo $h2; ?>>Top Notice Types</a><br />
	<a href="<?php echo $h1; ?>class=BRO_NOTICE &quot;ShellShock::Exploit&quot;"			<?php echo $h2; ?>>ShellShock Exploits</a><br />
	<a href="<?php echo $h1; ?>class=BRO_NOTICE &quot;ShellShock::Scanner&quot;"			<?php echo $h2; ?>>ShellShock Scanners</a><br />
</span><br />

<!-- 'RADIUS' ELSA Queries -->
<?php $descr = "RADIUS traffic seen by Bro"; ?>
<a href="javascript:showhide('radius','tri_radius')"><img src="tri_c.gif" id="tri_radius" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('radius','tri_radius')" title="<?php echo $descr ?>" class="navlnk">RADIUS</a><br />
<span id="radius" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_RADIUS &quot;-&quot; groupby:srcip"			<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_RADIUS &quot;-&quot; groupby:dstip"			<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_RADIUS &quot;-&quot; groupby:dstport"			<?php echo $h2; ?>>Top DST Ports</a><br />
	<a href="<?php echo $h1; ?>class=BRO_RADIUS &quot;-&quot; groupby:remote_ip"			<?php echo $h2; ?>>Remote IP</a><br />
	<a href="<?php echo $h1; ?>class=BRO_RADIUS &quot;-&quot; groupby:user"				<?php echo $h2; ?>>Users</a><br />
	<a href="<?php echo $h1; ?>class=BRO_RADIUS &quot;-&quot; groupby:mac"				<?php echo $h2; ?>>MAC Addresses</a><br />
	<a href="<?php echo $h1; ?>class=BRO_RADIUS &quot;-&quot; groupby:connect_info"			<?php echo $h2; ?>>Connect Info</a><br />
	<a href="<?php echo $h1; ?>class=BRO_RADIUS &quot;-&quot; groupby:result"			<?php echo $h2; ?>>Result</a><br />
</span><br />

<!-- 'SMTP' ELSA Queries -->
<?php $descr = "SMTP traffic seen by Bro"; ?>
<a href="javascript:showhide('smtp','tri_smtp')"><img src="tri_c.gif" id="tri_smtp" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('smtp','tri_smtp')" title="<?php echo $descr ?>" class="navlnk">SMTP</a><br />
<span id="smtp" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_SMTP &quot;-&quot; groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SMTP &quot;-&quot; groupby:dstip"				<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SMTP &quot;-&quot; groupby:dstport"			<?php echo $h2; ?>>Top DST Ports</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SMTP &quot;-&quot; groupby:subject"			<?php echo $h2; ?>>Top Subjects</a><br />
</span><br />

<!-- 'SNMP' ELSA Queries -->
<?php $descr = "SNMP traffic seen by Bro"; ?>
<a href="javascript:showhide('snmp','tri_snmp')"><img src="tri_c.gif" id="tri_snmp" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('snmp','tri_snmp')" title="<?php echo $descr ?>" class="navlnk">SNMP</a><br />
<span id="snmp" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_SNMP &quot;-&quot; groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SNMP &quot;-&quot; groupby:dstip"				<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SNMP &quot;-&quot; groupby:dstport"			<?php echo $h2; ?>>Top DST Ports</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SNMP &quot;-&quot; groupby:get_requests"			<?php echo $h2; ?>>GET Requests</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SNMP &quot;-&quot; groupby:get_responses"			<?php echo $h2; ?>>GET Responses</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SNMP &quot;-&quot; groupby:duration"			<?php echo $h2; ?>>Duration</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SNMP &quot;-&quot; groupby:version"			<?php echo $h2; ?>>Version</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SNMP &quot;-&quot; groupby:community"			<?php echo $h2; ?>>Community</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SNMP &quot;-&quot; groupby:display_string"			<?php echo $h2; ?>>Display String</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SNMP &quot;-&quot; groupby:up_since"			<?php echo $h2; ?>>Up Since</a><br />
</span><br />

<!-- 'Snort/Suricata' ELSA Queries -->
<?php $descr = "NIDS alerts generated by either Snort or Suricata"; ?>
<a href="javascript:showhide('snsu','tri_snsu')"><img src="tri_c.gif" id="tri_snsu" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('snsu','tri_snsu')" title="<?php echo $descr ?>" class="navlnk">Snort/Suricata</a><br />
<span id="snsu" style="display: none">
	<a href="<?php echo $h1; ?>class=SNORT &quot;-&quot; groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=SNORT &quot;-&quot; groupby:dstip"				<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=SNORT &quot;-&quot; groupby:sig_msg"				<?php echo $h2; ?>>Top NIDS Alerts</a><br />
</span><br />

<!-- 'Software' ELSA Queries -->
<?php $descr = "Software assets seen by Bro (asset data)"; ?>
<a href="javascript:showhide('soft','tri_soft')"><img src="tri_c.gif" id="tri_soft" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('soft','tri_soft')" title="<?php echo $descr ?>" class="navlnk">Software</a><br />
<span id="soft" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_SOFTWARE &quot;-&quot; groupby:software_type"		<?php echo $h2; ?>>Software Detected by Bro</a><br />
</span><br />

<!-- 'SSH' ELSA Queries -->
<?php $descr = "SSH traffic seen by Bro"; ?>
<a href="javascript:showhide('ssh','tri_ssh')"><img src="tri_c.gif" id="tri_ssh" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('ssh','tri_ssh')" title="<?php echo $descr ?>" class="navlnk">SSH</a><br />
<span id="ssh" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_SSH &quot;-&quot; groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSH &quot;-&quot; groupby:dstip"				<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSH &quot;-&quot; groupby:dstport"				<?php echo $h2; ?>>Top DST Ports</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSH &quot;-&quot; groupby:country"				<?php echo $h2; ?>>Top Countries</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSH &quot;-&quot; groupby:status"				<?php echo $h2; ?>>Status</a><br />
	<a href="<?php echo $h1; ?>class=SSH_LOGIN port groupby:user"					<?php echo $h2; ?>>Logins</a><br />
</span><br />

<!-- 'SSL' ELSA Queries -->
<?php $descr = "SSL/TLS traffic seen by Bro"; ?>
<a href="javascript:showhide('ssl','tri_ssl')"><img src="tri_c.gif" id="tri_ssl" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('ssl','tri_ssl')" title="<?php echo $descr ?>" class="navlnk">SSL</a><br />
<span id="ssl" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_SSL &quot;-&quot; groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSL &quot;-&quot; groupby:dstip"				<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSL &quot;-&quot; groupby:dstport"				<?php echo $h2; ?>>Top DST Ports</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSL &quot;-&quot; groupby:hostname"			<?php echo $h2; ?>>Top Hostnames</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSL &quot;sslv3&quot; groupby:srcip"			<?php echo $h2; ?>>Top SSLv3 SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSL &quot;sslv3&quot; groupby:dstip"			<?php echo $h2; ?>>Top SSLv3 DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSL &quot;sslv3&quot; groupby:hostname"			<?php echo $h2; ?>>Top SSLv3 Hostnames</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSL &quot;-&quot; groupby:ssl_version"			<?php echo $h2; ?>>Top SSL Versions</a><br />
	<a href="<?php echo $h1; ?>class=BRO_SSL &quot;-&quot; groupby:ssl_cipher"			<?php echo $h2; ?>>Top SSL Ciphers</a><br />
</span><br />

<!-- 'Tunnels' ELSA Queries -->
<?php $descr = "Tunnels seen by Bro"; ?>
<a href="javascript:showhide('tun','tri_tun')"><img src="tri_c.gif" id="tri_tun" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('tun','tri_tun')" title="<?php echo $descr ?>" class="navlnk">Tunnels</a><br />
<span id="tun" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_TUNNEL &quot;Tunnel&quot; groupby:tunnel_type"		<?php echo $h2; ?>>Top Tunnels</a><br />
</span><br />

<!-- 'Weird' ELSA Queries -->
<?php $descr = "Protocol anomalies seen by Bro"; ?>
<a href="javascript:showhide('wrd','tri_wrd')"><img src="tri_c.gif" id="tri_wrd" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('wrd','tri_wrd')" title="<?php echo $descr ?>" class="navlnk">Weird</a><br />
<span id="wrd" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_WEIRD &quot;-&quot; groupby:srcip"				<?php echo $h2; ?>>Top SRC IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_WEIRD &quot;-&quot; groupby:dstip"				<?php echo $h2; ?>>Top DST IPs</a><br />
	<a href="<?php echo $h1; ?>class=BRO_WEIRD &quot;-&quot; groupby:name"				<?php echo $h2; ?>>Top Weird Types</a><br />
</span><br />

<!-- 'X.509' ELSA Queries -->
<?php $descr = "X.509 certificates seen by Bro"; ?>
<a href="javascript:showhide('509','tri_509')"><img src="tri_c.gif" id="tri_509" width="14" height="10" border="0" alt=""></a>
<a href="javascript:showhide('509','tri_509')" title="<?php echo $descr ?>" class="navlnk">X.509</a><br />
<span id="509" style="display: none">
	<a href="<?php echo $h1; ?>class=BRO_X509 &quot;-&quot; groupby:cert_version"			<?php echo $h2; ?>>Version</a><br />
	<a href="<?php echo $h1; ?>class=BRO_X509 &quot;-&quot; groupby:cert_key_length"		<?php echo $h2; ?>>Key Length</a><br />
	<a href="<?php echo $h1; ?>class=BRO_X509 &quot;-&quot; groupby:cert_serial"			<?php echo $h2; ?>>Serial</a><br />
	<a href="<?php echo $h1; ?>class=BRO_X509 &quot;-&quot; groupby:cert_subject"			<?php echo $h2; ?>>Subject</a><br />
	<a href="<?php echo $h1; ?>class=BRO_X509 &quot;-&quot; groupby:cert_issuer"			<?php echo $h2; ?>>Issuer</a><br />
	<a href="<?php echo $h1; ?>class=BRO_X509 &quot;-&quot; groupby:cert_key_alg"			<?php echo $h2; ?>>Key Algorithm</a><br />
	<a href="<?php echo $h1; ?>class=BRO_X509 &quot;-&quot; groupby:cert_sig_alg"			<?php echo $h2; ?>>Sig Algorithm</a><br />
	<a href="<?php echo $h1; ?>class=BRO_X509 &quot;-&quot; groupby:cert_key_type"			<?php echo $h2; ?>>Key Type</a><br />
</span><br />

<!-- 'Local' ELSA Queries -->
<?php $descr = "Add your own local queries here"; ?>
<?php if (file_exists("local.php")): ?>
	<a href="javascript:showhide('local','tri_local')"><img src="tri_c.gif" id="tri_local" width="14" height="10" border="0" alt=""></a>
	<a href="javascript:showhide('local','tri_local')" title="<?php echo $descr ?>" class="navlnk">Local</a><br />
	<span id="local" style="display: none">
		<?php require_once("local.php"); ?>
	</span>
<?php endif; ?>

</body>
</html>
