<?php
spl_autoload_register(function($fullClassName) {
  if (str_contains($fullClassName, "Prog0601\\Classes\\")) {
    $className = str_replace("Prog0601\\Classes\\", "", $fullClassName);
    require_once "classes/" . $className . ".php";
  }
});
