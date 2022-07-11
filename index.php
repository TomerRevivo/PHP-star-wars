<?php


$headers = [
	"User-Agent: Star Wars API",
	"Authorization :token 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"
];

// create a new cURL resource
$ch = curl_init("http://api.github.com/user/repos");

// set URL and other appropriate options
curl_setopt($ch , CURLOPT_HTTPHEADER , $headers);
curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);


// grab URL and pass it to the browser
$response = curl_exec($ch);


// close cURL resource, and free up system resources
curl_close($ch);

$data= json_decode($response , true); 
var_dump($data) ; 
?>