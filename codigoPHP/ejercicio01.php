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
            <h2>Ejercicio 1</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Calderón Pérez
                     * @since 01-10-2026
                     * Vamos a iniciarlizar unas variables con cada tipo de dato que existe en PHP.
                     * No hace falta indicar el tipo de la variable pero se pone una letra determinada al principio del nombre de cada variable para aclarar su tipo
                     * b=boolean, s=String, etc...
                     */

                    $bRespuesta = true; 
                    $iEdad = 20; 
                    $fSueldoHora = 100.25; 
                    $sNombre = 'Álvaro';    

                    
                    echo "<p>La variable <span>".'$bRespuesta'."</span> es de tipo <span>".gettype($bRespuesta)."</span> y contiene el valor <span>$bRespuesta</span></p>";

                    echo "<p>La variable <span>".'$iEdad'."</span> es de tipo <span>".gettype($iEdad)."</span> y contiene el valor <span>$iEdad</span></p>";

                    echo "<p>La variable <span>".'$fSueldoHora'."</span> es de tipo <span>".gettype($fSueldoHora)."</span> y contiene el valor <span>$fSueldoHora</span></p>";

                    echo "<p>La variable <span>".'$sNombre'."</span> es de tipo <span>".gettype($sNombre)."</span> y contiene el valor <span>$sNombre</span></p>";

                    echo "<hr>";

                    echo "<h3>Variables con funcion: print</h3>";

            // Utilizando la funcion print.
                    print "<p>La variable <span>" . '$bRespuesta' . "</span> es de tipo <span>".gettype($bRespuesta)."</span> y contiene el valor <span>$bRespuesta</span></p>";

                    print "<p>La variable <span>" . '$iEdad' . "</span> es de tipo <span>".gettype($iEdad)."</span> y contiene el valor <span>$iEdad</span></p>";

                    print "<p>La variable <span>" . '$fSueldoHora' . "</span> es de tipo <span>".gettype($fSueldoHora)."</span> y contiene el valor <span>$fSueldoHora</span></p>";

                    print "<p>La variable <span>" . '$sNombre' . "</span> es de tipo <span>".gettype($sNombre)."</span> y contiene el valor <span>$sNombre</span></p>";

                    echo "<hr>";

                    echo "<h3>Variables con funcion: printf</h3>";

            // Utilizando la funcion printf. 
                    printf("<p>La variable <span>%s</span> es de tipo <span>%s</span> y contiene el valor <span>%s</span></p>",'$bRespuesta',gettype($bRespuesta), $bRespuesta);

                    printf("<p>La variable <span>%s</span> es de tipo <span>%s</span> y contiene el valor <span>%d</span></p>",'$iEdad',gettype($iEdad), $iEdad);

                    printf("<p>La variable <span>%s</span> es de tipo <span>%s</span> y contiene el valor <span>%.2f</span></p>",'$fSueldoHora',gettype($fSueldoHora), $fSueldoHora);

                    printf("<p>La variable <span>%s</span> es de tipo <span>%s</span> y contiene el valor <span>%s</span></p>",'$sNombre',gettype($sNombre), $sNombre);

                    printf("<hr>");

                    echo "<h3>Variables con funcion: print_r</h3>";

            // Utilizando la funcion print_r.
                    echo "<p>La variable <span>".'$bRespuesta'."</span> es de tipo <span>".gettype($bRespuesta)."</span> y contiene el valor <span>".print_r($bRespuesta, true)."</span></p>";

                    echo "<p>La variable <span>".'$iEdad'."</span> es de tipo <span>".gettype($iEdad)."</span> y contiene el valor <span>".print_r($iEdad, true)."</span></p>";

                    echo "<p>La variable <span>".'$fSueldoHora'."</span> es de tipo>".gettype($fSueldoHora)."</span> y contiene el valor <span>".print_r($fSueldoHora, true)."</span></p>";

                    echo "<p>La variable <span>".'$sNombre'."</span> es de tipo <span>".gettype($sNombre)."</span> y contiene el valor <span>".print_r($sNombre, true)."</span></p>";

                    echo "<hr>";

                    echo "<h3>Variables con funcion: var_dump</h3>";

                    echo "<br>";
                    echo "<p>La variable <span>".'$bRespuesta'."</span>: ";       
                    var_dump($bRespuesta);        
                    echo "</p>";

                    echo "<p>La variable <span>".'$iEdad'."</span>: ";
                    var_dump($iEdad);
                    echo "</p>";

                    echo "<p>La variable <span>".'$fSueldoHora'."</span>: ";
                    var_dump($fSueldoHora);
                    echo "</p>";

                    echo "<p>La variable <span>".'$sNombre'."</span>: ";
                    var_dump($sNombre);
                    echo "</p>";
        
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

