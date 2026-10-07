<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 7</title>
        <style>
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
                margin-top: 10px;
                margin-bottom: 10px;
                width: 750px;
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
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 7</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Calderón Pérez
                     * @since 07-10-2026
                     * Mostrar el nombre del fichero que se está ejecutando.
                     */

                    $sNombreFichero= basename($_SERVER['PHP_SELF']);
                    echo "Nombre del fichero en ejecución: ".$sNombreFichero."\n";
                ?>
        </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php" color="white">
               Álvaro Calderón Pérez
                </a>
                <time datetime="2026-10-07">07-10-2026</time>
            </div>
        </footer>
    </body>
</html>

