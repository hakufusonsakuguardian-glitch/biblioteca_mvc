
<?php

class Conexion {
    private $conect;

    public function __construct() {
        $host = HOST;
        $port = PORT;
        $db = BD;
        $charset = CHARSET;

        $dsn = "mysql:host={$host};port={$port};dbname={$db};charset={$charset}";

        try {
            $this->conect = new PDO($dsn, DB_USER, PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ]);
        } catch (PDOException $e) {
            error_log("Error de conexión a la base de datos: " . $e->getMessage());
            $this->conect = null;
        }
    }

    public function conect() {
        return $this->conect;
    }
}

?>
