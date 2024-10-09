<?php

spl_autoload_register(function ($className) {
    $className = str_replace('\\', '/', $className);
    $filePath = __DIR__ . '/' . $className . '.php';
    if (file_exists($filePath)) {
        require_once $filePath;
    }
});