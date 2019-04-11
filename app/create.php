<?php 
	$weburl = $_POST['url'];
	$linkpr = $_POST['linkpj'];	

	$urlsource =  "C:\\xampp\\htdocs\\".$weburl;

	$myFile = "C:/Windows/System32/drivers/etc/hosts";
    $fh = fopen($myFile, 'a');
    fwrite($fh, "\n127.0.0.10 ".$weburl);
    fclose($fh);

    $myFile = "C:/xampp/apache/conf/extra/httpd-vhosts.conf";
    $fh = fopen($myFile, 'a');
    $host = "
	    	\n\n<VirtualHost *:80>
	    	\nDocumentRoot ".$urlsource."
	    	\nServerName ".$weburl."
	    	\n<Directory ".$urlsource.">
	    	\nOrder allow,deny
	    	\nAllow from all
	    	\n</Directory>
	    	\n</VirtualHost>
		";

    fwrite($fh, $host);
    fclose($fh);


    function makeDir($path)
	{
	     $ret = mkdir($path);
	     return $ret === true || is_dir($path);
	}

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


	makeDir($urlsource);
	recurse_copy($linkpr,$urlsource);
 ?>