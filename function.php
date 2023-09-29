<?php
include "simple_html_dom.php";
function scrapWebsite($url) {	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response = curl_exec($ch);
	curl_close($ch);
	$html = new simple_html_dom();
	$html->load($response);
	return $html;	
}

function getPostDetails ($html) {
	echo $html->plaintext;
}

function writeToCSV ($postDetail) {
	$resul = $postDetail->plaintext;
	echo preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$resul);
}

?>


