<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 2</title>
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
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 2</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                highlight_file("../codigoPHP/ejercicio02.php");
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.html">
               Álvaro Calderón Pérez
                </a>
                <time datetime="2026-10-01">01-10-2026</time>
            </div>
        </footer>
    </body>
</html>

