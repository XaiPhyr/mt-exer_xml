<?php
$domOBJ = new DOMDocument();
$domOBJ->load("views/customer.xml");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {
    $id = $data->getElementsByTagName("Id")->item(0)->nodeValue;
    $name = $data->getElementsByTagName("Name")->item(0)->nodeValue;

    echo "$id :: $name <br>";
}
