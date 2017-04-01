<?php
session_cache_limiter('nocache');
$cache_limiter = session_cache_limiter();

function url_get_contents ($inputURL) {
    if (!function_exists('curl_init')){ 
        exit('Sorry, CURL is not installed on your server.');
    }
    $ch = curl_init();

    $options = array(CURLOPT_URL => $inputURL,
                 CURLOPT_RETURNTRANSFER => true
                );

    curl_setopt_array($ch, $options);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function goProxy($dataURL) 
{
	$baseURL = 'http://alexkg413.cartodb.com/api/v2/sql?';
	//  					^ CHANGE THE 'CARTODB-USER-NAME' to your cartoDB url!
	$api = '&api_key=c983078517f86049121526a6fa1683e77ae8c153';
	//				 ^ENTER YOUR API KEY HERE!
	$url = $baseURL.'q='.urlencode($dataURL).$api;
	$result = url_get_contents ($url);
	return $result;
}
?>
