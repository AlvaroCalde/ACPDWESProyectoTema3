<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 1</title>
        <style>
            *{
                margin: 0 auto;
                padding: 0 auto;
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
            <h2>Ejercicio 1</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Calderón Pérez
                     * @since 01-10-2026
                     * Vamos a iniciarlizar unas variables con cada tipo de dato que existe en PHP.
                     * No hace falta indicar el tipo de la variable.
                     */

                    $nombre = "Álvaro";    
                    $edad = 20;            
                    $dinero = 35.34;      
                    $flag = true;     

                    
                    echo '<p>Mostrado mediante echo</p><br>';
                    echo 'La variable $nombre tiene como valor: ' . $nombre . ' y es de tipo ' . gettype($nombre) . "<br>";
                    echo 'La variable $edad tiene como valor: ' . $edad . ' y es de tipo ' . gettype($edad) . "<br>";
                    echo 'La variable $dinero tiene como valor: ' . $dinero . 'y es de tipo ' . gettype($dinero) . "<br>";
                    echo 'La variable $flag tiene como valor: ' . $flag . ' y es de tipo ' . gettype($flag) . "<br>";

                    echo "<br><br>";

                    print("<p>Mostrado mediante print</p><br>");
                    print("La variable de tipo " . gettype($nombre) . " tiene como valor: " . $nombre . "<br>");
                    print("La variable de tipo " . gettype($edad) . " tiene como valor: " . $edad . "<br>");
                    print("La variable de tipo " . gettype($dinero) . " tiene como valor: " . $dinero . "<br>");
                    print("La variable de tipo " . gettype($flag) . " tiene como valor: " . $flag . "<br>");

                    echo "<br><br>";

                    printf("<p>Mostrado mediante printf</p><br>");
                    printf("La variable de tipo %s tiene como valor: %s<br>", gettype($nombre), $nombre);
                    printf("La variable de tipo %s tiene como valor: %d<br>", gettype($edad), $edad );
                    printf("La variable de tipo %s tiene como valor: %2.1f<br>", gettype($dinero), $dinero);
                    printf("La variable de tipo %s tiene como valor: %d<br>", gettype($flag), $flag);


                    echo "<br><br>";

                    print_r("<p>Mostrado mediante print_r</p><br>");
                    print_r("La variable de tipo " . gettype($nombre) . " tiene como valor: " . $nombre . "<br>");
                    print_r("La variable de tipo " . gettype($edad) . " tiene como valor: " . $edad . "<br>");
                    print_r("La variable de tipo " . gettype($dinero) . " tiene como valor: " . $dinero . "<br>");
                    print_r("La variable de tipo " . gettype($flag) . " tiene como valor: " . $flag . "<br>");


                    echo "<br><br>";

                    var_dump('<p>Mostrado mediante var_dump</p>');
                    echo "<br>";
                    var_dump('La variable de tipo ' . gettype($nombre) . ' tiene como valor: ' . $nombre);
                    echo "<br>";
                    var_dump('La variable de tipo ' . gettype($edad) . ' tiene como valor: ' . $edad);
                    echo "<br>";
                    var_dump('La variable de tipo ' . gettype($dinero) . ' tiene como valor: ' . $dinero);
                    echo "<br>";
                    var_dump('La variable de tipo ' . gettype($flag) . ' tiene como valor: ' . $flag);
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

