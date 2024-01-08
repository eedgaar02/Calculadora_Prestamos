<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/estilo.css">
    <title>Cuadro</title>
    <?php
        include("funciones.php");
        session_start();

        $resultado = $_SESSION["resultado"];//almacenamos las variables de sesion en unas locales
        $meses = $_SESSION["meses"];
    ?>

</head>
<body>
    <div class="containerCuadro">
        <?php
            echo "<h2>Cuadro de Amortización</h2>";
            $ultimoMes = $meses - 1;//varaiable para definir cuando será el último mes

            //bucle para imprimir el pago mes a mes
            for($i = 1; $i<= $meses; $i++){
                $acumulado = $resultado * $i;//variable que almacena el resultado por el indice
                //condicional para determinar cual es el último mes
                if($i <= $ultimoMes){
                    echo "<p class = 'primeros' >Mes nº $i - 
                            Pagar: $resultado - 
                            Acumulado: $acumulado</p>";
                }else{
                    echo "<h3>Último págo</h3>";
                    echo "<p class = 'ultimo'>Mes nº $i - 
                    Pagar: $resultado - 
                    Acumulado: $acumulado</p>";
                }
            }
        ?>
        <img class="dinero" src="../imagenes/dinero.png" alt="">
    </div>
</body>
</html>