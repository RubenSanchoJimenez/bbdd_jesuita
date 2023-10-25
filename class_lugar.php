<?php

    class Lugar {
        public $ip = null;
        public $lugar = null;
        public $descripcion = null;

        public function __construct($ip, $lugar = null, $descripcion = null) {
            $this->ip = $ip;
            $this->lugar = $lugar;
            $this->descripcion = $descripcion;
        }

        function aniadir($conexion){

            $sql = "INSERT INTO lugar
                        SET ip = '$this->ip', lugar = '$this->lugar', descripcion = '$this->descripcion'";

            $resultado = $conexion->query($sql);

            echo '<h2>Alta realizada</h2>';
        }

        function modificar($conexion){

            $sql = "UPDATE lugar
                        SET lugar = '$this->lugar', descripcion = '$this->descripcion'
                            WHERE ip = '$this->ip';";

            $resultado = $conexion->query($sql);

            echo '<h2>Modificación realizada</h2>';
        }

        function borrar($conexion){

            $sql = "DELETE FROM lugar
                        WHERE ip = '$this->ip';";

            $resultado = $conexion->query($sql);

            echo '<h2>Borrado realizado</h2>';
        }
    }