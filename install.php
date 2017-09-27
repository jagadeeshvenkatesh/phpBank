<?php
$root = realpath(__DIR__);
$database = $root . '/data/data.sqlite';
$dsn = 'sqlite:' . $database;
$error = '';
date_default_timezone_set('UTC');
?>
