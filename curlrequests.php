<?php
function httpGet($url)
{
	$ch = curl_init();  
     
        curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
//  curl_setopt($ch,CURLOPT_HEADER, false); 
	      
	$output=curl_exec($ch);
		   
	curl_close($ch);
	return $output;
}
echo httpGet("http://web.njit.edu/~dd255");
function httpPost($url,$params)
{
	$postData = '';
        //create name value pairs seperated by &
        foreach($params as $k => $v) 
	{ 
		$postData .= $k . '='.$v.'&'; 
	}
	$postData = rtrim($postData, '&');
		        
	$ch = curl_init();  
			     
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_HEADER, false); 
	curl_setopt($ch, CURLOPT_POST, count($postData));
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    
						      
	$output=curl_exec($ch);
							   
	curl_close($ch);
	return $output;
								    
}
$params = array
(
   "name" => "Ravishanker Kusuma",
   "age" => "32",
   "location" => "India"
);
echo
httpPost("http://web.njit.edu/~dd255/is218-program1/curlrequests.php",$params);

?>
