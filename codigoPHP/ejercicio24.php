<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 24</title>
        <style>
            input[type="text"],input[type="date"],input[type="number"]{ background-color: #fff9c4; }
            *{ margin: 0 auto; padding: 0 auto; }
            nav{ background-color: black; color: white; }
            span{ color: red; }
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
                /**
                     * @author Álvaro Calderón Pérez
                     * @since 13-10-2026
                     *  Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas
                        recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.
                     */
                     
                     // importación de la librería
                     require_once  '../core/231018libreriaValidacion.php';
                     
                    // Inicialización de variables
                    $entradaOk = true; // Variable que nos indica que todo va bien
                    $aErrores = [
                        'nombre' => '',
                        'fecha' => '',
                        'sueldo' => ''
                    ]; // Array donde recogemos los mensajes de error
                    $aRespuestas = [
                        'nombre' => '',
                        'fecha' => '',
                        'sueldo' => ''
                    ]; // Array donde recogeremos las respuestas correctas

                    // Para cada campo del formulario: Validar entrada y actuar en consecuencia
                    if(isset($_REQUEST["submit"])){
                        // Validamos los datos para cada campo del formulario.
                        $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],100,0,1);
                        $ofecha = new DateTime();
                        $aErrores['fecha'] = validacionFormularios::validarFecha($_REQUEST['fecha'],"01/01/2027","01/01/1900", 1,$ofecha->format('d/m/Y'));
                        $aErrores['sueldo'] = validacionFormularios::comprobarFloat($_REQUEST['sueldo'], 10000, 0, 1);

                        // Recorremos el array de errores para comprobar si ha habido alguno.
                        foreach ($aErrores as $campo => $valor) {
                            if(!empty($valor)){
                                $entradaOk = false; // Hay un error, no procesaremos el formulario final
                            } else {
                                // NO HAY ERROR EN ESTE CAMPO: Guardamos su valor para que se mantenga en el formulario
                                // o para mostrarlo al final si todo es correcto.
                                $aRespuestas[$campo] = $_REQUEST[$campo];
                            }
                        }
                    } else {
                        $entradaOk = false;        // Si el formulario no se ha rellenado nunca.
                    }

                    // Tratamiento del formulario
                    if($entradaOk){
                        // En caso de que el formulario haya sido rellenado de manera correcta.
                        // Ya no necesitamos reasignar los valores a $aRespuestas porque lo hemos hecho en el bucle anterior.
                        
                        // Recorremos el array de respuestas con un foreach para mostrar las respuestas.
                        foreach ($aRespuestas as $campo => $valor) {
                            print("<p>Su $campo es: ".$valor."</p><br>");
                        }
                    } else {
                ?>
                
                <!-- Mostrar formulario -->
                <form name="input" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    
                    <!-- Mostrar los datos tecleados correctamente en intentos anteriores (en los value) -->
                    Nombre: <input type="text" name="nombre" value="<?php echo $aRespuestas['nombre']; ?>"/>
                    <?php
                    // Mostrar mensajes de error (si los hay y el formulario no se muestra por primera vez)
                    if(!empty($aErrores['nombre'])) {echo "<span style='color:red; display:block; font-size:13px;'>{$aErrores['nombre']}</span>";}
                    ?>
                    <br>
                
                    Fecha de nacimiento: <input type="date" name="fecha" value="<?php echo $aRespuestas['fecha']; ?>"/>
                    <?php
                    if(!empty($aErrores['fecha'])) {echo "<span style='color:red; display:block; font-size:13px;'>{$aErrores['fecha']}</span>";}
                    ?>
                    <br>
                
                    Sueldo mensual: <input type="number" name="sueldo" min="0" value="<?php echo $aRespuestas['sueldo']; ?>" step="any"/>
                    <?php
                    if(!empty($aErrores['sueldo'])) {echo "<span style='color:red; display:block; font-size:13px;'>{$aErrores['sueldo']}</span>";}
                    ?>
                    <br>
                    
                    <p><input type="submit" name="submit" value="Enviar"/></p>
                </form>
                
                <?php
                    } // Fin si ($entradaOK)
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php" color="white">Álvaro Calderón Pérez</a>
                <time datetime="2026-10-14">14-10-2026</time>
            </div>
        </footer>
    </body>
</html>

