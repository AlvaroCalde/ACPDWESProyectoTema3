<!doctype html>
<html>
    <head>
        <title>Ejercicio 2</title>
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
                    /**
                     * @author Álvaro Calderón Pérez
                     * @date 01-10-2026
                     * 2. Inicializamos una variable heredoc y la mostramos por pantalla.
                     */

                    // Definimos la variable
                    $v = "'variable'";
                    $vheredoc = <<< IDENTIFICADOR
                            <p>Estoy escribiendo una linea para mostrar 
                            por pantalla y entender que es el heredoc.<br>
                            Por ejemplo esta variable $v se muestra sin
                            necesidad de ""</p>

                            IDENTIFICADOR;

                    // Mostramos la variable heredoc.
                    print("Estamos trabajando con una variable de tip heredoc y todo lo mostrado en negrita es contenido de dicha variable:");
                    print_r($vheredoc);
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php" color="white">
               Álvaro Calderón Pérez
                </a>
                <time datetime="2026-10-01">01-10-2026</time>
            </div>
        </footer>
    </body>
</html>

