<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://mt-exe-1.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {
    $id = $data->getElementsByTagName("Id")->item(0)->nodeValue;
    $name = $data->getElementsByTagName("Name")->item(0)->nodeValue;
    $address = $data->getElementsByTagName("Address")->item(0)->nodeValue;
    $contacts = $data->getElementsByTagName("Contacts")->item(0)->nodeValue;

    echo "$id :: $name - $address <br>";
}
