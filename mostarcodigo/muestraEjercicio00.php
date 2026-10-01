<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 0</title>
        <style>
            *{
                margin: 0 auto;
                padding: 0 auto;
            }
            body{
                font-family: Arial, sans-serif;
                background: #f4f6f9;
                align-items: center;
                text-align: center;
            }

            nav{
                background-color: black; 
                color: white;
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
                margin: auto;
                background-color: black;
                text-align: center;
                align-content: center;
                height: 50px;;
                color: white;

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
            <h2>Ejercicio 0</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                highlight_file("../codigoPHP/ejercicio00.php");
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.html" color="white">
               Álvaro Calderón Pérez
                </a>
                <time datetime="2026-10-01">01-10-2026</time>
            </div>
        </footer>
    </body>
</html>


