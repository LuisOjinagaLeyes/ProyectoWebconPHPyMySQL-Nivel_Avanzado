<?php
class Basededatos {
    private $conexion;

    function __construct($servidor, $usuario, $password, $base) {
        $this->conexion = new mysqli($servidor, $usuario, $password, $base);
    }

    public function ejecutarQuery($codSQL) {
        $instruccionSQL = strtoupper(substr($codSQL, 0,6));

        switch($instruccionSQL) {
            case 'INSERT':
            case 'UPDATE':
            case 'DELETE':
                $consultaSQL = $this->conexion->query($codSQL);
                break;
            case 'SELECT':
                $consultaSQL = $this->conexion->query($codSQL);
                $mostrarInfo = array();
                while($listarDatos=$consultaSQL->fetch_assoc()){
                    $mostrarInfo[] = $listarDatos;
                }
                return $mostrarInfo;
                break;
        }
    }
    
}
define('SERVIDOR', 'localhost');
define('USUARIO', 'root');
define('PASS', '');
define('BASE', 'phpavanzado');

$Basedatos = new Basededatos(SERVIDOR, USUARIO, PASS, BASE);
?>