<?php
// autoload.php

spl_autoload_register(function ($class) {
    // Define o namespace base
    $baseDir = __DIR__ . '/src/';

    // Converte o namespace para caminho de arquivo (substitui "\" por "/")
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';

    // Verifica se o arquivo existe e inclui
    if (file_exists($file)) {
        require_once $file;
    }
});
