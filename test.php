<?php
include("function.php");
ulang:
$uuid = uuid();
$firstname = nama();
$lastname = nama();
$fullname = "$firstname $lastname";
$angka = angka();
$username = "$firstname$angka";
$email = "$username@gmail.com";
$phone = "";
$maps = maps();
    $mapss = explode(",",$maps);
    $latitude = $mapss[0];
    $rand = angka();
    $latitude = "$latitude$rand";
    $longitude = $mapss[1];
    $rand = angka();
    $longitude = "$longitude$rand";
    
$data = array(
    'fullname' => $fullname,
    'firstname' => $firstname,
    'lastname' => $lastname,
    'username' => $username,
    'email' => $email,
    'uuid' => $uuid,
    'latitude' => $latitude,
    'longitude' => $longitude,
    'maps' => "$latitude,$longitude"
);
 
$json_data = json_encode($data);
//$json_data = json_encode($data, JSON_PRETTY_PRINT);

echo $json_data;
   