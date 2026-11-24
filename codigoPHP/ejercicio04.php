<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 4</title>
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
            footer a img{
                width: 40px;
            }
        </style>
    </head>
    <body>
        <nav>
            <h2>DWES - Tema 3</h2>
            <h2>Ejercicio 4</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Calderón Pérez
                     * @since 07-10-2026
                     * Mostrar la fecha de Oporto por pantalla.
                     */

                    //Inicializar la variable $oFecha de tipo DateTime.
                    $dFechaEspana = new DateTime(null, new DateTimeZone('Europe/Madrid'));
                    $dFechaOporto = new DateTime(null, new DateTimeZone('Europe/Lisbon'));
                    //Mostrar el dia, mes año y hora actual en Oporto. Format pertenece a la clase DateTime y formatea las fechas. Permite dar un formato personalizado a objetos de fecha
                    echo '<p>Hoy es '.$dFechaOporto->format("d").' de '.$dFechaOporto->format("M").' de '.$dFechaOporto->format("Y").' y son las '.$dFechaOporto->format("H:i").' horas en Oporto</p>';
                    //Mostrar el dia, mes año y hora actual en España.
                    echo '<p>Hoy es '.$dFechaEspana->format("d").' de '.$dFechaEspana->format("M").' de '.$dFechaEspana->format("Y").' y son las '.$dFechaEspana->format("H:i").' horas en España</p>';
                ?>
        </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php" color="white">
               Álvaro Calderón Pérez
                </a>
                <a href="../indexProyectoTema3.php"><img src="../webroot/images/casa_blanca.png" alt="home"></a>
                <time datetime="2026-10-07">07-10-2026</time>
            </div>
        </footer>
    </body>
</html>
