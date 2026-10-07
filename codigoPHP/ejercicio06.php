<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 6</title>
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
            <h2>Ejercicio 6</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                    /**
                     * @author Álvaro Calderón Pérez
                     * @since 07-10-2026
                     * Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.
                     */


                    $ofecha = new DateTime();

                    // Usamos date("formato") para poner el formato de fecha y hora de Portugal.
                    $ofecha->modify("+60");

                    // Mostrar por pantalla la fecha con el formato en portugés.
                    echo "Fecha de dentro de 60 días formateada: ".$ofecha->format('d-m-Y')."\n";
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

