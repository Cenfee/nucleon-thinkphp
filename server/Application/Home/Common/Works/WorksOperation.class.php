<?php
namespace Home\Common\Works;

require "Lib/Cenfee/Crypto/DiscuzCrypto.class.php";
use Cenfee\Crypto\DiscuzCrypto;

class WorksOperation
{
	function __construct() 
	{
 
	   
	   $txt = "This is a test"; 
		$key = "testkey"; 
		
		G('begin');
		$encrypt = DiscuzCrypto::encrypt($txt,$key); 
		$decrypt = DiscuzCrypto::decrypt($encrypt,$key); 
		G('end');
		
		
		echo G('begin','end').'s';
		echo $txt."<br><hr>"; 
		echo $encrypt."<br><hr>"; 
		echo $decrypt."<br><hr>"; 
		echo __ROOT__;
		
  	}	
}
