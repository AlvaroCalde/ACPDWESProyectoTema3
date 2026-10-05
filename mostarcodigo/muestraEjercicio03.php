<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 3</title>
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
            <h2>Ejercicio 3</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                highlight_file("../codigoPHP/ejercicio03.php");
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.html">
               Álvaro Calderón Pérez
                </a>
                <time datetime="2026-10-02">02-10-2026</time>
            </div>
        </footer>
    </body>
</html>

