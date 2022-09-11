<?php
$barang01 = "Monitor ASUS";
$barang02 = "Samsung Galaxy A52";
$barang03 = "Lenovo Flex 5";
$barang04 = "CPU Rakitan";
$barang05 = "Kabel Printer";

$arr = compact("barang01", "barang02", "barang03", "barang04", "barang05");

echo $arr["barang01"]; // Monitor ASUS
echo $arr["barang02"]; // Samsung Galaxy A52 
echo $arr["barang03"]; // Lenovo Flex5
echo $arr["barang04"]; // CPU Rakitan
echo $arr["barang05"]; // Kabel Printer
