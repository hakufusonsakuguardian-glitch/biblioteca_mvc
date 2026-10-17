
<?php

// URL base de la aplicación
$baseUrl = getenv('BASE_URL') ?: 'http://localhost/biblioteca_mvc/';
define('BASE_URL', rtrim($baseUrl, '/') . '/');

// Configuración de la base de datos
define('HOST', getenv('DB_HOST') ?: (getenv('MYSQLHOST') ?: 'localhost'));
define('PORT', getenv('DB_PORT') ?: (getenv('MYSQLPORT') ?: '3306'));

define('BD', getenv('DB_NAME') ?: (getenv('MYSQLDATABASE') ?: 'biblioteca_mvc'));
 
define('DB_USER', getenv('DB_USER') ?: (getenv('MYSQLUSER') ?: 'root'));
define('PASS', getenv('DB_PASSWORD') ?: (getenv('MYSQLPASSWORD') ?: ''));

// Juego de caracteres
define('CHARSET', 'utf8mb4');

?>
