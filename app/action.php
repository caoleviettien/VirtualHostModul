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
}