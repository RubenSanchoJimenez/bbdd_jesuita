
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Resultado</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <main>
            <?php
                require 'conexion.php';
                require 'consultas.php';
                $conexion = mysqli_connect($servidorbd, $usuario, $contraseña, $basedatos);


                if(isset($_POST['accion']) && $_POST['accion'] == "alta"){
                    // Alta de jesuita

                    $nombre = $_POST['nombre'];
                    $idJesuita = $_POST['idJesuita'];
                    $firma = $_POST['firma'];
                    $sql = alta($idJesuita, $nombre, $firma);
                    echo $sql;
                    $resultado = mysqli_query($conexion, $sql);
                    echo $resultado;
                    
                }else if(isset($_POST['accion']) && $_POST['accion'] == "modificacion"){
                    // Modificación de jesuita

                    $nombre = $_POST['nombre'];
                    $idJesuita = $_POST['idJesuita'];
                    $firma = $_POST['firma'];
                    $sql = modificacion($idJesuita, $nombre, $firma);
                    echo $sql;
                    $resultado = mysqli_query($conexion, $sql);
                    echo $resultado;

                }else if(isset($_POST['accion']) && $_POST['accion'] == "borrado"){
                    // Borrado de jesuita

                    $idJesuita = $_POST['idJesuita'];
                    $sql = borrado($idJesuita);
                    echo $sql;
                    $resultado = mysqli_query($conexion, $sql);
                    echo $resultado;

                }else{
                    // Error de carga
                    echo "<h2>Error de carga de datos</h2>";
                }

                $conexion->close();
            ?>
            <div>
                <a href="index.html"><button>Volver</button></a> 
            </div>
        </main>
    </body>
</html>
