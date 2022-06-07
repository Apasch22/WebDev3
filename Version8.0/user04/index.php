<?php
$apiKey = "53f7934ac3a80c4bba5a645d76ee6b53"; //You will need to add in the 
$cityId = "5046997"; //5046997 Shakopee City Id
$units = "imperial";//metric-Celcius  imperial-Farhenheit
if ($units == 'imperial'){//Changes the $temp varaible to match 
    $temp = "F"; 
}
else {
    $temp = "C";
}
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=" . $units . "&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();
?>
<html lang="en">
    <!--Version 8.0 
	Name: Logan Swartout
	Date Completed: 5/27/22
    -->
    <head>
        
        <title>Web Development User #04</title>
    
    </head>
    
    <body>
        
        <center>My name is User #04</center>
    
    </body>

</html>