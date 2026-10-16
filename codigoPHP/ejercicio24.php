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
                     * @since 14-10-2026
                     */
                     
                     require_once  '../core/231018libreriaValidacion.php';
                     
                    $entradaOk = true; 
                    $aErrores = [
                        'nombre' => '',
                        'fecha' => '',
                        'sueldo' => ''
                    ]; 
                    $aRespuestas = [
                        'nombre' => '',
                        'fecha' => '',
                        'sueldo' => ''
                    ]; 

                    if(isset($_REQUEST["submit"])){
                        
                        $sueldoProcesado = str_replace(',', '.', $_REQUEST['sueldo']);
                        
                        $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'],100,0,1);
                        $ofecha = new DateTime();
                        $aErrores['fecha'] = validacionFormularios::validarFecha($_REQUEST['fecha'],"01/01/2027","01/01/1900", 1,$ofecha->format('d/m/Y'));
                        $aErrores['sueldo'] = validacionFormularios::comprobarFloat($sueldoProcesado, 10000, 0, 1);


                        foreach ($aErrores as $campo => $valor) {
                            if(!empty($valor)){
                                $entradaOk = false; 
                            }
                        }
                    } else {
                        $entradaOk = false;
                    }

                    if($entradaOk){
                        $aRespuestas['nombre'] = $_REQUEST['nombre'];
                        $aRespuestas['fecha'] = date('d/m/Y', strtotime($_REQUEST['fecha']));
                        $aRespuestas['sueldo'] = number_format((float)$sueldoProcesado, 2, ',', '') . ' €';
                        
                        foreach ($aRespuestas as $campo => $valor) {
                            print("<p>Su $campo es: ".$valor."</p><br>");
                        }
                    } else {
                ?>
                
                <form name="input" action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    
                    Nombre: <input type="text" name="nombre" value="<?= isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : ''; ?>"/>

                    <span class="error"><?= !empty($aErrores['nombre']) ? $aErrores['nombre'] : ""; ?></span>
                    <br>
                
                    Fecha de nacimiento: <input type="date" name="fecha" value="<?= isset($_REQUEST['fecha']) ? $_REQUEST['fecha'] : ''; ?>"/>
                    <span class="error"><?= !empty($aErrores['fecha']) ? $aErrores['fecha'] : ""; ?></span>
                    <br>
                
                    Sueldo mensual: <input type="text" name="sueldo" pattern="^[0-9]+(,[0-9]+)?$" title="Introduce un número usando coma para los decimales" value="<?= isset($_REQUEST['sueldo']) ? $_REQUEST['sueldo'] : ''; ?>"/>
                    <span class="error"><?= !empty($aErrores['sueldo']) ? $aErrores['sueldo'] : ""; ?></span>
                    <br>
                    
                    <p><input type="submit" name="submit" value="Enviar"/></p>
                </form>
                
                <?php
                    }
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

