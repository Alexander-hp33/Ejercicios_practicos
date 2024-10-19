<?php 
// IMPORTAR LOGIN.PHP PARA UTILIZAR SUS FUNCIONES 
require_once __DIR__ . '/login/login.php';
// namespace Test/Unit
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertNull;


class LoginTest extends TestCase
{
    private $login;

    protected function setUp(): void
    {
        $this->login = new Login();
    }

    // TEST PRUEBA PARA OPERACIONES BASICAS 
    public function testSumar()
    {
        $result = $this->login->suma(2,3);
        $this->assertEquals(5, $result);
    }
    public function testRestar()
    {
        $result = $this->login->resta(5,2);
        $this->assertEquals(3, $result);
    }
    public function testMultiplicar()
    {
        $result = $this->login->multiplicacion(5,5);
        $this->assertEquals(25, $result);
    }
    public function testDividir()
    {
        $result = $this->login->division(25,5);
        $this->assertEquals(5, $result);
    }

    // PRUEBA PARA SABER QUE UN VALOR ES VERDADERO
    public function testVerdadero (){
        $result = $this->login->verdadero(3, 3);
        $this->assertEquals(true, $result);
    }
    // PRUEBA PARA SABER QUE UN VALOR ES FALSO
    public function testFalso (){
        $result = $this->login->falso(3, 2);
        $this->assertEquals(false, $result);
    }

    // PRUEBA PARA CONTABILIZAR LOS ELEMENTOS DE UN ARRAY

    public function testArrayConteo (){
        $array = [1,2,3,4,5];
        $this->assertCount(5,$array);
    }

    // COMPRUBA SI UN VALOR ES NULL   

    public function testValidarValorNull(){
        $value = null;
        $this->assertNull($value);
    }
    // COMPRUBA SI UN VALOR NO ES NULL  
    public function testValidarValorNoEsNull(){
        $value = 'hola';
        $this->assertNotNull($value);
    }

    public function testGreaterThan(){
        $value = 10;
        $this->assertGreaterThanOrEqual(10, $value);
    }
}