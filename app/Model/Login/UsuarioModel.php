<?php
namespace Model\Login;
require_once __DIR__."/../../../public/Handler.php";
use Handler\Handler;
$handler=new Handler();
$handler->noAccess();
use PDO;
use PDOException;

class UsuarioModel {
    private $id_usuario;
    private $nombres;
    private $apellidos;
    private $correo;
    private $contra;
    private $pdo;
    private $tipo;

    public function __construct(PDO $pdo) {
        try {
            
            $this->pdo = $pdo;

        } catch (PDOException $e) {
            echo "Error de conexión PDO: " . $e->getMessage();
        }
    }
    
    

    public function getIdUsuario()
    {
        return $this->id_usuario;
    }

    public function setIdUsuario($tipo)
    {
        
        $tipo = $tipo;
        $totalUsuarios = $this->obtenerTotalUsuarios();
        $numero = $totalUsuarios + 1;

        if ($tipo === 'medico') {
            $primerDigito = 'M';
        } elseif ($tipo === 'paciente') {
            $primerDigito = 'P';
        } else {
            return  null;
        }

        $string = $primerDigito . str_pad($numero, 3, '0', STR_PAD_LEFT);
        $this->id_usuario = $string;
        $this->setTipo();
    }

    public function getNombre() {
        return $this->nombres;
    }

    public function setNombre($nombres) {
        $this->nombres = $nombres;
    }
    public function getApellido() {
        return $this->apellidos;
    }
    public function setApellido($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function getContra()
    {
        return $this->contra;
    }

    public function setContra($contra)
    {
        $this->contra = $contra;
    }

    public function getTipo()
    {
        $this->setTipo();
        return $this->tipo;
    }

    private function setTipo()
    {
        $firstDigit = substr($this->id_usuario, 0, 1);
        if ($firstDigit === 'M') {
            $this->tipo = 'medico';
        } elseif ($firstDigit === 'P') {
            $this->tipo = 'paciente';
        } else {
            $this->tipo = 'error';
        }
    }
    public function obtenerTotalUsuarios() {
        $stmt = $this->pdo->prepare("SELECT COUNT(*) FROM usuario");
        $stmt->execute();
        $totalUsuarios = $stmt->fetchColumn();
        return $totalUsuarios;
    }
    
    public function obtenerUsuarioPorCorreo($correo) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE correo = ?");
        $stmt->execute([$correo]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            $this->id_usuario = $usuario['id_usuario'];
            $this->nombres = $usuario['nombres'];
            $this->apellidos = $usuario['apellidos'];
            $this->correo = $usuario['correo'];
            $this->contra = $usuario['contra'];
            return $this;
        }
        return null;
    }
    public function obtenerUsuarioPorID($id) {

        $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE id_usuario LIKE ?");
        $stmt->execute([$id]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        
        

        if ($usuario) {
            $this->id_usuario = $usuario['id_usuario'];
            $this->nombres = $usuario['nombres'];
            $this->apellidos = $usuario['apellidos'];
            $this->correo = $usuario['correo'];
            $this->contra = $usuario['contra'];
            $this->tipo= $this->getTipo();
            
            return $this;
        }
        return null;
    }
    

    public function actualizarUsuario() {
        $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE correo = ?");
        $stmt->execute([$this->correo]);
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingUser) {
            $stmt = $this->pdo->prepare("UPDATE usuario SET nombres = ?,apellidos = ?, correo = ?, contra = ? WHERE id_usuario = ?");
            $stmt->execute([$this->nombres,$this->apellidos, $this->correo, $this->contra, $this->id_usuario]);
            echo "El usuario con correo $this->correo ha sido actualizado.<br>";
            echo '<button class="home__form-button" id="quitarQueryBtn">Volver</button>';

        } else {
            echo "El usuario con correo $this->correo no existe.";
            echo '<button class="home__form-button" id="quitarQueryBtn">Volver</button>';

        }
    }

    public function crearUsuario($tipo) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE correo = ?");
        $stmt->execute([$this->correo]);
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$existingUser) {
            $stmt = $this->pdo->prepare("INSERT INTO usuario (id_usuario, nombres,apellidos, correo, contra) VALUES (?, ?,?, ?, ?)");
            $this->setIdUsuario($tipo);
            $stmt->execute([$this->id_usuario, $this->nombres, $this->apellidos,$this->correo, $this->contra]);
            echo "El usuario con correo $this->correo ha sido creado.<br>";

        } else {
            echo "El usuario con correo $this->correo ya existe.<br>";
            echo '<button class="home__form-button" id="quitarQueryBtn">Volver</button>';

        }
    }

    public function eliminarUsuario() {
        // Verifica si el usuario existe
        $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE correo = ?");
        $stmt->execute([$this->correo]);
        $existingUser = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($existingUser) {
            // Si existe, realiza la eliminación
            $stmt = $this->pdo->prepare("DELETE FROM usuario WHERE correo = ?");
            $stmt->execute([$this->correo]);
            echo "El usuario con correo $this->correo ha sido eliminado.<br>";
            echo '<button class="home__form-button" id="quitarQueryBtn">Volver</button>';


        } else {
            // Puedes agregar lógica adicional para manejar el caso en que el usuario no existe.
            echo "El usuario con correo $this->correo no existe.<br>";
            echo '<button class="home__form-button" id="quitarQueryBtn">Volver</button>';

        }
    }


}
?>