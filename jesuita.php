<?php

    class Jesuita {

        public $idJesuita = null;
        public $nuevoId = null;
        public $nombre = null;
        public $firma = null;
        public $conexion = null;

        public function __construct($idJesuita, $nuevoId, $nombre = null, $firma = null, $conexion) {
            $this->idJesuita = $idJesuita;
            $this->nuevoId = $nuevoId;
            $this->nombre = $nombre;
            $this->firma = $firma;
            $this->conexion = $conexion;
        }

        function aniadir(){

            $sql = "INSERT INTO jesuita
                        SET idJesuita = $this->idJesuita, nombre = '$this->nombre', firma = '$this->firma'";

            $resultado = $this->conexion->query($sql);

            echo '<h2>Alta realizada</h2>';
        }

        function modificar(){

            $sql = "UPDATE jesuita
                        SET idJesuita = '$this->nuevoId', nombre = '$this->nombre', firma = '$this->firma'
                            WHERE idJesuita = '$this->idJesuita';";

            $resultado = $this->conexion->query($sql);

            echo '<h2>Modificación realizada</h2>';
        }

        function borrar(){

            $sql = "DELETE FROM jesuita
                        WHERE idJesuita = $this->idJesuita;";

            $resultado = $this->conexion->query($sql);

            echo '<h2>Borrado realizado</h2>';
        }
    }