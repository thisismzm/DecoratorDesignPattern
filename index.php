<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$payload = [
    'message' => 'Hi, I am comming from a decorator by PHP',
];
$kernel = new App\Kernel($payload);
$kernel->notify();
