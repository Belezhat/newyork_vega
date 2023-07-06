<?php

$envFile = file_exists(ROOT . "/env.local.conf") ? ROOT . "/env.local.conf" : ROOT . "/env.conf";
$_ENV = parse_ini_file($envFile);