<?php
require_once ("Courier.php");
$courier = new Courier("DHL");
$isShipped = $courier->ship("dsdasdad");
var_dump($courier);
var_dump($isShipped);