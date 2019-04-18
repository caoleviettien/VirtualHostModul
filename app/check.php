<?php 
class checkFile
{
	public function checkvhost($weburl, $linkpj, $drive){
		$host = "
		    	\n<VirtualHost *:80>
		    	\nDocumentRoot ".$drive.":\\xampp\\htdocs\\".$weburl."
		    	\nServerName ".$weburl."
		    	\nErrorLog logs\\dummy-host.example.com-error.log
		    	\nCustomLog logs\\dummy-host.example.com-access.log common
		    	\n<Directory ".$linkpj.">
		    	\nOrder allow,deny
		    	\nAllow from all
		    	\n</Directory>
		    	\n</VirtualHost>
			";
		return $host;
	}	

	public function checkPath($weburl){
		$path = "\n127.0.0.10 ".$weburl;
		return $path;
	}
}