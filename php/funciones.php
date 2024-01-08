<?php
    function calcularMensualidad($cantidad, $intereses, $cuota, $meses){
        $calcMensualidad = $cantidad*($intereses + $cuota)/$meses;//Formula calcular pago mensual
        
        $mensualidad = round($calcMensualidad);//redondear el pago mensual

        return $mensualidad;
    }

    function mostrarResultados($cantidad, $intereses, $cuota){
        //Salida por pantalla
        echo "  <h1>Resultados del cálculo</h1>
                <label class = 'texto1'>Cantidad préstamo:</label> 
                <label class='variable1'>$cantidad</label>
                <label class = 'texto2'>Intereses:</label>
                <label class='variable2'>$intereses</label>
                <label class = 'texto3'>Cuota de apertura del préstamo:</label> 
                <label class='variable3'>$cuota</label>";
    }

    function calculoTotal($resultado, $meses){
        $total = $resultado * $meses;//calculo total con interese y cuotas
        //salida por pantalla
        echo "<p class='final'>La mensualidad resultante es:</p> 
        <p class='total'>$resultado €/ mes</p>";
        echo "<br>";
        echo "<p class='final'>TOTAL FINAL:</p> 
        <p class = 'total'>$total €</p>";

        return $total;
    }

    function mostarCuadroAmortizaciones($resultado, $meses){
        //declaración de variables de sesion
        $_SESSION["resultado"] = $resultado;
        $_SESSION["meses"] = $meses;
    }
?>