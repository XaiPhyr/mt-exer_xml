<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://mt-exe-1.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $id = $data->getElementsByTagName("Id")->item(0)->nodeValue;
    $name = $data->getElementsByTagName("Name")->item(0)->nodeValue;
    $address = $data->getElementsByTagName("Address")->item(0)->nodeValue;
    $contacts = $data->getElementsByTagName("Contacts")->item(0)->nodeValue;

    echo "<ul>
    <li><strong>$id</strong></li>
    <ul>
    <li>Name: <strong>$name</strong></li>
    <li>Address: <strong>$address</strong></li>
    <li>Contacts: <strong>$contacts</strong></li>
    </ul>
    </ul>";
}
