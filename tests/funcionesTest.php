<?php
require_once __DIR__ . "/../php/funciones.php";

 use PHPUnit\Framework\TestCase;

 class funcionesTest extends TestCase{    
    public function testCalcularMensualidad() {
        $resultado = calcularMensualidad(1000, 1.1, 0.02, 12);
        $this->assertEquals(93, $resultado); 
    }
    public function testCalcularMensualidad2() {
        $resultado = calcularMensualidad(1000, 1.1, 0.02, 24);
        $this->assertEquals(47, $resultado);
    }

    public function testCalcularMensualidad3() {
        $resultado = calcularMensualidad(1000, 1.1, 0.02, 36);
        $this->assertEquals(31, $resultado);
    }

    public function testMostrarResultados() {
        ob_start();
        mostrarResultados(1000, 1.1, 0.02);
        $output = ob_get_clean();
        $validar = assert($output === "<h1>Resultados del cálculo</h1>
                <label class = 'texto1'>Cantidad préstamo:</label>
                <label class='variable1'>1000</label>
                <label class = 'texto2'>Intereses:</label> 
                <label class='variable2'>1.1</label>
                <label class = 'texto3'>Cuota de apertura del préstamo:</label> 
                <label class='variable3'>0.02</label>");
        $this->assertTrue($validar);

    }

    public function testCalculoTotal(){
        $resultado = calculoTotal(93, 12);

        $this->assertEquals(1116, $resultado);
    }
    public function testCalculoTotal2(){
        $resultado = calculoTotal(47, 24);
        $this->assertEquals(1128, $resultado);
    }
    public function testCalculoTotal3(){
        $resultado = calculoTotal(31, 36);
        $this->assertEquals(1116, $resultado);
    }

}
?>