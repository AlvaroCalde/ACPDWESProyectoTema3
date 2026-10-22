<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 24</title>
        <style>
            input[type="text"],input[type="date"],input[type="number"]{ background-color: #fff9c4; }
            *{ margin: 0 auto; padding: 0 auto; }
            nav{ background-color: black; color: white; }
            .error { 
                color: red; 
                display: block; 
                font-size: 13px; 
                min-height: 16px; /* Mantiene el espacio aunque no haya error */
            }
            .ejercicio{
                padding: 50px;
                margin-top: 10px;
                margin-bottom: 10px;
                width: 1150px;
                border: 1px solid black;
                border-radius: 10px;
                p { font-weight: bold; }
            }
            footer{
                background-color: black; text-align: center; align-content: center;
                height: 50px; color: white; margin-top: 20%;
                & div a{ color: white; text-decoration: none; }
            }
            footer a img{
                width: 40px;
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 24</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    require_once '../core/231018libreriaValidacion.php';
                    //Inicializacion de variables
                    $entradaOK = true; // Variable que nos indica que todo va bien

                    $aError = [
                        'nombre' => "",
                        'fechaNacimiento' => "",
                        'sueldo' => ""];

                    $aRespuesta = [
                        'nombre' => "",
                        'fechaNacimiento' => "",
                        'sueldo' => ""];

                    // Comprueba si el formulario se a enviado
                    if (isset($_REQUEST["enviar"])) {
                        // Validar Entrada

                        $aError["nombre"] = validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"],1000,1,1);
                        $aError["fechaNacimiento"] = validacionFormularios::validarFecha($_REQUEST["fechaNacimiento"],date("m/d/Y"),"01/01/1900", 1);
                        $aError["sueldo"] = validacionFormularios::comprobarFloatMonetarioES($_REQUEST["sueldo"], PHP_FLOAT_MAX, 0, 1);

                        foreach ($aError as $value) {
                            if (!empty($value)) {
                                $entradaOK = false;
                            }
                        }
                    }
                    // El formulario no se ha enviado nunca
                    else {
                        $entradaOK = false;
                    }

                    if ($entradaOK) {
                        //Cargar la variable $aRespuestas y tratamiento de datos OK
                        $aRespuesta["nombre"] =$_REQUEST["nombre"];
                        $aRespuesta["fechaNacimiento"] = new DateTime($_REQUEST["fechaNacimiento"]);
                        $aRespuesta["sueldo"] = floatval(str_replace(',', '.', $_REQUEST["sueldo"]));


                        echo '<p>Nombre: ' . $aRespuesta["nombre"] . '</p>';
                        echo '<p>Fecha de Nacimiento: ' . $aRespuesta["fechaNacimiento"]->format("d/m/Y") . '</p>';
                        echo '<p>Sueldo: ' . number_format($aRespuesta["sueldo"], 2, ',', '.') . ' € </p>';

                    } else {
                        // Mostrar Formulario
                        ?>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formulario" method="post" novalidate>
                            <label for="nombre" >Nombre:</label>

                            <input type="text" name="nombre" id="nombre" value="<?php echo !empty($_REQUEST["nombre"]) ? htmlspecialchars($_REQUEST["nombre"]): '' ?>"/>

                            <?php echo !empty($aError["nombre"]) ? "<span style='color:red;'>" . $aError['nombre'] . "</span>": '' ?>

                            <br/>

                            <label for="fechaNacimiento">Fecha de Nacimiento:</label>

                            <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo !empty($_REQUEST["fechaNacimiento"])&&empty($aError["fechaNacimiento"]) ? htmlspecialchars($_REQUEST["fechaNacimiento"]): '' ?>"/>

                            <?php echo !empty($aError["fechaNacimiento"]) ? "<span style='color:red;'>" . $aError['fechaNacimiento'] . "</span>": '' ?>
                            <br/>
                            <label for="sueldo" >Sueldo:</label>

                            <input type="text" name="sueldo" id="sueldo" title="Usar comas para separa decimales" value="<?php echo !empty($_REQUEST["sueldo"]) ? htmlspecialchars($_REQUEST["sueldo"]): '' ?>"/>

                            <?php echo !empty($aError["sueldo"]) ? "<span style='color:red;'>" . $aError['sueldo'] . "</span>": '' ?>

                            <br/>

                            <input type="submit" name="enviar" id="enviar" value="Enviar"/>
                        </form>  
                    <?php
                        }   
                    ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../../ACPDWESProyectoDWES/indexProyectoDWES.php" color="white">Álvaro Calderón Pérez</a>
                <a href="../indexProyectoTema3.php"><img src="../webroot/images/casa_blanca.png" alt="home"></a>
                <time datetime="2026-10-20">20-10-2026</time>
            </div>
        </footer>
    </body>
</html>
