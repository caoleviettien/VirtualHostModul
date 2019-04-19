<?php 
	include "action.php";

	$weburl = $_POST['url'];
	$linkpr = $_POST['linkpj'];
	$vhost = $_POST['vhost'];
	$svaddress = $_POST['svaddress'];

	$urlsource =  $svaddress.$weburl;
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