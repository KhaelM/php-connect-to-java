<?php
//no jar files required
$url ="http://localhost:8080/myapp/myresource/boom";
// pass the java restful URL
$client = curl_init($url);
curl_setopt($client,CURLOPT_RETURNTRANSFER,1);
//curl_setopt($client,CURLOPT_POST,$data);
$response = curl_exec($client); 
//$result = json_decode($response);
if(!empty($response))
{ 
echo $response;
echo count(json_decode($response));
}
else
{
echo "No data found"; 
} 
?>