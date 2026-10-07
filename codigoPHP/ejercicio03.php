<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 3</title>
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
            <h2>Ejercicio 3</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Calderón Pérez
                     * @since 02-10-2026
                     * Muestra la fecha y hora en formato español usando la clase DateTime.
                     */

                    // Establecemos el idioma de la aplicación. Esto va a afectar a todo el código.
                    setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'spanish');

                    // Inicializamos las variables. Está inicializada con la fecha del uso horario de Madrid, España.
                    $fechaActual = new DateTime('now', new DateTimeZone('Europe/Madrid'));


                    // Mostrar por pantalla la fecha con el formato en castellano.
                    print("<p>Formato de fecha y hora: 'Hoy es NombreDia DD de MM de YY y la hora es HH:MM:SS AM/PM'</p>");
                    echo strftime("%A %d de %B de %Y", $fechaActual->getTimestamp());
                    
                    echo "<br>";
                    echo "<br>";
                    // Mostrar la fecha con formato xx/xx/xxxx.
                    print("<p>Formato de fecha: DD-MM-YY</p>");
                    echo $fechaActual->format("d-m-y");
                    
                    echo "<br>";
                    echo "<br>";

                    // Mostrar la hora con formato HH:MM AM/PM.
                    print("<p>Formato de hora HH:MM AM/PM</p>");
                    echo $fechaActual->format("h:i a");

                    echo "<br>";
                    echo "<br>";

                    // Mostrar la hora con formato HH:MM:SS AM/PM.
                    print("<p>Formato de hora: HH:MM:SS AM/PM</p>");
                    echo $fechaActual->format("h:i:s a");
                ?>
            </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php">
               Álvaro Calderón Pérez
                </a>
                <time datetime="2026-10-02">02-10-2026</time>
            </div>
        </footer>
    </body>
</html>

