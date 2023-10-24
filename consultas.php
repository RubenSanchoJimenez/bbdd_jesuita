<?php

    function alta($idJesuita, $nombre, $firma){
        // Consulta SQL alta

        return "INSERT INTO jesuita (idJesuita, nombre, firma)
        VALUES ('$idJesuita', '$nombre', '$firma');";
    }
    
    function modificacion($idJesuita, $nombre, $firma){
        // Consulta SQL modificación

        return "UPDATE jesuita
        SET nombre = '$nombre', firma = '$firma'
        WHERE idJesuita = '$idJesuita';";
    }

    function borrado($idJesuita){
        // Consulta SQL borrado

        return "DELETE FROM jesuita
        WHERE idJesuita = '$idJesuita';";
    }