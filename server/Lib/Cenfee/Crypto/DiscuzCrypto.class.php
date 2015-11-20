<?php
//encrypt&&decrypt 0.0010S||0.0000S
namespace Cenfee\Crypto;
class DiscuzCrypto
{
	public static function encrypt($txt, $key) 
	{ 
		srand((double)microtime() * 1000000); 
		$encrypt_key = md5(rand(0, 32000)); 
		$ctr = 0; 
		$tmp = ''; 
		for($i = 0;$i < strlen($txt); $i++) 
		{ 
			$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr; 
			$tmp .= $encrypt_key[$ctr].($txt[$i] ^ $encrypt_key[$ctr++]); 
		} 
		return base64_encode(self::cryptoKey($tmp, $key)); 
	} 
		
	public static function decrypt($txt, $key) 
	{ 
		$txt = self::cryptoKey(base64_decode($txt), $key); 
		$tmp = ''; 
		for($i = 0;$i < strlen($txt); $i++) 
		{ 
			$md5 = $txt[$i]; 
			$tmp .= $txt[++$i] ^ $md5; 
		} 
		return $tmp; 
	} 
		
	public static function cryptoKey($txt, $encrypt_key)
	{ 
		$encrypt_key = md5($encrypt_key); 
		$ctr = 0; 
		$tmp = ''; 
		for($i = 0; $i < strlen($txt); $i++) 
		{ 
			$ctr = $ctr == strlen($encrypt_key) ? 0 : $ctr; 
			$tmp .= $txt[$i] ^ $encrypt_key[$ctr++]; 
		} 
		return $tmp; 
	} 
}
