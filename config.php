<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_PORT', '5432');
define('DB_NAME', 'proyecto_prueba'); // prueba de git
define('DB_USER', 'postgres');
define('DB_PASS', 'pgmore2019');

function getDB() {
    $dsn = "pgsql:host=" . DB_HOST . ";port=" . DB_PORT . ";dbname=" . DB_NAME;
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    return new PDO($dsn, DB_USER, DB_PASS, $options);
}
