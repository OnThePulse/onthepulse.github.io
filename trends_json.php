<?php
require_once('TwitterAPIExchange.php');


$settings = array(
    'oauth_access_token' => "37882786-A5geJylvQiDqbDGfMZbLfID8eAkEU0v4HjJNheV0U",
    'oauth_access_token_secret' => "NAFCUtNjE5ra2uzRK6NvsFyGoU8HpWieIEdZh64y4uCFG",
    'consumer_key' => "JNMDHTj7LA8Dk0h6ejIKq1XfV",
    'consumer_secret' => "JLnObZL7OWlgRkRT6eTQ4vCdqYDfEKHChYYF1tsqgAGEORxsIn"
);



$url = "https://api.twitter.com/1.1/trends/place.json";
$requestMethod = "GET";

if (isset($_GET['id'])) {$id = $_GET['id'];} else {$id = 4118;}

$getfield = "?id=$id";
$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();












