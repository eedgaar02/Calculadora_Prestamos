<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo.css">
    <title>Mensualidad</title>
    <?php
    include("funciones.php");//añadir las funciones y procedimientos del archivo funciones
    session_start();//iniciar sesion para la comunicación entre ventanas

    //variables que almacenan los inputs introducidos por el usuario
    $cantidad = $_POST["cantidad"];
    $intereses = 1.10;
    $cuota = 0.02;
    $meses = $_POST["meses"];

    //almacenar resultado del calcularMensualidad en una variable
    $mensualidad = calcularMensualidad($cantidad, $intereses, $cuota, $meses);
    mostarCuadroAmortizaciones($mensualidad, $meses);//llamar a la funcion para almacenar las variables de sesion
    ?>

</head>
<body>
    <div class="contenedor">
        <?php
        mostrarResultados($cantidad, $intereses, $cuota);//procedimiento, imprimirá por pantalla los parámetros
        ?>
        <div class="contenedorTotal">
            <?php
                calculoTotal($mensualidad, $meses);//funcion, imprimirá por pantalla el pago mensual y el total
                
                ?>
        </div>
        <!--boton que nos llevará a procesa-cuadro-->
        <a href='procesa-cuadro.php' class="botonCuadro">Mostrar Cuadro de Amortización</a>

        <img class="coche" src="../imagenes/coche.png" alt="">
    </div>
    
</body>
</html>