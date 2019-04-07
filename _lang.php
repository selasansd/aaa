<?php

$path    = '.';
$files = scandir($path);
foreach($files as $file) {
  $f = file_get_contents($file);
  echo $file . " isimli dosya:\n";
  echo $f;
  echo "\n\n";
}

?>
