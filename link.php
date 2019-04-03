<?php

$home = file_get_contents('https://newsapi.org/v2/top-headlines?country=in&category=general&ENTERYOURAPIKEYHERE');
$science = file_get_contents('https://newsapi.org/v2/top-headlines?country=in&category=science&apiKey=ENTERYOURAPIKEYHERE');
$sports = file_get_contents('https://newsapi.org/v2/top-headlines?country=in&category=sports&apiKey=ENTERYOURAPIKEYHERE');
$health = file_get_contents('https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=ENTERYOURAPIKEYHERE');
$business = file_get_contents('https://newsapi.org/v2/top-headlines?country=in&category=business&apiKey=ENTERYOURAPIKEYHERE');
$technology = file_get_contents('https://newsapi.org/v2/top-headlines?country=in&category=technology&apiKey=ENTERYOURAPIKEYHERE');
$entertainment = file_get_contents('https://newsapi.org/v2/top-headlines?country=in&category=entertainment&apiKey=ENTERYOURAPIKEYHERE');
$international = file_get_contents('https://newsapi.org/v2/top-headlines?language=en&apiKey=ENTERYOURAPIKEYHERE');
?>