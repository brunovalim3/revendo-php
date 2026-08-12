<?php
require "classes/Red.php";
require "classes/Blue.php";

$colorRed = new Red();
$colorBlue = new Blue();
echo $colorRed->getHexCode();
echo "\n";
echo $colorBlue->getHexCode();
echo "\n";
