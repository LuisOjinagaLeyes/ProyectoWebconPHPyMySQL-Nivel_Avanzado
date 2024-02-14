<?php
class Usuarios {
    private $nombre;
    private $apellido;
    private $fecha_nacimiento;

    function __construct($nom, $ape, $fe_na)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->fecha_nacimiento = $fe_na;
    }

    private function calcular_edad() {
        $fecha_actual = new DateTime();
        $fecha_nacimiento = new DateTime($this->fecha_nacimiento);
        $edad = $fecha_actual->diff($fecha_nacimiento)->y;
        return $edad;
    }

    public function imprime_caracteristicas() {
        $edad = $this->calcular_edad();
        echo "<p>Nombre: ".$this->nombre."</p>";
        echo "<p>Apellido: ".$this->apellido."</p>";
        echo "<p>Edad: ".$edad." Años</p>";
    }
}
?>