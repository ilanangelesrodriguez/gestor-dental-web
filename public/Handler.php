<?php
namespace Handler;

class Handler{
    
    private $location;
    public function __construct(){
        session_start();
    }
    public function returnHome(){
        if ($this->isLogged()){
            $this->location=$this->encontrarArchivo("public/home.php");
            $this->location = "Location:$this->location";
            header($this->location);
        }
        
    }
    public function returnIndex(){
        if (!$this->isLogged()){
            $this->location=$this->encontrarArchivo("public/index.php");
            $this->location = "Location:$this->location";
            header($this->location);
        }
    }
    public function noAccess(){
        $this->location=$this->encontrarArchivo("public/index.php");
        $this->location = "Location:$this->location";
        header($this->location);
    }
    public function isLogged(){
        if(isset($_SESSION['user']) && isset($_SESSION['logged']) && $_SESSION['logged']){
            return true;
        }else{
            return false;
        }
    }

    public function logout(){

        if ($this->isLogged()){
            session_destroy();
        }        
        $this->location = "Location: index.php";
        header($this->location);
    }
    public static function encontrarArchivo($nombreArchivo, $maxNiveles = 5) {
        $directorioActual = __DIR__; 
        $nivel = 0;
    
        while ($nivel < $maxNiveles) {
            $rutaArchivo = $directorioActual . '/' . $nombreArchivo;
    
            if (file_exists($rutaArchivo)) {
                $rutaArchivo = str_replace("/var/www/html/","",$rutaArchivo);
                while(!realpath($rutaArchivo)){
                    $rutaArchivo = "../".$rutaArchivo;
                    echo $rutaArchivo;
                }
                return $rutaArchivo;
            }
    
            $directorioActual = dirname($directorioActual);
            $nivel++;
        }
    
        return null; 
    }
    
    

}


?>