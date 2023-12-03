<?php
namespace DataBase;
use PDO;
use PDOException;
require_once __DIR__."/../../public/Handler.php";
use Handler\Handler;
$handler=new Handler();
$handler->noAccess();
class Conexion {
    private $pdo;

    public function conectar() {
        // Establece la información de la base de datos
        $dsn = 'mysql:host=localhost;dbname=clinica_dental';
        $usuario = 'root';
        $contrasena = 'Schattenbild12';

        try {
            // Conexión a la base de datos utilizando PDO
            $this->pdo = new PDO($dsn, $usuario, $contrasena, array(PDO::ATTR_PERSISTENT=>TRUE));
            // Configura PDO para arrojar excepciones en caso de errores
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $error) {
            echo 'Error de conexión: ' . $error->getMessage();
            exit;
        }
    }
}

$conexion = new Conexion();
$conexion->conectar();
?>