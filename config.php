<?php

// Carrega o autoloader do Composer
require_once __DIR__ . '/vendor/autoload.php';

// Carrega as variáveis de ambiente do arquivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
