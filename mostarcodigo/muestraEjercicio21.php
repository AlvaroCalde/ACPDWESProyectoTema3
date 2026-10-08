<!doctype html>
<html lang="es">
    <head>
            <meta charset="UTF-8">
        <title>Ejercicio 21</title>
        <style>
            *{
                margin: 0 auto;
                padding: 0 auto;
            }

            nav{
                background-color: black; 
                color: white;
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
            h2{
                text-align: center;
                border-bottom: 2px solid black;
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 21</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                echo "<h2> Fichero ejercicio21.php: </h2>";
                highlight_file("../codigoPHP/ejercicio21.php");
                echo "<h2> Fichero Tratamiento.php: </h2>";
                highlight_file("../codigoPHP/Tratamiento.php");
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php">
               Álvaro Calderón Pérez
                </a>
                <time datetime="2026-10-02">07-10-2026</time>
            </div>
        </footer>
    </body>
</html>

