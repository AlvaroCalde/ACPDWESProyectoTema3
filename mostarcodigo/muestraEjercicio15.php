<!doctype html>
<html lang="es">
    <head>
            <meta charset="UTF-8">
        <title>Ejercicio 15</title>
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
            <h2>Ejercicio 15</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                highlight_file("../codigoPHP/ejercicio15.php");
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

