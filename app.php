<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('name console');

$app->add(new \App\WhatName());

try {
    $app->run();
} catch (Exception $e) {
}

