<?php

    class Jesuita {
        public $idJesuita = null;
        public $nombre = null;
        public $firma = null;

        public function __construct($idJesuita, $nombre = null, $firma = null) {
            $this->idJesuita = $idJesuita;
            $this->nombre = $nombre;
            $this->firma = $firma;
        }

        function aniadir($conexion){

            $sql = "INSERT INTO jesuita
                        SET idJesuita = '$this->idJesuita', nombre = '$this->nombre', firma = '$this->firma'";

            $resultado = $conexion->query($sql);

            echo '<h2>Alta realizada</h2>';
        }

        function modificar($conexion){

            $sql = "UPDATE jesuita
                        SET nombre = '$this->nombre', firma = '$this->firma'
                            WHERE idJesuita = '$this->idJesuita';";

            $resultado = $conexion->query($sql);

            echo '<h2>Modificación realizada</h2>';
        }

        function borrar($conexion){

            $sql = "DELETE FROM jesuita
                        WHERE idJesuita = '$this->idJesuita';";

            $resultado = $conexion->query($sql);

            echo '<h2>Borrado realizado</h2>';
        }
    }