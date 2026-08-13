<?php
spl_autoload_register(function (string $className) {
  $array_path = explode("\\", $className);
  $path = strtolower($array_path[0]);
  $file = $array_path[1];
  include_once("{$path}/{$file}.php");
});
