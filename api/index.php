<?php

// Bootstrap the Laravel application using the same entry point as the public index.
$_SERVER['SERVER_NAME'] = $_SERVER['SERVER_NAME'] ?? '127.0.0.1';
$_SERVER['SERVER_PORT'] = $_SERVER['SERVER_PORT'] ?? '8000';

require __DIR__ . '/../public/index.php';
