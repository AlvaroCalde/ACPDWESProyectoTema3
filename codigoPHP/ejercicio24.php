<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 24</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
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

            img {
                width: 60px;
                height: 60px;
            }

            .titulo {
                text-align: center;
                font-weight: bold;
            }

            footer {
                margin: auto;
                background-color: black;
                text-align: center;
                align-content: center;
                height: 10%;
                color: white;
                margin-top: 5%;

                & div a {
                    color: white;
                    text-decoration: none; 
                }
            }

            form {
                max-width: 300px;
                margin: 70px auto;
                padding: 20px;
                background-color: #f9f9f9;
                border: 1px solid #ddd;
                border-radius: 8px;
                font-family: Arial, sans-serif;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .grupo-input {
                position: relative;
                margin-bottom: 25px;
                text-align: left;
            }

            .grupo-opciones {
                margin-top: 8px;
                display: flex;
                gap: 10px;
                flex-wrap: wrap;
                align-items: center;
            }

            .label-inline {
                font-weight: normal;
                font-size: 13px;
                margin-left: 3px;
            }

            input[type="text"],
            input[type="date"] {
                width: 100%;
                padding: 10px;
                margin-top: 5px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            .mensaje-error {
                position: absolute;
                bottom: -18px;
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
                width: 100%; 
            }

            input#enviar {
                background-color: #4CAF50;
            }

            input#enviar:hover {
                background-color: #45a049;
            }
            
            label {
                font-weight: bold;
                font-size: 14px;
            }

            /* Estilos para la tarjeta de resultados */
            .resultados {
                max-width: 420px;
                margin: 70px auto;
                padding: 25px 30px;
                background-color: #ffffff;
                border: 1px solid #ddd;
                border-top: 4px solid #4CAF50;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
                text-align: left;
            }

            .resultados h3 {
                text-align: center;
                color: #333;
                margin-bottom: 20px;
                padding-bottom: 10px;
                border-bottom: 1px solid #eee;
                font-size: 20px;
            }

            .dato-fila {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 0;
                border-bottom: 1px solid #f0f0f0;
                font-size: 14px;
            }

            .dato-fila:last-of-type {
                border-bottom: none;
            }

            .dato-etiqueta {
                font-weight: bold;
                color: #555;
            }

            .dato-valor {
                color: #222;
                font-weight: 500;
            }

            .btn-volver {
                display: block;
                margin-top: 22px;
                padding: 10px 15px;
                background-color: #4CAF50;
                color: white;
                text-align: center;
                text-decoration: none;
                font-weight: bold;
                font-size: 14px;
                border-radius: 4px;
                transition: background-color 0.2s ease;
            }

            .btn-volver:hover {
                background-color: #45a049;
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
                        'sueldo' => "",
                        'telefono' => "",
                        'genero' => ""
                    ];

                    $aRespuesta = [
                        'nombre' => "",
                        'fechaNacimiento' => "",
                        'sueldo' => "",
                        'telefono' => "",
                        'genero' => ""
                    ];

                    if (isset($_REQUEST["enviar"])) {
                        // Validar Entrada
                        $aError["nombre"] = validacionFormularios::comprobarAlfabetico($_REQUEST["nombre"], 1000, 1, 1);
                        $aError["fechaNacimiento"] = validacionFormularios::validarFecha($_REQUEST["fechaNacimiento"], date("Y-m-d"), "1900-01-01", 1);
                        $aError["sueldo"] = validacionFormularios::comprobarFloatMonetarioES($_REQUEST["sueldo"], PHP_FLOAT_MAX, 0, 1);
                        $aError["telefono"] = validacionFormularios::validarTelefono($_REQUEST["telefono"], 1);

                        if (empty($_REQUEST["genero"])) {
                            $aError["genero"] = "Debe seleccionar una opción de género.";
                        }

                        foreach ($aError as $value) {
                            if (!empty($value)) {
                                $entradaOK = false;
                            }
                        }
                    } else {
                        $entradaOK = false;
                    }

                    if ($entradaOK) {
                        $aRespuesta["nombre"] = $_REQUEST["nombre"];
                        $aRespuesta["fechaNacimiento"] = new DateTime($_REQUEST["fechaNacimiento"]);
                        $aRespuesta["sueldo"] = floatval(str_replace(',', '.', $_REQUEST["sueldo"]));
                        $aRespuesta["telefono"] = $_REQUEST["telefono"];
                        $aRespuesta["genero"] = $_REQUEST["genero"];

                        $aGenerosFormateados = [
                            'M' => 'Masculino',
                            'F' => 'Femenino',
                            'O' => 'Otro'
                        ];
                        ?>
                        <div class="resultados">
                            <h3>Datos introducidos</h3>
                            <div class="dato-fila">
                                <span class="dato-etiqueta">Nombre</span>
                                <span class="dato-valor"><?php echo htmlspecialchars($aRespuesta["nombre"]); ?></span>
                            </div>
                            <div class="dato-fila">
                                <span class="dato-etiqueta">Fecha de Nacimiento</span>
                                <span class="dato-valor"><?php echo $aRespuesta["fechaNacimiento"]->format("d/m/Y"); ?></span>
                            </div>
                            <div class="dato-fila">
                                <span class="dato-etiqueta">Sueldo</span>
                                <span class="dato-valor"><?php echo number_format($aRespuesta["sueldo"], 2, ',', '.') . ' €'; ?></span>
                            </div>
                            <div class="dato-fila">
                                <span class="dato-etiqueta">Teléfono</span>
                                <span class="dato-valor"><?php echo htmlspecialchars($aRespuesta["telefono"]); ?></span>
                            </div>
                            <div class="dato-fila">
                                <span class="dato-etiqueta">Género</span>
                                <span class="dato-valor"><?php echo $aGenerosFormateados[$aRespuesta["genero"]]; ?></span>
                            </div>
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>" class="btn-volver">Rellenar otro formulario</a>
                        </div>
                        <?php
                    } else {
                        ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="formulario" method="post" novalidate>
                            
                            <!-- Grupo Nombre -->
                            <div class="grupo-input">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" value="<?php echo !empty($_REQUEST["nombre"]) && empty($aError["nombre"]) ? htmlspecialchars($_REQUEST["nombre"]) : ''; ?>"/>
                                <?php echo !empty($aError["nombre"]) ? "<span class='mensaje-error'>" . $aError['nombre'] . "</span>" : ''; ?>
                            </div>

                            <!-- Grupo Fecha Nacimiento -->
                            <div class="grupo-input">
                                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                                <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="<?php echo !empty($_REQUEST["fechaNacimiento"]) && empty($aError["fechaNacimiento"]) ? htmlspecialchars($_REQUEST["fechaNacimiento"]) : ''; ?>"/>
                                <?php echo !empty($aError["fechaNacimiento"]) ? "<span class='mensaje-error'>" . $aError['fechaNacimiento'] . "</span>" : ''; ?>
                            </div>
                            
                            <!-- Grupo Sueldo -->
                            <div class="grupo-input">
                                <label for="sueldo">Sueldo:</label>
                                <input type="text" name="sueldo" id="sueldo" title="Usar comas para separar decimales" value="<?php echo !empty($_REQUEST["sueldo"]) && empty($aError["sueldo"]) ? htmlspecialchars($_REQUEST["sueldo"]) : ''; ?>"/>
                                <?php echo !empty($aError["sueldo"]) ? "<span class='mensaje-error'>" . $aError['sueldo'] . "</span>" : ''; ?>
                            </div>

                            <!-- Grupo Teléfono -->
                            <div class="grupo-input">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" name="telefono" id="telefono" value="<?php echo !empty($_REQUEST["telefono"]) && empty($aError["telefono"]) ? htmlspecialchars($_REQUEST["telefono"]) : ''; ?>"/>
                                <?php echo !empty($aError["telefono"]) ? "<span class='mensaje-error'>" . $aError['telefono'] . "</span>" : ''; ?>
                            </div>

                            <!-- Grupo Género -->
                            <div class="grupo-input">
                                <label>Género:</label>
                                <div class="grupo-opciones">
                                    <div>
                                        <input type="radio" name="genero" id="generoM" value="M" <?php echo (isset($_REQUEST['genero']) && $_REQUEST['genero'] == 'M') ? 'checked' : ''; ?>/>
                                        <label for="generoM" class="label-inline">Masculino</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="genero" id="generoF" value="F" <?php echo (isset($_REQUEST['genero']) && $_REQUEST['genero'] == 'F') ? 'checked' : ''; ?>/>
                                        <label for="generoF" class="label-inline">Femenino</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="genero" id="generoO" value="O" <?php echo (isset($_REQUEST['genero']) && $_REQUEST['genero'] == 'O') ? 'checked' : ''; ?>/>
                                        <label for="generoO" class="label-inline">Otro</label>
                                    </div>
                                </div>
                                <?php echo !empty($aError["genero"]) ? "<span class='mensaje-error'>" . $aError['genero'] . "</span>" : ''; ?>
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
