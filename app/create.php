<?php 
	include "action.php";

	// $start = "C:/xampp/apache_start.bat";	
	// $stop = "C:/xampp/apache_stop.bat";
	// $restart = "C:/xampp/apache_restart.bat";

	$weburl = $_POST['url'];
	$linkpr = $_POST['linkpj'];
	$drive = $_POST['drive'];
	$vhost = $_POST['vhost'];

	$urlsource =  $drive.":\\xampp\\htdocs\\".$weburl;
	$myFileHost = $drive.":/Windows/System32/drivers/etc/hosts";
	$myFileVhost = $drive.":/xampp/apache/conf/extra/httpd-vhosts.conf";

	$action = new action();
	$action->writeHosts($myFileHost, $weburl);
	$action->writeVhosts($myFileVhost, $vhost);

	$action->makeDir($urlsource);

	function recurse_copy($src,$dst) {
		$dir = opendir($src);
		@mkdir($dst);
		while(false !== ( $file = readdir($dir)) ) {
			if (( $file != '.' ) && ( $file != '..' )) {
				if ( is_dir($src . '/' . $file) ) {
				recurse_copy($src . '/' . $file,$dst . '/' . $file);
				}
				else {
				copy($src . '/' . $file,$dst . '/' . $file);
				}
			}
		}
		closedir($dir);
	}
	recurse_copy($linkpr,$urlsource);

	$link_address = "http://".$weburl;	
	$action->success($link_address, $weburl);