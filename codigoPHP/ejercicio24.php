<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 24</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                font-family: Arial, sans-serif;
                background: #f4f6f9;
                text-align: center;
            }

            nav {
                background-color: black; 
                color: white;
                padding: 5px 20px;
                align-items: center;
            }

            img{
                width: 60px;
                height: 60px;
            }

            .titulo{
                text-align: center;
                font-weight: bold;
            }

            footer{
                margin: auto;
                background-color: black;
                text-align: center;
                align-content: center;
                height: 10%;
                color: white;
                margin-top: 5%;

                & div a{
                        color: white;
                       text-decoration: none; 
                    }
            }

            form {
              max-width: 250px;
              margin: 70px auto;
              padding: 20px;
              background-color: #f9f9f9;
              border: 1px solid #ddd;
              border-radius: 8px;
              font-family: Arial, sans-serif;
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            /* NUEVO: Contenedor para agrupar label, input y error */
            .grupo-input {
                position: relative;
                margin-bottom: 25px; /* Mantenemos la separación entre campos aquí */
                text-align: left; /* Alineamos a la izquierda para mejor lectura */
            }

            input[type="text"],
            input[type="date"]{
              width: 100%;
              padding: 10px;
              margin-top: 5px; /* Pequeño espacio entre label e input */
              border: 1px solid #ccc;
              border-radius: 4px;
              box-sizing: border-box;
            }

            /*Estilo para el mensaje de error */
            .mensaje-error {
                position: absolute;
                bottom: -18px; /* Lo coloca justo debajo del input usando el margin-bottom del contenedor */
                left: 0;
                color: red;
                font-size: 12px;
                width: 100%;
            }

            input[type="submit"] {
              margin-bottom: 10px;
              padding: 10px 15px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
              font-weight: bold;
              color: white;
              width: 100%; /* Hacemos el botón un poco más estilizado al ancho completo */
            }

            input#enviar {
              background-color: #4CAF50;
            }

            input#enviar:hover {
              background-color: #45a049;
            }
            
            label{
                font-weight: bold;
                font-size: 14px;
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
                    
                    $entradaOK = true;

                    $aError = [
                        'nombre' => "",
                        'fechaNacimiento' => "",
                        'sueldo' => ""];

                    $aRespuesta = [
                        'nombre' => "",
                        'fechaNacimiento' => "",
                        'sueldo' => ""];

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
                    } else {
                        $entradaOK = false;
                    }

                    if ($entradaOK) {
                        $aRespuesta["nombre"] =$_REQUEST["nombre"];
                        $aRespuesta["fechaNacimiento"] = new DateTime($_REQUEST["fechaNacimiento"]);
                        $aRespuesta["sueldo"] = floatval(str_replace(',', '.', $_REQUEST["sueldo"]));

                        echo '<p>Nombre: ' . $aRespuesta["nombre"] . '</p>';
                        echo '<p>Fecha de Nacimiento: ' . $aRespuesta["fechaNacimiento"]->format("d/m/Y") . '</p>';
                        echo '<p>Sueldo: ' . number_format($aRespuesta["sueldo"], 2, ',', '.') . ' € </p>';

                    } else {
                        ?>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" name="formulario" method="post" novalidate>
                            
                            <!-- Grupo Nombre -->
                            <div class="grupo-input">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" value="<?php echo !empty($_REQUEST["nombre"]) ? htmlspecialchars($_REQUEST["nombre"]): '' ?>"/>
                                <?php echo !empty($aError["nombre"]) ? "<span class='mensaje-error'>" . $aError['nombre'] . "</span>": '' ?>
                            </div>

                            <!-- Grupo Fecha Nacimiento -->
                            <div class="grupo-input">
                                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo !empty($_REQUEST["fechaNacimiento"])&&empty($aError["fechaNacimiento"]) ? htmlspecialchars($_REQUEST["fechaNacimiento"]): '' ?>"/>
                                <?php echo !empty($aError["fechaNacimiento"]) ? "<span class='mensaje-error'>" . $aError['fechaNacimiento'] . "</span>": '' ?>
                            </div>
                            
                            <!-- Grupo Sueldo -->
                            <div class="grupo-input">
                                <label for="sueldo">Sueldo:</label>
                                <input type="text" name="sueldo" id="sueldo" title="Usar comas para separar decimales" value="<?php echo !empty($_REQUEST["sueldo"]) ? htmlspecialchars($_REQUEST["sueldo"]): '' ?>"/>
                                <?php echo !empty($aError["sueldo"]) ? "<span class='mensaje-error'>" . $aError['sueldo'] . "</span>": '' ?>
                            </div>

                            <input type="submit" name="enviar" id="enviar" value="Enviar"/>
                        </form>  
                    <?php
                        }   
                    ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../../ACPDWESProyectoDWES/indexProyectoDWES.php" style="color:white;">Álvaro Calderón Pérez</a>
                <a href="../indexProyectoTema3.php"><img src="../webroot/images/casa_blanca.png" alt="home"></a>
                <time datetime="2026-10-20">20-10-2026</time>
            </div>
        </footer>
    </body>
</html>
