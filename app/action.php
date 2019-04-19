<?php 

class action
{
	public function writeVhosts($myFileVhost, $vhost){
		$fh = fopen($myFileVhost, 'a');
		fwrite($fh, $vhost);
		fclose($fh);
	}

	public function writeHosts($myFileHost, $weburl)
	{
	    $fh = fopen($myFileHost, 'a');
	    fwrite($fh, "\n127.0.0.10 ".$weburl);
	    fclose($fh);
	}

	public function makeDir($path)
	{
	     $ret = mkdir($path);
	     return $ret === true || is_dir($path);
	}

	public function success($link_address, $weburl)
	{
		echo "Create VirtualHost Successfully".'<br>'.'URL: '.$weburl."<br>"."You must restart apache xampps to start virtualhost"."<br>";
		echo "<a href='".$link_address."'>".$weburl."</a>";
	}
}