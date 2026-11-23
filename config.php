<?php

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';

$projectFolder = explode('/', trim($_SERVER['SCRIPT_NAME'], '/'))[0];

define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . '/' . $projectFolder . '/');

define('ROOT_PATH', __DIR__ . DIRECTORY_SEPARATOR);