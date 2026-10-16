<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Indice general de la asignatura">
    <meta name="author" content="Álvaro Calderón Pérez">
    <title>Tema 3-PHP Álvaro Calderón Pérez</title>
    <link rel="stylesheet" href="./webroot/css/estilos.css">
    
    <!-- ESTILOS AÑADIDOS PARA LOS BOTONES -->
    <style>
        /* Estilo base para todos los botones */
        .btn {
            display: inline-block;
            padding: 8px 16px;
            margin: 2px;
            font-size: 14px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            border-radius: 6px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Estilo específico para los botones de "Ejecutar" */
        .btn-ejecutar {
            background-color: #28a745; /* Verde */
            color: white;
            border: 1px solid #218838;
        }

        .btn-ejecutar:hover {
            background-color: #218838;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
            color: white;
        }

        /* Estilo específico para los botones de "Código" */
        .btn-codigo {
            background-color: #007bff; /* Azul */
            color: white;
            border: 1px solid #0069d9;
        }

        .btn-codigo:hover {
            background-color: #0069d9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-2px);
            color: white;
        }
        
        /* Centrar el contenido de las celdas para que los botones queden mejor */
        .tabla td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <nav>
        <h2>Tema 3:Características del lenguaje PHP</h2>
    </nav>
    <main>
        <div class="tabla">
            <table>
                <tbody>
                    <tr class="titulo">
                        <td>Nº</td>
                        <td>Enunciado</td>
                        <td>Ejecutar</td>
                        <td>Código</td>
                    </tr>
                    <tr>
                        <td>0</td>
                        <td>Info.php y Hola Mundo</td>
                        <td><a href="./codigoPHP/ejercicio00.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio00.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los datos por pantalla (echo, print, printf, print_r, var_dump).</td>
                        <td><a href="./codigoPHP/ejercicio01.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio01.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Inicializar y mostrar una variable heredoc</td>
                        <td><a href="./codigoPHP/ejercicio02.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio02.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mostrar en tu página index la fecha y hora actual formateada en castellano</td>
                        <td><a href="./codigoPHP/ejercicio03.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio03.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mostrar la fecha de Oporto por pantalla.</td>
                        <td><a href="./codigoPHP/ejercicio04.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio04.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)</td>
                        <td><a href="./codigoPHP/ejercicio05.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio05.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</td>
                        <td><a href="./codigoPHP/ejercicio06.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio06.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Mostrar el nombre del fichero que se está ejecutando</td>
                        <td><a href="./codigoPHP/ejercicio07.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio07.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Mostrar la dirección IP del equipo desde el que estás accediendo.</td>
                        <td><a href="./codigoPHP/ejercicio08.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio08.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Mostrar el path donde se encuentra el fichero que se está ejecutando.</td>
                        <td><a href="./codigoPHP/ejercicio09.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio09.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Mostrar el contenido del fichero que se está ejecutando</td>
                        <td><a href="./codigoPHP/ejercicio10.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio10.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>                  
                    <tr>
                        <td>12</td>
                        <td>Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach())</td>
                        <td><a href="./codigoPHP/ejercicio12.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio12.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu propia librería de funciones y estudiar la forma de usarla en el entorno de desarrollo y en el de explotación.</td>
                        <td><a href="./codigoPHP/ejercicio14.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio14.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para calcular el sueldo percibido durante la semana. (Array asociativo con los nombres de los días de la semana).</td>
                        <td><a href="./codigoPHP/ejercicio15.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio15.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.</td>
                        <td><a href="./codigoPHP/ejercicio21.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio21.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas.</td>
                        <td><a href="./codigoPHP/ejercicio22.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio22.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente</td>
                        <td><a href="./codigoPHP/ejercicio23.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio23.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas</td>
                        <td><a href="./codigoPHP/ejercicio24.php" class="btn btn-ejecutar">Ejecutar</a></td>
                        <td><a href="./mostarcodigo/muestraEjercicio24.php" class="btn btn-codigo">Codigo</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <div>
            <a href="https://github.com/AlvaroCalde/ACPDWESProyectoTema3" target="blank"><img src="/webroot/images/github.png" alt="enlace a github"></a>
            <a href="/">Álvaro Calderón Pérez</a>
        </div>
    </footer>
</body>
</html>