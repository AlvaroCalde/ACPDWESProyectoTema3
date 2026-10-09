<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 22</title>
        <style>
            input:required{
                background-color: #fff9c4;
            }
            *{
                margin: 0 auto;
                padding: 0 auto;
            }

            nav{
                background-color: black; 
                color: white;
            }
            
            span{
                color: red;
            }

            .ejercicio{
                padding: 50px;
                margin-top: 10px;
                margin-bottom: 10px;
                width: 1150px;
                border: 1px solid black;
                border-radius: 10px;

                p{
                    font-weight: bold;
                }
            }

            footer{
                background-color: black;
                text-align: center;
                align-content: center;
                height: 50px;;
                color: white;
                margin-top: 20%;

                & div a{
                    color: white;
                   text-decoration: none; 
                }
            }
            span{
                color: red;
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 22</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Calderón Pérez
                     * @since 08-10-2026
                     *  Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre
                        las preguntas y las respuestas recogidas.

                     */
                
                    if(isset($_POST['Envíar'])){
                        $sNombre = $_POST['nombre'];
                        $dFechaNac = $_POST['fecha'];
                        $fSueldo= $_POST['sueldo'];
                        print "Nombre: ".$sNombre."<br />";
                        print "Fecha de nacimiento: ".$dFechaNac."<br />";
                        print "Sueldo menual: ".$fSueldo."<br />";
                    }else{
                ?>
                
                <form name="input" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
                    <label name="nombre" >Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required/>
                    <br/>
                    <label name="fecha">Fecha de Nacimiento:</label>
                    <input type="date" name="fecha" id="fecha" required/>
                    <br/>
                    <label name="sueldo">Sueldo mensual:</label>
                    <input type="number" name="sueldo" min="0" id="sueldo" step="any" required/><br>
                    <input type="submit" value="Enviar"/>
                </form>
                <?php
                    }
                ?>
        </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php" color="white">
               Álvaro Calderón Pérez
                </a>
                <time datetime="2026-10-09">09-10-2026</time>
            </div>
        </footer>
    </body>
</html>

