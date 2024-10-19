<?php

namespace Tests\Unit;

use Exception;
use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertGreaterThanOrEqual;

class Practica3Test extends TestCase
{
    public function testCompararData() {
        $data = [
            'user' => [
                'name' => 'Alex Hernandez',
                'age' => 30,
                'email' => 'alexher@example.com',
                'address' => [
                    'street' => '123 Main st',
                    'city' => 'New York',
                    'country' => 'USA'
                ]
            ]
        ];
    
        // Verifica si existe la clave 'user' en el array $data
        $this->assertArrayHasKey('user', $data);
        var_dump("Índice 'user' encontrado:", $data['user']);
    
        // Verifica si existe la clave 'name' dentro de 'user'
        $this->assertArrayHasKey('name', $data['user']);
        var_dump("Nombre del usuario:", $data['user']['name']);
    
        // Verifica si existe la clave 'age' dentro de 'user'
        $this->assertArrayHasKey('age', $data['user']);
        var_dump("Edad del usuario:", $data['user']['age']);
    
        // Verifica si existe la clave 'email' dentro de 'user'
        $this->assertArrayHasKey('email', $data['user']);
        var_dump("Email del usuario:", $data['user']['email']);
    
        // Verifica si existe la clave 'address' dentro de 'user'
        $this->assertArrayHasKey('address', $data['user']);
        var_dump("Dirección del usuario:", $data['user']['address']);
    
        // Verifica si el valor de 'city' es 'New York'
        $this->assertEquals('New York', $data['user']['address']['city']);
        var_dump("Ciudad en la dirección del usuario:", $data['user']['address']['city']);
    }

    // crear una funcion testDataBase que busque un nombre espesifico mediante una lista simulando una tabla llena
    public function testDataBase(){
        $datos= [
            'gorge'=>'gorge', 
            'carlos'=>'carlos',
            'hugo'=>'hugo',
        ];
        $this->assertContains('carlos',$datos);

        var_dump("Los nombre en el array son:", $datos);

        var_dump("El nombre es:",$datos['carlos']);
    }

    // Crear una funcion que me permita capturar y manejar fehcas y horas
    public function testDataTime(){
        $date = new \DateTime();
        $this->assertNotNull($date);
        var_dump("valor:",$date);
    }

    // crear una funcion mediane una prueba unitaria que me permita validar un formato de correo electronico
    public function testEmailFormat(){
        $emai = 'Alexhern@gmail.com';
        $this->assertMatchesRegularExpression('/^.+@.+\..+$/',$emai);
        var_dump('formato de correo valido:',$emai);
    }

    // Prueba unitaria donde me permita verificar si un arreglo es vacio 
    public function testArrayEmty(){
        $array = [];
        $this->assertEmpty($array);
        var_dump("Arreglo vacio",$array);
    }

    // Pruena unitaria en donde me permita una excepcion esperada
    public function testExpectedExcepcion(){
        $this->expectException(exception::class);
        throw new Exception('Un error ocurrio');
    }

    // Prueba una funcion que interactue con un servicio externo simulando utilizando un marco de pruebas de doble falso 
    public function testExternalSerivice (){
        $mock = $this->getMockBuilder('ExternalService')->getMock();
        $mockData = 'simple Data';
        $this->assertEquals('simple Data',$mockData);
    }

    // Crear una prueba unitaria que me permita crear una funcion que valida una direccion IP
    public function testIP()
    {
        // Variable simulando una dirección IP
        $ip = '192.168.1.1';
        $this->assertMatchesRegularExpression('/^(\d{1,3}\.){3}\d{1,3}$/', $ip);
    }
    

    // Crear una prueba unitaria que me permita igualar dos variables utilizando un assert definido 
    public function testVariableComparasion(){
        $var1 = 5;
        $var2 = '5';
        // se verifica que las dos variables son iguales pero con assert que revisa si las variables contienen el mismo valor a pesar de ser el mismo formato

        //$this->assertSame($var1, $var2);
        $this->assertEquals($var1, $var2);
    }
    // Crear una funcion mediante una prueba unitaria que me permita concantenar dos cadenas
    public function testCadenastring(){
        $cadena_uno = '1';
        $cadena_dos = '1';
        //$this->assertEquals('hola, Alex',$cadena_uno . $cadena_dos);
        $this->assertSame($cadena_uno, $cadena_dos);
    }

    // Crear una funcion que compruebe la longitud de una cadera de tipo string
    public function testCadenaStringLeng()
    {
        $string = 'Feliz, dia';
        //$this->assertGreaterThanOrEqual(5, strlen($string));
        $this->assertStringContainsString('dia',$string);
    }

    // crear una funcion mediante una prueba que busque valores o datos especificos de un array
    public function testBuscarDato()
    {
        $data = ['oscar', 'hugo', 'moises', 'cristina', 'alex'];
        $this->assertContains('hugo', $data);
        $this->assertContains('oscar', $data);
        $this->assertContains('alex', $data);
        var_dump("Array:", $data);
    }


}
