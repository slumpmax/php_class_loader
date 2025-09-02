<?php
spl_autoload_register(function($class) {
  $root = ($_SERVER['CONTEXT_DOCUMENT_ROOT'] ?? $_SERVER['DOCUMENT_ROOT']);
  $class = strtolower(str_replace('\\', '/', $class));
  preg_match('#^(.*)/([^/]*)$#', $class, $arr);
  if ($folder = $arr[1] ?? '') $folder = "/{$folder}";
  $name = $arr[2] ?? $class;
  if (file_exists($fname = "{$root}/modules{$folder}/{$name}/{$name}.php")) require_once $fname;
});
?>