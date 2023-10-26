<?php

    class Lugar {
        public $ip = null;
        public $nuevoId = null;
        public $lugar = null;
        public $descripcion = null;
        public $conexion = null;

        public function __construct($ip, $nuevoId = null, $lugar = null, $descripcion = null, $conexion) {
            $this->ip = $ip;
            $this->nuevoId = $nuevoId;
            $this->lugar = $lugar;
            $this->descripcion = $descripcion;
            $this->conexion = $conexion;
        }

        function aniadir(){

            $sql = "INSERT INTO lugar
                        SET ip = '$this->ip', lugar = '$this->lugar', descripcion = '$this->descripcion'";

            $resultado = $this->conexion->query($sql);

            echo '<h2>Alta realizada</h2>';
        }

        function modificar(){

            $sql = "UPDATE lugar
                        SET ip = '$this->nuevoId', lugar = '$this->lugar', descripcion = '$this->descripcion'
                            WHERE ip = '$this->ip';";

            $resultado = $this->conexion->query($sql);

            echo '<h2>Modificación realizada</h2>';
        }

        function borrar(){

            $sql = "DELETE FROM lugar
                        WHERE ip = '$this->ip';";

            $resultado = $this->conexion->query($sql);

            echo '<h2>Borrado realizado</h2>';
        }
    }