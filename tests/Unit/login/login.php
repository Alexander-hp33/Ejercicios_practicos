<?php
// RUEBAS UNITARIAS BASICAS DE SENTIDO LOGICO "OPERACIONES BASICAS" 

    class Login {
        // EJERCICIO #1: FUNCION PARA UNA SUMA DE A ++ B

        public function suma($a, $b){
            return $a + $b;
        }
        public function resta($a, $b){
            return $a - $b;
        }
        public function multiplicacion($a, $b){
            return $a * $b;
        }
        public function division($a, $b){
            return $a / $b;
        }

        // VERIFICAR SI UN VALOR ES TRUE
        public function verdadero ($valor)
        {
            return $valor == true;
        }
        // VERIFICAR SI UN VALOR ES FALSE
        public function falso ($valor)
        {
            return $valor == false;
        }

        // COMPROBAR SI UN ARRAY TIENE UN NUMERO ESPESIFICO DE ELEMENTOS

        public function contarArray ($count, $array){
            return $count($array) === $count;
        }
        // COMPRUEBA SI UN VALOR ES NULL
        public function verificarValorNulo($valor){
            return is_null($valor);
        }
        // COMPRUEBA SI UN VALOR NO ES NULL
        public function verificarValorNoEsNulo($valor){
            return !is_null($valor);
        }
        // COMPRUEBA SI UN VALOR ES MAYOR O IGUAL AL OTRO 
        public function GreaterThan($value, $comparar){
            return $value >= $comparar;
        }

    }

