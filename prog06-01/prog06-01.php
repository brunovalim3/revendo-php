<?php
require "autoload.php";

use Prog0601\Classes\Red;
use Prog0601\Classes\Blue;

$colorRed = new Red();
$colorBlue = new Blue();
echo $colorRed->getHexCode();
echo "\n";
echo $colorBlue->getHexCode();
echo "\n";
