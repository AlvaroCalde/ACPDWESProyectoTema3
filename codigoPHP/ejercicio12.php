<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 12</title>
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
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 12</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Calderón Pérez
                     * @since 07-10-2026
                     * Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
                     */

                    echo "<h3>Contenido de \$_SERVER usando print_r:</h3>";
                    echo "<pre>";
                    print_r($_SERVER);
                    echo "</pre>";

                    echo "<h2>3. Contenido de \$_SERVER usando foreach()</h2>";
                    echo "<ul>";
                    foreach ($_SERVER as $clave => $valor) {
                        // Si el valor es un array (rara vez en $_SERVER, pero útil en otras), lo convertimos a texto
                        if (is_array($valor)) {
                            $valor = json_encode($valor);
                        }
                        echo "<li><strong>{$clave}:</strong> {$valor}</li>";
                    }
                    echo "</ul>";
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

