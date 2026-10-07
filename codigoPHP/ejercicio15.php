<!doctype html>
<html lang="es">
    <head>
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
            
            span{
                color: red;
            }

            .ejercicio{
                padding: 20px;
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
            span{
                color: red;
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
                    /**
                     * @author Álvaro Calderón Pérez
                     * @since 07-10-2026
                     * Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la
                        semana. (Array asociativo con los nombres de los días de la semana).
                     */

                    // Declaramos la variable iCantidadTotal de tipo entero y la inicializamos a cero.
                    // Esta variable va a acumular la cantidad total del sueldo semanal.
                    $fSueldoSemanal = 0;

                    // Declaramos el array aSueldoSemanal y lo inicializamos con 
                    // key = día de la semana y value = salario de ese día.
                    $aSueldo = ['lunes' => 43, 'martes' => 20,
                                       'miercoles' => 50, 'jueves' =>30,
                                       'viernes' => 25, 'sabado' =>104,
                                       'domingo' => 0];

                    // Para mostrar el salario diario contenido en el array debemos recorrerlo con un foreach.
                    echo 'El salario diario es: <br>';
                    foreach ($aSueldo as $dia => $cantidad) {
                        $fSueldoSemanal += $cantidad;
                        printf('El <span>' . $dia . '</span> cobraste: <span>' . $cantidad . '</span> <br>');
                    }

                    echo '<br>';
                    // Para mostrar el salario total usamos el acumulador iCantidadTotal.
                    printf('La cantidad semanal ha sido: <span>' . $fSueldoSemanal.'</span>');
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

