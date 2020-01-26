<?php
header("Content-type: text/xml");
include("models/customers.php");

$results = $CustomerModel->get_customer();

echo "<?xml version='1.0' encoding='UTF-8'?>
<data>";

while ($item = mysqli_fetch_object($results)) {
    echo "<item>
    <Id>$item->customer_id</Id>
    <Name>$item->first_name $item->last_name</Name>
    <Address>$item->address $item->city</Address>
    <Contacts>$item->area_code $item->number</Contacts>
    </item>";
}

echo "</data>";

file_put_contents('views/customer.xml', $end);
