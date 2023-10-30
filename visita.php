<?php

    class Visita {

        public $idVisita = null;
        public $jesuita = null;
        public $lugar = null;
        public $conexion = null;

        public function __construct($idVisita, $jesuita, $lugar, $conexion) {
            $this->jesuita = $jesuita;
            $this->lugar = $lugar;
            $this->idVisita = $idVisita;
            $this->conexion = $conexion;
        }

        function realizarVisita(){

            $sql = "INSERT INTO visita(idJesuita, ip)
                        VALUES('$this->jesuita', '$this->lugar');";

            $resultado = $this->conexion->query($sql);

            echo '<h2>Visita realizada</h2>';
            
        }

        function listar(){
            $sql = "SELECT v.idVisita, j.nombre, l.lugar, v.fechaHora
                        FROM visita v
                        INNER JOIN jesuita j ON j.idJesuita = v.idJesuita
                        INNER JOIN lugar l ON l.ip = v.ip
                        ORDER BY fechaHora;";
            
            $resultado = $this->conexion->query($sql);
            
            echo "<form method='POST' action='programa.php'>";
            echo '<input name="seccion" value="visita">';
            echo '<select name="accion" id="listaVisita">
                    <option value="Listar"></option>    
                </select>';
            echo "<table>";
            echo "<tr><th>Jesuita</th><th>Lugar</th><th>Fecha y Hora</th><th>Borrar</th></tr>";
        
            while ($elemento = $resultado->fetch_assoc()) {
                echo "<tr><td>{$elemento['nombre']}</td><td>{$elemento['lugar']}</td><td>{$elemento['fechaHora']}</td><td><input type='checkbox' value='{$elemento['idVisita']}'></td></tr>";
            }
        
            echo "</table>";
            echo "<div id='listaBorrar'><input type='submit'></div>";
            echo "</form>";
        }
        
        

        function estadistica(){
            
        }

        function borrar(){

            $sql = "DELETE FROM visita
                        WHERE idVisita = '$this->idVisita';";

            $resultado = $this->conexion->query($sql);

            echo '<h2>Borrado realizado</h2>';

        }

        function listaBorrar($idVisita){

            $sql = "DELETE FROM visita
                        WHERE idVisita = '$idVisita';";

            $resultado = $this->conexion->query($sql);

        }
        
    }