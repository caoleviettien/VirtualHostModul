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

	public function checkid(){
		$urldata = file_get_contents("C:/xampp/apache/conf/extra/httpd-vhosts.conf");
		$data = "Porject:";
		$count = substr_count($urldata, $data);
		$id = $count+1;
		return $id;
	}

	public function checkpath(){
		$urldata = file_get_contents("C:/xampp/apache/conf/extra/httpd-vhosts.conf");
		return $urldata;
	}

	public function checkfileexist($linkpj){
		if (file_exists($linkpj)) {
            return true;
        }else {
            return false;
        }
	}
}