<?php

/** define path to lib directory **/
$ld = __DIR__.DIRECTORY_SEPARATOR.'lib'.DIRECTORY_SEPARATOR;

/** import each file in lib directory **/
$li = new DirectoryIterator($ld);

foreach ($li as $lt) {
  $fn = $lt->getFilename();
  if (substr($fn, 0, 1) != '.') {
    require_once($ld.$fn);
  }
}
