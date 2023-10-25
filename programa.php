
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
                require 'consultas.php';
                require 'class_jesuita.php';
                require 'class_lugar.php';
                $conexion = mysqli_connect($servidorbd, $usuario, $contraseña, $basedatos);

                // Instanciamos Objetos
                if($_POST['seccion'] == 'jesuita'){

                    $jesuita = new Jesuita($_POST['idJesuita'], $_POST['nombre'], $_POST['firma']);

                    if($_POST['accion'] == 'Alta'){

                        $jesuita->aniadir($conexion);

                    }else if($_POST['accion'] == 'Modificar'){

                        $jesuita->modificar($conexion);

                    }else if($_POST['accion'] == 'Borrar'){

                        $jesuita->borrar($conexion);

                    }else
                        echo "Error en la carga de datos";
                    
                }else if($_POST['seccion'] == 'lugar'){

                    $lugar = new Lugar($_POST['ip'], $_POST['lugar'], $_POST['descripcion']);

                    if($_POST['accion'] == 'Alta'){

                        $lugar->aniadir($conexion);

                    }else if($_POST['accion'] == 'Modificar'){

                        $lugar->modificar($conexion);

                    }else if($_POST['accion'] == 'Borrar'){

                        $lugar->borrar($conexion);

                    }else
                        echo "Error en la carga de datos";

                }else if($_POST['seccion'] == 'visita'){

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
