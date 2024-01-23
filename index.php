<?php
include("function.php");



ulang:
$uuid = uuid();
$maps = maps();    
$firstname = trim(nama());
$lastname = trim(nama());
$rand = angka();
$username = "$firstname$rand";

$data = array(
    'fullname' => "$firstname $lastname",
    'firstname' => $firstname,
    'lastname' => $lastname,
    'username' => $username,
    'email' => "$username@gmail.com",
    'uuid' => $uuid,
    'latitude' => $maps[1],
    'longitude' => $maps[2],
    'maps' => $maps[0]
);
 
$json_data = json_encode($data);
echo "$json_data";  
