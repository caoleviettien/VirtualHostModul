<?php 
	include "action.php";

	$start = "C:/xampp/apache_start.bat";	
	$stop = "C:/xampp/apache_stop.bat";
	$restart = "C:/xampp/apache_restart.bat";
	$weburl = $_POST['url'];
	$linkpr = $_POST['linkpj'];

	$urlsource =  "C:\\xampp\\htdocs\\".$weburl;
	$myFileHost = "C:/Windows/System32/drivers/etc/hosts";
	$myFileVhost = "C:/xampp/apache/conf/extra/httpd-vhosts.conf";

	$action = new action();
	$action->writeHosts($myFileHost, $weburl);
	$action->writeVhosts($myFileVhost, $urlsource, $weburl);

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
	echo "Create VirtualHost Successfully".'<br>'.'URL: '.$weburl."<br>"."You must restart apache xampps to start virtualhost"."<br>";
	echo "<a href='".$link_address."'>".$weburl."</a>";
	//shell_exec($stop);
	
	// shell_exec($restart);
	// shell_exec($start);

	

 //    $fh = fopen($myFile, 'a');
 //    fwrite($fh, "\n127.0.0.10 ".$weburl);
 //    fclose($fh);


    
 //    $fh = fopen($myFiles, 'a');
 //    $host = "
	//     	\n\n<VirtualHost *:80>
	//     	\nDocumentRoot ".$urlsource."
	//     	\nServerName ".$weburl."
	//     	\n<Directory ".$urlsource.">
	//     	\nOrder allow,deny
	//     	\nAllow from all
	//     	\n</Directory>
	//     	\n</VirtualHost>
	// 	";

 //    fwrite($fh, $host);
 //    fclose($fh);


 //    function makeDir($path)
	// {
	//      $ret = mkdir($path);
	//      return $ret === true || is_dir($path);
	// }

	// function recurse_copy($src,$dst) {
	// 	$dir = opendir($src);
	// 	@mkdir($dst);
	// 	while(false !== ( $file = readdir($dir)) ) {
	// 		if (( $file != '.' ) && ( $file != '..' )) {
	// 			if ( is_dir($src . '/' . $file) ) {
	// 			recurse_copy($src . '/' . $file,$dst . '/' . $file);
	// 			}
	// 			else {
	// 			copy($src . '/' . $file,$dst . '/' . $file);
	// 			}
	// 		}
	// 	}
	// 	closedir($dir);
	// }