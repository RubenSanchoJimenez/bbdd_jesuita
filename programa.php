
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="contenedor">
            <?php
                require 'conexion.php';
                require 'jesuita.php';
                require 'lugar.php';
                require 'visita.php';
                $conexion = mysqli_connect($servidorbd, $usuario, $contraseña, $basedatos);

                // Instanciamos Objetos
                if($_POST['seccion'] == 'jesuita'){

                    $jesuita = new Jesuita($_POST['idJesuita'], $_POST['nuevoId'], $_POST['nombre'], $_POST['firma'], $conexion);

                    if($_POST['accion'] == 'Alta'){

                        $jesuita->aniadir();

                    }else if($_POST['accion'] == 'Modificar'){

                        $jesuita->modificar();

                    }else if($_POST['accion'] == 'Borrar'){

                        $jesuita->borrar();

                    }else
                        echo "Error en la carga de datos";
                    
                }else if($_POST['seccion'] == 'lugar'){

                    $lugar = new Lugar($_POST['ip'], $_POST['nuevoId'], $_POST['lugar'], $_POST['descripcion'], $conexion);

                    if($_POST['accion'] == 'Alta'){

                        $lugar->aniadir();

                    }else if($_POST['accion'] == 'Modificar'){

                        $lugar->modificar();

                    }else if($_POST['accion'] == 'Borrar'){

                        $lugar->borrar();

                    }else if($_POST['accion'] == 'Listar'){
                        
                        $lugar->listar();

                    }else
                        echo "Error en la carga de datos";

                }else if($_POST['seccion'] == 'visita'){

                    $visita = new Visita($_POST['idVisita'], $_POST['jesuita'], $_POST['lugar'], $conexion);

                    if($_POST['accion'] == 'Alta'){

                        $visita->realizarVisita();

                    }else if($_POST['accion'] == 'Estadistica'){

                        $visita->estadistica();

                    }else if($_POST['accion'] == 'Borrar'){

                        $visita->borrar();

                    }else if($_POST['accion'] == 'Listar'){
                        
                        $visita->listar();

                    }else
                        echo "Error en la carga de datos";

                }else{
                    echo "Error en la carga de datos";
                }

                $conexion->close();
            ?>
            <div>
                <a href="index.html"><button>Volver</button></a> 
            </div>
        </div>
    </body>
</html>
