<?php
header("Content-type: text/html; charset=utf-8");
$url ="http://niangao.boguyuan.com/niangao/api/user_ipGenerator?p=北京市&c=北京市"; 		
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HEADER, 0);
// $browser = 'Mozilla/5.0 (Windows NT 5.1; rv:20.0) Gecko/20100101 Firefox/20.0';
// curl_setopt($ch, CURLOPT_USERAGENT, $browser);
// if($ssl){
	// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
// }
// curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$data  =  curl_exec($ch);
curl_close($ch);
echo $data;
	
?>