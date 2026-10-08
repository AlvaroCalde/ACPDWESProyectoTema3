<!doctype html>
<html lang="es">
    <head>
        <title>Ejercicio 21</title>
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
            <h2>Ejercicio 21</h2>
        </nav>
        <main>
            <div class="ejercicio">
                <?php
                $sNombre = $_POST['nombre'];
                $dFechaNac = $_POST['fecha'];
                $fSueldo= $_POST['sueldo'];
                print "Nombre: ".$sNombre."<br />";
                print "Fecha de nacimiento: ".$dFechaNac."<br />";
                print "Sueldo menual: ".$fSueldo."<br />";
                ?>
        </div>
        </main>
        <footer>
            <div>
                <a href="../indexProyectoTema3.php" color="white">
               Álvaro Calderón Pérez
                </a>
                <time datetime="2026-10-07">08-10-2026</time>
            </div>
        </footer>
    </body>
</html>

